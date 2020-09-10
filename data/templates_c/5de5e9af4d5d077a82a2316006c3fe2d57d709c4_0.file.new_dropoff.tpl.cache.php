<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-09 10:46:06
  from '/opt/zendto/templates/new_dropoff.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f58964ee8e310_56176408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5de5e9af4d5d077a82a2316006c3fe2d57d709c4' => 
    array (
      0 => '/opt/zendto/templates/new_dropoff.tpl',
      1 => 1592571183,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:new_dropoff.js.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f58964ee8e310_56176408 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/zendto/lib/smarty/plugins/block.t.php','function'=>'smarty_block_t',),));
$_smarty_tpl->compiled->nocache_hash = '20660668585f58964ee77f45_96389195';
$_smarty_tpl->_assignInScope('thisTemplate', basename($_smarty_tpl->source->filepath));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 type="text/javascript" src="js/jquery-ui-1.12.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/dropoff.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.balloon.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/addressbook.js"><?php echo '</script'; ?>
>
<!-- FormData is from https://github.com/jimmywarting/FormData -->
<?php echo '<script'; ?>
 type="text/javascript" src="js/formdata.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
  <?php $_smarty_tpl->_subTemplateRender("file:new_dropoff.js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '</script'; ?>
>

  <div style="padding:4px;border:2px solid #C01010;background:#FFF0F0;color:#C01010;text-align:justify;" class="round">
    <strong><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>PLEASE NOTE<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></strong>
    <br>
    <br>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no',1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ServiceTitle'),2=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'FavouriteWindowsZip')));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ServiceTitle'),2=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'FavouriteWindowsZip')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Files uploaded to %1 are scanned for viruses.  But still exercise the same degree of caution as you would with any other file you download.<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ServiceTitle'),2=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'FavouriteWindowsZip')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
if ($_smarty_tpl->tpl_vars['enforceEncrypt']->value == "false") {?> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no',1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ServiceTitle'),2=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'FavouriteWindowsZip')));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ServiceTitle'),2=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'FavouriteWindowsZip')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Users are also <strong>strongly encouraged</strong> to encrypt every file if any contain sensitive information (e.g. personal private information)!<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ServiceTitle'),2=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'FavouriteWindowsZip')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>
  </div>

<?php if ($_smarty_tpl->tpl_vars['isAuthorizedUser']->value) {?>
  <p><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array(1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'OrganizationShortName')));
$_block_repeat=true;
echo smarty_block_t(array(1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'OrganizationShortName')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>This web page will allow you to drop-off (upload) one or more files for anyone (either a %1 user or others). The recipient will receive an automated email containing the information you enter below and instructions for downloading the file. Your IP address will also be logged and sent to the recipient for identity confirmation purposes.<?php $_block_repeat=false;
echo smarty_block_t(array(1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'OrganizationShortName')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></p>
<?php } else { ?>
  <p><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array(1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'OrganizationShortName')));
