<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contalo pues panita</title>
</head>
<body>

	<h1>Conteo de puntos</h1>

	<?php

		$Num = rand(1,10);
		$Total = 0;
		$p = $Total/2;
		$contar = 0;

		if ($Num == 1) {
			echo "<h2>$Num dado</h2>\n";
		}else{
			echo "<h2>$Num dado</h2>\n";
		}


echo "\n";
		for ($i=0; $i < $Num; $i++) { 
			
			$dado = rand(1,6);
			echo "<img src=\"img/$dado.png\" width=\"120\height=\"120\">\n";


			if ($dado == 5) {
			$contar ++;
		}
			
		}


			$Total += $dado;

		
		

echo "<br>";
echo "El total de puntos ganados son: ".$Total;

/*echo "Los numeros pares son: ".$pares;
echo "El dado mas grande es: ".$max;*/
echo "<br>";

	for ($i=2; $i < $Num;) { 

		echo "Los numeros pares son: ".$p;
		break;
	}
echo "El numero mayor es: ".$Num;



echo "La cantidad de cincos es: ".$contar;


	?>
</body>
</html>