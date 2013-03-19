<?php
		
		$dsn = 'mysql:host=mysql2.cloudsites.gearhost.com;dbname=cumulus';
		$username = 'cumulus';
		$password = 'kbvEigBt';
    
    try {
        $db = new PDO($dsn, $username, $password);
    
        $sqlquery = "SELECT * FROM sections";
        $resultset = $db->query($sqlquery);
	   
	    //error handling
    	} catch (Exception $e) {
				$error = $e->getMessage();
				echo $error;
				exit();
    	}   

?>