<?php

//class to carry out DataBase queries for Caselaws

class CaselawDB{

	//inserting new caselaws into the DB
	public function addCaselaw($caseid, $sec_num, $courtid, $userid, $casedate, $url, $caseref, $casedesc){

		//insert procedure for caselaw with NULL description field
		if (empty($casedesc)){
			$db = Dbconn::getDB();
			$sql = "INSERT INTO caselaw (case_id, sec_num, court_id, usr_id, case_date, url, case_ref)
        			VALUES ('$caseid', '$sec_num', '$courtid', '$userid', '$casedate', '$url', '$caseref')";
			$db->query($sql);
		}

		//insert procedure for full caselaw
		else {
			$db = Dbconn::getDB();
    		$sql = "INSERT INTO caselaw (case_id, sec_num, court_id, usr_id, case_date, url, case_ref, case_desc)
        			VALUES ('$caseid', '$sec_num', '$courtid', '$userid', '$casedate', '$url', '$caseref', '$casedesc')";
			$db->query($sql);
		}
	}

	//retrieving all caselaws from the DB
	public function getCaselaws(){
		$db = Dbconn::getDB();
		$sql = "SELECT * FROM caselaw";
		$result = $db->query($sql);

		$caselaws = array();

		foreach ($result as $row){
			$caselaw = new Caselaw(
				$row['caselaw_id'],
				$row['sec_num'],
				$row['case_id'],
				$row['court_id'],
				$row['usr_id'],
				$row['case_date'],
				$row['url'],
				$row['case_ref'],
				$row['case_desc']
				);
			$caselaws[] = $caselaw;
		}

		return $caselaws;
	}

	//retrieving caselaws from the DB based on caselawID
	public function getCaselawsByID($case_id){

		//DataBase connection & query
		$db = Dbconn::getDB();
		$query = "SELECT * FROM caselaw WHERE case_id = '$case_id'";
		$result = $db->query($query);

		$row[] = $result->fetch();

		return $row;
	}

	//deleting unwanted items from the DB
	public function deleteCaselawsByID($case_id){

		//creating an instance of the class to use for queries
		$db = Dbconn::getDB();

		//the sql query to delete the record
		$sql = "DELETE FROM caselaw WHERE case_id = $case_id";
		//carrying out the query on the DB
		$db->query($sql);

	}

}

?>