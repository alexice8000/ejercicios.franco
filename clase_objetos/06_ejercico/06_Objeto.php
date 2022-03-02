<?php
require_once("06_claseElectrodomestico.php");
require_once("06_claseLavadora.php");

echo"<h4>CLASE ELECTRODOMESTICO</h4>";
$objElectro=new Electrodomestico('samsug','');
echo"Lavadora Marca: ".$objElectro->marca;
echo"<br> Iva: ".Electrodomestico::$iva;


echo"<h4>CLASE LAVADORA </h4>";
$objLavadora=new Lavadora('LG',5,125000);
echo"Marca:".$objLavadora->getmarca();
echo"<br>Cantidad: ".$objLavadora->getcantidad();
echo"<br>Precio:".$objLavadora->getprecio();
echo"<br>total: ".$objLavadora->getventa('');

echo"<h4>CLASE NUEVA LAVADORA : </h4>";
$objLavadora=new Lavadora("Wirpool",6,1130000);
echo"Marca: ".$objLavadora->marca;
echo"<br>Cantidad: ".$objLavadora->getcantidad();
echo"<br>Precio:".$objLavadora->getprecio();
echo"<br>total si: ".$objLavadora->getventa('');


?>