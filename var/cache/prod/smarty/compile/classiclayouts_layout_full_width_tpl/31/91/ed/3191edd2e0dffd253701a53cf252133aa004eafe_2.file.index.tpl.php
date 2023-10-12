<?php
/* Smarty version 3.1.48, created on 2023-10-12 18:08:18
  from 'C:\laragon\www\Prestashop\prestashop_prueba\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_652819f2952e19_88749592',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3191edd2e0dffd253701a53cf252133aa004eafe' => 
    array (
      0 => 'C:\\laragon\\www\\Prestashop\\prestashop_prueba\\themes\\classic\\templates\\index.tpl',
      1 => 1697126585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652819f2952e19_88749592 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1105407663652819f2951f49_88429516', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_818336970652819f2952191_68216851 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_13571874652819f2952626_69777945 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_1070098683652819f29524a0_01284984 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13571874652819f2952626_69777945', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1105407663652819f2951f49_88429516 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_1105407663652819f2951f49_88429516',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_818336970652819f2952191_68216851',
  ),
  'page_content' => 
  array (
    0 => 'Block_1070098683652819f29524a0_01284984',
  ),
  'hook_home' => 
  array (
    0 => 'Block_13571874652819f2952626_69777945',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_818336970652819f2952191_68216851', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1070098683652819f29524a0_01284984', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
