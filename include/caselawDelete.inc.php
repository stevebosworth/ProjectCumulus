<?php

//checking if the query string is set
if (isset($_GET['case_id']))
{
	//requiring the cumulus database PDO connection
	require_once '../classes/Dbconn.class.php';
	require_once '../classes/caselaw_db.class.php';

	//getting case id from the query string
	$case_id = $_GET['case_id'];

	//executing the delete function
	$CaselawDB = new CaselawDB();
	$CaselawDB->deleteCaselawsByID($case_id);

	//redirecting
	header("Location: ../caselawUD.php");

}
else
{
	return false;
}



?>