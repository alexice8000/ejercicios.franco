<?php
require_once("09_claseTorneofut.php");
require_once("09_clasePartidos.php");

$objFutbol= new torneofut("Cali", 15,"");

print_r("<pre>");
echo"<h4>Clase futbol</h4>";
print_r($claseFutbol);
print_r("</pre>");

$objePartidos= new Partidos("Medellin",13," ",3,10);
print_r("<pre>");
echo"<h4>Clase Partidos</h4>";
print_r($objePartidos);
print_r("</pre>");

print_r("<pre>");
echo"<h4>Redificion Propiedad Estado</h4>";
print_r($objePartidos->getPropiedad());
print_r("</pre>");

?>