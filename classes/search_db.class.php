<?php
	class search_class {

		public function searchSections($search_query){

			$db = Dbconn::getDB();
			//$search_query = search_engine::searchSections();

			$query = "SELECT sec_num, sec_title, sec_txt  FROM sections
						/*INNER JOIN laws l ON s.law_id = l.law_id
						INNER JOIN books b ON s.book_id = b.book_id
						INNER JOIN titles t ON s.title_id = t.title_id
						INNER JOIN chapters c ON s.ch_id = c.ch_id
						INNER JOIN divisions d ON s.div_id = d.div_id
						INNER JOIN subdivisions sd ON s.sub_div_id = sd.sub_div_id*/
						WHERE sec_txt LIKE '%" . $search_query . "%'";
			$result = $db->query($query);

			$sections = array();

			foreach ($result as $row){
				$section = new Search($row['sec_txt'], $row['sec_num']); 
				$section->getSec_Title($row['sec_txt']);
				$section->getSec_Num($row['sec_num']); 
				$sections[] = $section;
			}
			return $sections;
		}
	}
?>