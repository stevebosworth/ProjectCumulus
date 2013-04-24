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
        return $this->disAuthor;
    }
    public function setAuthor($value) {
        $this->disAuthor = $value;
    }
	
	
	public function getDateTimeCreated() {
        return $this->dateTimeCreated;
    }
    public function setDateTimeCreated($value) {
        $this->dateTimeCreated = $value;
    }
	
	
	public function getTitle() {
        return $this->disTitle;
    }
    public function setTitle($value) {
        $this->disTitle = $value;
    }
	
	
	public function getSection() {
        return $this->disSection;
    }
    public function setSection($value) {
        $this->disSection = $value;
    }
	
	
	public function getCaseLaw() {
        return $this->disCaseLaw;
    }
    public function setCaseLaw($value) {
        $this->disCaseLaw = $value;
    }
	
	
	public function getBody() {
        return $this->disBody;
    }
    public function setBody($value) {
        $this->disBody = $value;
    }
	
	
	public function getAudience() {
        return $this->disAudience;
    }
    public function setAudience($value) {
        $this->disAudience = $value;
    }

	
}

?>
