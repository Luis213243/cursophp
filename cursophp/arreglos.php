<?php 
// un arreglo es un tipo de dato que puede contener n datos a partir de un almancenamineto por indice 

	 $arreglo=array();
	 $arreglo[0]="leo";
	 $arreglo[1]=10;
	  $arreglo[2]="escuela";
	  $arreglo[3]="estudia";
	 var_dump($arreglo);

	 echo"<br>";
	 echo $arreglo[1]+5;
	  echo"<br>";
	 echo count($arreglo);
	  echo"<br>";
// podemos llenar el arreglo desde el inicio o por posicicon 
	  $arreglo2=array('jose',5,6,7,8,9,10);
	 for ($i=0; $i <count($arreglo2) ; $i++) { 
	 	echo $arreglo2[$i];
	 	echo"<br>";
	 	 if ($arreglo2[$i]==7) {
	 	 	echo "felicidades leo";
	 	 	echo"<br>";
     
     }
	 }
	 echo"<br>";
    


 

 ?>