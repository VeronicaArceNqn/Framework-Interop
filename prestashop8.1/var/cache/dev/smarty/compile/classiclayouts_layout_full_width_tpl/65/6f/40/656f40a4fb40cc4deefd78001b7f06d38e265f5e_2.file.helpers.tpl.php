<?php
/* Smarty version 4.3.1, created on 2023-10-03 23:03:35
  from 'C:\FAI\prestashop8.1\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_651cc7f75739f0_03940924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '656f40a4fb40cc4deefd78001b7f06d38e265f5e' => 
    array (
      0 => 'C:\\FAI\\prestashop8.1\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1678753094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651cc7f75739f0_03940924 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\FAI\\prestashop8.1\\var\\cache\\dev\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\65\\6f\\40\\656f40a4fb40cc4deefd78001b7f06d38e265f5e_2.file.helpers.tpl.php',
    'uid' => '656f40a4fb40cc4deefd78001b7f06d38e265f5e',
    'call_name' => 'smarty_template_function_renderLogo_1693549675651cc7f7494f08_17339902',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_1693549675651cc7f7494f08_17339902 */
if (!function_exists('smarty_template_function_renderLogo_1693549675651cc7f7494f08_17339902')) {
function smarty_template_function_renderLogo_1693549675651cc7f7494f08_17339902(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_1693549675651cc7f7494f08_17339902 */
}
