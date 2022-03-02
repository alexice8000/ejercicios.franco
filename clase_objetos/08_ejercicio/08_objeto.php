<?php

require_once("08_claseEmpleado.php");
require_once("08_clasePersona.php");

echo"<h3>Clase Persona </h3>";
$objPersona= new Persona("Fernando",21);

echo"Nombre: ".$objPersona->getnombre();
echo"<br>Edad: ".$objPersona->edad;

echo"<h3>Clase Empleado </h3>";
$objEmpleado= new Empleado("Carlos",25, 500000, 'activo');
echo"Nombre: ".$objEmpleado->getnombre();
echo"<br>Edad: ".$objEmpleado->edad;
echo"<br>Sueldo: ".$objEmpleado->sueldo;
echo"<br>Estado: ".$objEmpleado->estado;


?>