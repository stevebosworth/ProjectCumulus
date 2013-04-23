<?php

require_once '../classes/Dbconn.class.php';
require_once '../classes/contact.class.php';
require_once '../classes/contact_db.class.php';

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$msg = $_POST['message'];

if (!empty($fname) | !empty($lname) | !empty($email) | !empty($msg)){
	$ContactDB = new ContactDB();
	$ContactDB->addContact($fname, $lname, $email, $phone, $msg);
}
else {
	echo "You have left required fields empty.";
}

?>