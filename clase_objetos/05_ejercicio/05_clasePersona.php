<?php
class persona{
    public $nombre;
    public $edad;


    function  __construct($vrnombre,$vredad)
    {
        $this->nombre=$vrnombre;
        $this->edad=$vredad;
    }

    function getnombre()
    {
        return $this->nombre;
    }
    function getedad()
    {
        return $this->edad;
    }
}
?>