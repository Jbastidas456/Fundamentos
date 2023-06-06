<?php

$Nota1= $_POST['txtn1']; 
$Nota2= $_POST['txtn2']; 
$Nota3=$_POST['txtn3'];
$Examen=$_POST['txtparcial']; 
$trabajo =$_POST['txtfinal']; 

$Promedionotas = (($Nota1+$Nota2+$Nota3)/3)*0.35; 
echo "el promdedio de las 3 notas:".$Promedionotas; 
echo "<br>"; 

$promedioExamen =($Examen * 0.35); 
echo "el promedio del examen es:".$promedioExamen; 
echo "<br>"; 



$promediotrabajo =($trabajo * 0.30); 
echo "el promedio del examen es:".$promedioExamen; 
echo "<br>"; 

$Notafinal =$Promedionotas+$promedioExamen+$promediotrabajo; 
echo "la nota final del alumno es".$Notafinal;
?>