<?php
//includes
require_once('../classes/UserProfileClasses/database.class.php');
require_once('../classes/UserProfileClasses/login_db.class.php');
require_once('../classes/UserProfileClasses/login.class.php');

$email = $_POST['email'];
$pass = $_POST['password'];

$myDBQuery = LoginDB::myLoginDB($email,$pass);

var_dump($myDBQuery);

if(empty($myDBQuery))
{
	//redirect to the re-login page
	echo "Login Failed: Check Email and Password";
}
else
{
	// create a login session
	session_start();

   // set the session variables
	$_SESSION['firstname'] = $myDBQuery['firstname'];
	$_SESSION['lastname'] = $myDBQuery['lastname'];
	$_SESSION['email'] = $myDBQuery['email'];
	$_SESSION['password'] = $myDBQuery['password'];
	$_SESSION['photourl'] = $myDBQuery['photourl'];
	$_SESSION['qualification'] = $myDBQuery['qualification'];
	$_SESSION['location'] = $myDBQuery['location'];
	$_SESSION['bio'] = $myDBQuery['bio'];
	$_SESSION['regdate'] = $myDBQuery['regdate'];

	echo "Welcome " . $_SESSION['firstname'];
}