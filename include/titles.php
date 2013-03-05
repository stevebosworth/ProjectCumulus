<?php 
include_once '../classes/Dbconn.class.php';
$dbcon = new Dbconn();
$conn = $dbcon->getConn();

if(isset($_POST['book_id']))
{
	$book_id = $_POST['book_id'];
	$titles_query = "SELECT * FROM titles WHERE book_id = '$book_id'";
	$titles = $conn->query($titles_query);
	foreach($titles as $t)
	{
		echo '<option value="'.$t['title_id'].'">'.$t['title_num'].'. '.$t['title_title'].'</option>';
	}
}
 ?>