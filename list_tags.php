<?php

include ('classes/db_connection.class.php');
include ('classes/tag_category.class.php');
include ('classes/add_tags.class.php'); 

$tag_class = new add_tags();
$tag_array = $tag_class->selectTag(); 

foreach ($tag_array as $single_tag)
{
	echo "<a href='#'>" . $single_tag->getID() . "</a>";
}

?>