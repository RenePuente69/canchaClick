<?php
class Principal extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['title'] = 'Pagina principal';
        //TRAER SLIDERS
        $data['sliders'] = $this->model->getSliders();
        //TRAER CANCHAS
        $data['canchas'] = $this->model->getCanchas();
        $this->views->getView('index', $data);
    }
}
