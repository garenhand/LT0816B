<?php
	public function hello()
	{
		echo 'Hello LT0816B';
	}
	
	public function multiply($a,$b){
		return $a*$b;
	}
	
	public function sum($a,$b){
		return ($a+$b);	
	}
	
	public function div($a,$b){
		return ($a/$b);
	}
	
	public function chiahet($a){
		return ($a%3==0 && $a%5==0)?true:false;	
	}
?>