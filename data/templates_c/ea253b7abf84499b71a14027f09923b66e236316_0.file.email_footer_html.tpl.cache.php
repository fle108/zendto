<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-09 10:46:22
  from '/opt/zendto/templates/email_footer_html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f58965eab8ec6_72623611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea253b7abf84499b71a14027f09923b66e236316' => 
    array (
      0 => '/opt/zendto/templates/email_footer_html.tpl',
      1 => 1590403872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f58965eab8ec6_72623611 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/zendto/lib/smarty/plugins/function.fetch.php','function'=>'smarty_function_fetch',),1=>array('file'=>'/opt/zendto/lib/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),2=>array('file'=>'/opt/zendto/lib/smarty/plugins/block.t.php','function'=>'smarty_block_t',),));
$_smarty_tpl->compiled->nocache_hash = '14481940015f58965eab0308_77390020';
?>
    </td>
    <td></td>
  </tr>
  <tr style="background-color: white;">
    <td colspan="3">&nbsp;</td>
  </tr>
  <?php echo smarty_function_fetch(array('file'=>"../www/images/email/bottom-left.png",'assign'=>"bottomleft"),$_smarty_tpl);?>

  <?php echo smarty_function_fetch(array('file'=>"../www/images/email/bottom-right.png",'assign'=>"bottomright"),$_smarty_tpl);?>

  <tr style="background-color: white; padding: 0px; vertical-align: bottom; font-size: 0px;">
    <td style="padding: 0px; text-align: left; font-size: 0px;"><img style="display:block;" src="data:image/png;base64,<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'base64_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['bottomleft']->value ));?>
" width="10" height="10"></td>
    <td style="font-size: 0px;"></td>
    <td style="padding: 0px; text-align: right; font-size: 0px;"><img style="display:block;" src="data:image/png;base64,<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'base64_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['bottomright']->value ));?>
" width="10" height="10"></td>
  </tr><tr>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "year", null);
echo smarty_modifier_date_format(time(),'%Y');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <td id="email-footer" colspan="3" style="height: 50px; text-align: center; white-space: nowrap;"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['year']->value));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['year']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Copyright &copy; %1<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['year']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>  ZendTo | <a href="<?php echo $_smarty_tpl->tpl_vars['zendToURL']->value;
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'hidePHPExt', array('t'=>'about.php'), false);?>
"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array(1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ServiceTitle')));
$_block_repeat=true;
echo smarty_block_t(array(1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ServiceTitle')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>About %1<?php $_block_repeat=false;
echo smarty_block_t(array(1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ServiceTitle')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></a><br/><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array(1=>"ZendTo",'escape'=>'no'));
$_block_repeat=true;
echo smarty_block_t(array(1=>"ZendTo",'escape'=>'no'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>This service is powered by a copy of <a href="http://zend.to/" target="_blank">%1</a><?php $_block_repeat=false;
echo smarty_block_t(array(1=>"ZendTo",'escape'=>'no'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></td>
  </tr>
</table>
</body>
</html>
<?php }
}
