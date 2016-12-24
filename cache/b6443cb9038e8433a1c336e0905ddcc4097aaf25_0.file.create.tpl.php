<?php
/* Smarty version 3.1.31, created on 2016-12-24 14:39:35
  from "C:\xampp\htdocs\seguimiento\vistas\create.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_585e7a97c160c7_77322217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6443cb9038e8433a1c336e0905ddcc4097aaf25' => 
    array (
      0 => 'C:\\xampp\\htdocs\\seguimiento\\vistas\\create.tpl',
      1 => 1482586583,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:app/templateH.tpl' => 1,
    'file:alert.tpl' => 1,
    'file:app/templateF.tpl' => 1,
  ),
),false)) {
function content_585e7a97c160c7_77322217 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:app/templateH.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Principal"), 0, false);
?>





<div class="jumbotron">

    <?php $_smarty_tpl->_subTemplateRender("file:alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tipo'=>"warning"), 0, false);
?>

    <form action="index.php?view=index&accion=guardar" class="form-signup" role="form" method="POST">

        <label for="nombre">
            Nombre:
            <input type="text" class="form-control" name="nombre">
        </label>

        <label for="titulo">
            Titulo:
            <input type="text" class="form-control" name="titulo">
        </label>


        <input type="submit" value="Crear" class="btn btn-primary">
    </form>
    <a href="index.php" class="btn btn-success">Regresar</a>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:app/templateF.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
