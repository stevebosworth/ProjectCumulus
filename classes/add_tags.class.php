<?php
	class add_tags {
		
		public function addTags($tag) {
			$db = Dbconn::getDB();
			
			//$tag = new tag_category();
			//$tagname = $tag->getTag();
			
			$query = "INSERT INTO tags (tag) VALUES ('$tag')";
			$db->exec($query);
		}	
	   
	   	public function selectTag() {
			$db = Dbconn::getDB();
			$sqlquery = "SELECT * FROM tags";
       		$tagset = $db->query($sqlquery);
			$tags = array();
			foreach ($tagset as $page_tag) 
			{
				$tag = new tag_category($page_tag['tag']);	
				//echo $page_tag['tag_id'];
				$tag->setID($page_tag['tag_id']);
				$tags[] = $tag;	
			}
			
		return $tags;
		   
	   }
	}
	
	/*
	//gets input from form (textbox)
	$tag = $_POST['txt_tags'];
	
	//validation
	if (!empty($tag))
	{
	require_once('db_connection.php');
	$query = "INSERT INTO tags (tag) VALUES ('$tag')";
	$db->exec($query);	
	}

	include('article.html');
	*/

?>
