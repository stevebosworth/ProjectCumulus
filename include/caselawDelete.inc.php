<?php

if (isset($_GET['case_id']))
{
	//requiring the cumulus database PDO connection
	require_once '../classes/Dbconn.class.php';

	//creating an instance of the class to use for queries
	$db = Dbconn::getDB();

	//the sql query to delete the record
	$sql = "DELETE FROM caselaw WHERE case_id = $_GET[case_id]";
	//carrying out the query on the DB
	$db->query($sql);

	header("Location: ../caselawUD.php");

}
else
{
	return false;
}



?>