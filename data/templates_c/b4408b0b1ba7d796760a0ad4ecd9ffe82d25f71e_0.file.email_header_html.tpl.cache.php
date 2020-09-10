<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-09 10:46:22
  from '/opt/zendto/templates/email_header_html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f58965ea5fb67_72450754',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4408b0b1ba7d796760a0ad4ecd9ffe82d25f71e' => 
    array (
      0 => '/opt/zendto/templates/email_header_html.tpl',
      1 => 1594376424,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:email_logo_html.tpl' => 1,
  ),
),false)) {
function content_5f58965ea5fb67_72450754 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'hidePHPExt' => 
  array (
    'compiled_filepath' => '/var/zendto/templates_c/b4408b0b1ba7d796760a0ad4ecd9ffe82d25f71e_0.file.email_header_html.tpl.cache.php',
    'uid' => 'b4408b0b1ba7d796760a0ad4ecd9ffe82d25f71e',
    'call_name' => 'smarty_template_function_hidePHPExt_12329653515f58965ea54cf4_15127280',
  ),
));
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/zendto/lib/smarty/plugins/function.fetch.php','function'=>'smarty_function_fetch',),));
$_smarty_tpl->compiled->nocache_hash = '12329653515f58965ea54cf4_15127280';
?>
<html>
<head>
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
  <style>
    a { color: #67709c; font-weight: bold; text-decoration: none; }
    #email-footer, #email-header { background-color: #cbcccd; }
    <?php echo smarty_function_fetch(array('file'=>"../www/css/local.css"),$_smarty_tpl);?>

    th, tr, td { padding: 0px; border: none; color: black; }
    img { border: none; }
  </style>
</head>

<?php echo smarty_function_fetch(array('file'=>"../www/images/email/top-left.png",'assign'=>"topleft"),$_smarty_tpl);?>

<?php echo smarty_function_fetch(array('file'=>"../www/images/email/top-right.png",'assign'=>"topright"),$_smarty_tpl);?>

<body style="font-family: 'Roboto Sans', Helvetica, Verdana, Arial, sans-serif; font-size: 10pt; margin:0;">
<table style="width: 100%; border-collapse: collapse; border: none;">
  <tr id="email-header">
    <td style="width: 10px;"></td>
    <td style="vertical-align: center; text-align: right; padding-right: 10px; height: 100px;"><a href="<?php echo $_smarty_tpl->tpl_vars['zendToURL']->value;?>
"><?php $_smarty_tpl->_subTemplateRender("file:email_logo_html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></a></td>
    <td style="width: 10px;"></td>
  </tr>
  <tr style="background-color: white; padding: 0px; vertical-align: top; font-size: 0px;">
    <td style="padding: 0px; text-align: left; font-size: 0px;"><img style="display:block;" src="data:image/png;base64,<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'base64_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['topleft']->value ));?>
" width="10" height="10"></td>
    <td style="background-color: white; font-size: 0px;">&nbsp;</td>
    <td style="padding: 0px; text-align: right; font-size: 0px;"><img style="display:block;" src="data:image/png;base64,<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'base64_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['topright']->value ));?>
" width="10" height="10"></td>
  </tr>
  <tr style="background-color: white;">
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr style="background-color: white;">
    <td></td>
    <td>
<?php }
/* smarty_template_function_hidePHPExt_12329653515f58965ea54cf4_15127280 */
if (!function_exists('smarty_template_function_hidePHPExt_12329653515f58965ea54cf4_15127280')) {
function smarty_template_function_hidePHPExt_12329653515f58965ea54cf4_15127280(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('t'=>''), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/zendto/lib/smarty/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
if ($_smarty_tpl->tpl_vars['hidePHP']->value) {
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['t']->value,'.php','');
} else {
echo $_smarty_tpl->tpl_vars['t']->value;
}
}}
/*/ smarty_template_function_hidePHPExt_12329653515f58965ea54cf4_15127280 */
}
