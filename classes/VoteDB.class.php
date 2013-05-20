<?php

//Class to carry out DataBase queries for Voting

class VoteDB {

	//inserts row into vote table for each new caselaw
	public function insertVoteRow($caselawID) {

		//DataBase connection & query
		$db = Dbconn::getDB();
		$query = "INSERT INTO votes (caselaw_id, votes_up, votes_down, user_id)
        VALUES ($caselawID, 0, 0, 0)";

        $db->exec($query);
	}

	//fetches all votes and puts them into an array
	public function getVotes() {

		//DataBase connection & query
		$db = Dbconn::getDB();
		$query = "SELECT * FROM votes";
		$result = $db->query($query);

		$votes = array();

		foreach ($result as $row)
		{
			$vote = new Vote(
							$row['vote_id'],
							$row['caselaw_id'],
							$row['votes_up'],
							$row['votes_down'],
							$row['user_id']
							);
			$votes[] = $vote;
		}

		return $votes;
	}

	//checking if users have voted on this caselaw before
	public function checkPastVotes($caselaw_id, $userid) {
		//DataBase connection & query
		$db = Dbconn::getDB();
		$query = "SELECT * FROM votes WHERE caselaw_id = $caselaw_id AND user_id = $userid";
		$result = $db->query($query);

		$votes = array();

		foreach ($result as $row)
		{
			$vote = new Vote(
							$row['vote_id'],
							$row['caselaw_id'],
							$row['votes_up'],
							$row['votes_down'],
							$row['user_id']
							);
			$votes[] = $vote;
		}

		return $votes;
	}

	//gets votes up for a particular caselaw
	public function getVotesUpByCaselawID($caselaw_id) {
		//DataBase connection & query
		$db = Dbconn::getDB();
		$query = "SELECT COUNT(votes_up) AS 'total' FROM votes WHERE caselaw_id = $caselaw_id AND votes_up = 1";
		$result = $db->query($query);

		$row[] = $result->fetch();

		return $row;
	}

	//gets votes down for a particular caselaw
	public function getVotesDownByCaselawID($caselaw_id) {
		//DataBase connection & query
		$db = Dbconn::getDB();
		$query = "SELECT COUNT(votes_down) AS 'total' FROM votes WHERE caselaw_id = $caselaw_id AND votes_down = 1";
		$result = $db->query($query);

		$row[] = $result->fetch();

		return $row;
	}

	//adds votes up or down to caselaws
	public function modifyVotes($caselawID, $vote) {
		$caselawID = (int)$caselawID;

		if ($vote === 'up'){
			//DataBase connection & query
			$db = Dbconn::getDB();
			$sql = "UPDATE votes SET votes_up = votes_up + 1 WHERE caselaw_id = {$caselawID}";
			$db->query($sql);
		}

		elseif ($vote === 'down'){
			//DataBase connection & query
			$db = Dbconn::getDB();
			$sql = "UPDATE votes SET votes_down = votes_down + 1 WHERE caselaw_id = {$caselawID}";
			$db->query($sql);
		}
		else {
			return false;
			echo "error in script";
		}
	}

	//new function for voting with updated DB table
	public function newVote($caselawID, $vote, $userid) {

		$caselawID = (int)$caselawID;

		if ($vote === 'up'){
			//DataBase connection & query
			$db = Dbconn::getDB();
			$sql = "INSERT INTO votes (caselaw_id, votes_up, votes_down, user_id) VALUES ('$caselawID', 1, 0, '$userid')";
			$db->query($sql);
		}

		elseif ($vote === 'down'){
			//DataBase connection & query
			$db = Dbconn::getDB();
			$sql = "INSERT INTO votes (caselaw_id, votes_up, votes_down, user_id) VALUES ('$caselawID', 0, 1, '$userid')";
			$db->query($sql);
		}
		else {
			return false;
			echo "error in script";
		}
	}

}

?>