<?php 

class Messages {

	public function __construct() {


	}

	public function getMsg_Id() {

		return $this->msg_id;
	}

	public function setMsg_Id($msg_id) {

		$this->msg_id = $msg_id;
	}

	public function getMsg_Text() {

		return $this->msg_text;
	}

	public function setMsg_Text($msg_text) {

		$this->msg_text = $msg_text;
	}

	public function getUsr_To() {

		return $this->usr_to;
	}

	public function setUsr_To($usr_to) {

		$this->usr_to = $usr_to;
	}

	public function getUsr_From() {

		return $this->usr_from;
	}

	public function setUsr_From($usr_from) {

		$this->usr_from = $usr_from;
	}

	public function getTitle() {

		return $this->title;
	}

	public function setTitle($title) {

		$this->title = $title;
	} 

	public function getMsg_Read() {

		return $this->msg_read;
	}

	public function setMsg_Read($msg_read) {

		$this->msg_read = $msg_read;
	}
}

?>