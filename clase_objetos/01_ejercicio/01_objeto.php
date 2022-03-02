<?php
require_once('01_empleado.php');
$objempleado= new Empleado('javier lopez',30045645,"comerciante",1000000,);

print_r('<pre>');
echo"<h3>Datos Empleados: </h3> ";
print_r($objempleado);
print_r('</pre>');

//metodo array
print_r('<pre>');
print_r($objempleado->getDatosEmpleados());

echo"Suelo : ".$objempleado->getsueldo();
echo"<br>Porcentaje  Auxilio de transporte: ". Empleado::$auxilio. "%";
echo"<br>Total auxilio: ". (Empleado::$auxilio * $objempleado->getsueldo());
echo"<br>Retencion: ".$objempleado->retencion('');


//metodo setter
echo"<h3>Nuevo empleado:</h3>";
$objempleado->setnombre('carlos orozco');
echo"Nombre: ".$objempleado->getnombre(); 
$objempleado->setcelular(3165242845);
echo"<br>celular: ".$objempleado->getcelular();
$objempleado= new Empleado('Juan carlos',3165242845,'Asistente Personal',3800000);
echo"<br>Cargo: ".$objempleado->cargo;
echo"<br>Suelo : ".$objempleado->getsueldo();
echo"<br>Porcentaje  Auxilio de transporte: ". Empleado::$auxilio. "%";
echo"<br>Total auxilio: ". (Empleado::$auxilio * $objempleado->getsueldo());
echo"<br>Retencion: ".$objempleado->retencion('');






?>