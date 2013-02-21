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
			}
			catch (Exception $e) {
				$error = $e->getMessage();
				include('database_error.php');
				exit();
			}

			return $db;
		}
	}
 ?>