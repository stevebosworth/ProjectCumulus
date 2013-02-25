<?php  
	include_once 'classes/Dbconn.class.php';
	$dbcon = new Dbconn();
	$conn = $dbcon->getConn();	

	$law_id = $_POST['sel_law'];
	$book_id = $_POST['sel_book'];
	$title_id = $_POST['sel_title'];
	$ch_id = $_POST['sel_ch'];
	$div_id = $_POST['sel_div'];
	$sub_div_id = $_POST['sel_sub_div'];
	$sec_num = $_POST['sec_num'];
	$sec_title = $_POST['sec_title'];
	$sec_text = $_POST['sec_text'];
	$enact_year = $_POST['enact_year'];
	$enact_bill = $_POST['enact_bill'];
	$enact_sec = $_POST['enact_sec'];
?>