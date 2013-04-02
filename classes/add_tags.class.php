<?php
	class add_tags {
		
		public function addTags($tag) {
			$db = Dbconn::getDB();	
			$query = "INSERT INTO tags (tag) VALUES ('$tag')";
			$db->exec($query);
		}	
	   
	   	public function selectTag() {
			$db = Dbconn::getDB();
			$sqlquery = "SELECT * FROM tags";
       		$tagset = $db->query($sqlquery);
			$tags = array();
			foreach ($tagset as $page_tag) 
			{
				$tag = new tag_category($page_tag['tag']);	
				$tag->setID($page_tag['tag_id']);
				$tags[] = $tag;	
			}
			
		return $tags;
		   
	   }
	}
	
?>
