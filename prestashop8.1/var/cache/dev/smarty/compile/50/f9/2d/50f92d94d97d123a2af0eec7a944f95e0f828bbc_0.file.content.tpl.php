<?php
/* Smarty version 4.3.1, created on 2023-10-03 22:52:39
  from 'C:\FAI\prestashop8.1\adminJorge\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_651cc567bbe967_47891447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50f92d94d97d123a2af0eec7a944f95e0f828bbc' => 
    array (
      0 => 'C:\\FAI\\prestashop8.1\\adminJorge\\themes\\new-theme\\template\\content.tpl',
      1 => 1694703976,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651cc567bbe967_47891447 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
