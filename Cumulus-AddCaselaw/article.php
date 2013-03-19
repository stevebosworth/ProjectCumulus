<?php

require_once 'DBconn_test.php';

$mydbconn = new DBconn();
$conn = $mydbconn->getConn();

$listsql = "SELECT * FROM caselaw";

$result = $conn->query($listsql);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            foreach ($result as $row){
                echo "<b>".$row['case_ref']."</b> : ";
                echo $row['case_date']."<br />";
            }
        ?>
        <form action="insert_caselaw.php" method="POST">
            <p>Case ID #: <input type="text" name="case_id" /></p>
            <p>Court ID #: <input type="text" name="court_id" /></p>
            <p>User ID #: <input type="text" name="user_id" /></p>
            <p>Case Date: <input type="text" name="case_date" /></p>
            <p>URL: <input type="text" name="url" /></p>
            <p>Case Reference: <input type="text" name="case_ref" /></p>
            <p>Case Description: <input type="text" name="case_desc" /> (Optional)</p>
            <p><input type="submit" value="Submit Caselaw" /></p>
        </form>
    </body>
</html>
