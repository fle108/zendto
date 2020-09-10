<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-09 16:04:30
  from '/opt/zendto/templates/main_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f58e0eecde046_36240037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6589cea3d6fc662e66e11280f00e023cec6383d2' => 
    array (
      0 => '/opt/zendto/templates/main_menu.tpl',
      1 => 1591268768,
      2 => 'file',
    ),
    '9da848d4b67ceaa147b62c8524dedce691bc7ce2' => 
    array (
      0 => '/opt/zendto/templates/header.tpl',
      1 => 1594820734,
      2 => 'file',
    ),
    'bc72b3c654f7aa91ab3f54ebaf6f189ff001cd81' => 
    array (
      0 => '/opt/zendto/templates/functions.tpl',
      1 => 1590403872,
      2 => 'file',
    ),
    '3a52a3531ebe41004b5f13fe7c5f8df363ccad65' => 
    array (
      0 => '/opt/zendto/templates/footer.tpl',
      1 => 1583337402,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_5f58e0eecde046_36240037 (Smarty_Internal_Template $_smarty_tpl) {
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
?><!DOCTYPE html
        PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
         "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">






<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" xml:lang="en-US">
  <head>
    <title>ZendTo</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Mono"/>
    <link rel="stylesheet" type="text/css" href="css/fontawesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/fa-solid.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/swish2.css"/>
    <link rel="stylesheet" type="text/css" href="css/local.css"/>


        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <script type="text/javascript">
                    var ZTUSERNAME = "Southampton Username";
          var ZTPASSWORD = "Password";
          var ZTLOGIN    = "Login";
          var ZTFIRST    = "First";
          var ZTLAST     = "Last";
          var ZTNEXT     = "Next";
          var ZTPREVIOUS = "Previous";
          // Display the reCAPTCHA
          var onloadCallback = function() {
            grecaptcha.render('google-recaptcha', {
              'sitekey' : ''
            });
          };
        </script>
        <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="js/facebox/facebox.js"></script>
<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="js/buttons.html5.min.js"></script>
<script type="text/javascript" src="js/moment-2.26.0.min.js"></script>
<script type="text/javascript" src="js/datetime-moment.js"></script>
<link href="js/facebox/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/main.js"></script>

<script type="text/javascript">
var isLocal = "";
var howWeGotHere = "index.php";
var mainFormName = "";

  var localeList = [{"locale":"cs_CZ","name":"\u010ce\u0161tina"},{"locale":"de_DE","name":"Deutsch"},{"locale":"en_GB","name":"English (UK)"},{"locale":"en_US","name":"English (US)"},{"locale":"es_ES","name":"Espa&ntilde;ol"},{"locale":"fr_FR","name":"Fran&ccedil;ais"},{"locale":"gl_ES","name":"Galego"},{"locale":"it_IT","name":"Italiano"},{"locale":"hu_HU","name":"Magyar"},{"locale":"nl_NL","name":"Nederlands"},{"locale":"pl_PL","name":"Polski"},{"locale":"pt_BR","name":"Portugu&ecirc;s (BR)"},{"locale":"ru_RU","name":"&#1056;&#1091;&#1089;&#1089;&#1082;&#1080;&#1081;"},{"locale":"tr_TR","name":"T\u00fcrk\u00e7e"}];
  
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
  
    // Populate the language picker
  target = $('#localeMenu');
  $.each(localeList, function(i, v){
    if (v.locale === 'en_US') {
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
      action: 'http://zendto.localhost/changelocale',
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
    '<input type="hidden" name="gothere" id="gothere" value="index.php"/>'+
    '<input type="hidden" name="template" id="template" value="main_menu.tpl"/>'+
    //'<input type="hidden" name="goingto" id="goingto" value=""/>'+
    //'<input type="hidden" name="getput" id="getput" value=""/>'+
    '<input type="hidden" name="getdata" id="getdata" value="[]"/>'+
    '<input type="hidden" name="postdata" id="postdata" value="{&quot;uname&quot;:&quot;admin&quot;}"/>');

  // hide the language menu if user clicks outside it
  $(window).on('click', function(e) {
    if (! $(e.target).hasClass('dropdownButton')) {
      $('#localeMenu').removeClass('show');
    }
  });
   });
</script>

</head>
<body id="zendtobody">


<!-- Begin page content -->
<div class="content">
        <div id="logo"><div id="logoxclip"><a href="http://zendto.localhost/">ZendTo</a></div></div>

        <!-- Home, Inbox, etc buttons -->
        <div id="topMenu">
                <ul>
                        <li id="homeLink" class="selected"><a href="http://zendto.localhost/">Home</a></li>
                                                                        <li id="loginLink"><a href="index?action=login">Login</a></li>
                                </ul>
        </div>
        <!-- Home, Inbox etc ends here -->

        <!-- Language menu goes here -->
        <div id="localePicker" class="dropdownMenu">
                      <a onclick="showLocaleMenu()" id="localeButton" name="localeButton" class="dropdownButton dropdown-has-hover"></a>
            <div id="localeMenu" class="dropdownContent"></div>
                  </div>
        <!-- Language menu ends here -->

        <div id="container">

        <div id="error">
            <table class="UD_error" width="75%">
                        <tr>
                <td class="UD_error_logo UD_error_title"><i class="fas fa-exclamation-circle fa-fw"></i></td><td class="UD_error_title">Authentication Error</td>
              </tr>
              <tr>
                <td class="UD_error_logo UD_error_message"><i class="fas fa-fw"></i></td><td class="UD_error_message">The username or password was incorrect.</td>
              </tr>
                      </table>
        </div>

<!--[if lt IE 9]>
<script type="text/javascript">
  alert("You are using an old unsupported version of Internet Explorer.\nThis site will not work correctly with this web browser.\nPlease use a better web browser, such as Google Chrome or Firefox, or at least Internet Explorer 11.");
</script>
<![endif]-->



  <!-- Not logged in. -->
<table border="0" class="homeButtons">
    <tr><td colspan="2"><h4>If you are a Southampton user, you may login here:</h4></td></tr>
  <tr>
    <td>
                          <table width="100%" class="UD_textbutton">
    <tr valign="middle">
      <td class="UD_textbutton_content" align="center"><a class="UD_textbutton" href="index?action=login">Login</a></td>
    </tr>
  </table>
</td>
    <td class="UD_nav_label"><strong>Avoid having to verify your email address</strong>,<br/>and drop-off files to non-Southampton users.</td>
  </tr>
  <tr><td colspan="2">&nbsp;</td></tr>
      <tr><td colspan="2"><h4>Anyone may perform the following activities:</h4></td></tr>
    <tr>
    <td>
                          <table width="100%" class="UD_textbutton">
    <tr valign="middle">
      <td class="UD_textbutton_content" align="center"><a class="UD_textbutton" href="verify">Drop-off</a></td>
    </tr>
  </table>
</td>
    <td class="UD_nav_label">Drop-off (<em>upload</em>) a file for a Southampton user (<strong>email verification required</strong>).</td>
  </tr>
      <tr>
    <td>
                          <table width="100%" class="UD_textbutton">
    <tr valign="middle">
      <td class="UD_textbutton_content" align="center"><a class="UD_textbutton" href="pickup">Pick-up</a></td>
    </tr>
  </table>
</td>
    <td class="UD_nav_label">Pick-up (<em>download</em>) a file dropped off for you.</td>
  </tr>
    <tr><td colspan="2">&nbsp;</td></tr>
  </table>


<div id="info">
  <table class="UD_error" width="100%">
  <tr class="ud_error_message">
    <td><i class="fas fa-info-circle fa-fw"></i></td>
    <td>Southampton users: you may login with your username and password and send files to anyone, in or out of the University.</td>
  </tr>
  <tr class="ud_error_message">
    <td><i class="fas fa-fw"></i></td>
    <td>Non-Southampton users: you cannot log in, but can still send files to Southampton users if you know their email address. Start by clicking the "<em>Drop-off</em>" button.</td>
  </tr>
  <tr class="ud_error_message">
    <td><i class="fas fa-fw"></i></td>
    <td>Southampton users who wish someone outside the University to send them files, can make it a lot easier for them by logging in and clicking "<em>Request a Drop-off</em>". That saves the other person having to prove who they are. The request created will be valid for 7 days.<br/>&nbsp;</td>
  </tr>
  <tr class="ud_error_message">
    <td><i class="fas fa-fw"></i></td>
    <td>ZendTo is a service to make it easy for you to move files, including large files up to 20.0 GB, in and out of the University.<br/>&nbsp;</td>
  </tr>
  <tr class="ud_error_message">
    <td><i class="fas fa-question-circle fa-fw"></i></td>
    <td><a href="security">How secure is ZendTo?</a></td>
  </tr>
  </table>
</div>
<br/>
<div id="error">
  <table class="UD_error" width="100%">
  <tr class="ud_error_message">
    <td style="width:5px"><i class="fas fa-exclamation-circle"></i></td>
    <td>Files are automatically deleted from ZendTo 14 days after you upload them.</td>
  </tr>
  </table>
</div>

<!-- End page content -->

  </div>
</div>

<div id="footer">
    <span style="white-space: nowrap">Version 6.03-5&nbsp;|&nbsp;Copyright &copy; 2020 ZendTo&nbsp;|&nbsp;<a href="about">About ZendTo</a></span>
    <br/>
  <span style="white-space: nowrap">This service is powered by a copy of <a href="http://zend.to/" target="_blank">ZendTo</a></span>
</div>

</body>
</html>
<?php }
}
