<?php
    class Torneo extends Controller{
        public function __construct() {
            parent:: __construct();
        }
        public function index(){
            $data['title'] = 'Torneos';
            $data['subtitle'] = 'Inscribete con tus amigos';
            $this->views->getView('principal/torneo/index', $data);
        }   
    }
?>