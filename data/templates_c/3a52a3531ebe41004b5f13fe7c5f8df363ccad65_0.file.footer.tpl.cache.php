<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-09 16:04:30
  from '/opt/zendto/templates/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f58e0eecb4520_66337419',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a52a3531ebe41004b5f13fe7c5f8df363ccad65' => 
    array (
      0 => '/opt/zendto/templates/footer.tpl',
      1 => 1583337402,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f58e0eecb4520_66337419 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/zendto/lib/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'/opt/zendto/lib/smarty/plugins/block.t.php','function'=>'smarty_block_t',),));
$_smarty_tpl->compiled->nocache_hash = '40359655f58e0eecaddf2_88161273';
?>
<!-- End page content -->

  </div>
</div>

<div id="footer">
  <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "year", null);
echo smarty_modifier_date_format(time(),'%Y');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
  <span style="white-space: nowrap"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array(1=>$_smarty_tpl->tpl_vars['ztVersion']->value));
$_block_repeat=true;
echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['ztVersion']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Version %1<?php $_block_repeat=false;
echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['ztVersion']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>&nbsp;|&nbsp;<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['year']->value));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['year']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Copyright &copy; %1<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['year']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?> ZendTo&nbsp;|&nbsp;<a href="<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'hidePHPExt', array('t'=>'about.php'), false);?>
"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array(1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ServiceTitle')));
$_block_repeat=true;
echo smarty_block_t(array(1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ServiceTitle')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>About %1<?php $_block_repeat=false;
echo smarty_block_t(array(1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ServiceTitle')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></a></span>
  <?php if ($_smarty_tpl->tpl_vars['whoAmI']->value != '') {?><br/><span style="white-space: nowrap" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['whoAmIuid']->value, ENT_QUOTES, 'UTF-8', true);?>
 &lt;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['whoAmImail']->value, ENT_QUOTES, 'UTF-8', true);?>
&gt;"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['whoAmI']->value));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['whoAmI']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>You are currently logged in as <em>%1</em><?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['whoAmI']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></span><?php }?>
  <br/>
  <span style="white-space: nowrap"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array(1=>"ZendTo",'escape'=>'no'));
$_block_repeat=true;
echo smarty_block_t(array(1=>"ZendTo",'escape'=>'no'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>This service is powered by a copy of <a href="http://zend.to/" target="_blank">%1</a><?php $_block_repeat=false;
echo smarty_block_t(array(1=>"ZendTo",'escape'=>'no'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></span>
</div>

</body>
</html>
<?php }
}
