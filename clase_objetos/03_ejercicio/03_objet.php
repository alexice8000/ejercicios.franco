<?php
require_once("03_claseNetflix.php");

$objNetflix= new Netflix("tranformes",2017, "Si", "26 febrero de 2023",6);

print_r('<pre>');
print_r ($objNetflix->getPropiedades());
print_r('</pre>');

print_r('<pre>');
print_r ($objNetflix);
print_r('</pre>');

echo"<br>Costo de alquiler: <br>".$objNetflix->CostoAlquiler('');




?>