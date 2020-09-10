<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-09 11:46:09
  from '/opt/zendto/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f58a461a906e0_08253719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32be1cbefefb9178bf2fe00303cdaefc004a01c0' => 
    array (
      0 => '/opt/zendto/templates/login.tpl',
      1 => 1583337402,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f58a461a906e0_08253719 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/zendto/lib/smarty/plugins/block.t.php','function'=>'smarty_block_t',),));
$_smarty_tpl->compiled->nocache_hash = '8304514015f58a461a87211_10938583';
$_smarty_tpl->_assignInScope('thisTemplate', basename($_smarty_tpl->source->filepath));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['isLocalIP']->value) {?>
<h4><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Please login above.<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></h4>
<?php } else { ?>
<br><br><br>
<center>
  <form name="login" method="post" action=".">
  <input type="hidden" name="action" value="login">
  <table class="UD_form" cellpadding="4" width="100%">
    <tr class="UD_form_header">
      <td colspan="2" align="center"><h4><i class="fas fa-lock"></i>&nbsp;&nbsp;<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Authentication<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></h4></td>
    </tr>
    <tr>
      <td align="right" width="50%"><strong><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array(1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'OrganizationShortName')));
$_block_repeat=true;
echo smarty_block_t(array(1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'OrganizationShortName')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>%1 Username<?php $_block_repeat=false;
echo smarty_block_t(array(1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'OrganizationShortName')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>:</strong></td>
      <td align="left" width="50%"><input type="text" id="uname" name="uname" size="25" autocomplete="username" value=""/></td>
    </tr>
    <tr>
      <td align="right" width="50%"><strong><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Password<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>:</strong></td>
      <td align="left" width="50%"><input type="password" id="passwordField" name="password" size="25" autocomplete="current-password" value=""/></td>
    </tr>
    <tr class="footer">
      <td colspan="2" align="center">
        <?php echo '<script'; ?>
 type="text/javascript">
          bindEnter($('#passwordField'), function(){ submitform() });
          function submitform() { document.login.submit(); }
          $(document).ready(function() { $('#uname').trigger('focus'); });
        <?php echo '</script'; ?>
>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "login_t", null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Login<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'button', array('relative'=>FALSE,'href'=>"javascript:submitform();",'text'=>$_smarty_tpl->tpl_vars['login_t']->value), false);?>

      </td>
    </tr>
  </table>
  </form>
</center>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
