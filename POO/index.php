<?php 
	require_once 'matematica/Operaciones.php';
	use matematica\Aritmetica;
	$obj = new Aritmetica();
	var_dump($obj->suma(1,2));

	var_dump(Aritmetica::suma(10,10));

	require_once 'matematica/Persona.php';
	use matematica\Persona;
	$obj2 = new Persona("Deynar","Mamani");
	var_dump($obj2->saludo());
 ?>