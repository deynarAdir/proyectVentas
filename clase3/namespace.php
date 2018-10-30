<?php 
	require_once 'matematica/aritmetica/formula.php';
	require_once 'matematica/financiera/formula.php';
	echo matematica\aritmetica\suma(1,2);
	echo number_format(matematica\financiera\tea(10000,0.09,2));
 ?>