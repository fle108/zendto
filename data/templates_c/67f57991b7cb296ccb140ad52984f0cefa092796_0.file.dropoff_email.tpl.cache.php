<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-09 10:46:22
  from '/opt/zendto/templates/dropoff_email.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f58965e9a5b45_25209824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67f57991b7cb296ccb140ad52984f0cefa092796' => 
    array (
      0 => '/opt/zendto/templates/dropoff_email.tpl',
      1 => 1594820734,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f58965e9a5b45_25209824 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'hidePHPExt' => 
  array (
    'compiled_filepath' => '/var/zendto/templates_c/67f57991b7cb296ccb140ad52984f0cefa092796_0.file.dropoff_email.tpl.cache.php',
    'uid' => '67f57991b7cb296ccb140ad52984f0cefa092796',
    'call_name' => 'smarty_template_function_hidePHPExt_7176987145f58965e97e3a2_47767784',
  ),
));
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/zendto/lib/smarty/plugins/block.t.php','function'=>'smarty_block_t',),));
$_smarty_tpl->compiled->nocache_hash = '7176987145f58965e97e3a2_47767784';
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no',1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ServiceTitle')));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ServiceTitle')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>This is an automated message sent to you by the %1 service.<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ServiceTitle')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php if ($_smarty_tpl->tpl_vars['isReminder']->value) {?>****
****
<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no'));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>This is a reminder about a drop-off sent to you, that no one has picked up.  The drop-off will expire in <?php echo $_smarty_tpl->tpl_vars['timeLeft']->value;?>
 after which it will be automatically deleted.<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
****
****

<?php }
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'files_t', null);
if ($_smarty_tpl->tpl_vars['fileCount']->value == 1) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no'));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>a file<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['fileCount']->value));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['fileCount']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>%1 files<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['fileCount']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['senderName']->value,2=>$_smarty_tpl->tpl_vars['senderEmail']->value,3=>$_smarty_tpl->tpl_vars['files_t']->value));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['senderName']->value,2=>$_smarty_tpl->tpl_vars['senderEmail']->value,3=>$_smarty_tpl->tpl_vars['files_t']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>%1 <?php echo '<%'; ?>
2> has dropped off %3 for you.<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['senderName']->value,2=>$_smarty_tpl->tpl_vars['senderEmail']->value,3=>$_smarty_tpl->tpl_vars['files_t']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no'));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>IF YOU TRUST THE SENDER, and are expecting to receive a file from them, you may choose to retrieve the drop-off by clicking the following link (or copying and pasting it into your web browser):<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

  <?php echo $_smarty_tpl->tpl_vars['zendToURL']->value;
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'hidePHPExt', array('t'=>'pickup.php'), false);?>
?claimID=<?php echo $_smarty_tpl->tpl_vars['claimID']->value;
if ($_smarty_tpl->tpl_vars['informPasscode']->value) {?>&claimPasscode=<?php echo $_smarty_tpl->tpl_vars['claimPasscode']->value;
}?>&emailAddr=__EMAILADDR__

<?php if ($_smarty_tpl->tpl_vars['isEncrypted']->value) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>** This drop-off is encrypted. **
To download any files you must have the correct passphrase.<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php }
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array(1=>$_smarty_tpl->tpl_vars['timeLeft']->value));
$_block_repeat=true;
echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['timeLeft']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>You have %1 to retrieve the drop-off; after that the link above will expire. If you wish to contact the sender, just reply to this email.<?php $_block_repeat=false;
echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['timeLeft']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php if ($_smarty_tpl->tpl_vars['note']->value != '') {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no'));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>The sender has left you a note:<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php echo $_smarty_tpl->tpl_vars['note']->value;?>


<?php }
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no'));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Full information about the drop-off:<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['claimID']->value));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['claimID']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Claim ID:          %1<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['claimID']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "passcode_t", null);
if ($_smarty_tpl->tpl_vars['informPasscode']->value) {
echo $_smarty_tpl->tpl_vars['claimPasscode']->value;
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no'));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Sent separately<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['passcode_t']->value));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['passcode_t']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Claim Passcode:    %1<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['passcode_t']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['now']->value));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['now']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Date of Drop-Off:  %1<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['now']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    -- <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no'));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Sender<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?> --
      <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['senderName']->value));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['senderName']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Name:            %1<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['senderName']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
      <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['senderOrg']->value));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['senderOrg']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Organization:    %1<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['senderOrg']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
      <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['senderEmail']->value));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['senderEmail']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Email Address:   %1<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['senderEmail']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
if ($_smarty_tpl->tpl_vars['showIP']->value) {?>      <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['senderIP']->value,2=>$_smarty_tpl->tpl_vars['senderHost']->value));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['senderIP']->value,2=>$_smarty_tpl->tpl_vars['senderHost']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>IP Address:      %1  %2<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['senderIP']->value,2=>$_smarty_tpl->tpl_vars['senderHost']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>
    -- <?php if ($_smarty_tpl->tpl_vars['fileCount']->value == 1) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no'));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>File<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no'));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Files<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?> --
<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = 0;
if ($_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['fileCount']->value) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['fileCount']->value; $_smarty_tpl->tpl_vars['i']->value++) {
$_smarty_tpl->_assignInScope('f', $_smarty_tpl->tpl_vars['files']->value[$_smarty_tpl->tpl_vars['i']->value]);?>
      <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['f']->value['name']));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['f']->value['name']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Name:             %1<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['f']->value['name']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
if ($_smarty_tpl->tpl_vars['f']->value['description'] != '') {?>      <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['f']->value['description']));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['f']->value['description']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Description:      %1<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['f']->value['description']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>      <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['f']->value['size']));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['f']->value['size']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Size:             %1<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['f']->value['size']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
if ($_smarty_tpl->tpl_vars['f']->value['checksum'] != '') {?>      <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['f']->value['checksum']));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['f']->value['checksum']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>SHA-256 Checksum: %1<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['f']->value['checksum']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ($_smarty_tpl->tpl_vars['f']->value['type'] != '') {?>      <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['f']->value['type']));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['f']->value['type']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Content Type:     %1<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['f']->value['type']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
}
/* smarty_template_function_hidePHPExt_7176987145f58965e97e3a2_47767784 */
if (!function_exists('smarty_template_function_hidePHPExt_7176987145f58965e97e3a2_47767784')) {
function smarty_template_function_hidePHPExt_7176987145f58965e97e3a2_47767784(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_hidePHPExt_7176987145f58965e97e3a2_47767784 */
}
