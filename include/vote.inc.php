<?php

require '../classes/Dbconn.class.php';
require '../classes/vote.class.php';
require '../classes/vote_db.class.php';


//creating an instance of the class
$voteDB = new VoteDB();
//defining the value of the variables to be used
$caselawID = $_POST['caselawID'];
$vote = $_POST['vote'];

$voteDB->modifyVotes($caselawID, $vote);

$row = $voteDB->getVotesByCaselawID($caselawID);

foreach($row as $r) {
	if($vote === 'up'){
		echo $r['votes_up'];
	}
	elseif($vote === 'down'){
		echo $r['votes_down'];
	}
};

?>