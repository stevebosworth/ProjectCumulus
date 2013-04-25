<?php

//requiring necessary class files
require_once '../classes/Dbconn.class.php';
require_once '../classes/contact.class.php';
require_once '../classes/contact_db.class.php';

//setting variables from POST
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$msg = $_POST['message'];

//if no fields are empty, add the contact
if (!empty($fname) | !empty($lname) | !empty($email) | !empty($msg)){
	$ContactDB = new ContactDB();
	$ContactDB->addContact($fname, $lname, $email, $phone, $msg);
}
//error message if fields are empty
else {
	echo "You have left required fields empty.";
}

?>