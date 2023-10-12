<?php
/* Smarty version 3.1.48, created on 2023-10-12 18:08:18
  from 'C:\laragon\www\Prestashop\prestashop_prueba\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_652819f2c95d46_55036654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '515adf9111d1bcadae922bceaad306a0433adc43' => 
    array (
      0 => 'C:\\laragon\\www\\Prestashop\\prestashop_prueba\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1697126585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652819f2c95d46_55036654 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\laragon\\www\\Prestashop\\prestashop_prueba\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\51\\5a\\df\\515adf9111d1bcadae922bceaad306a0433adc43_2.file.helpers.tpl.php',
    'uid' => '515adf9111d1bcadae922bceaad306a0433adc43',
    'call_name' => 'smarty_template_function_renderLogo_1081789260652819f2c92897_33024083',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_1081789260652819f2c92897_33024083 */
if (!function_exists('smarty_template_function_renderLogo_1081789260652819f2c92897_33024083')) {
function smarty_template_function_renderLogo_1081789260652819f2c92897_33024083(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_1081789260652819f2c92897_33024083 */
}
