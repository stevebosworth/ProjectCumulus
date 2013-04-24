<?php

	//include the database connection and login.class files.
	require_once('database.class.php');
	require_once('login.class.php');
	
	//class
	class LoginDB 
	{  
			
		public static function myLoginDB($email, $password) 
		{
			$db = Database::getDB();
			$query = "SELECT * FROM profile WHERE email='$email' AND password='$password' ";
			$result = $db->query($query);
			$row=$result->fetch();
		   
			return $row;    
		}	
	  
	}
      
?>
