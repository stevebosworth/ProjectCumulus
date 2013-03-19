<?php

	include ('db_connection.php');
    include ('tag_category.php');
    include ('add_tags.php');
					
	$new_tag = $_POST['txt_tags'];
	
	$tag_class = new add_tags();
	
	if (!empty($new_tag))
	{
		$tag_class->addTags($new_tag);
	}


?>