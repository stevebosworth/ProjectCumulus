<?php
	include_once '../classes/Dbconn.class.php';
	$dbcon = new Dbconn();
	$conn = $dbcon->getConn();

	$table = $_POST['table'];
	$num = $_POST['num'];
	$title = $_POST['title'];
	$id = $_POST['id'];

	echo $table;
	echo $num;
	echo $title;
	echo $id;
	switch ($table) {
		case 'title':
			$query = "INSERT INTO titles (title_num, title_title, book_id) VALUES ('$num', '$title', '$id')";
			$conn->exec($query);
			echo $num;
			echo $title;
			echo $id;
			//echo "success!";
		break;

		case 'chapter':
			$query = "INSERT INTO chapters (ch_num, ch_title, title_id) VALUES ('$num', '$title', '$id')";
			$conn->exec($query);
			echo $num;
			echo $title;
			echo $id;
			echo "success!";
		break;

		case 'division':
			$query = "INSERT INTO divisions (div_num, div_title, ch_id) VALUES ('$num', '$title', '$id')";
			$conn->exec($query);
			echo "success!";
		break;

		case 'subdivisions':
			$query = "INSERT INTO subdivisions (sub_div_num, sub_div_title, div_id) VALUES ('$num', '$title', '$id')";
			$conn->exec($query);
			echo "success!";
		break;
	}

 ?>