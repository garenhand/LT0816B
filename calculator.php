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
<<<<<<< HEAD
	
	public function chiahet($a){
		return ($a%3==0 && $a%5==0)?true:false;	
=======

	public function days($m){
		switch($m){
			case 1:{
			return 31;
			break;
			}
			case 2:{
			return 28;
			break;
			}
			case 3:{
			return 31;
			break;
			}
			case 4:{
			return 30;
			break;
			}
			case 5:{
			return 31;
			break;
			}
			case 6:{
			return 30;
			break;
			}
			case 7:{
			return 31;
			break;
			}
			case 8:{
			return 31;
			break;
			}
			case 9:{
			return 30;
			break;
			}
			case 10:{
			return 31;
			break;
			}
			case 11:{
			return 30;
			break;
			}
			case 12:{
			return 31;
			break;
			}	
		}
>>>>>>> 8ef7e796b3ffb8c6730d845c8afa94fe005c1421
	}
?>