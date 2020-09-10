<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-09 10:46:22
  from '/opt/zendto/templates/dropoff_email_html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f58965ea1d874_16656886',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3a4bb850222cd7a323182607fc4ddc761201a9d' => 
    array (
      0 => '/opt/zendto/templates/dropoff_email_html.tpl',
      1 => 1590403872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:email_header_html.tpl' => 1,
    'file:email_footer_html.tpl' => 1,
  ),
),false)) {
function content_5f58965ea1d874_16656886 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/zendto/lib/smarty/plugins/block.t.php','function'=>'smarty_block_t',),1=>array('file'=>'/opt/zendto/lib/smarty/plugins/modifier.escape.php','function'=>'smarty_modifier_escape',),));
$_smarty_tpl->compiled->nocache_hash = '8173048595f58965e9fbe22_16562920';
$_smarty_tpl->_subTemplateRender("file:email_header_html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array(1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ServiceTitle')));
$_block_repeat=true;
echo smarty_block_t(array(1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ServiceTitle')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>This is an automated message sent to you by the %1 service.<?php $_block_repeat=false;
echo smarty_block_t(array(1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ServiceTitle')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
<br>

<?php if ($_smarty_tpl->tpl_vars['isReminder']->value) {?>
<br/><hr/><br/>
<strong><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>This is a reminder about a drop-off sent to you, that no one has picked up.<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?><br/>
<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array(1=>$_smarty_tpl->tpl_vars['timeLeft']->value));
$_block_repeat=true;
echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['timeLeft']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>The drop-off will expire in %1 after which it will be automatically deleted.<?php $_block_repeat=false;
echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['timeLeft']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></strong>
<br/><hr/>
<?php }?>

<br/>
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "senderemail_t", null);?><a href="mailto:<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['senderEmail']->value, "hex");?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['senderEmail']->value, "hexentity");?>
</a><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['fileCount']->value == 1) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no',1=>htmlspecialchars($_smarty_tpl->tpl_vars['senderName']->value, ENT_QUOTES, 'UTF-8', true),2=>$_smarty_tpl->tpl_vars['senderemail_t']->value));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no',1=>htmlspecialchars($_smarty_tpl->tpl_vars['senderName']->value, ENT_QUOTES, 'UTF-8', true),2=>$_smarty_tpl->tpl_vars['senderemail_t']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>%1 &lt;%2&gt; has dropped off a file for you.<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no',1=>htmlspecialchars($_smarty_tpl->tpl_vars['senderName']->value, ENT_QUOTES, 'UTF-8', true),2=>$_smarty_tpl->tpl_vars['senderemail_t']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no',1=>htmlspecialchars($_smarty_tpl->tpl_vars['senderName']->value, ENT_QUOTES, 'UTF-8', true),2=>$_smarty_tpl->tpl_vars['senderemail_t']->value,3=>$_smarty_tpl->tpl_vars['fileCount']->value));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no',1=>htmlspecialchars($_smarty_tpl->tpl_vars['senderName']->value, ENT_QUOTES, 'UTF-8', true),2=>$_smarty_tpl->tpl_vars['senderemail_t']->value,3=>$_smarty_tpl->tpl_vars['fileCount']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>%1 &lt;%2&gt; has dropped off %3 files for you.<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no',1=>htmlspecialchars($_smarty_tpl->tpl_vars['senderName']->value, ENT_QUOTES, 'UTF-8', true),2=>$_smarty_tpl->tpl_vars['senderemail_t']->value,3=>$_smarty_tpl->tpl_vars['fileCount']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>
<br/>
<br/>
<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no'));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><strong>IF YOU TRUST THE SENDER</strong> and are expecting to receive a file from them, you may choose to retrieve the drop-off by clicking the following link (or copying and pasting it into your web browser):<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?><br/>
<br/>
<a href="<?php echo $_smarty_tpl->tpl_vars['zendToURL']->value;
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'hidePHPExt', array('t'=>'pickup.php'), false);?>
?claimID=<?php echo rawurlencode($_smarty_tpl->tpl_vars['claimID']->value);
if ($_smarty_tpl->tpl_vars['informPasscode']->value) {?>&claimPasscode=<?php echo rawurlencode($_smarty_tpl->tpl_vars['claimPasscode']->value);
}?>&emailAddr=__EMAILADDR__"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['zendToURL']->value, ENT_QUOTES, 'UTF-8', true);
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'hidePHPExt', array('t'=>'pickup.php'), false);?>
?claimID=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['claimID']->value, ENT_QUOTES, 'UTF-8', true);
if ($_smarty_tpl->tpl_vars['informPasscode']->value) {?>&amp;claimPasscode=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['claimPasscode']->value, ENT_QUOTES, 'UTF-8', true);
}?>&amp;emailAddr=__EMAILADDR__</a><br/>
<br/>
<?php if ($_smarty_tpl->tpl_vars['isEncrypted']->value) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no'));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><strong>This drop-off is encrypted.</strong> To download any files you must have the correct passphrase.<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
<br/><br/><?php }
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array(1=>$_smarty_tpl->tpl_vars['timeLeft']->value));
$_block_repeat=true;
echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['timeLeft']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>You have %1 to retrieve the drop-off; after that the link above will expire.<?php $_block_repeat=false;
echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['timeLeft']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
<br/>
<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>If you wish to contact the sender, just reply to this email.<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
<br/><br/>
<?php if ($_smarty_tpl->tpl_vars['note']->value != '') {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>The sender has left you a note:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?><br>
<br/>
<?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['note']->value, ENT_QUOTES, 'UTF-8', true));?>

