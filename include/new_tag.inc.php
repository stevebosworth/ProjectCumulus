<?php

	include ('../classes/Dbconn.class.php');
    include ('../classes/tag_category.class.php');
    include ('../classes/add_tags.class.php');
    
    //adds a new tag to the section
	$new_tag = $_POST['txt_tags'];
	$tag_sec_num = $_POST['tag_section']; //added 02/04/2013
	
	$tag_class = new add_tags();
	
	if (!empty($new_tag))
	{
		$tag_class->addTags($new_tag, $tag_sec_num);
	}
	
	header("location:../section.php?section=" . $tag_sec_num);


?>