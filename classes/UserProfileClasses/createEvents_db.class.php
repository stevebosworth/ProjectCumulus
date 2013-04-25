<?php

//include the database connection and login.class files.
	require_once('database.class.php');

class createEventDB
{
	private $Title,$nameOfCreator,$emailOfCreator,$dateOfEvent,$description,$venue,$audience, $dateTimeOfCreation;

    public function __construct($Title,$nameOfCreator,$emailOfCreator,$dateOfEvent,$description,$venue,$audience, $dateTimeOfCreation) {
        $this->Title = $Title;
        $this->nameOfCreator = $nameOfCreator;
        $this->emailOfCreator = $emailOfCreator;
        $this->dateOfEvent = $dateOfEvent;
		$this->description = $description;
		$this->venue = $venue;
		$this->audience = $audience;
		$this->dateTimeOfCreation = $dateTimeOfCreation;
	}
	
	//GETTERS AND SETTERS
	
	 public function getTitle() {
        return $this->Title;
    }
    public function setTitle($value) {
        $this->Title = $value;
    }
	
	
	public function getNameOfCreator() {
        return $this->nameOfCreator;
    }
    public function setNameOfCreator($value) {
        $this->nameOfCreator = $value;
    }
	
	
	public function getEmailOfCreator() {
        return $this->emailOfCreator;
    }
    public function setEmailOfCreator($value) {
        $this->emailOfCreator = $value;
    }
	
	
	public function getDateOfEvent() {
        return $this->dateOfEvent;
    }
    public function setDateOfEvent($value) {
        $this->dateOfEvent = $value;
    }
	
	
	public function getDescription() {
        return $this->description;
    }
    public function setDescription($value) {
        $this->description = $value;
    }
	
	
	public function getVenue() {
        return $this->venue;
    }
    public function setVenue($value) {
        $this->venue = $value;
    }
	
	
	public function getAudience() {
        return $this->audience;
    }
    public function setAudience($value) {
        $this->audience = $value;
    }
	
	public function getDateTimeOfCreation() {
        return $this->dateTimeOfCreation;
    }
    public function setDateTimeOfCreation($value) {
        $this->dateTimeOfCreation = $value;
    }

	
}

?>
