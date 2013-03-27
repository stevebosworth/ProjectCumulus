<?php
	class Dbconn{

		private static $dsn = 'mysql:host=mysql2.cloudsites.gearhost.com;dbname=cumulus';
		private static $username = 'cumulus';
		private static $password = 'kbvEigBt';
	    private static $db;

	    private function __construct() {}

	    public static function getDB () {
	        if (!isset(self::$db)) {
	            try {
	                self::$db = new PDO(self::$dsn,
	                                     self::$username,
	                                     self::$password);
	            } catch (PDOException $e) {
	                $error_message = $e->getMessage();
	                echo "Error Connecting to Database";
	                exit();
	            }
	        }
	        return self::$db;
	    }
	}