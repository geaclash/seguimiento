<?php 
	
	class Redirect {


		static function to($url) {
			header('Location: '.$url);
			exit;
		}
		static function toView() {
			header('Location: '.$url);
			exit;
		}
	}


?>