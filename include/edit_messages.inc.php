<?php
	include ('classes/Dbconn.class.php');
	include ('classes/messages_db.class.php');
	include ('classes/Messages.class.php');

    $msg_class = new message_class();

    $msg_array = $msg_class->selectMessages();

    //outputs messages with form elements
    foreach ($msg_array as $single_message) {
        echo "<input type='checkbox' name='message_idcheck[]' value='" . $single_message->getMsg_Id() . "'/> 
            <strong>From: " . $single_message->getUsr_From() . "</strong>&nbsp;<a href='message.php?id=" . $single_message->getMsg_Id() . "'>" . 
            $single_message->getTitle() . "</a> " . $single_message->getMsg_Date() . "&nbsp;" . $single_message->getMsg_Read() . "
            <input type='hidden' name='message_id' value='" . $single_message->getMsg_Id() . "'/>
            <br /><br />";
    }

?>