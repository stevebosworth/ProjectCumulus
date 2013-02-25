<?php 
	include_once '../classes/Dbconn.class.php';
	$dbcon = new Dbconn();
	$conn = $dbcon->getConn();	

	$title_num = $_POST['title_num'];
	$title_title = $_POST['title_title'];
	$book_id = $_POST['book_id'];

	$title_query = "INSERT INTO titles (title_num, title_title, book_id) VALUES ('$title_num', '$title_title', '$book_id')";
	
	$conn->exec($title_query);
	echo "success!";
	
 ?>