<?php
	include ('../classes/Dbconn.class.php');
	include ('../classes/messages_db.class.php');
	include ('../classes/Messages.class.php');

	$id = $_POST['message_id'];

	$messages_class = new message_class();

	$messages_class->messageMarkRead($id);

	header("location:../Profile_Messages.php");
?>