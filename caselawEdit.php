<?php

//ensuring submit from previous page
if (!isset($_POST['submit'])){

	//requiring the cumulus database PDO connection
	require_once 'classes/Dbconn.class.php';
	require_once 'classes/caselaw_db.class.php';
	require_once 'classes/caselaw.class.php';

	//selecting caselaws based on case id in query string
	$CaselawDB = new CaselawDB();
	$row = $CaselawDB->getCaselawsByID($_GET['case_id']);

}

?>

<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript" src="js/jquery.js"></script>

	</head>
    <body>
        
            <div id="content_container">
            	<hr>
            		<!-- Edit template -->
                    <h4>Editing Relevant Case Law</h4>
					<form name="cl_edit" action="include/update_caselaw.inc.php"  method="POST">
						<?php foreach($row as $r) { ?>
						<p>Case ID: <input type="text" name="caseID" value="<?= $r['case_id'] ?>" /></p>
						<p>Case Reference: <input type="text" name="caseRef" value="<?= $r['case_ref'] ?>" /></p>
						<p>Court Abbreviation: <input type="text" name="courtID" value="<?= $r['court_id'] ?>"</p>
						<p>Case Date: <input type="text" name="caseDate" value="<?php echo $r['case_date']; ?>"</p>
						<p>URL: <input type="text" name="url" value="<?php echo $r['url']; ?>"</p>
						<p>Case Description: <input type="text" name="caseDesc" value="<?php echo $r['case_desc']; ?>"</p>
						<p><input type="hidden" name="hidden" value="<?php echo $_GET['case_id'] ?>" /></p>
						<p><input type="submit" name="submit" value="Update" /></p>
						<?php } ?>
					</form>
            </div>

    </body>
</html>

