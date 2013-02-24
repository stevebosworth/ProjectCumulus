<?php 
include_once '../classes/Dbconn.class.php';
$dbcon = new Dbconn();
$conn = $dbcon->getConn();	

if(isset($_POST['law_id']))
{
	

	$law_id = $_POST['law_id'];
	$books_query = "SELECT * FROM books WHERE law_id = '$law_id'";
	$books = $conn->query($books_query);
	foreach($books as $b)
	{
		echo '<option value="'.$b['book_id'].'">'.$b['book_num'].'. '.$b['book_title'].'</option>';
	}
}

if(isset($_POST['book_id'])
{
	$book_id = $_POST['law_id'];
	$titles_query = "SELECT * FROM titles WHERE book_id = '$book_id'";
	$titles = $conn->query($titles_query);
	foreach($titles as $t)
	{
		echo '<option value="'.$t['title_id'].'">'.$t['title_num'].'. '.$t['title_title'].'</option>';
	}
}

 ?>