<?php
/* Smarty version 3.1.48, created on 2023-10-12 18:08:18
  from 'C:\laragon\www\Prestashop\prestashop_prueba\modules\ps_checkout\views\templates\hook\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_652819f21bc073_91740041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea947440913e94cdb9382ddedf9cf042b2c9b4d5' => 
    array (
      0 => 'C:\\laragon\\www\\Prestashop\\prestashop_prueba\\modules\\ps_checkout\\views\\templates\\hook\\header.tpl',
      1 => 1697126777,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652819f21bc073_91740041 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contentToPrefetch']->value, 'content');
$_smarty_tpl->tpl_vars['content']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['content']->value) {
$_smarty_tpl->tpl_vars['content']->do_else = false;
?>
  <link rel="prefetch" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['content']->value['link'],'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" as="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content']->value['type'], ENT_QUOTES, 'UTF-8');?>
">
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
