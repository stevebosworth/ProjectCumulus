<?php

class LoginDB {

	public function verifyLogin ($user, $pass) {

		$db = Dbconn::getDB();
		$sql = "SELECT * FROM users WHERE username = '$user'";
		$result = $db->query($sql);

		$row[] = $result;

		foreach($result as $res){
			$row = new Login(
				$res['user_id'],
				$res['username'],
				$res['password'],
				$res['access_level']
				);
		}

		return $row;
	}

}

?>