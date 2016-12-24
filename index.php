<?php
    require 'bootstrap.php';
    if (isset($_GET['view'])) {
        $view = $_GET['view'];

    }else{
        $view = "index";
    }


    if (isset($_GET['accion'])) {
        $accion = $_GET['accion'];
    }else {
        $accion = "index";
    }
    if (is_file('controladores/'.$view.'Controller.php')) {
        include('controladores/'.$view.'Controller.php');
        $clase = $view.'Controller';
        $instancia = new $clase();
        if ($accion)
            $instancia->$accion();
    }else {
        include('controladores/errorController.php');
    }



?>