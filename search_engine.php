<?php
/*
* populate.php
*
* Script for populating the search database with words,
* pages and word-occurences.
*/

/* Connect to the database: */
mysql_pconnect("localhost:3306","root","friazous")
    or die("ERROR: Could not connect to database!");

mysql_select_db("test");

/* Define the URL that should be processed: */

$url = addslashes( $_GET['url'] );

if( !$url )
{
   die( "You need to define a URL to process." );
}
else if( substr($url,0,7) != "http://" )
{
   $url = "http://$url";
}

/* Does this URL already have a record in the page-table? */
$result = mysql_query("SELECT page_id FROM page WHERE page_url = \"$url\"");
$row = mysql_fetch_array($result);

if( $row['page_id'] )
{
   /* If yes, use the old page_id: */
   $page_id = $row['page_id'];
}
else
{
   /* If not, create one: */
   mysql_query("INSERT INTO page (page_url) VALUES (\"$url\")");
   $page_id = mysql_insert_id();
}

/* Start parsing through the text, and build an index in the database: */
if( !($fd = fopen($url,"r")) )
   die( "Could not open URL!" );

while( $buf = fgets($fd,1024) )
{
   /* Remove whitespace from beginning and end of string: */
   $buf = trim($buf);

   /* Try to remove all HTML-tags: */
   $buf = strip_tags($buf);
   $buf = ereg_replace('/&\w;/', '', $buf);

   /* Extract all words matching the regexp from the current line: */
   preg_match_all("/(\b[\w+]+\b)/",$buf,$words);

   /* Loop through all words/occurrences and insert them into the database: */
   for( $i = 0; $words[$i]; $i++ )
   {
      for( $j = 0; $words[$i][$j]; $j++ )
      {
         /* Does the current word already have a record in the word-table? */
         $cur_word = addslashes( strtolower($words[$i][$j]) );

         $result = mysql_query("SELECT word_id FROM word 
                                WHERE word_word = '$cur_word'");
         $row = mysql_fetch_array($result);
         if( $row['word_id'] )
         {
            /* If yes, use the old word_id: */
            $word_id = $row['word_id'];
         }
         else
         {
            /* If not, create one: */
            mysql_query("INSERT INTO word (word_word) VALUES (\"$cur_word\")");
            $word_id = mysql_insert_id();
         }

         /* And finally, register the occurrence of the word: */
         mysql_query("INSERT INTO occurrence (word_id,page_id) 
                      VALUES ($word_id,$page_id)");
         print "Indexing: $cur_word<br>";
      }
   }
}

fclose($fd)
?>