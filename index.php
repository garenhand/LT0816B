<?php
public function nn($y){
	if($y % 4 ==0 && $y %100 !=0){
		return true;
	}
	else if($y % 400 == 0){
		return true;
	}
	else{
		return false;
	}
}

?>