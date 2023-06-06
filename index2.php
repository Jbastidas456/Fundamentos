<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio</title>
</head>
<body>
	<?php

	
		$numero = rand(1,5);


		

		for ($i=0; $i < $numero; $i++) { 
			
			$circulo = rand(1,5);
			

			echo "<img src=\"img2/$circulo.png\" width=\"120\height=\"120\">\n";

		
			
		}



	?>
</body>
</html>