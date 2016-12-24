<?php 
	
	class Redirect {


		static function to($url) {
			header('Location: '.$url);
			exit;
		}
		static function toView($view,$accion = null) {
			if (!$accion) {
				header('Location: index.php?view='.$view);
			}else {
				header('Location: index.php?view='.$view.'&accion='.$accion);
			}
			exit;
		}
	}


?>