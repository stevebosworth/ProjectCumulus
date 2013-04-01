<?php

class Vote{

	//set local variables
	private $userid, $caselawid, $voteups, $votedowns;

	//construct public function
	public function __construct ($userid, $caselawid, $voteups, $votedowns){
		$this->userid = $userid;
		$this->caselawid = $caselawid;
		$this->voteups = $voteups;
		$this->votedowns = $votedowns;
	}

	// getters & setters for $userid
	public function getUserID(){
		return $this->userid;
	}
	public function setUserID($value){
		$this->userid = $value;
	}

	// getters & setters for $caselawid
	public function getcaselawID(){
		return $this->caselawid;
	}
	public function setcaselawID($value){
		$this->caselawid = $value;
	}

	// getters & setters for $voteups
	public function getVoteUps(){
		return $this->voteups;
	}
	public function setVoteUps($value){
		$this->voteups = $value;
	}

	// getters & setters for $votedowns
	public function getVoteDowns(){
		return $this->votedowns;
	}
	public function setVoteDowns($value){
		$this->votedowns = $value;
	}
}

?>