<?php

class DBconn{
    
private $hostname = "mysql2.cloudsites.gearhost.com";
private $username = "cumulus";
private $dbname = "cumulus";

//These variable values need to be changed by you before deploying
private $password = "kbvEigBt";

public function getConn(){

    try {
    $db = new PDO('mysql:host=mysql2.cloudsites.gearhost.com;dbname=cumulus', $this->username, $this->password);
        } 
        catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "failed to connect";
            exit();
        }
    return $db;
    }
    
}

?>
