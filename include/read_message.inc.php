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

	//marks messages as read when they are clicked through to
	$id = $_POST['message_id'];

	$messages_class = new messages_db();

	$messages_class->messageMarkRead($id);

	header("location:../Profile_Messages.php");
?>