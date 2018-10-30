<?php 
	$a = 28;
	if($a == 18){
		echo 'La variable ingresada tiene el valor 18';
	}else{
		echo 'La variable ingresada no tiene el valor 18';
	}

	if($a === '18'){
		echo 'Si es correcto';
	}else if($a === 28){
		echo 'tienes 28 correcto';
	}
	$b = true;
	if(!$b){
		echo 'negacion';
	}else{
		echo 'afirmacion';
	}
	$c = !$b;
	echo $c;

	$op = 'argentina';
	switch($op){
		case 'mexico':
			echo 'Cuesta 100';
		break;
		case 'argentina':
			echo 'cuesta 10';
		break;
		default:
			echo 'No existe';
		break;
	}
 ?>