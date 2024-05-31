<?php
/* Smarty version 3.1.46, created on 2024-05-31 08:56:53
  from '/var/www/html/app/View/User/Theme/Cartoon/Index/Footer.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_665990d579e225_38412499',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f566a332b3cd323c1ba992a4463b4c6720d44c2c' => 
    array (
      0 => '/var/www/html/app/View/User/Theme/Cartoon/Index/Footer.html',
      1 => 1717144758,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665990d579e225_38412499 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="content-icp"><?php echo $_smarty_tpl->tpl_vars['setting']->value['icp'];?>
</div>
<!--start::HOOK-->
<?php echo hook(\App\Consts\Hook::USER_GLOBAL_VIEW_BODY);?>

<?php echo hook(\App\Consts\Hook::USER_VIEW_INDEX_BODY);?>

<!--end::HOOK-->
</body>
<!--start::HOOK-->
<?php echo hook(\App\Consts\Hook::USER_GLOBAL_VIEW_FOOTER);?>

<?php echo hook(\App\Consts\Hook::USER_VIEW_INDEX_FOOTER);?>

<!--end::HOOK-->
</html><?php }
}
