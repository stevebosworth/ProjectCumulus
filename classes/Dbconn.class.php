<?php 
	class Dbconn
	{
		private $dsn = 'mysql:mysql2.cloudsites.gearhost.com;dbname=cumulus';
		private $username = 'cumulus';
		private $password = 'kbvEigBt';

		public function getConn()
		{
			try{
				$db = new PDO($this->dsn, $this->username, $this->password);
				echo "Success!";
			}
			catch (Exception $e) {
				$error = $e->getMessage();
				echo $error;
				exit();
			}

			return $db;
		}

	}
	$dbcon = new Dbconn();

    $conn = $dbcon->getConn();
    $laws_query = "SELECT * FROM books";

    $laws = $conn->query($laws_query);
 ?>