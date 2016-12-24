<?php 
include('modelo.php');
class Ficha extends Modelo {

	protected $primaryKey = "id";
	protected $tabla = "ficha";
	protected $columnas = [
		"nombre",
		"titulo",
		"fecha_creacion",
		"logo"
	];

	
}



?>