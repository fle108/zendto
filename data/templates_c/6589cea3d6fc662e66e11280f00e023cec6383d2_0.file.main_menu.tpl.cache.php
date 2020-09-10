<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-09 16:04:30
  from '/opt/zendto/templates/main_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f58e0eebbe429_47659155',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6589cea3d6fc662e66e11280f00e023cec6383d2' => 
    array (
      0 => '/opt/zendto/templates/main_menu.tpl',
      1 => 1591268768,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f58e0eebbe429_47659155 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/zendto/lib/smarty/plugins/block.t.php','function'=>'smarty_block_t',),));
$_smarty_tpl->compiled->nocache_hash = '18320140185f58e0eeb91bb6_64952381';
$_smarty_tpl->_assignInScope('thisTemplate', basename($_smarty_tpl->source->filepath));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!--[if lt IE 9]>
<?php echo '<script'; ?>
 type="text/javascript">
  alert("<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>You are using an old unsupported version of Internet Explorer.<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>\n<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>This site will not work correctly with this web browser.<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>\n<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Please use a better web browser, such as Google Chrome or Firefox, or at least Internet Explorer 11.<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>");
<?php echo '</script'; ?>
>
<![endif]-->

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
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "dropoff_t", null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Drop-off<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "em_dropoff_t", null);?><em><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Drop-off<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></em><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "pickup_t", null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Pick-up<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "request_t", null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Request a Drop-off<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "em_request_t", null);?><em><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Request a Drop-off<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></em><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "showall_t", null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Show All Drop-offs<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "unlock_t", null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Unlock Users<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "stats_t", null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>System Statistics<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "syslog_t", null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>System Log<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['isAuthorizedUser']->value) {?>
  <!-- User has logged in -->
<table border="0" class="homeButtons">
  <tr>
    <td colspan="2">&nbsp;<!-- <?php echo $_smarty_tpl->tpl_vars['isLocalIP']->value;?>
 --></td>
  </tr>
  <tr>
    <td colspan="2"><h4><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>You may perform the following activities:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></h4></td>
  </tr>
  <tr>
    <td><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'button', array('href'=>"verify.php",'text'=>$_smarty_tpl->tpl_vars['dropoff_t']->value,'width'=>"100%"), false);?>
</td>
    <td class="UD_nav_label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no'));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Drop-off (<em>upload</em>) a file for someone else.<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></td>
  </tr>
  <tr>
    <td><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'button', array('href'=>"req.php",'text'=>$_smarty_tpl->tpl_vars['request_t']->value,'width'=>"100%"), false);?>
</td>
    <td class="UD_nav_label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no'));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Ask another person to send you some files.<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></td>
  </tr>
  <tr>
    <td><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'button', array('href'=>"pickup.php",'text'=>$_smarty_tpl->tpl_vars['pickup_t']->value,'width'=>"100%"), false);?>
</td>
    <td class="UD_nav_label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no'));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Pick-up (<em>download</em>) a file dropped-off for you.<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></td>
  </tr>
<?php if ($_smarty_tpl->tpl_vars['isStatsUser']->value) {?>
        <tr><td colspan="2">&nbsp;</td></tr>
<?php }
if ($_smarty_tpl->tpl_vars['isAdminUser']->value) {?>
  <tr>
    <td><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'button', array('href'=>"pickup_list_all.php",'text'=>$_smarty_tpl->tpl_vars['showall_t']->value,'width'=>"100%",'admin'=>$_smarty_tpl->tpl_vars['isAdminUser']->value), false);?>
</td>
    <td class="UD_nav_label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>View all drop-offs in the database<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?> (<em><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Administrators only<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></em>).</td>
  </tr>
  <tr>
    <td><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'button', array('href'=>"unlock.php",'text'=>$_smarty_tpl->tpl_vars['unlock_t']->value,'width'=>"100%",'admin'=>$_smarty_tpl->tpl_vars['isAdminUser']->value), false);?>
</td>
    <td class="UD_nav_label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Unlock locked-out users<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?> (<em><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Administrators only<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></em>).</td>
  </tr>
