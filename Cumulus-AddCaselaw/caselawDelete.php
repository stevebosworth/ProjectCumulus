<?php

if (isset($_GET['case_id']))
{
	//requiring the cumulus database PDO connection
	require_once 'Dbconn.class.php';

	//creating an instance of the class to use for queries
	$mydbconn = new Dbconn();
	$conn = $mydbconn->getConn();

	//the sql query to delete the record
	$sql = "DELETE FROM caselaw WHERE case_id = $_GET[case_id]";
	//carrying out the query on the DB
	$conn->query($sql);

	header("Location: articlepageUD.php");
  	exit;

}
else
{
	return false;
	header("Location: articlepageUD.php");
  	exit;
}

?>