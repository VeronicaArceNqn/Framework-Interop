<?php
/* Smarty version 4.3.1, created on 2023-10-03 23:03:42
  from 'module:ps_customeraccountlinksps_customeraccountlinks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_651cc7fe4afa05_11664143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:ps_customeraccountlinksps_customeraccountlinks.tpl',
      1 => 1678753094,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_651cc7fe4afa05_11664143 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\FAI\\prestashop8.1\\var\\cache\\dev\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\65\\6f\\40\\656f40a4fb40cc4deefd78001b7f06d38e265f5e_2.file.helpers.tpl.php',
    'uid' => '656f40a4fb40cc4deefd78001b7f06d38e265f5e',
    'call_name' => 'smarty_template_function_renderLogo_1693549675651cc7f7494f08_17339902',
  ),
));
?><!-- begin C:\FAI\prestashop8.1/themes/classic/modules/ps_customeraccountlinks/ps_customeraccountlinks.tpl -->
<div id="block_myaccount_infos" class="col-md-3 links wrapper">
  <p class="h3 myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://localhost:3000/index.php?controller=my-account" rel="nofollow">
      Su cuenta
    </a>
  </p>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Su cuenta</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li><a href="http://localhost:3000/index.php?controller=guest-tracking" title="Seguimiento del pedido" rel="nofollow">Seguimiento del pedido</a></li>
        <li><a href="http://localhost:3000/index.php?controller=my-account" title="Acceda a su cuenta de cliente" rel="nofollow">Iniciar sesión</a></li>
        <li><a href="http://localhost:3000/index.php?controller=registration" title="Crear una cuenta" rel="nofollow">Crear una cuenta</a></li>
        
<!-- begin module:blockwishlist/views/templates/hook/account/myaccount-block.tpl -->
<!-- begin C:\FAI\prestashop8.1/modules/blockwishlist/views/templates/hook/account/myaccount-block.tpl -->
<!-- end C:\FAI\prestashop8.1/modules/blockwishlist/views/templates/hook/account/myaccount-block.tpl -->
<!-- end module:blockwishlist/views/templates/hook/account/myaccount-block.tpl -->

<!-- begin C:\FAI\prestashop8.1/themes/classic/modules/ps_emailalerts/views/templates/hook/my-account-footer.tpl -->
<li>
  <a href="//localhost:3000/index.php?fc=module&module=ps_emailalerts&controller=account&id_lang=1" title="Mis alertas">
    Mis alertas
  </a>
</li>

<!-- end C:\FAI\prestashop8.1/themes/classic/modules/ps_emailalerts/views/templates/hook/my-account-footer.tpl -->

       
	</ul>
</div>
<!-- end C:\FAI\prestashop8.1/themes/classic/modules/ps_customeraccountlinks/ps_customeraccountlinks.tpl --><?php }
}
