<?php
require_once("09_claseTorneofut.php");

class Partidos extends torneofut{
    public $partidoGanados;
    public $puntos;

    function __construct($vrnombre,$vrNum_integrantes,$vrestado,$vrpartidoGanados,$vrpuntos)
    {
        parent::__construct($vrnombre,$vrNum_integrantes,$vrestado);
        $this->partidoGanados=$vrpartidoGanados;
        $this->puntos=$vrpuntos;
        
    }
    function getPropiedad(){
        if ($this->puntos<15) {
            $arrayPropiedad= array(
                'Nombre del equipo: '=>$this->nombre,
                'Numero de integrantes: '=>$this->Num_integrantes,
                'Partidos Ganados: '=>$this->partidoGanados,
                'Numero de puntos: '=>$this->puntos,
                'Estado: '=>'Descenso',

            );
            
        }else {
            $arrayPropiedad= array(
                'Nombre del equipo: '=>$this->nombre,
                'Numero de integrantes: '=>$this->Num_integrantes,
                'Partidos Ganados: '=>$this->partidoGanados,
                'Numero de puntos: '=>$this->puntos,
                'Estado: '=>'Ascenso',
            );
            
        }
        return$arrayPropiedad;
    }
}