<br/><br/>
<?php }
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Full information about the drop-off:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
<br/>
<table border="0" borderpadding="1">
<tr><td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Claim ID<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>:</td><td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['claimID']->value, ENT_QUOTES, 'UTF-8', true);?>
</td></tr>
<tr><td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Claim Passcode<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>:</td><td><?php if ($_smarty_tpl->tpl_vars['informPasscode']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['claimPasscode']->value, ENT_QUOTES, 'UTF-8', true);
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Sent separately<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?></td></tr>
<tr><td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Date of Drop-off<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>:</td><td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['now']->value, ENT_QUOTES, 'UTF-8', true);?>
</td></tr>
</table>
<br/>

<table border="0" borderpadding="1">
<tr><td colspan="2">&mdash; <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Sender<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?> &mdash;</td></tr>
<tr><td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Name<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>:</td><td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['senderName']->value, ENT_QUOTES, 'UTF-8', true);?>
</td></tr>
<tr><td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Organization<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>:</td><td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['senderOrg']->value, ENT_QUOTES, 'UTF-8', true);?>
</td></tr>
<tr><td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Email Address<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>:</td><td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['senderEmail']->value, ENT_QUOTES, 'UTF-8', true);?>
</td></tr>
<?php if ($_smarty_tpl->tpl_vars['showIP']->value) {?><tr><td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>IP Address<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>:</td><td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['senderIP']->value, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['senderHost']->value, ENT_QUOTES, 'UTF-8', true);?>
</td></tr><?php }?>
</table>
<br>

<table border="0" borderpadding="1">
<tr><td colspan="2">&mdash; <?php if ($_smarty_tpl->tpl_vars['fileCount']->value == 1) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>File<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Files<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?> &mdash;</td></tr>
<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = 0;
if ($_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['fileCount']->value) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['fileCount']->value; $_smarty_tpl->tpl_vars['i']->value++) {
$_smarty_tpl->_assignInScope('f', $_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->tpl_vars['i']->value]);?>
<tr><td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Name<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>:&nbsp;</td><td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</td></tr>
<?php if ($_smarty_tpl->tpl_vars['f']->value['description'] != '') {?><tr><td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Description<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>:</td><td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
</td></tr><?php }?>
<tr><td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Size<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>:&nbsp;</td><td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f']->value['size'], ENT_QUOTES, 'UTF-8', true);?>
</td></tr>
<?php if ($_smarty_tpl->tpl_vars['f']->value['checksum'] != '') {?><tr><td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>SHA-256 Checksum<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>:&nbsp;</td><td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f']->value['checksum'], ENT_QUOTES, 'UTF-8', true);?>
</td></tr><?php }
if ($_smarty_tpl->tpl_vars['f']->value['type'] != '') {?><tr><td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Content Type<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>:&nbsp;</td><td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f']->value['type'], ENT_QUOTES, 'UTF-8', true);?>
</td></tr><?php }?>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<?php }
}
?>
</table>

<?php $_smarty_tpl->_subTemplateRender("file:email_footer_html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
