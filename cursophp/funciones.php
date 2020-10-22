<?php 
function miFuncion(){
//mostrar nombre 

	return 'este es un nombre';

}

echo miFuncion();

echo "<br>";
 // funcin escalar 
function miFuncion2($valorA,$valorB,$opccion){
	switch ($opccion) {
		case 'suma':
         return $valorA + $valorB;
		break;
		case 'resta':
		 return $valorA - $valorB;
		break;
		case 'mutiplicacion':
		 return $valorA * $valorB;
		break;
		case 'division':
		 return $valorA / $valorB;
		break;

		default:
		# code...
		break;
	}

}

echo miFuncion2(4,6,'mutiplicacion');
?>