<?php
class Registro extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['title'] = 'Registro';
        $data['subtitle'] = 'Crea tu nueva cuenta';
        $this->views->getView('principal/registro', $data);
    }
}
