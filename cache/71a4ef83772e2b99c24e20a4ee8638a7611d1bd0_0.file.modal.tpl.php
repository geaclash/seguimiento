<?php
/* Smarty version 3.1.31, created on 2016-12-24 15:14:00
  from "C:\xampp\htdocs\seguimiento\vistas\modal.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_585e82a8749096_71388470',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71a4ef83772e2b99c24e20a4ee8638a7611d1bd0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\seguimiento\\vistas\\modal.tpl',
      1 => 1482588730,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_585e82a8749096_71388470 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal fade modal-slide-in-right" area-hidden="true" role="dialog" tabindex"-1" id="modal-delete-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">


    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" area-label="Close">
                    <span area-hidden="true">x</span>
                </button>
                <h4 class="modal-title">Eliminar Ficha</h4>
            </div>
            <div class="modal-body">
                <p>¿Estás seguro de querer eliminar la ficha?</p>
            </div>
            <div class="modal-footer">
                <button class="btn" type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <a href="index.php?view=index&accion=destruir&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"class="btn btn-primary">Confirmar</a>
        </div>
    </div>
</div><?php }
}
