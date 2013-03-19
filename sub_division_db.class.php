<?php

class SubDivisionDB{
	public function selSubDivisions(){
		$db = Dbconn::getDB();

		$query = "SELECT * FROM subdivisions";

		$result = $db->query($query);

		$sub_divisions = array();

		foreach ($result as $row){
			$sub_division = new SubDivision(
							$row['sub_div_id'],
							$row['sub_div_num'],
							$row['sub_div_title']);
							$row['div_id']);
			$sub_divisions[] = $sub_division;
		}
		return $sub_divisions;
	}

	public function selDivisionByID($div_id){
		$db = Dbconn::getDB();

		$query = "SELECT * FROM subdivisions WHERE div_id = '$div_id'";

		$result = $db->query($query);
		$row = $result->fetch();

		$sub_division = new SubDivision(
							$row['sub_div_id'],
							$row['sub_div_num'],
							$row['sub_div_title']);
							$row['div_id']);
		return $sub_division;
	}

}