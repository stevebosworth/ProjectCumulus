<?php

	class Tag {
		private $id;
		private $tag;
		private $article_ref;
		
		public function __construct($id, $tag, $article_ref)
		{
			$this->id = $id;
			$this->tag = $tag;	
			$this->article_ref = $article_ref;
		}
		
		//gets the value of id
		public function getID()
		{
			return $this->id;	
		}
		
		//sets the value of id
		public function setID($value)
		{
			$this->id = $value;	
		}
		
		//gets the value of tag
		public function getTag()
		{
			return $this->tag;	
		}
		
		//sets the value of tag
		public function setTag($value)
		{
			$this->tag = $value;	
		}
		
		//gets value of article_ref
		public function getArticle_Ref()
		{
			return $this->article_ref;
		}

		//sets value of article_ref
		public function setArticle_Ref($value)
		{
			$this->article_ref = $value;
		}
	}


?>