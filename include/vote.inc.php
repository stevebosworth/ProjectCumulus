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

echo json_encode($voteDB->getVotesByCaselawID($caselawID));


?>