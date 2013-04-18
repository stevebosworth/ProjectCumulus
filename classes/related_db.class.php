<?php

class RelatedDB{

public function selRelated(){
	$db = Dbconn::getDB();

	$query = "SELECT * FROM related WHERE rel_sec_num = '522'";

	$result = $db->query($query);

	$related = array();

	foreach($result as $row){
		$related = new Related(
								$row['sec_num'],
								$row['rel_sec_num']);
		$related->setRel_id($row['rel_id']);
		$related_secs[] = $related;
	}

	return $related_secs;
}

public function selRelatedBySec($sec_num){
	$db = Dbconn::getDB();

	$query = "SELECT * FROM related WHERE rel_sec_num = $sec_num";

	$result = $db->query($query);

	$related = array();

	foreach($result as $row){
		$related = new Related(
								$row['sec_num'],
								$row['rel_sec_num']);
		$related->setRel_id($row['rel_id']);
		$related_secs[] = $related;
	}

	echo $related_secs;
}

public function addRelatedSec($sec_num, $rel_sec_num, $comm_txt){
	$db = Dbconn::getDB();

	$query = $db->prepare("INSERT INTO related (sec_num, rel_sec_num, comm_txt) VALUES (:sec_num, :rel_sec_num, :comm_txt)");

	$query->bindParam('sec_num', $sec_num);
	$query->bindParam('rel_sec_num', $rel_sec_num);
	$query->bindParam('comm_txt', $comm_txt);

	$insert = $query->execute();

	return "success";
}



}