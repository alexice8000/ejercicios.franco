<?php
class libro {
    private $codigo;
    public $titulo;
    private $autor;

    function __construct($vrcodigo,$vrtitulo,$vrautor)
    {
        $this->codigo=$vrcodigo;
        $this->titulo=$vrtitulo;
        $this->autor=$vrautor;
    }
   public function getcodigo(){
        return $this->codigo;
    }
     public function gettitulo(){
        return $this->titulo;
    }

   public function getautor(){
       return $this->autor;
   }




}




?>