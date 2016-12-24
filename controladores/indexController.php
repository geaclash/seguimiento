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
            $this->index();
        }
    }
    
    public function destruir() {
        $ficha = new Ficha();
        if ($ficha->get($this::get('id'))) {
            $ficha->delete($this::get('id'));
            views::asignar("mensaje","Se ha eliminado correctamente");
            $this->index();
        }else {
            views::asignar("type","danger");
            views::asignar("mensaje","No se encontró la ficha {$this::get('id')}");

            $this->index();
        }

    }


    public function edit() {
        $id = $this::get('id');

        $ficha = new Ficha();
        $ficha_get = $ficha->get($id);
        views::asignar("ficha",$ficha_get);
        views::mostrar('edit');
    }


    public function update() {
        $id = $this::get('id');
        if (!$id) {
            Redirect::toView('index');
        }
        if ($this->accion == "POST") {
            $ficha = new Ficha();

            $ficha->nombre = $this::post('nombre');
            $ficha->titulo = $this::post('titulo');

            $ficha->update($id);

            views::asignar("mensaje","Se ha editado correctamente");
        }
        $this->index();
    }

}
?>