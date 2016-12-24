<?php


 class Controlador {
	public $accion;
	 public $post;
	public function __construct() {
		
		if (isset($_POST)) {
			$this->accion = "POST";
			$this->post = $_POST;
		}

	}

	static function get($get) {
		
		if (isset($_GET[$get])) {
			return $_GET[$get];
		}
		else { return false; }
	}
	static function post($post) {
		return $_POST[$post];
	}
	static function cGet() {
		return count($_GET);
	}
	static function cPost() {
		return count($_POST);
	}



}

?>