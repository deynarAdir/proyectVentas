<?php 
	session_start();
	//para destruir sessiones
	session_destroy();
	// o
	unset($_SESSION['frutas']);
 ?>