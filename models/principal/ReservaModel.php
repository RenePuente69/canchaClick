<?php
    class ReservaModel extends Query{
        public function __construct() {
            parent:: __construct();
        }
        public function getDisponible($f_llegada, $f_salida, $canchas){
            return $this->selectAll("SELECT * FROM reservas 
            WHERE fecha_ingreso <= '$f_salida'
            AND fecha_salida >= '$f_llegada' AND id_canchas = $canchas");
        }
        public function getReservasCanchas($canchas){
            return $this->selectAll("SELECT * FROM reservas 
            WHERE id_canchas = $canchas");
        }
    }
?>