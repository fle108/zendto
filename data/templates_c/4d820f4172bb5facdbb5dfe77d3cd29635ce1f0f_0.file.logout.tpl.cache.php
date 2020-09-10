<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-09 11:46:06
  from '/opt/zendto/templates/logout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f58a45ec1f192_30701814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d820f4172bb5facdbb5dfe77d3cd29635ce1f0f' => 
    array (
      0 => '/opt/zendto/templates/logout.tpl',
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
function content_5f58a45ec1f192_30701814 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/zendto/lib/smarty/plugins/block.t.php','function'=>'smarty_block_t',),));
$_smarty_tpl->compiled->nocache_hash = '12570090625f58a45ec12946_55820862';
$_smarty_tpl->_assignInScope('thisTemplate', basename($_smarty_tpl->source->filepath));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="info">
  <table class="UD_error" width="100%">
  <tr class="ud_error_message">
    <td class="UD_error_logo"><i class="fas fa-info-circle fa-fw"></i></td>
    <td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>You have been logged out.<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></td>
  </tr>
  <tr class="ud_error_message">
    <td class="UD_error_logo"><i class="fas fa-fw"></i></td>
    <td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>For better security, you should also exit this browser, or at least close this browser window.<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></td>
  </tr>
  <tr class="ud_error_message">
    <td class="UD_error_logo"><i class="fas fa-fw"></i></td>
    <td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['zendToURL']->value));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['zendToURL']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>You will be redirected to the <a href="%1">main menu</a> in a moment.<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['zendToURL']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></td>
  </tr>
  </table>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
