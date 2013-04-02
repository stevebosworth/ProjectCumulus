<?php

require '../classes/vote.class.php';
require '../classes/vote_db.class.php';

//creating an instance of the class
$voteDB = new voteDB();

if ($_POST){
	//defining the value of the variables to be used
	$caselawID = $_POST['caselawID'];
	$vote = $_POST['vote'];

    $voteDB->modifyVotes($caselawID, $vote);
    // header('Location: articlepage.php');
    // die();
}
else {
	return false;
}

?>