<?php }
if ($_smarty_tpl->tpl_vars['isStatsUser']->value) {?>
  <tr>
    <td><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'button', array('href'=>"stats.php",'text'=>$_smarty_tpl->tpl_vars['stats_t']->value,'width'=>"100%",'admin'=>$_smarty_tpl->tpl_vars['isStatsUser']->value), false);?>
</td>
    <td class="UD_nav_label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>View daily statistics for the service<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?> (<em><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Administrators only<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></em>).</td>
  </tr>
<?php }
if ($_smarty_tpl->tpl_vars['isAdminUser']->value) {?>
  <tr>
    <td><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'button', array('href'=>"log.php",'text'=>$_smarty_tpl->tpl_vars['syslog_t']->value,'width'=>"100%",'admin'=>$_smarty_tpl->tpl_vars['isAdminUser']->value), false);?>
</td>
    <td class="UD_nav_label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>View log file<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?> (<em><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Administrators only<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></em>).</td>
  </tr>
<?php }?>

  <tr><td colspan="2">&nbsp;</td></tr>
</table>

<?php } else { ?>
  <!-- Not logged in. -->
<table border="0" class="homeButtons">
<?php if ($_smarty_tpl->tpl_vars['isLocalIP']->value && !$_smarty_tpl->tpl_vars['SAML']->value) {?>
  <tr><td colspan="2"><h4><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no',1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'OrganizationShortName')));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'OrganizationShortName')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>If you are a %1 user, you should login above to avoid having to verify your email address,<br/>and be able to drop-off files to non-%1 users.<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'OrganizationShortName')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></h4></td></tr>
<?php } else { ?>
  <?php if ($_smarty_tpl->tpl_vars['allowExternalLogins']->value || $_smarty_tpl->tpl_vars['SAML']->value) {?>
  <tr><td colspan="2"><h4><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no',1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'OrganizationShortName')));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'OrganizationShortName')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>If you are a %1 user, you may login here:<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'OrganizationShortName')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></h4></td></tr>
  <tr>
    <td><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'button', array('href'=>$_smarty_tpl->tpl_vars['loginUrl']->value,'text'=>$_smarty_tpl->tpl_vars['login_t']->value,'width'=>"100%",'dotphp'=>$_smarty_tpl->tpl_vars['SAML']->value), false);?>
</td>
    <td class="UD_nav_label"><?php if ($_smarty_tpl->tpl_vars['SAML']->value) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no',1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'OrganizationShortName')));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'OrganizationShortName')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><strong>%1 users should login first.</strong><?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'OrganizationShortName')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no',1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'OrganizationShortName')));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'OrganizationShortName')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><strong>Avoid having to verify your email address</strong>,<br/>and drop-off files to non-%1 users.<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'OrganizationShortName')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?></td>
  </tr>
  <tr><td colspan="2">&nbsp;</td></tr>
  <?php }
}?>
  <?php if ($_smarty_tpl->tpl_vars['allowExternaUploads']->value || $_smarty_tpl->tpl_vars['allowExternalPickups']->value) {?>
  <tr><td colspan="2"><h4><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no'));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Anyone may perform the following activities:<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></h4></td></tr>
  <?php if ($_smarty_tpl->tpl_vars['allowExternalUploads']->value) {?>
  <tr>
    <td><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'button', array('href'=>"verify.php",'text'=>$_smarty_tpl->tpl_vars['dropoff_t']->value,'width'=>"100%"), false);?>
</td>
    <td class="UD_nav_label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no',1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'OrganizationShortName')));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'OrganizationShortName')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Drop-off (<em>upload</em>) a file for a %1 user (<strong>email verification required</strong>).<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'OrganizationShortName')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></td>
  </tr>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['allowExternalPickups']->value) {?>
  <tr>
    <td><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'button', array('href'=>"pickup.php",'text'=>$_smarty_tpl->tpl_vars['pickup_t']->value,'width'=>"100%"), false);?>
</td>
    <td class="UD_nav_label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no'));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Pick-up (<em>download</em>) a file dropped off for you.<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></td>
  </tr>
  <?php }?>
  <tr><td colspan="2">&nbsp;</td></tr>
  <?php }?>
</table>

<?php }?>

