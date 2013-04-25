<?php

//requiring the cumulus database PDO connection
require_once 'classes/Dbconn.class.php';
require_once 'classes/caselaw_db.class.php';
require_once 'classes/caselaw.class.php';

$CaselawDB = new CaselawDB();
$result = $CaselawDB->getCaselaws();

?>
<!DOCTYPE html>
<?php include 'include/head.inc.php' ?>
<body>
    <?php include 'include/header.inc.php' ?>
    
        <div id="content_container">
            <hr>
                <h4>Relevant Case Law</h4>
                
                <?php
                    //displays caselaws from the database
                    foreach ($result as $row){
                        echo "<p class='cms_rows'><a class='cms_button' href='caselawEdit.php?case_id=".$row->getCase_id()."'/>Edit</a>";
                        echo "<a class='cms_button' href='include/caselawDelete.inc.php?case_id=".$row->getCase_id()."'/>Delete</a>";
                        echo "<a href='".$row->getUrl()."'>".$row->getCase_ref()."</a> "." ";
                        echo "(<i>".$row->getCase_date()."</i>) "." ";
                        echo $row->getCourt_id()."-";
                        echo $row->getCase_id()."</p>";
                    }
                ?>
                
                    <hr>
        </div><!-- end content_container -->

    <?php include 'include/footer.inc.php' ?>
    <?php include 'include/closer.inc.php' ?>
</body>