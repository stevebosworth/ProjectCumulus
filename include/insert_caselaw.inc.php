<?php

$caseid = $_POST['case_id'];
$sec_num = $_POST['sec_num'];
$courtid = $_POST['court_id'];
$userid = $_POST['user_id'];
$casedate = $_POST['case_date'];
$url = $_POST['url'];
$caseref = $_POST['case_ref'];
$casedesc = $_POST['case_desc'];

if (empty($caseid) || empty($sec_num) || empty($courtid) || empty($userid) || empty($casedate) || 
   empty($url) || empty($caseref))
{
    $errormsg = "Fields may not have empty values, please try again.";
    echo $errormsg;
}
if (empty($casedesc))
{
    require_once '../classes/Dbconn.class.php';
    
    //inserting caselaw into the database
    $sql = "INSERT INTO caselaw (case_id, sec_num, court_id, usr_id, case_date, 
                                url, case_ref)
        VALUES ('$caseid', '$sec_num', '$courtid', '$userid', '$casedate', '$url', 
                '$caseref')";
    
    //creating a row in the votes table for the new caselaw
    $query = "INSERT INTO votes (votes_up, votes_down, user_id)
        VALUES (0, 0, 1)";

    $db = Dbconn::getDB();
    $db->exec($sql);
    $db->exec($query);
    
    header('Location: ../section.php?section='.$sec_num);
}
else
{    
    require_once '../classes/Dbconn.class.php';
    
    //inserting caselaw into the database
    $sql = "INSERT INTO caselaw (case_id, sec_num, court_id, usr_id, case_date, 
                                url, case_ref, case_desc)
        VALUES ('$caseid', '$sec_num', '$courtid', '$userid', '$casedate', '$url', 
                '$caseref', '$casedesc')";
    
    //creating a row in the votes table for the new caselaw
    $query = "INSERT INTO votes (votes_up, votes_down, user_id)
        VALUES (0, 0, 1)";

    $db = Dbconn::getDB();
    $db->exec($sql);
    $db->exec($query);
    
    header('Location: ../section.php?section='.$sec_num);
}


?>
