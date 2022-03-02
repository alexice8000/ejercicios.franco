<?php

class peluqueria{
    public $nombre;
    private $id_peluqueria;
    public $direccion;
    public $telefono;
    public $hora_inicio;
    public $hora_cierre;
    private $valor_corte;
    protected $servicio;
 
    function __construct($vrnombre, $vrid_peliqueria,$vrdireccion, $vrtelefono,$vrinicio,$vrcierre,$vrvalorCorte,$vrservicio)
    {
        $this->nombre=$vrnombre;
        $this->id_peluqueria=$vrid_peliqueria;
        $this->direccion=$vrdireccion;
        $this->telefono=$vrtelefono;
        $this->hora_inicio=$vrinicio;
        $this->hora_cierre=$vrcierre;
        $this->valor_corte=$vrvalorCorte;
        $this->servicio=$vrservicio;
    }
    function getIdPeluqueria()
    {
        return $this->id_peluqueria;
    }
    function getServicio()
    {
        return $this -> servicio;
    }function setServicio($servicio)
    {
        $this->servicio=$servicio;
    }
    function getValor()
    {
        return $this-> valor_corte;
    }function setValor($valor_corte)
    {
        $this->valor_corte=$valor_corte;
    }

    public function AgendarCita()
    {
        $arrayAgenda= array (

            'Servicio: '=>$this->servicio,
            'Valor del corte: '=>$this->valor_corte,
        );
        return $arrayAgenda;
    }
   
}
?>