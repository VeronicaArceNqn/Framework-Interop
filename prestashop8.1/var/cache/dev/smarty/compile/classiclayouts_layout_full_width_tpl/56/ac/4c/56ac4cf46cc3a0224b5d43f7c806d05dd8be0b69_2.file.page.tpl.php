<?php
/* Smarty version 4.3.1, created on 2023-10-03 23:03:35
  from 'C:\FAI\prestashop8.1\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_651cc7f724ba83_35080798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56ac4cf46cc3a0224b5d43f7c806d05dd8be0b69' => 
    array (
      0 => 'C:\\FAI\\prestashop8.1\\themes\\classic\\templates\\page.tpl',
      1 => 1678753094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651cc7f724ba83_35080798 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1854210075651cc7f7228f75_28018510', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_773070763651cc7f722a8a4_91587810 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_1574465793651cc7f72299e8_11750843 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_773070763651cc7f722a8a4_91587810', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_2046749185651cc7f72428d6_12980002 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_1247502788651cc7f7243782_03433583 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_418247370651cc7f7241cc2_84098929 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2046749185651cc7f72428d6_12980002', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1247502788651cc7f7243782_03433583', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_275043365651cc7f72459a1_97165074 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_32757512651cc7f7245057_91049081 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_275043365651cc7f72459a1_97165074', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1854210075651cc7f7228f75_28018510 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1854210075651cc7f7228f75_28018510',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_1574465793651cc7f72299e8_11750843',
  ),
  'page_title' => 
  array (
    0 => 'Block_773070763651cc7f722a8a4_91587810',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_418247370651cc7f7241cc2_84098929',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_2046749185651cc7f72428d6_12980002',
  ),
  'page_content' => 
  array (
    0 => 'Block_1247502788651cc7f7243782_03433583',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_32757512651cc7f7245057_91049081',
  ),
  'page_footer' => 
  array (
    0 => 'Block_275043365651cc7f72459a1_97165074',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1574465793651cc7f72299e8_11750843', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_418247370651cc7f7241cc2_84098929', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32757512651cc7f7245057_91049081', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
