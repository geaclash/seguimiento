<?php
include('controlador.php');
include('modelos/ficha.php');

class indexController extends Controlador {
   public function __construct() {
       parent::__construct();


    }

    public function index() {
        $ficha = new Ficha();
        $fichas = $ficha->getAll();
        views::asignar("fichas",$fichas);
        views::mostrar('index');
    }

    public function create() {
            views::mostrar('create');

    }

    public function guardar() {
        if (isset($_POST)) {
            $nombre = $this->post['nombre'];
            $titulo = $this->post['titulo'];

            $ficha = new Ficha();
            $ficha->nombre = $nombre;
            $ficha->titulo = $titulo;
            $ficha->fecha_creacion = date('Y-m-d H:n:s');
            $ficha->logo = "logo.png";
            $ficha->create();

            views::asignar("mensaje","Se ha creado exitósamente la ficha {$nombre}");
            Redirect::toView('index');
        }
    }

}
?>