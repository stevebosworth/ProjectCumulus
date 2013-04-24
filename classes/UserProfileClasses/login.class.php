<?php 

class Login
{
	//Private Fields	
    private $email;
    private $password;

	//constructor
    public function __construct($email, $password) {
        $this->email = $email;
        $this->password = $password;
    }

		
	//getters and setters
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
}


?>