<?php
	class add_tags {
		
		public function addTags($tag, $section) { //added $section
			$db = Dbconn::getDB();
			
			//$tag = new tag_category();
			//$tagname = $tag->getTag();
			
			$query = "INSERT INTO tags (tag, article_ref) VALUES ('$tag', '$section')";
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
				//echo $page_tag['tag_id'];
				$tag->setID($page_tag['tag_id']);
				$tags[] = $tag;	
			}
		return $tags;	   
	   }
	}
?>
