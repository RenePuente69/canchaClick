<?php
    class PrincipalModel extends Query{
        public function __construct() {
            parent:: __construct();
        }
        //RECUPERAR LOS SLIDERS
        public function getSliders(){
            return $this->selectAll("SELECT * FROM sliders");;
        } 
        //RECUPERAR LAS CANCHAS
        public function getCanchas(){
            return $this->selectAll("SELECT * FROM canchas");;
        } 

        public function getDisponible($f_llegada, $f_salida, $canchas){
            return $this->selectAll("SELECT * FROM reservas 
            WHERE fecha_ingreso <= '$f_salida'
            AND fecha_salida >= '$f_llegada' AND id_canchas = $canchas");
        }
    }
?>