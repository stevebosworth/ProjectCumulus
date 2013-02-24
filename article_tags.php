<?php
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


?>
