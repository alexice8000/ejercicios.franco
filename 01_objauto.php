<?php
require_once("01_ejercicio.php");

$objVehiculo = new Vehiculo("ZHZ-354","Mazda",2020,455200,70,30);
$objVehiculo->getVehiculo();

print_r('<pre>');
print_r($objVehiculo);
print_r('</pre>');

echo"<br>";
echo $objVehiculo->getMarca();
echo "<br>";
$objVehiculo->getMarca("FORD");
echo $objVehiculo->getMarca();
echo "<br>"
echo $objVehiculo->modelo;
echo "<br>";
echo "la distancia recorida es:" . $objVehiculo->calculo_distancia();




?>