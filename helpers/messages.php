<?php 

	class Mensaje {

		static function new($mensaje) {
			$_SESSION['mensajes'] = $mensaje;
		}

		static function render() {
			if (isset($_SESSION['mensajes'])) { 
				return $_SESSION['mensajes'];
				unset($_SESSION['mensajes']);
			}
		}
		

	} 
?>

