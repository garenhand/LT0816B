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

	public function array_merge($array1, $array2) {
		
		return ($array1.$array2);
		);	
	}

	
	public function div($a,$b){
		return ($a/$b);
	}
	
	public function chiahet($a){
		return ($a%3==0 && $a%5==0)?true:false;	
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
	
	public function kiemtra($h) {
		if($h % 2 == 0) {
			echo 'true';	
		}else
			echo 'false';	
	}

?>