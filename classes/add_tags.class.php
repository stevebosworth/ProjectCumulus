<?php
	class add_tags {
		
		//adds tags into database
		public function addTags($tag, $section) { //added $section
			
			$db = Dbconn::getDB();
			
			//$tag = new tag_category();
			//$tagname = $tag->getTag();
			
			$query = "INSERT INTO tags (tag, article_ref) VALUES ('$tag', '$section')";
			$db->exec($query);
		}	
	   
	   	//retrieves tags from database
	   	public function selectTag($section) { //added $section apr/21/13
			$db = Dbconn::getDB();
			$sqlquery = "SELECT * FROM tags WHERE article_ref = '$section'"; //added where clause apr/21/13
       		$tagset = $db->query($sqlquery);
			$tags = array();
			foreach ($tagset as $page_tag) 
			{
				$tag = new tag_category($page_tag['tag_id'],
					$page_tag['tag'],
					$page_tag['article_ref']
					);	
				$tag->getID($page_tag['tag_id']);
				$tag->getTag($page_tag['tag']);
				$tag->getArticle_Ref($page_tag['article_ref']);
				$tags[] = $tag;	
			}
		return $tags;	   
	   }

	   //retrieves tags based on id
	   public function selectTagByTag($tag) { 
			$db = Dbconn::getDB();
			$sqlquery = "SELECT * FROM tags WHERE tag = '$tag'"; 
       		$tagset = $db->query($sqlquery);
			$tags = array();
			foreach ($tagset as $page_tag) 
			{
				$tag = new tag_category($page_tag['tag_id'],
					$page_tag['tag'],
					$page_tag['article_ref']
					);	
				$tag->getID($page_tag['tag_id']);
				$tag->getTag($page_tag['tag']);
				$tag->getArticle_Ref($page_tag['article_ref']);
				$tags[] = $tag;		
			}
		return $tags;	   
	   }

		//deletes tag based on comparison
		public function deleteTag($tag, $article) {
			$db = Dbconn::getDB();
			$query = "DELETE FROM tags WHERE tag = '$tag' AND article_ref = '$article'";
			$db->exec($query);
	   }

	}
?>
