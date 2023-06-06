<?php
$nombre =$_POST ['ndv'];

$cantidad =$_POST['cav'];

$precioTotal =$_POST['pv'];

$salarioBasico =737.000;

$comision = 50.000;




$salarioactual = ($precioTotal+$salarioBasico)+0.5;
echo "la comision es:".$salarioactual;

echo "<br>";

$salarioactual = ($comision + $salarioBasico);
echo "su salario nuevo es: ".$salarioactual;

echo "<br>";
?>