<?php 
	$var="pedro jimenez lopez";
	$fechas="01-05-2020";
// explode es una funcion que convierte un string a un arreglo dependiendo de la construccion pedida 

	$datos=explode(" ", $var);
	$paterno=$datos[1];
	
	var_dump($datos);
	echo "<br>";
	echo "<pre>";
	print_r($datos);
	echo"<>";
echo "<br>";
	// fecha 
	$datos=explode(" ", $fechas);
	$f=explode("-", $fechas);
	echo "el año de la fecha es ".$f[2];



 ?>