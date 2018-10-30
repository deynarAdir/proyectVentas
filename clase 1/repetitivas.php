<?php 
	$n = 1;
	while($n <= 10){
		echo "$n ,";
		$n++;
	}

	$c=1;
	do{
		echo "$c ,";
		$c++;
	}while($c <=10);

	for($i = 1;$i<=10;$i++){
		echo "$i, ";
	}

	for($i = 1;$i<=10;$i++){
		echo "$i, ";
		if($i === 5){
			break;
		}
	}

	$vector = ['a','b','c','d'];
	foreach ($vector as $value) {
		echo "$value, ";
	}

 ?>