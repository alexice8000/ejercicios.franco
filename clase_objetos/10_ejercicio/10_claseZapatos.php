<?php
class Zapatos{
    public $talla;
    public $marca;
    public $stock;

    function __construct($vrtalla,$vrmarca,$vrstock)
    {
        $this->talla=$vrtalla;
        $this->marca=$vrmarca;
        $this->stock=30;
    }


    function getVerInventario(){

        $arrayVerInventario= array (
            'Talla: '=>$this->talla,
            'Marca: '=>$this->marca,
            'stock: '=>$this->stock,
        );
        return $arrayVerInventario;
    }
}

?>