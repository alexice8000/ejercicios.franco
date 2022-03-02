<?php
require_once("10_claseZapatos.php");
class Deportivo extends Zapatos{
    private $Descripcion;
    public $precio;
    protected $cantidad;

    function __construct($vrtalla,$vrmarca,$vrstock,$vrdescripcion,$vrprecio,$vrcantidad)
    {
        parent::__construct($vrtalla,$vrmarca,$vrstock);
        $this->Descripcion=$vrdescripcion;
        $this->precio=$vrprecio;
        $this->cantidad=$vrcantidad;
    }
    function getDescripcion(){
        return$this->Descripcion;
    }
    function getCantidad(){
        return$this->cantidad;
    }

    function getVerInventario()
    {
        if ($this->cantidad>$this->stock) {
            $venta="No se puede realizar la venta";
            $arrayVerInventario= array (
                'Talla: '=>$this->talla,
                'Marca: '=>$this->marca,
                'stock: '=>$this->stock,
                'Descripcion: '=>$this->Descripcion,
                'Precio: '=>$this->precio,
                'Cantidad: '=>$this->cantidad,

            );
        }else {
            $venta="Su  es compra  exitosa";
            $arrayVerInventario= array (
                'Talla: '=>$this->talla,
                'Marca: '=>$this->marca,
                'stock: '=>$this->stock,
                'Descripcion: '=>$this->Descripcion,
                'Precio: '=>$this->precio,
                'Cantidad: '=>$this->cantidad,
            );
        }
        return$venta;
        return$arrayVerInventario;
    }

}

?>