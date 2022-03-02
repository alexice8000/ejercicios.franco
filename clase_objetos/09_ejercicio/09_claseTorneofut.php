<?php

class torneofut{
    public $nombre;
    public $Num_integrantes;
    private $estado;

    function __construct($vrnombre,$vrNum_integrantes,$vrestado)
    {
        $this->nombre=$vrnombre;
        $this->Num_integrantes=$vrNum_integrantes;
        $this->estado="Ascenso";        
    }

    public function getestado(){
        return $this->estado;
    }
}
?>