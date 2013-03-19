<?php
	class Dbconn
	{
		private $dsn = 'mysql:host=mysql2.cloudsites.gearhost.com;dbname=cumulus';
		private $username = 'cumulus';
		private $password = 'kbvEigBt';

		public function getConn()
		{
			try{
				$db = new PDO($this->dsn, $this->username, $this->password);
			}
			catch (Exception $e) {
				$error = $e->getMessage();
				echo $error;
				exit();
			}
<<<<<<< HEAD

=======
>>>>>>> Adding updated search and tag files Mar 19/13
			return $db;
		}

<<<<<<< HEAD:Cumulus-AddCaselaw/Dbconn.class.php
=======

	public function getLaws()
		{
			$conn = $db;
			$laws_query = "SELECT * FROM laws";
			$laws = $conn->query($laws_query);
			return $laws;
		}
<<<<<<< HEAD

=======
>>>>>>> Adding updated search and tag files Mar 19/13
	}

	var_dump($laws);
>>>>>>> Adding updated search and tag files Mar 19/13:Dbconn.class.php
 ?>