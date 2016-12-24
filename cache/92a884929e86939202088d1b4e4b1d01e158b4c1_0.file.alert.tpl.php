<?php
/* Smarty version 3.1.31, created on 2016-12-24 14:32:07
  from "C:\xampp\htdocs\seguimiento\vistas\alert.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_585e78d7c77813_66706620',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92a884929e86939202088d1b4e4b1d01e158b4c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\seguimiento\\vistas\\alert.tpl',
      1 => 1482586324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_585e78d7c77813_66706620 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>
    <div class="alert">
        <div class="alert alert-<?php if (isset($_smarty_tpl->tpl_vars['tipo']->value)) {
echo $_smarty_tpl->tpl_vars['tipo']->value;
} else { ?>info<?php }?> alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

        </div>
    </div>
<?php }
}
}
