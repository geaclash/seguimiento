<?php
/* Smarty version 3.1.31, created on 2016-12-24 15:18:33
  from "C:\xampp\htdocs\seguimiento\vistas\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_585e83b9d843f0_81326624',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6841fbdcf938e1dcd6cb01db18a75c47254505e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\seguimiento\\vistas\\index.tpl',
      1 => 1482589111,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:app/templateH.tpl' => 1,
    'file:alert.tpl' => 1,
    'file:modal.tpl' => 1,
    'file:app/templateF.tpl' => 1,
  ),
),false)) {
function content_585e83b9d843f0_81326624 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:app/templateH.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Principal"), 0, false);
?>


<?php $_smarty_tpl->_subTemplateRender("file:alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"info"), 0, false);
?>

<div class="jumbotron">

    <table class="table table-bordered table-striped table-hover">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Titulo</th>
            <th>Fecha Cre.</th>
            <th>Logo</th>
            <th>Acciones</th>
        </thead>

        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fichas']->value, 'ficha');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ficha']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['ficha']->value['id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['ficha']->value['nombre'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['ficha']->value['titulo'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['ficha']->value['fecha_creacion'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['ficha']->value['logo'];?>
</td>
                <td><a href="index.php?view=index&accion=edit&id=<?php echo $_smarty_tpl->tpl_vars['ficha']->value['id'];?>
" class="btn btn-primary">Editar</a> <a class="btn btn-danger" data-target="#modal-delete-<?php echo $_smarty_tpl->tpl_vars['ficha']->value['id'];?>
" data-toggle="modal">Eliminar</a></td>
            </tr>
            <?php $_smarty_tpl->_subTemplateRender("file:modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['ficha']->value['id']), 0, true);
?>



        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        </tbody>
    </table>


    <a href="index.php?view=index&accion=create" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Crear</a>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:app/templateF.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
