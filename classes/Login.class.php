<?php

class Login {

    private $userid;
	private $username;
	private $password;
    private $accessLevel;

	public function __construct($userid, $username, $password, $accessLevel){
		$this->userid = $userid;
        $this->username = $username;
		$this->password = $password;
        $this->accessLevel = $accessLevel;
	}

    /**
     * Gets the value of username.
     *
     * @return mixed
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Sets the value of username.
     *
     * @param mixed $username the username
     *
     * @return self
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Gets the value of username.
     *
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Sets the value of username.
     *
     * @param mixed $username the username
     *
     * @return self
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Gets the value of password.
     *
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets the value of password.
     *
     * @param mixed $password the password
     *
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Gets the value of accessLevel.
     *
     * @return mixed
     */
    public function getAccessLevel()
    {
        return $this->accessLevel;
    }

    /**
     * Sets the value of accessLevel.
     *
     * @param mixed $accessLevel the accessLevel
     *
     * @return self
     */
    public function setAccessLevel($accessLevel)
    {
        $this->accessLevel = $accessLevel;

        return $this;
    }
}

?>