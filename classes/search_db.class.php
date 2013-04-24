<?php
	class search_class {

		public function searchSections($search_query){

			$db = Dbconn::getDB();

			$query = "SELECT s.sec_num, s.sec_title, s.sec_txt, l.law_name, b.book_title, t.title_title, c.ch_title, d.div_title 
						FROM sections s
						INNER JOIN laws l ON s.law_id = l.law_id
						INNER JOIN books b ON s.book_id = b.book_id
						INNER JOIN titles t ON s.title_id = t.title_id
						INNER JOIN chapters c ON s.ch_id = c.ch_id
						INNER JOIN divisions d ON s.div_id = d.div_id
						INNER JOIN subdivisions sd ON s.sub_div_id = sd.sub_div_id
						WHERE s.sec_txt  || s.sec_title || s.sec_num || l.law_name || b.book_title || t.title_title || c.ch_title || d.div_title
						LIKE '%" . $search_query . "%'";
			$result = $db->query($query);

			$sections = array();

			foreach ($result as $row){
				$section = new Search(
					$row['sec_num'], 
					$row['sec_title'], 
					$row['sec_txt'],
					$row['law_name'], 
					$row['book_title'], 
					$row['title_title'], 
					$row['ch_title'],
					$row['div_title']
					); 
				$section->getSec_Num($row['sec_num']); 
				$section->getSec_Title($row['sec_title']);
				$section->getSec_Txt($row['sec_txt']);
				$section->getLaw_Name($row['law_name']);
				$section->getBook_Title($row['book_title']);
				$section->getTitle_Title($row['title_title']);
				$section->getCh_Title($row['ch_title']);
				$section->getDiv_Title($row['div_title']);
				$sections[] = $section;
			}
			return $sections;
		}
		/*
		public function searchTags($search_query){

			$db = Dbconn::getDB();

			$query = "SELECT article_ref, tag 
						FROM tags
						WHERE tag 
						LIKE '%" . $search_query . "%'";
			$result = $db->query($query);

			$sections = array();

			foreach ($result as $row){
				$section = new Search(
					$row['article_ref'], 
					$row['tag'], 
					); 
				$section->getSec_Num($row['sec_num']); 
				$section->getSec_Title($row['sec_title']);
				$section->getSec_Txt($row['sec_txt']);
				$section->getLaw_Name($row['law_name']);
				$section->getBook_Title($row['book_title']);
				$section->getTitle_Title($row['title_title']);
				$section->getCh_Title($row['ch_title']);
				$section->getDiv_Title($row['div_title']);
				$sections[] = $section;
			}
			return $sections;
		}*/
	}
?>