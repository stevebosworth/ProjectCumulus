<?php

//include the database connection and login.class files.
	require_once('database.class.php');

class EditProdileDB
{
	private $firstname, $lastname,$email,$password,$photourl,$qualification,$location,$bio;

    public function __construct($firstname, $lastname, $email,$password,$photourl,$qualification,$location,$bio) {
        $this->firstname = $firstname;
		$this->lastname=$lastname;
		$this->email = $email;
        $this->password = $password;
        $this->photourl = $photourl;
        $this->qualification = $qualification;
		$this->location = $location;
		$this->bio = $bio;
	}
	
	//GETTERS AND SETTERS
	public function getFirstname() {
        return $this->firstname;
    }
    public function setFirstname($value) {
        $this->firstname = $value;
    }
	
	public function getLastname() {
        return $this->lastname;
    }
    public function setLastname($value) {
        $this->lastname = $value;
    }
	
	 public function getEmail() {
        return $this->email;
    }
    public function setEmail($value) {
        $this->email = $value;
    }
	
	
	public function getPassword() {
        return $this->password;
    }
    public function setPassword($value) {
        $this->password = $value;
    }
	
	
	public function getPhotoUrl() {
        return $this->photourl;
    }
    public function setPhotoUrl($value) {
        $this->photourl = $value;
    }
	
	
	public function getQualification() {
        return $this->qualification;
    }
    public function setQualification($value) {
        $this->qualification = $value;
    }
	
	
	public function getLocation() {
        return $this->location;
    }
    public function setLocation($value) {
        $this->location = $value;
    }
	
	
	public function getBio() {
        return $this->bio;
    }
    public function setBio($value) {
        $this->bio = $value;
    }
	
	
}

?>
