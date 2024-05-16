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
            return $this->selectAll("SELECT * FROM canchas WHERE estado = 1");;
        } 
    }
?>