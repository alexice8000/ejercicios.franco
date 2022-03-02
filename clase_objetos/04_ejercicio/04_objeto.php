<?php
require_once("04_clasePeluqueria.php");
$objPeluqueria =  new peluqueria("sara",1234,"Popayan calle 36 Nª 134", 316732001, "6:30 AM","7:30 PM", "12000", "largo");
print_r('<pre>');
print_r($objPeluqueria);
print_r('</pre>');


?>