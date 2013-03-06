<?php
include_once '../classes/Dbconn.class.php';
$dbcon = new Dbconn();
$conn = $dbcon->getConn();

// if(isset($_POST['id']))
// {

// 	$id = $_POST['id'];
// 	$table = $_POST['table'];
// 	$id_type = $_POST['id_type'] . '_id';
// 	$num = $_POST['next_type'] . '_num';
// 	$title = $_POST['next_type'] . '_title';
// 	$table_name = $_POST['next_type'];

// 	$query = "SELECT * from $table WHERE $id_type = '$id'";
// 	$result = $conn->query($query);
// 	$book_num = 'book_num';

// 	echo "<option> Please select a " . $table_name . "</option>";
// 	foreach($result as $r)
// 	{

// 		echo '<option value="'.$r[0].'">'.$r[$num].'. '.$r[$title].'</option>';
// 	}
// }

if(isset($_POST['law_id']))
{
	$law_id = $_POST['law_id'];
	$books_query = "SELECT * FROM books WHERE law_id = '$law_id'";
	$books = $conn->query($books_query);
	echo "<option selected='selected'>-- Choose a Book --</option>";
	foreach($books as $b)
	{
		echo '<option value="'.$b['book_id'].'">'.$b['book_num'].'. '.$b['book_title'].'</option>';
	}
}

if(isset($_POST['book_id']))
{
	$book_id = $_POST['book_id'];
	$titles_query = "SELECT * FROM titles WHERE book_id = '$book_id'";
	$titles = $conn->query($titles_query);
	echo "<option selected='selected'>-- Choose a Title --</option>";
	foreach($titles as $t)
	{
		echo '<option value="'.$t['title_id'].'">'.$t['title_num'].'. '.$t['title_title'].'</option>';
	}
}

if(isset($_POST['title_id']))
{
	$title_id = $_POST['title_id'];
	$ch_query = "SELECT * FROM chapters WHERE title_id = '$title_id'";
	$chapters = $conn->query($ch_query);
	echo "<option selected='selected'>-- Choose a Chapter --</option>";
	foreach($chapters as $c)
	{
		echo '<option value="'.$c['ch_id'].'">'.$c['ch_num'].'. '.$c['ch_title'].'</option>';
	}
}

if(isset($_POST['ch_id']))
{
	$ch_id = $_POST['ch_id'];
	$div_query = "SELECT * FROM divisions WHERE ch_id = '$ch_id'";
	$divisions = $conn->query($div_query);
	echo "<option selected='selected'>-- Choose a Division --</option>";
	foreach($divisions as $d)
	{
		echo '<option value="'.$d['div_id'].'">'.$d['div_num'].'. '.$d['div_title'].'</option>';
	}
}

if(isset($_POST['div_id']))
{
	$div_id = $_POST['div_id'];
	$sub_div_query = "SELECT * FROM subdivisions WHERE div_id = '$div_id'";
	$sub_divisions = $conn->query($sub_div_query);
	echo "<option selected='selected'>-- Choose a Sub-Division --</option>";
	foreach($sub_divisions as $sd)
	{
		echo '<option value="'.$sd['sub_div_id'].'">'.$sd['sub_div_num'].'. '.$sd['sub_div_title'].'</option>';
	}
}

 ?>