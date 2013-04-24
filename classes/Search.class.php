<?php

class Search {

	private $sec_num;
	private $sec_title;
	//added April 21/13
	private $sec_txt;
	private $law_name;
	private $book_title; 
	private $title_title; 
	private $ch_title;
	private $div_title;

	public function __construct($sec_num, $sec_title, $sec_txt, $law_name, $book_title, $title_title, $ch_title, $div_title) {
		$this->sec_num = $sec_num;
		$this->sec_title = $sec_title;
		$this->sec_txt = $sec_txt;
		//added April 21/13
		$this->law_name = $law_name;
		$this->book_title = $book_title;
		$this->title_title = $title_title;
		$this->ch_title = $ch_title;
		$this->div_title = $div_title;
	}

    //gets the value of sec_num
	public function getSec_Num() {

		return $this->sec_num;
	}

    //sets the value of sec_num
	public function setSec_Num($sec_num) {
    
        $this->sec_num = $sec_num;
	}

    //gets the value of sec_title
	public function getSec_Title()
    {
        return $this->sec_title;
    }

    public function setSec_Title($sec_title)
    {
        $this->sec_title = $sec_title;
    }

    //added April 21/13
    //gets the value of sec_txt
    public function getSec_Txt()
    {
    	return $this->sec_txt;
    }

    //sets the value of sec_txt
    public function setSec_Txt($sec_txt)
    {
    	$this->sec_txt = $sec_txt;
    }

    //gets the value of law_name
    public function getLaw_Name()
    {
    	return $this->law_name;
    }

    //sets the value of law_name
    public function setLaw_Name($law_name)
    {
    	$this->law_name = $law_name;
    }

    //gets the value of book_title
    public function getBook_Title()
    {
    	return $this->book_title;
    }

    //sets the value of book_title
    public function setBook_Title($book_title)
    {
    	$this->book_title = $book_title;
    }

    //gets the value of title_title
    public function getTitle_Title()
    {
    	return $this->title_title;
    }

    //sets the value of title_title
    public function setTitle_Title($title_title)
    {
    	$this->title_title = $title_title;
    } 

    //gets the value of ch_title
    public function getCh_Title()
    {
    	return $this->ch_title;
    }

    //sets the value of ch_title
    public function setCh_Title($ch_title)
    {
    	$this->ch_title = $ch_title;
    }

    //gets the value of div_title
    public function getDiv_Title()
    {
    	return $this->div_title;
    }

    //sets the value of div_title
    public function setDiv_Title($div_title)
    {
    	$this->div_title = $div_title;
    }
}

?>