<?php 
	private $sec_id;
	private $law_id;
	private $book_id;
	private $title_id;
	private $div_id;
	private $sec_num;
	private $sec_txt;
	private $enact_yr;
	private $enact_bill;
	private $enact_sec;

	public function displaySection(){
		$display = "Section #: " . $this->sec_id . "<br/>Section Text: " . $this->sec_txt;
		return $display;
	}

	

 ?>
