<?php
class Persona {
    private $nombre;
    public $edad;

    function __construct($vrnombre,$vredad)
    {
        $this->nombre=$vrnombre;
        $this->edad=$vredad;
    }
    public function getnombre(){
        return $this->nombre;
    }
    public function setnombre($nombre){
        return $this->nombre=$nombre;
    }
}
?>