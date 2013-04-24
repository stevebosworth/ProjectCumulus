<?php 

class Messages {
	private $msg_id;
	private $msg_text;
	private $usr_to;
	private $usr_from;
	private $title;
	private $msg_read;
	private $msg_date;

	public function __construct($msg_id, $msg_text, $usr_to, $usr_from, $title, $msg_read, $msg_date) {
		$this->msg_id = $msg_id;
		$this->msg_text = $msg_text;
		$this->usr_to = $usr_to;
		$this->usr_from = $usr_from;
		$this->title = $title;
		$this->msg_read = $msg_read;
		$this->msg_date = $msg_date;
	}

	//gets the value of msg_id
	public function getMsg_Id() {

		return $this->msg_id;
	}

	//sets the value of msg_id 
	public function setMsg_Id($msg_id) {

		$this->msg_id = $msg_id;
	}

	//gets the value of msg_text
	public function getMsg_Text() {

		return $this->msg_text;
	}

	//sets the value of msg_text
	public function setMsg_Text($msg_text) {

		$this->msg_text = $msg_text;
	}

	//gets the value of usr_to
	public function getUsr_To() {

		return $this->usr_to;
	}

	//sets the value of usr_to
	public function setUsr_To($usr_to) {

		$this->usr_to = $usr_to;
	}

	//gets the value of usr_from
	public function getUsr_From() {

		return $this->usr_from;
	}

	//sets the value of usr_from
	public function setUsr_From($usr_from) {

		$this->usr_from = $usr_from;
	}

	//gets the value of title
	public function getTitle() {

		return $this->title;
	}

	//sets the value of title
	public function setTitle($title) {

		$this->title = $title;
	} 

	//gets the value of msg_read
	public function getMsg_Read() {

		return $this->msg_read;
	}

	//sets the value of msg_read
	public function setMsg_Read($msg_read) {

		$this->msg_read = $msg_read;
	}

	//gets the value of msg_date
	public function getMsg_Date() {

		return $this->msg_date;
	}

	//sets the value of msg_date
	public function setMsg_Date($msg_date) {

		$this->msg_date = $msg_date;
	}
}

?>