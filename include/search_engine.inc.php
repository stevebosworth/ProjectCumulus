<?php

	require_once('classes/Dbconn.class.php');
	require_once('classes/search_db.class.php');
	require_once('classes/Search.class.php');

	$search_query = $_POST['txt_search'];

	if(isset($search_query)){

		$new_search = new search_class();
		$result = $new_search->searchSections($search_query);

		foreach ($result as $resultset) {
        	echo "<a href='#'>" . $resultset->getSec_Title() . "</a><br /><br />" ;
		}
	}
	else {
		echo "Error: Invalid Search Query";
	}

?>