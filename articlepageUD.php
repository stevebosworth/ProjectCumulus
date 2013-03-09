<?php

//requiring the cumulus database PDO connection
require_once 'DBconn_test.php';

//creating an instance of the class to use for queries
$mydbconn = new DBconn();
$conn = $mydbconn->getConn();

//the sql query to pull records from the database
$listsql = "SELECT * FROM caselaw";

//variable to hold the query results
$result = $conn->query($listsql);


?>
<!DOCTYPE html>
<html>
    <?php include 'head.php' ?>
    <body>
        <?php include 'header.php' ?>
        
            <div id="content_container">
            	<hr>
                    <h4>Relevant Case Law</h4>
                    
                    <?php
                        //displays caselaws from the database
                        foreach ($result as $row){
                        	echo "<p class='cms_rows'><a class='cms_button' href='caselawEdit.php?case_id=".$row['case_id']."'/>Edit</a>";
                        	echo "<a class='cms_button' href='articlepageDelete.php?case_id=".$row['case_id']."'/>Delete</a>";
                            echo "<a href='".$row['url']."'>".$row['case_ref']."</a> "." ";
                            echo "(<i>".$row['case_date']."</i>) "." ";
                            echo $row['court_id']."-";
                            echo $row['case_id']."</p>";
                        }
                    ?>
                    
                    	<hr>
            </div><!-- end content_container -->

        <?php include 'footer.php' ?>
        <?php include 'closer.php' ?>
    </body>
</html>