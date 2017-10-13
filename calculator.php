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
	}
	
	public function kiemtra($h) {
		if($h % 2 == 0) {
			echo 'true';	
		}else
			echo 'false';	
	}
?>