<?php
/*
	include ('../classes/Dbconn.class.php');
	include ('../classes/messages_db.class.php');
	include ('../classes/Messages.class.php');
*/
	function my_autoloader($class_name) 
	{
    	include '../classes/' . $class_name . '.class.php';
	}

	spl_autoload_register('my_autoloader');

	//creates a new message
	$title = $_POST['msg_title'];
	$body = $_POST['msg_body'];
	$to = $_POST['msg_to'];
	$from = $_POST['msg_from'];
	$date = date('Y-m-d');

	$messages_class = new messages_db();

	if(!empty($body) && (!empty($to)) && (!empty($from)))
	{
		$messages_class->newMessage($body, $to, $from, $title, $date);
	}

	header("location:../Profile_Messages.php");
?>