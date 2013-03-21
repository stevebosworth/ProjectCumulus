<?php

$caseid = $_POST['case_id'];
$courtid = $_POST['court_id'];
$userid = $_POST['user_id'];
$casedate = $_POST['case_date'];
$url = $_POST['url'];
$caseref = $_POST['case_ref'];
$casedesc = $_POST['case_desc'];

if (empty($caseid) || empty($courtid) || empty($userid) || empty($casedate) || 
   empty($url) || empty($caseref))
{
    $errormsg = "Invalid entries, please try again.";
    echo $errormsg;
}
if (empty($casedesc))
{
    require_once '../classes/Dbconn.class.php';
    
    $sql = "INSERT INTO caselaw (case_id, court_id, usr_id, case_date, 
                                url, case_ref)
        VALUES ('$caseid','$courtid', '$userid', '$casedate', '$url', 
                '$caseref')";
    
    $db = Dbconn::getDB();
    $db->exec($sql);
    
}
else
{    
    require_once '../classes/Dbconn.class.php';
    
    $sql = "INSERT INTO caselaw (case_id, court_id, usr_id, case_date, 
                                url, case_ref, case_desc)
        VALUES ('$caseid','$courtid', '$userid', '$casedate', '$url', 
                '$caseref', '$casedesc')";
    
    $db = Dbconn::getDB();
    $db->exec($sql);
    
}

header('Location: ../articlepage.php');
?>
