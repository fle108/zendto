<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-09 16:04:30
  from '/opt/zendto/templates/functions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f58e0eec613f3_78927458',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc72b3c654f7aa91ab3f54ebaf6f189ff001cd81' => 
    array (
      0 => '/opt/zendto/templates/functions.tpl',
      1 => 1590403872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f58e0eec613f3_78927458 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'hidePHPExt' => 
  array (
    'compiled_filepath' => '/var/zendto/templates_c/bc72b3c654f7aa91ab3f54ebaf6f189ff001cd81_0.file.functions.tpl.cache.php',
    'uid' => 'bc72b3c654f7aa91ab3f54ebaf6f189ff001cd81',
    'call_name' => 'smarty_template_function_hidePHPExt_5421029325f58e0eec57229_36707512',
  ),
  'button' => 
  array (
    'compiled_filepath' => '/var/zendto/templates_c/bc72b3c654f7aa91ab3f54ebaf6f189ff001cd81_0.file.functions.tpl.cache.php',
    'uid' => 'bc72b3c654f7aa91ab3f54ebaf6f189ff001cd81',
    'call_name' => 'smarty_template_function_button_5421029325f58e0eec57229_36707512',
  ),
  'footerButtons' => 
  array (
    'compiled_filepath' => '/var/zendto/templates_c/bc72b3c654f7aa91ab3f54ebaf6f189ff001cd81_0.file.functions.tpl.cache.php',
    'uid' => 'bc72b3c654f7aa91ab3f54ebaf6f189ff001cd81',
    'call_name' => 'smarty_template_function_footerButtons_5421029325f58e0eec57229_36707512',
  ),
));
$_smarty_tpl->compiled->nocache_hash = '5421029325f58e0eec57229_36707512';
?>






<?php }
/* smarty_template_function_hidePHPExt_5421029325f58e0eec57229_36707512 */
if (!function_exists('smarty_template_function_hidePHPExt_5421029325f58e0eec57229_36707512')) {
function smarty_template_function_hidePHPExt_5421029325f58e0eec57229_36707512(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_hidePHPExt_5421029325f58e0eec57229_36707512 */
/* smarty_template_function_button_5421029325f58e0eec57229_36707512 */
if (!function_exists('smarty_template_function_button_5421029325f58e0eec57229_36707512')) {
function smarty_template_function_button_5421029325f58e0eec57229_36707512(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('href'=>'','text'=>"&nbsp;",'width'=>'','admin'=>'','relative'=>TRUE,'dotphp'=>FALSE), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if ($_smarty_tpl->tpl_vars['width']->value != '') {?>
    <?php $_smarty_tpl->_assignInScope('width', " width=\"".((string)$_smarty_tpl->tpl_vars['width']->value)."\"");?>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
    <?php $_smarty_tpl->_assignInScope('admin', "_admin");?>
  <?php } else { ?>
    <?php $_smarty_tpl->_assignInScope('admin', '');?>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['relative']->value) {?>
    <?php $_smarty_tpl->_assignInScope('href', ((string)$_smarty_tpl->tpl_vars['zendTOURL']->value).((string)$_smarty_tpl->tpl_vars['href']->value));?>
  <?php }?>
  <table<?php echo $_smarty_tpl->tpl_vars['width']->value;?>
 class="UD_textbutton">
    <tr valign="middle">
      <td class="UD_textbutton_content<?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
" align="center"><a class="UD_textbutton<?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
" href="<?php if ($_smarty_tpl->tpl_vars['dotphp']->value) {
echo $_smarty_tpl->tpl_vars['href']->value;
} else {
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'hidePHPExt', array('t'=>$_smarty_tpl->tpl_vars['href']->value), false);
}?>"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a></td>
    </tr>
  </table>
<?php
}}
/*/ smarty_template_function_button_5421029325f58e0eec57229_36707512 */
/* smarty_template_function_footerButtons_5421029325f58e0eec57229_36707512 */
if (!function_exists('smarty_template_function_footerButtons_5421029325f58e0eec57229_36707512')) {
function smarty_template_function_footerButtons_5421029325f58e0eec57229_36707512(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/zendto/lib/smarty/plugins/block.t.php','function'=>'smarty_block_t',),));
?>

  <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "servicetitle_t", null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array(1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ServiceTitle')));
$_block_repeat=true;
echo smarty_block_t(array(1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ServiceTitle')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Return to the %1 main menu<?php $_block_repeat=false;
echo smarty_block_t(array(1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ServiceTitle')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
  <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "logout_t", null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Logout<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
  <table border="0" cellpadding="4"><tr>
  <td><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'button', array('href'=>$_smarty_tpl->tpl_vars['zendToURL']->value,'text'=>$_smarty_tpl->tpl_vars['servicetitle_t']->value), false);?>
</td>
  <?php if ($_smarty_tpl->tpl_vars['isAuthorizedUser']->value) {?><td><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'button', array('href'=>((string)$_smarty_tpl->tpl_vars['zendToURL']->value)."?action=logout",'text'=>$_smarty_tpl->tpl_vars['logout_t']->value), false);?>
</td><?php }?></tr>
  </table>
<?php
}}
/*/ smarty_template_function_footerButtons_5421029325f58e0eec57229_36707512 */
}
