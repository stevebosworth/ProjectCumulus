<?php 

include_once 'classes/Dbconn.class.php';

$dbcon = new Dbconn();
$conn = $dbcon->getConn();

if($_POST['law_id'])
{
	echo "<span>sucess</sucess>";

	// $law_id = $_GET['law_id'];
	// $books_query = "SELECT * FROM books WHERE law_id='$law_id'";
	// $books = $conn->query($books_query);
	// foreach($books as $b)
	// {
	// 	echo '<option value="'.$book_id.'">'.$book_num.'. '.$book_title.'</option>';
	// }
}

 ?>