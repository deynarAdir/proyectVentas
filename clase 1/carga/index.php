<?php 
	//include
//El script va a seguir funcionando
	// include 'lib/funcionesAritmeticas.php';
	// echo suma(1,3);

	//require
	//el script si existe algun error saldra de la pagina
	// require 'lib/funcionesAritmeticas.php';
	// echo suma(1,3);
	//require_once
	require_once 'lib/funcionesAritmeticas.php';
	echo suma(1,3);
	require_once 'lib/funcionesAritmeticas.php';
	echo suma(1,3);

	require_once 'lib/funcionesHtml.php'; 
	echo genera('https://google.com', 'Este es el vinculo a google');
 ?>