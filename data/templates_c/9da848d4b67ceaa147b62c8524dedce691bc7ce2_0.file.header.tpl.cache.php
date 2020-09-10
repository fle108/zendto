<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-09 16:04:30
  from '/opt/zendto/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f58e0eec17385_39698340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9da848d4b67ceaa147b62c8524dedce691bc7ce2' => 
    array (
      0 => '/opt/zendto/templates/header.tpl',
      1 => 1594820734,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:functions.tpl' => 1,
  ),
),false)) {
function content_5f58e0eec17385_39698340 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/zendto/lib/smarty/plugins/function.locale.php','function'=>'smarty_function_locale',),1=>array('file'=>'/opt/zendto/lib/smarty/plugins/block.t.php','function'=>'smarty_block_t',),));
$_smarty_tpl->compiled->nocache_hash = '1438867655f58e0eebf5ef7_18910145';
?>
<!DOCTYPE html
        PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
         "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php $_smarty_tpl->_subTemplateRender("file:functions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo smarty_function_locale(array('path'=>"../config/locale",'domain'=>"zendto"),$_smarty_tpl);?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" xml:lang="en-US">
  <head>
    <title><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ServiceTitle');?>
</title>
<?php if (strpos($_smarty_tpl->tpl_vars['thisTemplate']->value,'_list') !== false) {?>
        <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/buttons.dataTables.min.css"/>
<?php }
if (strpos($_smarty_tpl->tpl_vars['thisTemplate']->value,'new_dropoff') !== false) {?>
    <link rel="stylesheet" href="css/jquery-ui.min.css">
<?php }?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Mono"/>
    <link rel="stylesheet" type="text/css" href="css/fontawesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/fa-solid.min.css"/>
<?php if ($_smarty_tpl->tpl_vars['cookieGDPRConsent']->value) {?>
        <link rel="stylesheet" type="text/css" href="css/cookieconsent.min.css"/>
<?php }?>
    <link rel="stylesheet" type="text/css" href="css/<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'CSSTheme');?>
.css"/>
    <link rel="stylesheet" type="text/css" href="css/local.css"/>

<?php if ($_smarty_tpl->tpl_vars['autoHome']->value) {?>
    <meta http-equiv="refresh" content="10;URL=<?php echo $_smarty_tpl->tpl_vars['zendToURL']->value;?>
">
<?php }?>

        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <?php echo '<script'; ?>
 type="text/javascript">
                    var ZTUSERNAME = "<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array(1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'OrganizationShortName')));
$_block_repeat=true;
echo smarty_block_t(array(1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'OrganizationShortName')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>%1 Username<?php $_block_repeat=false;
echo smarty_block_t(array(1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'OrganizationShortName')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>";
          var ZTPASSWORD = "<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Password<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>";
          var ZTLOGIN    = "<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Login<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>";
          var ZTFIRST    = "<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>First<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>";
          var ZTLAST     = "<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Last<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>";
          var ZTNEXT     = "<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Next<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>";
          var ZTPREVIOUS = "<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Previous<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>";
          // Display the reCAPTCHA
          var onloadCallback = function() {
            grecaptcha.render('google-recaptcha', {
              'sitekey' : '<?php echo $_smarty_tpl->tpl_vars['recaptchaSiteKey']->value;?>
'
            });
          };
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['recaptchaHTML']->value != '') {?>
  <?php if ($_smarty_tpl->tpl_vars['invisibleCaptcha']->value) {?>
        <?php echo '<script'; ?>
 src="https://www.recaptcha.net/recaptcha/api.js?hl=<?php echo $_smarty_tpl->tpl_vars['recaptchaLang']->value;?>
" async defer><?php echo '</script'; ?>
>
  <?php } else { ?>
        <?php echo '<script'; ?>
 src="https://www.recaptcha.net/recaptcha/api.js?hl=<?php echo $_smarty_tpl->tpl_vars['recaptchaLang']->value;?>
&onload=onloadCallback&render=explicit" async defer><?php echo '</script'; ?>
>
  <?php }
}
if ($_smarty_tpl->tpl_vars['cookieGDPRConsent']->value) {?>
    <?php echo '<script'; ?>
 src="js/cookieconsent.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
    window.addEventListener("load", function(){
    // If they didn't accept the rules, wipe the cookie and ask again
    b = document.cookie.match('(^|;)\\s*cookieconsent_status\\s*=\\s*([^;]+)');
    c = b ? b.pop() : '';
    if (c === "dismiss")
      document.cookie = 'cookieconsent_status=; expires=Thu, 01 Jan 1970 00:00:01 GMT; path="/"';
    // Set up the cookieconsent box
    window.cookieconsent.initialise({
      "palette": {
        "popup": {
          "background": "#fcffe7",
          "text": "#000000"
        },
        "button": {
          "background": "#1f88c1",
          "text": "#ffffff"
        }
      },
      "cookie.name": "zendto-cookieconsent_status",
      "cookie.domain": "<?php echo $_smarty_tpl->tpl_vars['cookieDomain']->value;?>
",
      "cookie.expiryDays": -1,
      "theme": "classic",
      "type": "opt-in",
      "revokable": false,
      "revokeBtn": '<div class="cc-revoke {{classes}}"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Privacy Consent<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></div>',
      "blacklistPage": [ '<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'hidePHPExt', array('t'=>'/about.php'), false);?>
' ],
      "onStatusChange": function(status, chosenBefore) {
        if (status === "dismiss")
          window.location.href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'CannotUseService');?>
";
      },
      "content": {
        "message": "<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>This website uses a cookie & has to use your name & email address to function.<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>",
        "allow": "<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>I agree<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>",
        "deny": "<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>I do not agree<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>",
        "link": "<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array(1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ServiceTitle')));
$_block_repeat=true;
echo smarty_block_t(array(1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ServiceTitle')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>About %1<?php $_block_repeat=false;
echo smarty_block_t(array(1=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ServiceTitle')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>",
        "href": "<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'PrivacyInfoWebPage');?>
"
      }
    })});
    <?php echo '</script'; ?>
>
<?php }
echo '<script'; ?>
 type="text/javascript" src="js/facebox/facebox.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/dataTables.buttons.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/buttons.html5.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/moment-2.26.0.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/datetime-moment.js"><?php echo '</script'; ?>
>
<link href="js/facebox/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 type="text/javascript" src="js/main.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
var isLocal = "<?php echo $_smarty_tpl->tpl_vars['isLocalIP']->value;?>
";
var howWeGotHere = "<?php echo $_smarty_tpl->tpl_vars['gotHere']->value;?>
";
var mainFormName = "";

<?php if ($_smarty_tpl->tpl_vars['localeList']->value == '' || $_smarty_tpl->tpl_vars['localeList']->value == '[]') {?>
  // Safety measure -- PHP will tell us if we should show locale menu
  var localeList = [];
  <?php $_smarty_tpl->_assignInScope('showLocales', false);
} else { ?>
  var localeList = <?php echo $_smarty_tpl->tpl_vars['localeList']->value;?>
;
  <?php $_smarty_tpl->_assignInScope('showLocales', true);
}?>

// Select the Inbox/Outbox tab as necessary
function selectMenu(){
  // Choose inbox if we are at pickup_list or got here via that page
  if (/pickup_list/i.test(window.location + howWeGotHere))
    selectMenuItem('#inboxLink');
  // Choose outbox if we are at dropoff_list or got here via that page
  if (/dropoff_list/i.test(window.location + howWeGotHere))
    selectMenuItem('#outboxLink');
}

// Hide/show locale menu
function showLocaleMenu() {
  $('#localeMenu').toggleClass('show');
}

$(document).ready(function() {
  // Select the inbox/outbox tab
  selectMenu();
  // Setup login box
  if( $('#loginLink a').length > 0 ) bindLogin();
  if( isLocal == "1" && $('#loginLink').length == 1 )
    $('#loginLink a').trigger('click');

  // Set the focus if wanted
  <?php if ($_smarty_tpl->tpl_vars['focusTarget']->value != '') {?>
  document.<?php echo $_smarty_tpl->tpl_vars['focusTarget']->value;?>
.focus();
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['showLocales']->value) {?>
  // Populate the language picker
  target = $('#localeMenu');
  $.each(localeList, function(i, v){
    if (v.locale === '<?php echo $_smarty_tpl->tpl_vars['currentLocale']->value;?>
') {
      // It's the current one, so use it as the menu title instead
      $('#localeButton').html(v.name);
    } else {
      $(target).append(
        $('<a>', {
          href: '#',
          html: v.name,
          'locale': v.locale,
          class: 'localeLink'
        }));
    }
  });
  // What is the name of the main form, so we can get its target?
  mainForm = $('form').filter(":visible").filter(":last");
  // Can set these now, as only the show_dropoff page has 3 forms in it
  target = $('<a>', { href: mainForm.attr('action') });
  //$('#goingto').val( target.prop('pathname') );
  //$('#getput').val( mainForm.attr('method') );
  // Setup the language picker link handlers
  $('a.localeLink').on('click', function() {
    // Put the new locale name into the form, and submit it
    $('#locale').val( $(this).attr('locale') );
    // Might need to override the values of goingto in the show_dropoff page
    $('#localeForm').submit();
    return false;
  });
  // Append the invisible form we need to submit the locale change
  $('#container').append(
    $('<form>', {
      name: 'localeForm',
      id:   'localeForm',
      method: 'post',
      action: '<?php echo $_smarty_tpl->tpl_vars['zendToURL']->value;
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'hidePHPExt', array('t'=>'changelocale.php'), false);?>
',
      enctype: 'multipart/form-data',
      style: 'display:none'
    }));
  // And put the single element in the form
  // What our new locale is, what php file ran to get us here,
  // what php file should pick up this page's data,
  // and all the get+post data in the form (except for massive stuff).
  // In a lot of cases, we will throw away most/all of the form data.
  $('#localeForm')
    .append('<input type="hidden" name="locale" id="locale" value=""/>'+
    '<input type="hidden" name="gothere" id="gothere" value="<?php echo $_smarty_tpl->tpl_vars['gotHere']->value;?>
"/>'+
    '<input type="hidden" name="template" id="template" value="<?php echo $_smarty_tpl->tpl_vars['thisTemplate']->value;?>
"/>'+
    //'<input type="hidden" name="goingto" id="goingto" value="<?php echo $_smarty_tpl->tpl_vars['goingTo']->value;?>
"/>'+
    //'<input type="hidden" name="getput" id="getput" value="<?php echo $_smarty_tpl->tpl_vars['getPut']->value;?>
"/>'+
    '<input type="hidden" name="getdata" id="getdata" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['getData']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/>'+
    '<input type="hidden" name="postdata" id="postdata" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['postData']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/>');

  // hide the language menu if user clicks outside it
  $(window).on('click', function(e) {
    if (! $(e.target).hasClass('dropdownButton')) {
      $('#localeMenu').removeClass('show');
    }
  });
  <?php } else { ?>   // No locale / language picker here at all
  $('#localePicker').css('display', 'none');
  <?php }?> });
<?php echo '</script'; ?>
>

</head>
<body id="zendtobody">

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "logoutUrl", null);
if ($_smarty_tpl->tpl_vars['SAML']->value) {
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'hidePHPExt', array('t'=>'samllogout.php'), false);
} else {
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'hidePHPExt', array('t'=>'index.php'), false);?>
?action=logout<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<!-- Begin page content -->
<div class="content">
        <div id="logo"><div id="logoxclip"><a href="<?php echo $_smarty_tpl->tpl_vars['zendToURL']->value;?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ServiceLogo');?>
</a></div></div>

        <!-- Home, Inbox, etc buttons -->
        <div id="topMenu">
                <ul>
                        <li id="homeLink" class="selected"><a href="<?php echo $_smarty_tpl->tpl_vars['zendToURL']->value;?>
"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Home<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></a></li>
                <?php if ($_smarty_tpl->tpl_vars['isAuthorizedUser']->value) {?>
                        <li id="inboxLink"><a href="<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'hidePHPExt', array('t'=>'pickup_list.php'), false);?>
"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Inbox<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></a></li>
                        <li id="outboxLink"><a href="<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'hidePHPExt', array('t'=>'dropoff_list.php'), false);?>
"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Outbox<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></a></li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['isAuthorizedUser']->value || $_smarty_tpl->tpl_vars['samlIsLoggedIn']->value) {?>
                        <li id="logoutLink"><a href="<?php echo $_smarty_tpl->tpl_vars['logoutUrl']->value;?>
"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Logout<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></a></li>
                <?php }?>
                <?php if (!$_smarty_tpl->tpl_vars['isAuthorizedUser']->value && !$_smarty_tpl->tpl_vars['SAML']->value && ($_smarty_tpl->tpl_vars['isLocalIP']->value || $_smarty_tpl->tpl_vars['allowExternalLogins']->value)) {?>
                        <li id="loginLink"><a href="<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'hidePHPExt', array('t'=>'index.php'), false);?>
?action=login"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Login<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></a></li>
                <?php }?>
                </ul>
        </div>
        <!-- Home, Inbox etc ends here -->

        <!-- Language menu goes here -->
        <div id="localePicker" class="dropdownMenu">
          <?php if ($_smarty_tpl->tpl_vars['showLocales']->value) {?>
            <a onclick="showLocaleMenu()" id="localeButton" name="localeButton" class="dropdownButton dropdown-has-hover"></a>
            <div id="localeMenu" class="dropdownContent"></div>
          <?php }?>
        </div>
        <!-- Language menu ends here -->

        <div id="container">

<?php if (count($_smarty_tpl->tpl_vars['errors']->value) > 0) {?>
        <div id="error">
            <table class="UD_error" width="75%">
          <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = 0;
if ($_smarty_tpl->tpl_vars['i']->value < count($_smarty_tpl->tpl_vars['errors']->value)) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value < count($_smarty_tpl->tpl_vars['errors']->value); $_smarty_tpl->tpl_vars['i']->value++) {
?>
              <tr>
                <td class="UD_error_logo UD_error_title"><i class="fas fa-exclamation-circle fa-fw"></i></td><td class="UD_error_title"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->tpl_vars['i']->value]['title'])===null||$tmp==='' ? "&nbsp;" : $tmp);?>
</td>
              </tr>
              <tr>
                <td class="UD_error_logo UD_error_message"><i class="fas fa-fw"></i></td><td class="UD_error_message"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->tpl_vars['i']->value]['text'])===null||$tmp==='' ? "&nbsp;" : $tmp);?>
</td>
              </tr>
          <?php }
}
?>
            </table>
        </div>
<?php }
}
}
