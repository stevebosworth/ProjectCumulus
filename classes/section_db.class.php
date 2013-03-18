<?php

class SectionDB {

	public function selSections(){
		$db = Dbconn::getDB();

		$query = "SELECT * FROM sections";

		$result = $db->query($query);

		$sections = array();

		foreach ($result as $row){
			$section = new Section(
									$row['law_id'],
									$row['book_id'],
									$row['title_id'],
									$row['ch_id'],
									$row['div_id'],
									$row['$sub_div_id'],
									$row['sec_num'],
									$row['sec_txt'],
									$row['enact_yr'],
									$row['enact_bill'],
									$row['enact_sec']);

		 	$sections[] = $section;
		}
		return $books;
	}

	public function selSectionByNum($sec_num){
		$db = Dbconn::getDB();

		$query = "SELECT * FROM sections WHERE sec_num = '$sec_num'";

		$result = $db->query($query);
		$row = $result->fetch();

		$section = new Section(
								$row['law_id'],
								$row['book_id'],
								$row['title_id'],
								$row['ch_id'],
								$row['div_id'],
								$row['$sub_div_id'],
								$row['sec_num'],
								$row['sec_txt'],
								$row['enact_yr'],
								$row['enact_bill'],
								$row['enact_sec']);
		return $section;
	}

	public function selSectionByBook($book_id){
		$db = Dbconn::getDb();

		$query = "SELECT * FROM sections WHERE book_id = '$book_id'";

		$result = $db->query($query);
		$row = $result->fetch();

		$section = new Section(
								$row['law_id'],
								$row['book_id'],
								$row['title_id'],
								$row['ch_id'],
								$row['div_id'],
								$row['$sub_div_id'],
								$row['sec_num'],
								$row['sec_txt'],
								$row['enact_yr'],
								$row['enact_bill'],
								$row['enact_sec']);
		return $section;
	}

	public function addSection($sec_num, $sec_title, $sec_txt, $enact_yr, $enact_bill, $enact_sec, $law_id, $book_id, $title_id, $ch_id, $div_id, $sub_div_id){
		$db = Dbconn::getDb();

		$query = "INSERT INTO sections (sec_num, sec_title, sec_txt, enact_yr, enact_bill, enact_sec, law_id, book_id, title_id, ch_id, div_id, sub_div_id)
		VALUES (
			'$sec_num',
			'$sec_title',
			'$sec_txt',
			'$enact_yr',
			'$enact_bill',
			'$enact_sec',
			'$law_id',
			'$book_id',
			'$title_id',
			'$ch_id',
			'$div_id',
			'$sub_div_id'
			)";

		$insert = $db->exec($query);
	}

}