<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-09 10:46:22
  from '/opt/zendto/templates/email_logo_html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f58965ea8a649_25515445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84b2f23d73857b4850fb167467db2c308656ec37' => 
    array (
      0 => '/opt/zendto/templates/email_logo_html.tpl',
      1 => 1583337402,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f58965ea8a649_25515445 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/zendto/lib/smarty/plugins/function.fetch.php','function'=>'smarty_function_fetch',),));
$_smarty_tpl->compiled->nocache_hash = '18074251545f58965ea83e61_71480625';
if (((string)$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ServiceEmailLogoFile')) != '') {?>
  <?php echo smarty_function_fetch(array('file'=>"../www/images/email/".((string)$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ServiceEmailLogoFile')),'assign'=>"logo"),$_smarty_tpl);?>

  <?php $_smarty_tpl->_assignInScope('logotype', ((string)$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ServiceEmailLogoMimeType')));
} else { ?>
  <?php echo smarty_function_fetch(array('file'=>"../www/images/email/email-logo.png",'assign'=>"logo"),$_smarty_tpl);?>

  <?php $_smarty_tpl->_assignInScope('logotype', "image/png");
}?>
<img alt="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ServiceTitle');?>
" src="data:<?php echo $_smarty_tpl->tpl_vars['logotype']->value;?>
;base64,<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'base64_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['logo']->value ));?>
">
<?php }
}
