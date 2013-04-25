<?php

//setting variables from previous page's form
$caseid = $_POST['case_id'];
$sec_num = $_POST['sec_num'];
$courtid = $_POST['court_id'];
$userid = $_POST['user_id'];
$casedate = $_POST['case_date'];
$url = $_POST['url'];
$caseref = $_POST['case_ref'];
$casedesc = $_POST['case_desc'];

//Displaying an error message if any fields were empty
if (empty($caseid) || empty($sec_num) || empty($courtid) || empty($userid) || empty($casedate) || 
   empty($url) || empty($caseref))
{
    $errormsg = "Fields may not have empty values, please go back and try again.";
    echo $errormsg;
}

//If no description was entered execute this command
else {

    require_once '../classes/Dbconn.class.php';
    require_once '../classes/caselaw.class.php';
    require_once '../classes/caselaw_db.class.php';
    require_once '../classes/vote_db.class.php';

    $CaselawDB = new CaselawDB();
    $CaselawDB->addCaselaw($caseid, $sec_num, $courtid, $userid, $casedate, $url, $caseref, $casedesc);

    $VoteDB = new VoteDB();
    $VoteDB->insertVoteRow();
    
    //redirecting the user after success
    header('Location: ../section.php?section='.$sec_num);

}

?>
