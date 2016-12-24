<?php
/* Smarty version 3.1.31, created on 2016-12-24 03:42:01
  from "C:\xampp\htdocs\seguimiento\vistas\create.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_585de079308988_51860794',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6443cb9038e8433a1c336e0905ddcc4097aaf25' => 
    array (
      0 => 'C:\\xampp\\htdocs\\seguimiento\\vistas\\create.tpl',
      1 => 1482547318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:app/templateH.tpl' => 1,
    'file:app/templateF.tpl' => 1,
  ),
),false)) {
function content_585de079308988_51860794 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:app/templateH.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Principal"), 0, false);
?>





<div class="jumbotron">


    <?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>
        <div class="alert">
            <div class="alert alert-info alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

            </div>
        </div>
    <?php }?>
    <form action="index.php?view=create&accion=create" class="form-signup" role="form" method="POST">

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
