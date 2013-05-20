<?php

//requiring classes necessary for functionality
require '../classes/Dbconn.class.php';
require '../classes/Vote.class.php';
require '../classes/VoteDB.class.php';

//Denying vote if session is present, reloading totals
session_start();

//creating an instance of the VoteDB class
$voteDB = new VoteDB();

//defining the value of the variables to be used
$caselawID = $_POST['caselawID'];
$vote = $_POST['vote'];
$userid = $_SESSION['user_id'];

//setting a variable with the vote info
$rowUp = $voteDB->getVotesUpByCaselawID($caselawID);
$rowDown = $voteDB->getVotesDownByCaselawID($caselawID);

//setting a variable to check for past Votes below
$pastVotes = $voteDB->checkPastVotes($caselawID, $userid);
foreach($pastVotes as $pV){
	$checkV = $pV->getUserid();
}

//Denying vote if session is not present, reloading totals
if(!isset($_SESSION['user_id'])){

	echo '<script type="text/javascript">alert("Sorry, you must be logged in to vote.");</script>';

	//echoing vote total variable to be displayed on ajax post return
	if($vote === 'up'){
		foreach($rowUp as $rU){
			echo $rU['total'];
		}
	}
	elseif($vote === 'down'){
		foreach($rowDown as $rD){
			echo $rD['total'];
		}
	}
}
//NEEDS TO BE REWORKED **** Change from session to DB call
elseif($userid == $checkV){

	echo '<script type="text/javascript">alert("Sorry, you may only vote once per caselaw.");</script>';

	//echoing vote total variable to be displayed on ajax post return
	if($vote === 'up'){
		foreach($rowUp as $rU){
			echo $rU['total'];
		}
	}
	elseif($vote === 'down'){
		foreach($rowDown as $rD){
			echo $rD['total'];
		}
	}

}
//if user_id session is set and has not voted before, execute vote update and return new totals
else{

	//executing the newVote function based on user input
	$voteDB->newVote($caselawID, $vote, $userid);

	//setting variables with the new vote total
	$rowUp = $voteDB->getVotesUpByCaselawID($caselawID);
	$rowDown = $voteDB->getVotesDownByCaselawID($caselawID);

	//echoing vote total variable to be displayed on ajax post return
	if($vote === 'up'){
		foreach($rowUp as $rU){
			echo $rU['total'];
		}
	}
	elseif($vote === 'down'){
		foreach($rowDown as $rD){
			echo $rD['total'];
		}
	}

}

?>