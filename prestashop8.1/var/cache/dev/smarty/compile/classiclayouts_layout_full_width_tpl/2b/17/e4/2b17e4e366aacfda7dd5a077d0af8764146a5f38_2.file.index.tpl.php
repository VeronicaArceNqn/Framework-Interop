<?php
/* Smarty version 4.3.1, created on 2023-10-03 23:03:35
  from 'C:\FAI\prestashop8.1\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_651cc7f7172c48_80747793',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b17e4e366aacfda7dd5a077d0af8764146a5f38' => 
    array (
      0 => 'C:\\FAI\\prestashop8.1\\themes\\classic\\templates\\index.tpl',
      1 => 1678753094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651cc7f7172c48_80747793 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1807661985651cc7f716c0f7_42507411', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_1425589236651cc7f716cb88_23100168 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_980255315651cc7f716e298_64476067 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_1640812607651cc7f716da29_59880945 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_980255315651cc7f716e298_64476067', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1807661985651cc7f716c0f7_42507411 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_1807661985651cc7f716c0f7_42507411',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1425589236651cc7f716cb88_23100168',
  ),
  'page_content' => 
  array (
    0 => 'Block_1640812607651cc7f716da29_59880945',
  ),
  'hook_home' => 
  array (
    0 => 'Block_980255315651cc7f716e298_64476067',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1425589236651cc7f716cb88_23100168', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1640812607651cc7f716da29_59880945', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
