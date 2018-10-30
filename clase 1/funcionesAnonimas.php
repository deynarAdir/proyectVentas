<?php
	//closure

	$suma = function($a,$b){
		return $a + $b;
	};
	echo $suma(1,2);

	$suma2 = function($a,$b,$c){
		return $c($a+$b);
	};
	$suma2(1,2,function($r){
		echo $r;
	})
  ?>P