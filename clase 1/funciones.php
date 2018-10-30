<?php 
	function suma(){
		return 2+4;
	}
	echo suma();

	//funciones con parametros
	function saludar($name){
		echo 'hola como estas'.$name;
	}
	saludar("Deynar");

	//funciones con parametros inizializados

	function saludo2($name = 'Adrian'){
		return 'hola como estas'.$name;
	}
	echo saludo2('Celia');

	//funciones con parametros por referencia

	$x = 1;
	function incremento(&$x){
		$x=4;
	}
	incremento($x);
	echo $x;

	//funciones con parametros de longitud de variable
	function longitud(...$items){
		foreach ($items as $value) {
			echo "$value, ";
		}
	}
	longitud('tenis','pelota','guitarra');

	//funciones recursivas
	function recursiva($anio){
		if($anio % 2 === 0){
			echo "$anio es par";
		}
		if($anio != date('Y')){
			recursiva($anio + 1);
		}
	}
	recursiva(2000);
 ?>