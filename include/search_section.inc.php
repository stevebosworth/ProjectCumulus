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

$section = new SectionDB();
$sec_num = $_POST['secNum'];
$curr_sec = $_POST['currSec'];
$comm_txt = $_POST['commTxt'];

$command = $_POST['command'];

switch($command)
{
    case "select":
        try
        {
            $this_section = $section->selAllFromSection($sec_num);
            $result = $section->getSectionAll($this_section);

            foreach($result as $r){
            // echo"<h3>Book " . $r['book_num'] . ". </h3><h4>" . $r['book_title'] . "</h4>".
            //     "<h3>Title " . $r['title_num'] . ". </h3><h4>" . $r['title_title'] . "</h4>".
            //     "<h3>Chapter " . $r['ch_num'] . ". </h3><h4>" . $r['ch_title'] . "</h4>".
            //     "<h3>Division " . $r['div_num'] . ". </h3><h4>" . $r['div_title'] . "</h4>".
            //     "<h3>&sect " . $r['sub_div_num'] . ". </h3><h4>" . $r['sub_div_num'] . "</h4>".
            echo"<h1> Section " . $r['sec_num'] . "</h1>".
                "<h5>" . $r['sec_title'] . "</h5>".
                "<p>" . $r['sec_txt'] . "</p>".
                "<p class='enact'>[" . $r['enact_yr'] . ", " . $r['enact_bill'] . ", " . $r['enact_sec'] . "]</p>".
                "<h4>Comment: </h4>".
                "<textarea id='txt_rel_comments' cols='15' rows='5'></textarea>";
            }
        }catch(Exception $ex){
            echo "<p>Error: Please try again</p>";
        }
    break;
    case "confirm":
        $related = new RelatedDB();
        $add_rel = $related->addRelatedSec($curr_sec, $sec_num, $comm_txt);
        echo $related;
    break;
}




