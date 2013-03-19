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

			return $db;
		}

 ?>