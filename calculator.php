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
			case 1:
			case 3:
			case 5:
			case 7:
			case 8:
			case 10:
			case 12:{
				return 31;
				break;
			}
			case 2:{
				return 28;
				break;
			}
			default:{
				return 30;
				break;
			}
				
		}
	}
?>