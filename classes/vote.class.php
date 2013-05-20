<?php

class Vote{

	//set local variables
	private $voteid;
	private $caselawid;
	private $voteups;
	private $votedowns;
    private $userid;

	//construct public function
	public function __construct ($voteid, $caselawid, $voteups, $votedowns, $userid){
		$this->voteid = $voteid;
		$this->caselawid = $caselawid;
		$this->voteups = $voteups;
		$this->votedowns = $votedowns;
		$this->userid = $userid;
	}


    /**
     * Gets the value of voteid.
     *
     * @return mixed
     */
    public function getVoteid()
    {
        return $this->voteid;
    }

    /**
     * Sets the value of voteid.
     *
     * @param mixed $voteid the voteid
     *
     * @return self
     */
    public function setVoteid($voteid)
    {
        $this->voteid = $voteid;

        return $this;
    }

    /**
     * Gets the value of userid.
     *
     * @return mixed
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Sets the value of userid.
     *
     * @param mixed $userid the userid
     *
     * @return self
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Gets the value of caselawid.
     *
     * @return mixed
     */
    public function getCaselawid()
    {
        return $this->caselawid;
    }

    /**
     * Sets the value of caselawid.
     *
     * @param mixed $caselawid the caselawid
     *
     * @return self
     */
    public function setCaselawid($caselawid)
    {
        $this->caselawid = $caselawid;

        return $this;
    }

    /**
     * Gets the value of voteups.
     *
     * @return mixed
     */
    public function getVoteups()
    {
        return $this->voteups;
    }

    /**
     * Sets the value of voteups.
     *
     * @param mixed $voteups the voteups
     *
     * @return self
     */
    public function setVoteups($voteups)
    {
        $this->voteups = $voteups;

        return $this;
    }

    /**
     * Gets the value of votedowns.
     *
     * @return mixed
     */
    public function getVotedowns()
    {
        return $this->votedowns;
    }

    /**
     * Sets the value of votedowns.
     *
     * @param mixed $votedowns the votedowns
     *
     * @return self
     */
    public function setVotedowns($votedowns)
    {
        $this->votedowns = $votedowns;

        return $this;
    }
}

?>