<?php

class Top{

public $batsman;
public $bowler;
public $fielder;

	public function __construct($batsman,$bowler,$fielder){

		 $this->batsman=$batsman;
		 $this->bowler=$bowler;
		 $this->fielder=$fielder;
	     $this->players();




	}

	protected function players(){

		echo "best batsman name is". $this->batsman."<br>";
		echo "best bowler name is". $this->bowler."<br>";
		echo "best fielder name is". $this->fielder."<br>";

	}


	
}

class Cop extends Top{

public $lang;

	public function __construct($batsman,$bowler,$fielder){

		$this->batsman=$batsman;
		$this->bowler=$bowler;
		$this->fielder=$fielder;
	     $this->players();




	}

	}

  $obj = new Top("Don","akram","jonty");
  $obj2 = new Cop("Mon","Mkram","Monty");




?>
