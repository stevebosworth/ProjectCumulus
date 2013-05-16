<?php

	class Tag {
		private $id;
		private $tag;
		private $article_ref;
		//addition to tag cloud 16/05/2013
		private $cloud_class;

		public function __construct($id, $tag, $article_ref, $cloud_class)
		{
			$this->id = $id;
			$this->tag = $tag;
			$this->article_ref = $article_ref;
			$this->cloud_class = $cloud_class; //added 16/05/2013
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

		//added 16/05/2013
		public function getCloud_Class()
		{
			return $this->cloud_class;
		}

		public function setCloud_Class($value)
		{
			$this->cloud_class = $value;
		}
	}


?>