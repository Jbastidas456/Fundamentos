<?php
$Nom = $_POST['txtnom'];
$Edad = $_POST['txtedad'];
$Est = $_POST['txtest'];
$Estado = $_POST['txtestado'];
$fecha = $_POST['txtfecha'];
$fechaEntero = strtotime($fecha);
$anio = date("Y", "$fechaEntero");
$mes = date("m", "$fechaEntero");
$dia = date("d", "$fechaEntero");
$anitoA = date("Y");
$Edad1 = $anitoA - "$anio";


echo "$Nom";
echo "<br>";
echo "$Edad";
echo "<br>";
echo "$Est";
echo "<br>";
echo "$Estado";
echo "$fecha";
echo "<br>";
echo "$anio";	
echo "$mes";
echo "<br>";
echo "$dia";
echo "<br>";
echo "$Edad1";

if($Estado=="soltero"){
	echo "Su nombre es: ".$Nom."<br>"."Su edad es: ".$Edad;

}else if ($Estado=="casado") {
	echo "Su nombre: " .$Nom. "<br>"."Su estatura: " .$Est;
}else if($Estado=="union libre"){
	echo "Su edad: " .$Edad. "<br>". "Su estatura: " .$Est;
}

switch ($mes) {
	case 1:
		if ($dia <=20) {
			echo "Su signo es capricornio";
		}else{
			echo "Su signo es acuario";
		}
		break;
	case 2:

		if ($dia <= 18) {
			echo "Su signo es acuario";
		}else{
			echo "Su signo es piscis";
		}
		break;
	case 3:
		if ($dia <= 20) {
			echo "Su signo es piscis";
		}else{
			echo "Su signo es Aries";
		}
		break;
	case 4:
		if ($dia<=20) {
			echo "Su signo es Aries";
		}else{
			echo "Su signo es Tauro";
		}
		break;
	case 5:
		if ($dia <=21) {
			echo "Su signo es Tauro";
		}else{
			echo "su signo es Geminis";
		}
		break;
	default:
		echo "usted no selecciono la fecha de nacimiento";

		break;
}
		if ($Edad - $fechaEntero) {
			echo "Usted tiene tantos años";
		}


?>