<?php
require_once("06_claseElectrodomestico.php");
class Lavadora extends Electrodomestico{
        private $cantidad;
        private $precio;
    
        public function __construct($vrmarca,$vrcantidad,$vrprecio)
        {
            parent::__construct($vrmarca);
            $this->cantidad=$vrcantidad;
            $this->precio=$vrprecio;
            $this->marca=$vrmarca;
            
        }
        public function getmarca(){
            return $this->marca;
        }
        public function getcantidad(){
            return $this->cantidad;
        }
        public function getprecio(){
            return $this->precio;
        }
    
        function getventa($venta)
        {
            $this->$venta=(($this->getcantidad()*0.19)+$this->getcantidad())*$this->precio;
            return $this->$venta;
        }
 }
   
?>
        