$_block_repeat=true;
echo smarty_block_t(array(1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'OrganizationShortName')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>This web page will allow you to drop-off (upload) one or more files for a %1 user. The recipient will receive an automated email containing the information you enter below and instructions for downloading the file. Your IP address will also be logged and sent to the recipient for identity confirmation purposes.<?php $_block_repeat=false;
echo smarty_block_t(array(1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'OrganizationShortName')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></p>
<?php }?>

<form name="dropoff" id="dropoff" method="post" enctype="multipart/form-data">

<input type="hidden" name="Action" value="dropoff"/>
<input type="hidden" id="auth" name="auth" value="<?php echo $_smarty_tpl->tpl_vars['authKey']->value;?>
"/>
<input type="hidden" id="req" name="req" value="<?php echo $_smarty_tpl->tpl_vars['reqKey']->value;?>
"/>
<input type="hidden" id="senderOrganization" name="senderOrganization" value="<?php echo $_smarty_tpl->tpl_vars['senderOrg']->value;?>
"/>
<input type="hidden" id="encryptPassword" name="encryptPassword" value=""/>
<input type="hidden" id="chunkName" name="chunkName" value="<?php echo $_smarty_tpl->tpl_vars['chunkName']->value;?>
"/>

<div id="newdropoff-boxes">
  <!-- First boxes about the sender and subject -->
  <span id="fromLabel" class="labels"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>From<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>:</span>
  <span id="subjectLabel" class="labels"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Subject<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>:</span>
  <span id="fromHolder" class="text"><span id="fromName"><?php echo $_smarty_tpl->tpl_vars['senderName']->value;?>
</span> <span id="fromEmail">&lt;<?php echo $_smarty_tpl->tpl_vars['senderEmail']->value;?>
&gt;</span> <span id="fromOrg"><?php echo $_smarty_tpl->tpl_vars['senderOrg']->value;?>
</span></span>
  <input type="text" id="subject" name="subject" class="text" value="<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
"/>
  <!-- Then the recipients -->
  <span id="emailLabel" class="labels"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>To<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>:</span>
  <span id="emailHolder" class="text"> <a id="addRecipients" href="#"><img src="images/swish/plus-circle-frame.png" alt="Add recipients" /></a> </span>
  <!-- Then the note on the left side -->
  <span id="noteLabel" class="labels"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Short note to the Recipients<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>:</span>
  <span id="noteHolder"><textarea name="note" id="note" wrap="soft"><?php echo $_smarty_tpl->tpl_vars['note']->value;?>
</textarea><!-- <br class="clear" /> -->
    <span id="noteLengthText"></span>
  </span>

  <!-- And all the checkboxes on the right side -->
  <!-- Hidden until we have removed everything we don't want to show -->
  <div id="newdropoff-checkboxes" name="newdropoff-checkboxes" style="visibility:hidden">
    <input type="checkbox" name="encryptFiles" id="encryptFiles" class="newdropoff-encryptSpan" />
    <label name="encryptFilesLabel" id="encryptFilesLabel" for="encryptFiles" class="ndcbLabel newdropoff-encryptSpan"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Encrypt every file<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
if (!$_smarty_tpl->tpl_vars['allowPassphraseDialog']->value) {?> <i id='encrypt-balloon' name='encrypt-balloon' class='fas fa-info-circle' style="text-indent: 0px"></i><?php }?></label>
    <input type="checkbox" name="checksumFiles" id="checksumFiles" class="newdropoff-checksumSpan" checked="checked" />
    <label name="checksumFilesLabel" id="checksumFilesLabel" for="checksumFiles" class="ndcbLabel newdropoff-checksumSpan"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Calculate SHA-256 checksum of each file<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></label>
    <input type="checkbox" name="confirmDelivery" id="confirmDelivery" class="newdropoff-confirmSpan" checked="checked" />
    <label for="confirmDelivery" class="ndcbLabel newdropoff-confirmSpan"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Send me an email when each recipient picks up the files<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></label>
    <input type="checkbox" name="informRecipients" id="informRecipients" class="newdropoff-informSpan newdropoff-informRecipientsSpan" checked="checked" />
    <label id="informRecipientsLabel" name="informRecipientsLabel" for="informRecipients" class="ndcbLabel newdropoff-informSpan newdropoff-informRecipientsSpan"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Send email message to recipients<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></label>
    <input type="checkbox" name="informPasscode" id="informPasscode" class="newdropoff-informPasscodeSpan newdropoff-informSpan" checked="checked" />
    <label id="informPasscodeLabel" name="informPasscodeLabel" for="informPasscode" class="ndcbLabel newdropoff-informPasscodeSpan newdropoff-informSpan"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>which includes Passcode as well as Claim ID<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></label>
    <input type="checkbox" name="recipWaiver" id="recipWaiver" class="newdropoff-waiverSpan" checked="checked" />
    <label id="recipWaiverLabel" name="recipWaiverLabel" for="recipWaiver" class="ndcbLabel newdropoff-waiverSpan"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Recipients must agree to terms and conditions<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></label>
    <input type="number" name="lifedays" id="lifedays" class="newdropoff-lifetimeSpan" min="0" max="<?php echo $_smarty_tpl->tpl_vars['keepForDays']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['defaultLifetime']->value;?>
" />
    <label id="lifetimeLabel" name="lifetimeLabel" for="lifedays" class="ndcbLabel newdropoff-lifetimeSpan"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>days until drop-off expires<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></label>
  </div>
</div>


<span style="display:none">
<!-- Add Recipients dialog (hidden till we need it) -->
<!-- This div is removed from the DOM in $(document).ready() -->
<div id="addNewRecipient">
  <h1><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Add Recipients<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></h1>
  <div class="center buttonHolder" style="display:flex; justify-content:center;"><button id="showSingleDialog"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Add One<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></button> <button id="showMultipleDialog" class="greyButton"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Add Many<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></button></div>
        
  <!-- Sending to a single recipient -->
  <div id="sendSingle" class="center">
    <!-- Centre the table itself -->
    <table class="ui-widget" style="margin:0px auto 3px auto;">
      <tr>
        <td style="text-align:right;"><label for="recipName" class="UILabel" style="float:right; margin-right: 3px;"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Name<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>:</label></td>
        <td style="text-align:left;"><input type="text" id="recipName" name="recipName" size="33" placeholder="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Adds to your address book<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['recipName_1']->value;?>
"/></td>
      </tr>
      <tr>
        <td style="text-align:right;"><label for="recipEmail" class="UILabel" style="float:right; margin-right:3px;"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Email<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>:</label></td>
        <td style="text-align:left;"><input type="text" id="recipEmail" name="recipEmail" size="33" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['recipEmail_1']->value;?>
"/></td>
      </tr>
    </table>
    <div class="center buttonHolder" style="display:flex; justify-content:center;"><button onclick="javascript:addSingleRecipient();"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Add<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></button> <button onclick="javascript:add1RecipientAndClose();"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Add & Close<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></button></div>
  </div>

  <div id="sendMultiple" class="center ui-widget">
    <textarea id="multipleRecipients" rows="10" cols="38" placeholder="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Bulk add recipients<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>"></textarea>
    <p><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>One recipient per line, for example:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?> <br /><em><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Recipient's Name email@example.com<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></em></p>
    <div class="center"><button id="addMultipleRecipients"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Verify<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></button></div>
  </div>
</div>

<!-- Encryption Passphrase dialog (hidden till we need it) -->
<div id="encryptPasswordDialog">
  <h1><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Encryption Passphrase<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></h1>
  <div class="center dark-red"><strong><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no'));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>This passphrase will not be sent to the recipients.<br/>You need to do this yourself.<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></strong></div>
  <div class="center" style="white-space:nowrap">
  <table border="0" width="100%" style="padding:0px"><tr>
    <td class="ui-widget" style="padding-bottom:5px">
      <label for="encryptPassword1" class="UILabel"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Passphrase<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>:</label></td>
    <td class="ui-widget" style="float:left;padding-bottom:5px">
            <input type="password" id="encryptPassword1" name="encryptPassword1" size="30" autocomplete="off" value=""/></td>
  </tr><tr>
    <td class="ui-widget" style="padding-bottom:5px">
      <label for="encryptPassword2" class="UILabel"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>And again<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>:</label></td>
    <td class="ui-widget" style="float:left;padding-bottom:5px">
            <input type="password" id="encryptPassword2" name="encryptPassword2" size="30" autocomplete="off" value=""/></td>
  </tr><tr>
    <td class="ui-widget">&nbsp;</td>
    <td class="ui-widget" style="float:left">
      <input type="checkbox" name="hideEncryptChars" id="hideEncryptChars" checked="checked"/> <label for="hideEncryptChars"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Hide characters<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></label></td>
  </tr><tr>
    <td class="ui-widget">&nbsp;</td>
    <td class="ui-widget" style="float:left">
      <span class="password-error" name="passwordError" id="passwordError">&nbsp;</span>
    </td>
  </tr><tr>
    <td colspan="2"><button name="setPasswordButton" id="setPasswordButton" disabled="disabled" class="greyButton" style="margin:0px;margin-top:5px" onclick="javascript:setEncryptPassword();"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>OK<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></button><?php if ($_smarty_tpl->tpl_vars['enforceEncrypt']->value == "false") {?> <button onclick="javascript:cancelEncryptPassword();"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Cancel<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></button><?php }?></td>
  </tr></table>
  </div>
</div>
</span> <!-- End of hidden dialogs -->


<!-- Add Files button -->
<div class="center" style="margin-top:20px; display:block;">
  <input type="file" id="AddFiles" multiple style="display:none" onchange="addFiles(this.files)">
  <button id="AddFilesButton"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Add Files<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></button><span id="libraryselector"> <select id="file_select" name="file_select" class="file_select"><option value="-1"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>and/or select a file...<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></option></select></span>
</div>

<table id="uploadTable" width="100%" border="0" cellpadding="5">
  <tr valign="top">
   <td> </td>
   <td>
    <table class="UD_form" cellpadding="4">
      <thead class="UD_form_header"><tr>
        <td> </td>
        <td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Filename<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></td>
        <td class="ndfilesize"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Size<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></td>
        <td colspan="2"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Description<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></td>
      </tr></thead>
      <tbody id="uploadFiles">
      </tbody>
    </table>
   </td>
  </tr>
</table>

</form>


<div id="uploadDialog" style="display: none;">
  <h1><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Uploading...<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></h1>
  <div id="progressBarContainer" style="border: none; height: 80px; width: 350px; margin-left: 25px;">
    <div id="progressContainer">
      <div id="progressouter" style="display: block; margin-bottom: 10px;">
        <div id="progressinner" style="width:0%;"></div>
      </div>
      <div id="percentText" style="visibility:visible;"></div>
    </div>
  </div>
</div>

<div class="center" id="DropoffButton"><span id="totalSize"></span><br /><button id="RealDropoffButton" onclick="submitform();"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Drop-off Files<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></button></div>

<div id="overlay" style="display:none">
  <span id="overlaytext"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no'));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Drop to<br/>Add Files<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?><br/><span id="overlaytextsub"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>(It will copy, not move)<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></span></span>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
