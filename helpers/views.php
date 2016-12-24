<?php


    class views {
        public $view;
        function __construct() {
            $this->view = new Smarty();
        }

        //Funcion que me permite mostrar las vistas
       static function mostrar($vista) {

           global $smarty;
           $smarty->assign("DIR",DIR);
           $smarty->display($vista.'.tpl');
        }

        //Funcion que me permite devolver el directorio de mis recursos
        static function asset($asset) {
            return 'public/'.$asset;
        }

        static function asignar($variable,$contenido) {
            global $smarty;
            $smarty->assign($variable,$contenido);
        }
    }

?>