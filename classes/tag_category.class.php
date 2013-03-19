<?php

	class tag_category {
		private $id;
		private $tag;
		
		public function __construct($id, $tag)
		{
			$this->id = $id;
			$this->tag = $tag;	
		}
		
		public function getID()
		{
			return $this->id;	
		}
		
		public function setID($value)
		{
			$this->id = $value;	
		}
		
		public function getTag()
		{
			return $this->tag;	
		}
		
		public function setTag($value)
		{
			$this->tag = $value;	
		}
		
	}


?>