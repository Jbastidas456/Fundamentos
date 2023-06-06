<?php
	/*$dia[0]="Lunes";
	$dia[1]="Martes";
	$dia[2]="Miercoles";
	$dia[3]="Jueves";
	$dia[4]="Viernes";
	$dia[5]="Sabado";
	$dia[6]="Domingo";

	echo $dia[1];
	echo "<br>";
	echo count($dia);
	echo "<br>";*/


	$autos = array("dodge","mitsubishi","Ford", "renault");

	//echo "las marcas de auto son:".$autos[0]."".$autos[1]."".$autos[2];

	$color[0]="Rojo";
	$color[1]="amarillo";
	$color[2]="Azul";


	echo "<br>";
	echo $color[2];
	echo "<br>";
	echo $color[0];
	echo "<br>";
	echo $color[1];
	echo "<br>";
	

	$tan=count($autos);
	for($x=0; $x<$tan;$x++){

		echo $autos[$x];
		echo "<br>";

	}


	$registros = array('Docu' => 40414, 'Nombre' => "Felipe", 'Direccion' => "cenigraf");

	echo $registros['Docu'];

	$articulos = array('Codigo' => 100, 'Nombreap' => "Fresas", 'Precio' => 7000);
	foreach ($articulos as $key => $value) {
		
		echo "para la llave :".$key."su valor es: ".$value;
		echo "<br>";

	}

	$aprendices = array('Docu' => 28540, 'NombreA'=>"Edna", 'Programa' => "adso", 'trimestre' =>5);

	foreach($aprendices as $fi => $valor){

		echo "Para los datos :" .$fi. " su valor es: ".$valor;
		echo "<br>";
	}
	$suma = 0;

	$numeros = array('num1' => 2, 'num2' => 3, 'num3' => 7, 'num4' => 1, 'num5' => 2, );

	foreach($numeros)
?>