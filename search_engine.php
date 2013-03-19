<?php
	
	if(isset($_GET['txt_search'])){
		if(isset($_GET['go'])){
			if(preg_match("^/[A-Za-z]+/", $_POST['txt_search'])){
				require_once('db_connection2.php');
				$search_query = $_POST['txt_search'];
				$query = "SELECT sec_id, sec_title FROM sections WHERE sec_title LIKE '%" . $search_query . "%'";
				$db->exec($query);
				//$result=mysql_query($query);	
				include('search.html');
			}
		}
	}
	else {
		echo "<p>Please Enter a Search Query</p>";	
	}
?>