<?php
	class db_connection{
		
		private static $dsn = 'mysql:host=mysql2.cloudsites.gearhost.com;dbname=cumulus';
		private static $username = 'cumulus';
		private static $password = 'kbvEigBt';
    	private static $db;
	
		private function __construct() {}
	
		public static function getDB() {
    		if (!isset(self::$db)) {	
				try {			
					self::$db = new PDO(self::$dsn, 
										self::$username, 
										self::$password); 
					}
				catch (PDOException $e) {
					$error_message = $e->getMessage();
					exit();	
				}
			}
			return self::$db;
		}
	}
				//$sqlquery = "SELECT * FROM tags";
       			//$tagset = $db->query($sqlquery);
	   
				//error handling
    			/*} 
				
			catch (Exception $e) {
				$error = $e->getMessage();
				echo $error;
				exit();
    			}   
			}
		}*/

?>