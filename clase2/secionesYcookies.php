<?php 
	//seciones para lado del servidor
	/*
		guarda informacion para recuperarla mas tarde
	*/
	session_start();
	$_SESSION['frutas'] = ['platano','naranja'];

	//cookies para el lado del cliente
	/*
		Es guardada en el lado del cliente
		puede ser visible
	*/
		setcookie("cajas" //key
			,"piña,fresa,coco" // value
			,time()+60); //tiempo de vida
 ?>