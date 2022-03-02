<?php
require_once("07_claseLibro.php");
require_once("07_claseRevista.php");

$objLibro=new libro(0125,"VIAJE AL FIN DE LA NOCHE ","LOUIS-FERDINAND CELINE");
echo"<h2> DATOS DE LA CLASE LIBRO </H2>";
echo "Codigo libro: ". $objLibro->getcodigo()."<br>";
echo "Nobre libro: ". $objLibro->gettitulo()."<br>";
echo "Autor: ". $objLibro->getautor()."<br>";



$objRevista= new revista(15792346,80,"SEMANA",2019,80);
echo"<h2> DATOS DE LA CLASE REVISTA</H2>";
echo "Edicion: ". $objRevista->getedicion()."<br>";
echo "Numero de paginas: ". $objRevista->getpaginas()."<br>";



?>