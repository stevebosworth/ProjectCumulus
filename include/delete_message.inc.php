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

	$id = $_POST['message_idcheck'];

	$messages_class = new messages_db();

	//loops through array and deletes selected items
	if($_POST['delete_message'])
	{
		foreach($id as $i) 
		{
			$messages_class->deleteMessage($i);	
		}
		
	}
	//loops through array and marks selected items as read
	elseif($_POST['mark_read'])
	{
		foreach($id as $i) 
		{
			$messages_class->messageMarkRead($i);
		}
	}
	
	
	header("location:../Profile_Messages.php");

	/*
	else //highly experimental
	{
		switch ($filter)
		{
			case "All":
				$msg_array = $msg_class->selectMessages();
				foreach ($msg_array as $single_message) {
                    echo "<input type='checkbox' value='" . $single_message->getMsg_Id() . "'/> 
                	    <strong>From: " . $single_message->getUsr_From() . "</strong>&nbsp;<a href='message.php?id=" . $single_message->getMsg_Id() . "'>" . 
                        $single_message->getTitle() . "</a> " . $single_message->getMsg_Date() . "&nbsp;" . $single_message->getMsg_Read() . "
                        <input type='hidden' name='message_id' value='" . $single_message->getMsg_Id() . "'/>
                        <br /><br />";
                            }
        	    break;
        	case "Unread":
				$msg_array = $msg_class->selectNewMessage();
			        foreach ($msg_array as $single_message) {
                                echo "<input type='checkbox' value='" . $single_message->getMsg_Id() . "'/> 
                                <strong>From: " . $single_message->getUsr_From() . "</strong>&nbsp;<a href='message.php?id=" . $single_message->getMsg_Id() . "'>" . 
                                $single_message->getTitle() . "</a> " . $single_message->getMsg_Date() . "&nbsp;" . $single_message->getMsg_Read() . "
                                <input type='hidden' name='message_id' value='" . $single_message->getMsg_Id() . "'/>
                                <br /><br />";
                            }
                break;            
            case "Read":
            	$msg_array = $msg_class->selectOldMessage();
			        foreach ($msg_array as $single_message) {
                                echo "<input type='checkbox' value='" . $single_message->getMsg_Id() . "'/> 
                                <strong>From: " . $single_message->getUsr_From() . "</strong>&nbsp;<a href='message.php?id=" . $single_message->getMsg_Id() . "'>" . 
                                $single_message->getTitle() . "</a> " . $single_message->getMsg_Date() . "&nbsp;" . $single_message->getMsg_Read() . "
                                <input type='hidden' name='message_id' value='" . $single_message->getMsg_Id() . "'/>
                                <br /><br />";
                            }
                break;
		}
	}
	*/


	

?>