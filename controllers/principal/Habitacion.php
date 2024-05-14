<?php
    class Habitacion extends Controller{
        public function __construct() {
            parent:: __construct();
        }
        public function index(){
            $data['title'] = 'Canchas ';
            $data['subtitle'] = 'Al precio mas accesible';
            $this->views->getView('principal/habitacion/index', $data);
        }   
    }
?>