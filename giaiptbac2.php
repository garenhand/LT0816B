<?php
 $a = 6;
 $b = 3;
 $c = 2;
 $dt = $b*$b - 4*$a*$c;
 $x = '';
 $x2 = '';
 if($dt < 0) {
	 $x = $x2 = "vo nghiem";
 } else if($dt = 0) {
	 $x = $x2 = -$b/2*$a;
 } else if($dt > 0) {
	 $x = (-$b + sqrt($dt))/2*$a;
	 $x2 = (-$b + sqrt($dt))/2*$a;
 }
?>