<div id="info">
  <table class="UD_error" width="100%">
  <tr class="ud_error_message">
    <td><i class="fas fa-info-circle fa-fw"></i></td>
    <td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no',1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'OrganizationShortName'),2=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'OrganizationShortType')));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'OrganizationShortName'),2=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'OrganizationShortType')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>%1 users: you may login with your username and password and send files to anyone, in or out of %2<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'OrganizationShortName'),2=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'OrganizationShortType')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>.</td>
  </tr>
  <tr class="ud_error_message">
    <td><i class="fas fa-fw"></i></td>
    <td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no',1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'OrganizationShortName'),2=>$_smarty_tpl->tpl_vars['dropoff_t']->value,3=>$_smarty_tpl->tpl_vars['em_dropoff_t']->value));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'OrganizationShortName'),2=>$_smarty_tpl->tpl_vars['dropoff_t']->value,3=>$_smarty_tpl->tpl_vars['em_dropoff_t']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Non-%1 users: you cannot log in, but can still send files to %1 users if you know their email address. Start by clicking the "%3" button.<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'OrganizationShortName'),2=>$_smarty_tpl->tpl_vars['dropoff_t']->value,3=>$_smarty_tpl->tpl_vars['em_dropoff_t']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></td>
  </tr>
  <tr class="ud_error_message">
    <td><i class="fas fa-fw"></i></td>
    <td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no',1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'OrganizationShortName'),2=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'OrganizationShortType'),3=>$_smarty_tpl->tpl_vars['em_request_t']->value));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'OrganizationShortName'),2=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'OrganizationShortType'),3=>$_smarty_tpl->tpl_vars['em_request_t']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>%1 users who wish someone outside %2 to send them files, can make it a lot easier for them by logging in and clicking "%3". That saves the other person having to prove who they are.<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'OrganizationShortName'),2=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'OrganizationShortType'),3=>$_smarty_tpl->tpl_vars['em_request_t']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array(1=>$_smarty_tpl->tpl_vars['requestTTL']->value));
$_block_repeat=true;
echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['requestTTL']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>The request created will be valid for %1.<?php $_block_repeat=false;
echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['requestTTL']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?><br/>&nbsp;</td>
  </tr>
  <tr class="ud_error_message">
    <td><i class="fas fa-fw"></i></td>
    <td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array(1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ServiceTitle'),2=>$_smarty_tpl->tpl_vars['maxFileSize']->value,3=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'OrganizationShortType')));
$_block_repeat=true;
echo smarty_block_t(array(1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ServiceTitle'),2=>$_smarty_tpl->tpl_vars['maxFileSize']->value,3=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'OrganizationShortType')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>%1 is a service to make it easy for you to move files, including large files up to %2, in and out of %3.<?php $_block_repeat=false;
echo smarty_block_t(array(1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ServiceTitle'),2=>$_smarty_tpl->tpl_vars['maxFileSize']->value,3=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'OrganizationShortType')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?><br/>&nbsp;</td>
  </tr>
  <tr class="ud_error_message">
    <td><i class="fas fa-question-circle fa-fw"></i></td>
    <td><a href="<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'hidePHPExt', array('t'=>'security.php'), false);?>
"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array(1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ServiceTitle')));
$_block_repeat=true;
echo smarty_block_t(array(1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ServiceTitle')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>How secure is %1?<?php $_block_repeat=false;
echo smarty_block_t(array(1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ServiceTitle')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></a></td>
  </tr>
  </table>
</div>
<br/>
<div id="error">
  <table class="UD_error" width="100%">
  <tr class="ud_error_message">
    <td style="width:5px"><i class="fas fa-exclamation-circle"></i></td>
    <td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array(1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ServiceTitle'),2=>$_smarty_tpl->tpl_vars['keepForDays']->value));
$_block_repeat=true;
echo smarty_block_t(array(1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ServiceTitle'),2=>$_smarty_tpl->tpl_vars['keepForDays']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Files are automatically deleted from %1 %2 days after you upload them.<?php $_block_repeat=false;
echo smarty_block_t(array(1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ServiceTitle'),2=>$_smarty_tpl->tpl_vars['keepForDays']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></td>
  </tr>
  </table>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
