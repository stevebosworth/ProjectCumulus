<?php

include ('classes/tag_category.class.php');
include ('classes/add_tags.class.php'); 

$tag_class = new add_tags();
$tag_array = $tag_class->selectTag(); 

?>