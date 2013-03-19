<?php
require_once '../classes/Dbconn.class.php';
require_once '../classes/section.class.php';
require_once '../classes/section_db.class.php';
require_once '../classes/law.class.php';
require_once '../classes/law_db.class.php';
require_once '../classes/book.class.php';
require_once '../classes/book_db.class.php';
require_once '../classes/title.class.php';
require_once '../classes/title_db.class.php';
require_once '../classes/chapter.class.php';
require_once '../classes/chapter_db.class.php';
require_once '../classes/division.class.php';
require_once '../classes/division_db.class.php';
require_once '../classes/sub_division.class.php';
require_once '../classes/sub_division_db.class.php';

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


//Get Books by Law_id
if(isset($_POST['law_id']))
{
	$law_id = $_POST['law_id'];

	$book_class = new BookDB();
	$arr_books = $book_class->selBooksByLawID($law_id);

	echo "<option selected='selected'>-- Choose a Book --</option>";
	foreach($arr_books as $b)
	{
		echo '<option value="' . $b->getBook_Id() . '">'. $b->getBook_num() .'. '. $b->getBook_Title() .'</option>';
	}
}


// Get Titles by Book ID
if(isset($_POST['book_id']))
{
	$book_id = $_POST['book_id'];

	$title_class = new TitleDB();

	$arr_titles = $title_class->selTitlesByBookID($book_id);

	echo "<option selected='selected'>-- Choose a Title --</option>";
	foreach($arr_titles as $t)
	{
		echo '<option value="' . $t->getTitle_Id() . '">' . $t->getTitle_Num() . '. ' . $t->getTitle_Title() . '</option>';
	}
}

//Get Chapters by Title ID
if(isset($_POST['title_id']))
{
	$title_id = $_POST['title_id'];

	$ch_class = new ChapterDB();

	$arr_chapters = $ch_class->selChaptersByTitleID($title_id);

	echo "<option selected='selected'>-- Choose a Chapter --</option>";
	foreach($arr_chapters as $c)
	{
		echo '<option value="'.$c->getCh_Id().'">'.$c->getCh_Num().'. '.$c->getCh_Title().'</option>';
	}
}


//Get Divisions by Chapter ID
if(isset($_POST['ch_id']))
{
	$ch_id = $_POST['ch_id'];

	$div_class = new DivisionDB();

	$arr_divs = $div_class->selDivisionsByChID($ch_id);

	echo "<option selected='selected'>-- Choose a Division --</option>";
	foreach($arr_divs as $d)
	{
		echo '<option value="'.$d->getDiv_Id().'">'.$d->getDiv_Num().'. '.$d->getDiv_Title().'</option>';
	}
}

//Get Sub-Divisions by Division ID
if(isset($_POST['div_id']))
{
	$div_id = $_POST['div_id'];

	$sub_div_class = new SubDivisionDB();

	$arr_sub_divs = $sub_div_class->selSubDivisionsByDivID($div_id);

	echo "<option selected='selected'>-- Choose a Sub-Division --</option>";
	foreach($arr_sub_divs as $sd)
	{
		echo '<option value="'.$sd->getSub_Div_Id().'">'.$sd->getSub_div_num().'. '.$sd->getSub_div_title().'</option>';
	}
}

 ?>