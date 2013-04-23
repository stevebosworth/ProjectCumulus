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
    require_once '../classes/related.class.php';
    require_once '../classes/related_db.class.php';
    require_once '../classes/vote_db.class.php';
    require_once '../classes/vote.class.php';
    require_once '../classes/source.class.php';
    require_once '../classes/sourcedb.class.php';




$sec_num = $_POST['sec_num'];
$sec_title = $_POST['sec_title'];
$sec_txt = $_POST['sec_txt'];
$command = $_POST['cmd'];


$section = new SectionDB();

switch($command)
{
	case "get":
		$this_sec = $section->selAllFromSection($sec_num);

		//take specified section and return array of that object
		$result = $section->getSectionAll($this_sec);
		foreach($result as $r){
		    echo"<form method='post' id='frm_update_sec'>".
		    	"<h3>Book " . $r['book_num'] . ". </h3><h4>" . $r['book_title'] . "</h4>".
		    	"<h3>Title " . $r['title_num'] . ". </h3><h4>" . $r['title_title'] . "</h4>".
		    	"<h3>Chapter " . $r['ch_num'] . ". </h3><h4>" . $r['ch_title'] . "</h4>".
		    	"<h3>Division " . $r['div_num'] . ". </h3><h4>" . $r['div_title'] . "</h4>".
		    	"<h3>&sect " . $r['sub_div_num'] . ". </h3><h4>" . $r['sub_div_num'] . "</h4>".
		    	"<h2>Section: " . $r['sec_num'] . "</h2>".
		    	"<h3>Title: </h3>" .
		    	"<input type='text' name='sec_title' value=" . $r['sec_title'] . ">".
		    	"<h4>Section: </h4>".
		    	"<textarea name='sec_txt' rows='10' cols='35'>". $r['sec_txt'] . "</textarea></form>";
		}
	break;
	case "update":
		$update = $section->updateSection($sec_num, $sec_title, $sec_txt);
		echo $update;
	break;
	case "delete":
		$delete = $section->deleteSection($sec_num);
		echo $delete;
	break;
}
