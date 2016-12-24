<?php
include('controlador.php');

//include_once('../helpers/helpers.php');
include('../modelos/ficha.php');
class fichaControlador extends Controlador {
	public function __construct()	 {

		if ( $this::get('accion') )  {
			if ($this::get('accion') == 'crear') {
				$this->crear();
			}
		}
	}
	public function crear() {
		$ficha = new Ficha();
		$ficha->nombre = $this::post('nombre');
		$ficha->titulo = $this::post('titulo');
		$ficha->fecha_creacion = date('y-m-d h:m:s');
		$ficha->logo = 'logo.png';
		$ficha->create();
		Mensaje::new('Creado exitósamente');
		Redirect::to('../index.php');
	}

	


}
$contr = new fichaControlador();

