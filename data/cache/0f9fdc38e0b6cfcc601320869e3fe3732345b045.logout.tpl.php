<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-09 11:46:06
  from '/opt/zendto/templates/logout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f58a45ecfc084_28470774',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d820f4172bb5facdbb5dfe77d3cd29635ce1f0f' => 
    array (
      0 => '/opt/zendto/templates/logout.tpl',
      1 => 1583337402,
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
function content_5f58a45ecfc084_28470774 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'hidePHPExt' => 
  array (
    'compiled_filepath' => '/var/zendto/templates_c/bc72b3c654f7aa91ab3f54ebaf6f189ff001cd81_0.file.functions.tpl.cache.php',
    'uid' => 'bc72b3c654f7aa91ab3f54ebaf6f189ff001cd81',
    'call_name' => 'smarty_template_function_hidePHPExt_13975213085f58a45ec97a92_65227787',
  ),
  'button' => 
  array (
    'compiled_filepath' => '/var/zendto/templates_c/bc72b3c654f7aa91ab3f54ebaf6f189ff001cd81_0.file.functions.tpl.cache.php',
    'uid' => 'bc72b3c654f7aa91ab3f54ebaf6f189ff001cd81',
    'call_name' => 'smarty_template_function_button_13975213085f58a45ec97a92_65227787',
  ),
  'footerButtons' => 
  array (
    'compiled_filepath' => '/var/zendto/templates_c/bc72b3c654f7aa91ab3f54ebaf6f189ff001cd81_0.file.functions.tpl.cache.php',
    'uid' => 'bc72b3c654f7aa91ab3f54ebaf6f189ff001cd81',
    'call_name' => 'smarty_template_function_footerButtons_13975213085f58a45ec97a92_65227787',
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

    <meta http-equiv="refresh" content="10;URL=http://zendto.localhost/">

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
    '<input type="hidden" name="template" id="template" value="logout.tpl"/>'+
    //'<input type="hidden" name="goingto" id="goingto" value=""/>'+
    //'<input type="hidden" name="getput" id="getput" value=""/>'+
    '<input type="hidden" name="getdata" id="getdata" value="{&quot;action&quot;:&quot;logout&quot;}"/>'+
    '<input type="hidden" name="postdata" id="postdata" value="[]"/>');

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


<div id="info">
  <table class="UD_error" width="100%">
  <tr class="ud_error_message">
    <td class="UD_error_logo"><i class="fas fa-info-circle fa-fw"></i></td>
    <td>You have been logged out.</td>
  </tr>
  <tr class="ud_error_message">
    <td class="UD_error_logo"><i class="fas fa-fw"></i></td>
    <td>For better security, you should also exit this browser, or at least close this browser window.</td>
  </tr>
  <tr class="ud_error_message">
    <td class="UD_error_logo"><i class="fas fa-fw"></i></td>
    <td>You will be redirected to the <a href="http://zendto.localhost/">main menu</a> in a moment.</td>
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
