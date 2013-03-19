<?php

if (!isset($_POST['submit'])){
	//requiring the cumulus database PDO connection
	require_once 'DBconn_test.php';

	//creating an instance of the class to use for queries
	$mydbconn = new DBconn();
	$conn = $mydbconn->getConn();

	//the sql query to pull records from the database
	$sql = "SELECT * FROM caselaw WHERE case_id = $_GET[case_id]";
	//variable to hold the query results
	$row = $conn->query($sql);
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
                    <h4>Editing Relevant Case Law</h4>
					<form name="cl_edit" action="update_caselaw.php"  method="POST">
						<?php foreach($row as $r) ?>
						<p>Case ID: <input type="text" name="caseID" value="<?php echo $r['case_id']; ?>" /></p>
						<p>Case Reference: <input type="text" name="caseRef" value="<?php echo $r['case_ref']; ?>" /></p>
						<p>Court Abbreviation: <input type="text" name="courtID" value="<?php echo $r['court_id']; ?>"</p>
						<p>Case Date: <input type="text" name="caseDate" value="<?php echo $r['case_date']; ?>"</p>
						<p>URL: <input type="text" name="url" value="<?php echo $r['url']; ?>"</p>
						<p>Case Description: <input type="text" name="caseDesc" value="<?php echo $r['case_desc']; ?>"</p>
						<p><input type="hidden" name="hidden" value="<?php echo $_GET['case_id'] ?>" /></p>
						<p><input type="submit" name="submit" value="Update" /></p>
					</form>
            </div>

    </body>
</html>

