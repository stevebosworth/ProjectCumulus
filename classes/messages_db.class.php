<?php

class messages_db {

	//creates a new message
	public function newMessage($body, $to, $from, $title, $date){
		$db = Dbconn::getDB();
		$query = "INSERT INTO messages (msg_text, usr_to, usr_from, title, msg_read, msg_date) VALUES ('$body', '$to', '$from', '$title', 'Unread', '$date')";
		$db->exec($query);
	}

	//gets all messages
	public function selectMessages(){
		$db = Dbconn::getDB();
		
		$query = "SELECT msg_id, msg_text, usr_to, usr_from, title, msg_read, msg_date FROM messages ORDER BY msg_date DESC";
		
		$result = $db->query($query);
		
		$messages = array();
		foreach ($result as $row) {
			$message = new Messages(
				$row['msg_id'],
				$row['msg_text'],
				$row['usr_to'],
				$row['usr_from'],
				$row['title'],
				$row['msg_read'],
				$row['msg_date']
				);
			$message->getMsg_Id($row['msg_id']);
			$message->getMsg_Text($row['msg_text']);
			$message->getUsr_To($row['usr_to']);
			$message->getUsr_From($row['usr_from']);
			$message->getTitle($row['title']);
			$message->getMsg_Read($row['msg_read']);
			$message->getMsg_Date($row['msg_date']);
			$messages[] = $message;	
		}
		return $messages;
		
	}

	//gets content of a specific message
	public function selectMessageByID($id){
		$db = Dbconn::getDB();
		
		$query = "SELECT msg_id, msg_text, usr_to, usr_from, title, msg_read, msg_date FROM messages WHERE msg_id = '$id'";
		
		$result = $db->query($query);
		
		$messages = array();
		foreach ($result as $row) {
			$message = new Messages(
				$row['msg_id'],
				$row['msg_text'],
				$row['usr_to'],
				$row['usr_from'],
				$row['title'],
				$row['msg_read'],
				$row['msg_date']
				);
			$message->getMsg_Id($row['msg_id']);
			$message->getMsg_Text($row['msg_text']);
			$message->getUsr_To($row['usr_to']);
			$message->getUsr_From($row['usr_from']);
			$message->getTitle($row['title']);
			$message->getMsg_Read($row['msg_read']);
			$message->getMsg_Date($row['msg_date']);
			$messages[] = $message;	
		}
		return $messages;

	}

	//selects unread messages
	public function selectNewMessage() {
		$db = Dbconn::getDB();
		$query = "SELECT msg_text, usr_to, usr_from, title, msg_read, msg_date FROM messages WHERE msg_read = 'Unread' ORDER BY msg_date DESC";
		$result = $db->query($query);	
		$messages = array();
		foreach ($result as $row) {
			$message = new Messages(
				$row['msg_id'],
				$row['msg_text'],
				$row['usr_to'],
				$row['usr_from'],
				$row['title'],
				$row['msg_read'],
				$row['msg_date']
				);
			$message->getMsg_Id($row['msg_id']);
			$message->getMsg_Text($row['msg_text']);
			$message->getUsr_To($row['usr_to']);
			$message->getUsr_From($row['usr_from']);
			$message->getTitle($row['title']);
			$message->getMsg_Read($row['msg_read']);
			$message->getMsg_Date($row['msg_date']);
			$messages[] = $message;	
		}
		return $messages;	
	}

	public function selectOldMessage() {
		$db = Dbconn::getDB();
		$query = "SELECT msg_text, usr_to, usr_from, title FROM messages WHERE msg_read = 'Read' ORDER BY msg_date DESC";
		$result = $db->query($query);
		$messages = array();
		foreach ($result as $row) {
			$message = new Messages(
				$row['msg_id'],
				$row['msg_text'],
				$row['usr_to'],
				$row['usr_from'],
				$row['title'],
				$row['msg_read'],
				$row['msg_date']
				);
			$message->getMsg_Id($row['msg_id']);
			$message->getMsg_Text($row['msg_text']);
			$message->getUsr_To($row['usr_to']);
			$message->getUsr_From($row['usr_from']);
			$message->getTitle($row['title']);
			$message->getMsg_Read($row['msg_read']);
			$message->getMsg_Date($row['msg_date']);
			$messages[] = $message;	
		}
		return $messages;			
	}

	//updates msg_read 
	public function messageMarkRead($id) {
		$db = Dbconn::getDB();
		$query = "UPDATE messages SET msg_read = 'Read' WHERE msg_id = '$id'";
		$db->exec($query);
	}

	//deletes specified message
	public function deleteMessage($id) {
		$db = Dbconn::getDB();
		$query = "DELETE FROM messages WHERE msg_id = '$id'";
		$db->exec($query);
	}
}

?>