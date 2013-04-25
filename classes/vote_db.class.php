<?php

//Class to carry out DataBase queries for Voting

class VoteDB {
	
	//inserts row into vote table for each new caselaw
	public function insertVoteRow() {

		//DataBase connection & query
		$db = Dbconn::getDB();
		$query = "INSERT INTO votes (votes_up, votes_down, user_id)
        VALUES (0, 0, 1)";

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
							$row['caselaw_id'],
							$row['votes_up'],
							$row['votes_down'],
							$row['user_id']
							);
			$votes[] = $vote;
		}

		return $votes;
	}

	//fetches votes based on the caselaw they relate to
	public function getVotesByCaselawID($caselaw_id) {

		//DataBase connection & query
		$db = Dbconn::getDB();
		$query = "SELECT * FROM votes WHERE caselaw_id = '$caselaw_id'";
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

}

?>