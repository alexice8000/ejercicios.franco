<?php


  class Vehiculo {
  
  public $placa;
  public $marca;
  public $modelo;
  public $kilometraje;
  public $velocidad;
  public $tiempo;
  public $fecha_registro;
  
  public function __construct($vrplaca, $vrmarca, $vrmodelo, $vrkilometraje, $vrvelocidad, $vrtiempo){
      $this->placa = $vrplaca;
      $this->marca = $vrmarca;
      $this->modelo = $vrmodelo;
      $this->kilometraje = $vrkilometraje;
      $this->fecha_registro = date('Y-m-d');
      $this->velocidad = $vrvelocidad;
      $this->tiempo = $vrtiempo;
  }

  public function getVehiculo()
  {

      $arrayVehiculo = array(
          'placa' => $this->placa,
          'marca' => $this->marca,
          'modelo' => $this->modelo,
          'kilometraje' => $this->kilometraje,
          'Fecha registro:' => $this->fecha_registro,
      );
      return $arrayVehiculo;
    }
     
    public function calculo_distancia(){
        $vr_distancia = $this->velocidad*$this->tiempo;
        return $vr_distancia;

    }
public function getmarca(){
    return $this->marca;
}
}



?>