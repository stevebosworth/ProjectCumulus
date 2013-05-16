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
				$tag = new Tag($page_tag['tag_id'],
					$page_tag['tag'],
					$page_tag['article_ref'],
					$page_tag['users_usr_id'] //using this column to affect css class //added 16/05/2013
					);
				$tag->getID($page_tag['tag_id']);
				$tag->getTag($page_tag['tag']);
				$tag->getArticle_Ref($page_tag['article_ref']);
				$tag->getCloud_Class($page_tag['users_usr_id']); //added 16/05/2013
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
				$tag = new Tag($page_tag['tag_id'],
					$page_tag['tag'],
					$page_tag['article_ref'],
					$page_tag['users_usr_id'] //using this column to affect css class //added 16/05/2013
					);
				$tag->getID($page_tag['tag_id']);
				$tag->getTag($page_tag['tag']);
				$tag->getArticle_Ref($page_tag['article_ref']);
				$tag->getCloud_Class($page_tag['users_usr_id']); //added 16/05/2013
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

	    //function will update users_usr_id which will be used to alter css class (hopefully)
		public function updateTagCloudClass($tag) {
			$db = Dbconn::getDB();
			$query = "UPDATE tags SET users_usr_id = users_usr_id +1 WHERE tag_id = '$tag'";
			$db->exec($query);
	   }
	}
?>
