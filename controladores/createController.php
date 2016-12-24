<?php
include('controlador.php');

include('modelos/ficha.php');


class createController extends Controlador {
    public function __construct() {
        parent::__construct();
    }

    public function index() {



        views::mostrar('create');
    }

    public function create() {

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

        }
        views::mostrar('create');
    }

}
?>