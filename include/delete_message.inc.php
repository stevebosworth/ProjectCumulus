<?php
	include ('../classes/Dbconn.class.php');
	include ('../classes/messages_db.class.php');
	include ('../classes/Messages.class.php');

	$id = $_POST['message_id'];
	//$filter = $_POST['message_filter'];

	$messages_class = new message_class();

	if($_POST['delete_message'])
	{
		$messages_class->deleteMessage($id);
	}
	elseif($_POST['mark_read'])
	{
		$messages_class->messageMarkRead($id);
	}
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


	header("location:../Profile_Messages.php");

?>