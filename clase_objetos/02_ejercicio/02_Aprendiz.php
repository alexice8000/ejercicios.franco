<?php


class Aprendiz{

        protected $nombres;
        protected $apellidos;
        private $documento_id;
        public $asignatura;
        public $primer_P;
        public $segundo_P;
        public $examen_f;
       


        function  __construct( $vrnombres,$vrapellidos,$vrdocumento,$vrasignatura,$vrprimer_p, $vrsegundo_p,$vrexamen_f)
        {
            $this->nombres=$vrnombres;
            $this->apellidos=$vrapellidos;
            $this->documento_id=$vrdocumento;
            $this->asignatura=$vrasignatura;
            $this->primer_P=$vrprimer_p;
            $this->segundo_P=$vrsegundo_p;
            $this->examen_f=$vrexamen_f;
            
        }

        public function getnombre()
        {
            return $this->nombres;
        }
        public function getapellido()
        {
            return $this->apellidos;
        }
        public function getdocumento()
        {
            return $this->documento_id;
        }

        public function definitiva()
        {
            $this->definitiva=(($this->primer_P*0.3)+($this->segundo_P*0.3)+($this->examen_f*0.4));
            return $this->definitiva;
        }
        public function getConceptoValorativo()
        { 
            
            if ($this->definitiva<2) {
              $this->definitiva="Malo <br>"; 
            }elseif ($this->definitiva=3 or $this->definitiva<4) {
                $this->definitiva="Aceptable <br>";
            }elseif ($this->definitiva>=4 or $this->definitiva<4.5) {
                $this->definitiva="Excelente <br>";
            }
            return $this->definitiva;
        }

        public function ValorCualitativa()
        {
            if ($this->definitiva()<3.5) {
            $this->definitiva="El aprendiz reprobo la competencia <br>";
            
            }elseif ($this->definitiva() >=3.5) {
                $this->definitiva="El aprendiz aprobo la competencia";
            }
            return $this->definitiva;
            
        }

       
}


?>