<?php

require_once '../classes/Dbconn.class.php';
require_once '../classes/section.class.php';
require_once '../classes/section_db.class.php';

$law_id     =$_POST['sel_law'];
$book_id    =$_POST['sel_book'];
$title_id   =$_POST['sel_title'];
$ch_id      =$_POST['sel_ch'];
$div_id     =$_POST['sel_div'];
$sub_div_id =$_POST['sel_sub_div'];
$sec_num    =$_POST['sec_num'];
$sec_title  =$_POST['sec_title'];
$sec_txt    =$_POST['sec_text'];
$enact_yr   =$_POST['enact_yr'];
$enact_bill =$_POST['enact_bill'];
$enact_sec  =$_POST['enact_sec'];

//Insert a new section

$insert = new SectionDB();

$insert->addSection($sec_num, $sec_title, $sec_txt, $enact_yr, $enact_bill, $enact_sec, $law_id, $book_id, $title_id, $ch_id, $div_id, $sub_div_id);



