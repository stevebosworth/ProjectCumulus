<?php

//, c.ch_num, c.ch_title, d.div_num, d.div_title, sd.sub_div_num, sd.sub_div_title

class SectionDB {

	public function selSections(){
		$db = Dbconn::getDB();

		$query = "SELECT * FROM sections s INNER JOIN books b ON s.book_id = b.book_id";

		$result = $db->query($query);

		$sections = array();

		foreach ($result as $row){
			$section = new Section(
									$row['sec_num'],
									$row['sec_title'],
									$row['sec_txt'],
									$row['enact_yr'],
									$row['enact_bill'],
									$row['enact_sec'],
									$row['law_id'],
									$row['book_id'],
									$row['title_id'],
									$row['ch_id'],
									$row['div_id'],
									$row['$sub_div_id']);

		 	$sections[] = $section;
		}
		return $books;
	}

	public function selALLFromSections(){
		$db = Dbconn::getDB();

		$query = "SELECT * FROM sections s
					INNER JOIN laws l ON s.law_id = b.law_id
					INNER JOIN books b ON s.book_id = b.book_id
					INNER JOIN titles t ON s.title_id = t.title_id
					INNER JOIN chapters c ON s.ch_id = c.ch_id
					INNER JOIN divisions d ON s.div_id = d.div_id
					INNER JOIN subdivisions sd ON s.sub_div_id = sd.sub_div_id";

		$result = $db->query($query);

		$sections = array();

		foreach ($result as $row){
			$law = new Law(
							$row['law_name']
				);
			$book = new Book(
							  $row['book_num'],
							  $row['book_title']
				);
			$title = new Title(
								$row['title_num'],
								$row['title_title']
				);
			$division = new Division(
								$row['div_num'],
								$row['div_title']
				);
			$sub_division = new SubDivision(
								$row['sub_div_num'],
								$row['sub_div_title']
				);
			$section = new Section(
									$row['sec_num'],
									$row['sec_title'],
									$row['sec_txt'],
									$row['enact_yr'],
									$row['enact_bill'],
									$row['enact_sec'],
									$row['law_id'],
									$row['book_id'],
									$row['title_id'],
									$row['ch_id'],
									$row['div_id'],
									$row['$sub_div_id']),
									$law,
									$book,
									$title,
									$division,
									$sub_division;
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
								$row['sec_num'],
								$row['sec_title'],
								$row['sec_txt'],
								$row['enact_yr'],
								$row['enact_bill'],
								$row['enact_sec'],
								$row['law_id'],
								$row['book_id'],
								$row['title_id'],
								$row['ch_id'],
								$row['div_id'],
								$row['$sub_div_id']);
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
								$row['sec_title'],
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