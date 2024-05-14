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

    public function verify()
    {
        if (isset($_GET['f_llegada']) && isset($_GET['f_salida']) && isset($_GET['canchas'])) {
            $f_llegada = strClean($_GET['f_llegada']);
            $f_salida = strClean($_GET['f_salida']);
            $canchas = strClean($_GET['canchas']);
            if (empty($f_llegada) || empty($f_salida) || empty($canchas)) {
                header('Location: ' . RUTA_PRINCIPAL . '?respuesta=warning');
            } else {
                $data = $this->model->getDisponible($f_llegada, $f_salida, $canchas);
                print_r($data);
            }
        }
    }
}
