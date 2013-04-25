<?php

//class to carry out DB commands/queries for Contacts

class ContactDB {

	//function for adding new contacts to the database
	public function addContact($fname, $lname, $email, $phone, $msg){
		//insert procedure for phone number that is left null
		if (empty($phone)){
			$db = Dbconn::getDB();
			$nophone_sql = "INSERT INTO contacts (contact_fname, contact_lname, contact_email, contact_msg) VALUES ('$fname', '$lname', '$email', '$msg')";
			$db->query($nophone_sql);
		}
		//insert procedure where phone number is not left null
		else {
			$db = Dbconn::getDB();
			$phone_sql = "INSERT INTO contacts (contact_fname, contact_lname, contact_email, contact_phone, contact_msg) VALUES ('$fname', '$lname', '$email', '$phone', '$msg')";
			$db->query($phone_sql);
		}
	}

	//function for getting a list of the contacts from the database
	public function getContacts(){
		$db = Dbconn::getDB();
		$sql = "SELECT * FROM contacts";
		$result = $db->query($sql);

		$contacts = array();

		foreach ($result as $row){
			$contact = new Contact(
				$row['contact_fname'],
				$row['contact_lname'],
				$row['contact_email'],
				$row['contact_phone'],
				$row['contact_msg']
				);
			$contacts[] = $contact;
		}

		return $contacts;
	}
}

?>