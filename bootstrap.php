<?php 
session_start();
include_once('helpers/helpers.php');

//Librerias a cargar
//Descargadas desde el composer.json
require 'vendor/autoload.php';


//Definiciones para las vistas:


define ('RUTA','http://localhost/seguimiento/');
define('DIR',__DIR__);
$smarty = new Smarty;

$smarty->template_dir = 'vistas';
$smarty->config_dir = 'configs';
$smarty->cache_dir = 'cache';
$smarty->compile_dir = 'cache';

global $smarty;




?>