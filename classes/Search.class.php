<?php

class Search {

	private $sec_num;
	private $sec_title;

	public function __construct($sec_title, $sec_num) {
		$this->sec_num = $sec_num;
		$this->sec_title = $sec_title;
	}

	public function getSec_Num() {

		return $this->sec_num;
	}

	public function setSec_Num($sec_num) {
    
        $this->sec_num = $sec_num;
	}

	public function getSec_Title()
    {
        return $this->sec_title;
    }

    public function setSec_Title($sec_title)
    {
        $this->sec_title = $sec_title;
    }
}

?>