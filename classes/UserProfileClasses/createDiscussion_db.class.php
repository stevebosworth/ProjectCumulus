<?php

//include the database connection and login.class files.
	require_once('database.class.php');

class createDiscDB
{
	private $disAuthor, $dateTimeCreated, $disTitle, $disSection, $disCaseLaw, $disBody, $disAudience;

    public function __construct($disAuthor, $dateTimeCreated, $disTitle, $disSection, $disCaseLaw, $disBody, $disAudience) {
        $this->disAuthor = $disAuthor;
        $this->dateTimeCreated = $dateTimeCreated;
        $this->disTitle = $disTitle;
        $this->disSection = $disSection;
		$this->disCaseLaw = $disCaseLaw;
		$this->disBody = $disBody;
		$this->disAudience = $disAudience;
	}
	
	//GETTERS AND SETTERS
	
	 public function getAuthor() {
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
