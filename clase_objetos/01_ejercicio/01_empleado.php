<?php
class Empleado {
    private $nombre;
    private$celular;
    public $cargo;
    protected $sueldo;
    static $auxilio= 0.05;
    

    function __construct($vrnombre, $vrcelular, $vrcargo, $vrsueldo,)
    {
        $this->nombre=$vrnombre;
        $this->celular=$vrcelular;
        $this->cargo=$vrcargo;
        $this->sueldo=$vrsueldo;
    
    }
    public function getnombre()
    {
        return $this->nombre;
    }public function setnombre($nombre)
    {
        $this->nombre=$nombre;
    }
    public function getcelular()
    {
        return $this->celular;
    }public function setcelular($celular)
    {
        $this->celular=$celular;
    }
    public function getsueldo()
    {
        return $this->sueldo;
    }
    public function getDatosEmpleados(){
        $arraydatos=array(
            'cargo'=>$this->cargo,
            'sueldo'=>$this->sueldo,
        );
        return $arraydatos;
    }
    public function retencion ($retencion){
        if ($this->sueldo>3750000 and $this->sueldo=3750000) {
            $this->$retencion=$this->sueldo*0.09;
        }elseif ($this->sueldo<3750000) {
            $this->$retencion="usted no tiene que pagar rentencion de fuete";
        }
        return $this->$retencion;
    }
    

}
?>