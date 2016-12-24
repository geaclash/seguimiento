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



}
?>