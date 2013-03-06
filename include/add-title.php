<?php
	include_once '../classes/Dbconn.class.php';
	$dbcon = new Dbconn();
	$conn = $dbcon->getConn();

	$table = $_POST['table'];
	$num = $_POST['title_num'];
	$title = $_POST['title_title'];
	$id = $_POST['id'];


	switch ($table) {
		case 'titles':
			$query = "INSERT INTO titles (title_num, title_title, book_id) VALUES ('$num', $title', '$id')";

			$conn->exec($title_query);
			echo "alert('success');";
		break;

		case 'chapters':
			$query = "INSERT INTO chapters (chapter_num, chapter_title, title_id) VALUES ('$num', $title', '$id')";
			$conn->exec($query);
		break;

		case 'divisions':
			$query = "INSERT INTO divisions (div_num, div_title, ch_id) VALUES ('$num', $title', '$id')";
			$conn->exec($query);
		break;

		case 'sub_divisions':
			$query = "INSERT INTO subDivisions (sub_div_num, sub_div_title, div_id) VALUES ('$num', $title', '$id')";
			$conn->exec($query);
		break;
	}

 ?>