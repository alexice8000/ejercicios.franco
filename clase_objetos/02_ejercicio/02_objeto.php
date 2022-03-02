<?php
require_once("02_Aprendiz.php");
$objaprendiz=new aprendiz("andres imvachi","calambas Martinez",1007178678, "matematicas",2.5,4.8,3.8);

print_r("<pre>");
print_r($objaprendiz);
print_r("</pre");
echo"<br>Aprendiz: </br>".$objaprendiz->getnombre()." ". $objaprendiz->getapellido()."</br>";
echo"<br>Calificacion Definitiva: </br>".$objaprendiz->definitiva();
echo"<br>Concepto Valorativo: </br>".$objaprendiz->getConceptoValorativo();
echo"<br>Valoracion Cualitativa: </br>".$objaprendiz->ValorCualitativa();


?>