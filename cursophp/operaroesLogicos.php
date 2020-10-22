<?php 
// los operadores logicos sirven para validar explexiones tales el caso del operador or que sirve para validar una sentencia u otra en el caso del operador and que sirve para validar ambas sentencia 

$resultado=50;

if ($resultado <51 and $resultado>49 ) {
  	echo "es un numero 50 valido ";
 } 
 	echo "<br> ";
 $edadvalida =25;
 	if ($edadvalida>18 and $edadvalida < 26) {
 	echo "la edad es valida ";
 	}
 	echo "<br> ";
$sexo="femenino";
       if ($sexo=="femenino" or $sexo=="Masculino") {
      echo "sexo valido"; 
       }
       	echo "<br> ";
       	//el operador de diferente y la negacion 
       	$dato =5;
       	if ($dato!=10) {
       		echo "es un dato bueno";
       	}
       		echo "<br> ";
       	//negacion 
       	$dato2=false;
       	if (!$dato2) {
       		echo "no es verdadero";
       	}




 ?>