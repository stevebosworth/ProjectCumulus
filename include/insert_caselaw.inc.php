<?php

session_start();

//setting variables from previous page's form
$caseid = $_POST['case_id'];
$sec_num = $_POST['sec_num'];
$courtid = $_POST['court_id'];
$userid = $_SESSION['user_id'];
$casedate = $_POST['case_date'];
$url = $_POST['url'];
$caseref = $_POST['case_ref'];
$casedesc = $_POST['case_desc'];

if(!isset($_SESSION['user_id'])){
    $errormsg = "You must be logged in to submit relevant caselaw.";
    echo $errormsg;
}

//Displaying an error message if any fields were empty
elseif (empty($caseid) || empty($sec_num) || empty($courtid) || empty($casedate) ||
   empty($url) || empty($caseref))
{
    $errormsg = "Fields may not have empty values, please go back and try again.";
    echo $errormsg;
}

//If no description was entered execute this command
else {

    require_once '../classes/Dbconn.class.php';
    require_once '../classes/Caselaw.class.php';
    require_once '../classes/CaselawDB.class.php';
    require_once '../classes/VoteDB.class.php';

    $CaselawDB = new CaselawDB();
    $CaselawDB->addCaselaw($caseid, $sec_num, $courtid, $userid, $casedate, $url, $caseref, $casedesc);

    $result = $CaselawDB->getLastCaselaw();

    $VoteDB = new VoteDB();
    $VoteDB->insertVoteRow($result['caselaw_id']);

    //redirecting the user after success
    header('Location: ../section.php?section='.$sec_num);

}

?>
