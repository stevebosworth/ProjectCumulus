<?php 

if (!empty($_POST['hidden']))
{
	$errmsg = ""; //Starting the error string

	if(!empty($_POST['caseID']))
	{
		$caseID = $_POST['caseID']; //Sets the caseID
		$pattern = "/^\d{1,7}$/";

		if(preg_match($pattern, $caseID))
		{
		
		}
		else
		{
			$errmsg = "case ID may only contain numbers";
		}
	}
	else 
	{
		$errmsg = "Please enter the case ID";
	}

	if(!empty($_POST['caseRef']))
	{
		$caseRef = $_POST['caseRef']; //Sets the caseRef
		$pattern = "/^([a-zA-Z0-9_\s\.\-]*)$/";

		if(preg_match($pattern, $caseRef))
		{
		
		}
		else
		{
			$errmsg = $errmsg . " & case reference may not contain special characters";
		}
	}
	else 
	{
		if($errmsg)
		{
			$errmsg = $errmsg . " & case reference";
		}
		else
		{
			$errmsg = "Please enter the case reference";
		}
	}

	if(!empty($_POST['courtID']))
	{
		$courtID = $_POST['courtID']; //Sets the courtID
		$pattern =  "^[A-Za-z]+$^";

		if(preg_match($pattern, $courtID))
		{
		
		}
		else
		{
			$errmsg = $errmsg . " & court id may only contain letters";
		}
	}
	else
	{
		if($errmsg)
		{
			$errmsg = $errmsg . " & court ID";
		}
		else
		{
			$errmsg = "Please enter the court ID";
		}
	}

	if(!empty($_POST['caseDate']))
	{
		$caseDate = $_POST['caseDate']; //Sets the caseDate
		$pattern = "/^(19|20)\d\d[-](0[1-9]|1[012])[-](0[1-9]|[12][0-9]|3[01])$/";

		if(preg_match($pattern, $caseDate))
		{
		
		}
		else
		{
			$errmsg = $errmsg . " & case date should be between 1900 and today, and in the format YYYY-MM-DD";
		}
	}
	else
	{
		if($errmsg)
		{
			$errmsg = $errmsg . " & case date";
		}
		else
		{
			$errmsg = "Please enter the case date";
		}
	}

	if(!empty($_POST['url']))
	{
		$url = $_POST['url']; //Sets the url
		$pattern = "^([A-Za-z]{3,9}://(?:\/\/)?)(?:[-;:&=\+\$,\w]+@)?[A-Za-z0-9.-]+|(?:www.|[-;:&=\+])\$^";

		if(preg_match($pattern, $url))
		{
		
		}
		else
		{
			$errmsg = $errmsg . " & invalid url - must begin with http://";
		}
	}
	else
	{
		if($errmsg)
		{
			$errmsg = $errmsg . " & url";
		}
		else
		{
			$errmsg = "Please enter the url";
		}
	}

	$caseDesc = $_POST['caseDesc'];
	$hidden = $_POST['hidden'];

	if ($errmsg == "")
	{

	//requiring the cumulus database PDO connection
	require_once 'DBconn_test.php';

	//creating an instance of the class to use for queries
	$mydbconn = new DBconn();
	$conn = $mydbconn->getConn();

	//updates the database record based on caselaw id from previous page
	$udquery = "UPDATE caselaw SET case_id=$caseID, case_ref='$caseRef', court_id='$courtID', case_date='$caseDate', url='$url', case_desc='$caseDesc' WHERE case_id=$hidden";
	$conn->query($udquery);

	//redirect user to original page
	header("Location: articlepageUD.php");
  	exit;

	}

	else
	{
		echo $errmsg;
		return false;
	}
}


?>