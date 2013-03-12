<?php

class Section extends Dbconn
{


	public function getLaws()
		{
			$laws_query = "SELECT * FROM laws";
			$laws = $conn->query($laws_query);
			return $laws;
		}



	// public $sec_num;
	// public $sec_txt;
	// public $enact_yr;
	// public $enact_bill;
	// public $enact_sec;
	// public $law_id;
	// public $book_id;
	// public $title_id;
	// public $div_id;
	// public $sub_div_id;

	// public function __construct($sec_num, $sec_text, $enact_yr, $enact_bill, $enact_sec, $law_id, $book_id, $title_id, $div_id, $sub_div_id)
	// {
	// 	$this-> sec_num = $sec_num;
	// 	$this-> sec_txt = $sec_txt;
	// 	$this-> enact_yr = $enact_yr;
	// 	$this-> enact_bill = $enact_bill;
	// 	$this-> enact_sec = $enact_sec;
	// 	$this-> law_id = $law_id;
	// 	$this-> book_id = $book_id;
	// 	$this-> title_id = $title_id;
	// 	$this-> div_id = $div_id;
	// 	$this-> sub_div_id = $sub_div_id;
	// }
	//Query Sections based on two ids
		//$id should be an interger
		//$id_match should be in the form of [table]_id
		//$id_match defaults to 'sec_id'
	// public function getSectionByID($id, $match_id)
	// {
	// 	$dbcon = new Dbconn();
	// 	$conn = $dbcon->getConn();

	// 	if(!isset($match_id)){
	// 		$match_id = 'sec_id';
	// 	}

	// 	$query = "SELECT * FROM sections WHERE $match_id = '$id'";
	// 	$secQuery = $conn->getConn();
	// }

	// public function insertSection($law_id, $book_id, $title_id, $div_id, $sec_num, $sec_txt, $enact_yr, $enact_bill, $enact_sec)
	// {
	// 	$dbcon = new Dbconn();
	// 	$conn = $dbcon->getConn();


	// }
}
?>
