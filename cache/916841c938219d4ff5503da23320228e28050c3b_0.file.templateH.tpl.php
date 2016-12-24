<?php
/* Smarty version 3.1.31, created on 2016-12-24 02:34:44
  from "C:\xampp\htdocs\seguimiento\vistas\app\templateH.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_585dd0b4b6f797_91299179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '916841c938219d4ff5503da23320228e28050c3b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\seguimiento\\vistas\\app\\templateH.tpl',
      1 => 1482543253,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_585dd0b4b6f797_91299179 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="<?php echo views::asset('css/bootstrap.min.css');?>
">
    <link rel="stylesheet" href="<?php echo views::asset('css/font-awesome.min.css');?>
">
    <link rel="stylesheet" href="<?php echo views::asset('css/sidebar.css');?>
">

    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>



<nav class="navbar navbar-default no-margin" id="navegacion">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header fixed-brand">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"  id="menu-toggle">
            <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
        </button>
        <a class="navbar-brand" href="#"><i class="fa fa-rocket fa-4"></i> Seguimiento</a>
    </div><!-- navbar-header-->

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar.right">
            <li class="active" ><button class="navbar-toggle collapse in" data-toggle="collapse" id="menu-toggle-2"> <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></li>
        </ul>
    </div><!-- bs-example-navbar-collapse-1 -->
</nav>
<div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav nav-pills nav-stacked" id="menu">


            <li class="active">
                <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-dashboard fa-stack-1x "></i></span> Ficha</a>

            </li>

        </ul>
    </div><!-- /#sidebar-wrapper -->



    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid xyz">


<?php }
}
