<?php

	include ('../classes/Dbconn.class.php');
    include ('../classes/tag_category.class.php');
    include ('../classes/add_tags.class.php');
    
    //adds a new tag to the section
	$delete_tag = $_POST['remove_tagname'];
	$tag_sec_num = $_POST['tag_sec']; 
	
	$tag_class = new add_tags();
	
	if (!empty($delete_tag))
	{
		$tag_class->deleteTag($delete_tag, $tag_sec_num);
	}
	
	header("location:../section.php?section=" . $tag_sec_num);


?>