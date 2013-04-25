<?php

//requiring classes necessary for functionality
require '../classes/Dbconn.class.php';
require '../classes/vote.class.php';
require '../classes/vote_db.class.php';

session_start();
if(isset($_SESSION['vote'])){

	echo '<script type="text/javascript">alert("You may only vote once per visit.");</script>';

	//creating an instance of the VoteDB class
	$voteDB = new VoteDB();

	//defining the value of the variables to be used
	$caselawID = $_POST['caselawID'];
	$vote = $_POST['vote'];

	//setting a variable with the new vote total
	$row = $voteDB->getVotesByCaselawID($caselawID);

	//echoing vote total variable to be displayed on ajax post return
	foreach($row as $r) {
		if($vote === 'up'){
			echo $r['votes_up'];
		}
		elseif($vote === 'down'){
			echo $r['votes_down'];
		}
	};

}
else{

	//setting a vote session
	session_start();
	$_SESSION['vote']=1;

	//creating an instance of the VoteDB class
	$voteDB = new VoteDB();

	//defining the value of the variables to be used
	$caselawID = $_POST['caselawID'];
	$vote = $_POST['vote'];

	//executing the modifyVotes function based on user input
	$voteDB->modifyVotes($caselawID, $vote);

	//setting a variable with the new vote total
	$row = $voteDB->getVotesByCaselawID($caselawID);

	//echoing vote total variable to be displayed on ajax post return
	foreach($row as $r) {
		if($vote === 'up'){
			echo $r['votes_up'];
		}
		elseif($vote === 'down'){
			echo $r['votes_down'];
		}
	};

}

?>