<?php

	class tag_category {
		private $id;
		private $tag;
		
		public function __construct($tag)
		{
			//$this->id = $id;
			$this->tag = $tag;	
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
		
	}


?>