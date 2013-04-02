<?php

	include ('../classes/Dbconn.class.php');
    include ('../classes/tag_category.class.php');
    include ('../classes/add_tags.class.php');
					
	$new_tag = $_POST['txt_tags'];
	
	$tag_class = new add_tags();
	
	if (!empty($new_tag))
	{
		$tag_class->addTags($new_tag);
	}
	
	header("location:../section.php");


?>