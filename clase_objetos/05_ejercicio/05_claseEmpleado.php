<?php
require_once("05_clasePersona.php");


class empleado extends persona{
 private $sueldo;

 public function  __construct(string $vrnombre,$vredad,$vrsueldo)
 {
     parent::__construct($vrnombre,$vredad);
     $this->sueldo=$vrsueldo;
 }
 public function getsueldo()
 {
     return$this->sueldo;
 }
}



?>