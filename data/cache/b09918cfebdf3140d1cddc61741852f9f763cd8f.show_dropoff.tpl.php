<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-09 10:46:37
  from '/opt/zendto/templates/show_dropoff.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f58966dbefc17_58957098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bafc0de2b3df393f6a28e83524f43264c9aa3bc' => 
    array (
      0 => '/opt/zendto/templates/show_dropoff.tpl',
      1 => 1594376424,
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
function content_5f58966dbefc17_58957098 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'hidePHPExt' => 
  array (
    'compiled_filepath' => '/var/zendto/templates_c/bc72b3c654f7aa91ab3f54ebaf6f189ff001cd81_0.file.functions.tpl.cache.php',
    'uid' => 'bc72b3c654f7aa91ab3f54ebaf6f189ff001cd81',
    'call_name' => 'smarty_template_function_hidePHPExt_20494842415f58966db931a1_87933642',
  ),
  'button' => 
  array (
    'compiled_filepath' => '/var/zendto/templates_c/bc72b3c654f7aa91ab3f54ebaf6f189ff001cd81_0.file.functions.tpl.cache.php',
    'uid' => 'bc72b3c654f7aa91ab3f54ebaf6f189ff001cd81',
    'call_name' => 'smarty_template_function_button_20494842415f58966db931a1_87933642',
  ),
  'footerButtons' => 
  array (
    'compiled_filepath' => '/var/zendto/templates_c/bc72b3c654f7aa91ab3f54ebaf6f189ff001cd81_0.file.functions.tpl.cache.php',
    'uid' => 'bc72b3c654f7aa91ab3f54ebaf6f189ff001cd81',
    'call_name' => 'smarty_template_function_footerButtons_20494842415f58966db931a1_87933642',
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
var howWeGotHere = "pickup.php";
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
      action: 'http://localhost/changelocale',
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
    '<input type="hidden" name="gothere" id="gothere" value="pickup.php"/>'+
    '<input type="hidden" name="template" id="template" value="show_dropoff.tpl"/>'+
    //'<input type="hidden" name="goingto" id="goingto" value=""/>'+
    //'<input type="hidden" name="getput" id="getput" value=""/>'+
    '<input type="hidden" name="getdata" id="getdata" value="[]"/>'+
    '<input type="hidden" name="postdata" id="postdata" value="{&quot;claimID&quot;:&quot;ydD4nj2aQboPoEwN&quot;,&quot;auth&quot;:&quot;9f675606030e9b17a175bf4632091151&quot;}"/>');

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
        <div id="logo"><div id="logoxclip"><a href="http://localhost/">ZendTo</a></div></div>

        <!-- Home, Inbox, etc buttons -->
        <div id="topMenu">
                <ul>
                        <li id="homeLink" class="selected"><a href="http://localhost/">Home</a></li>
                                        <li id="inboxLink"><a href="pickup_list">Inbox</a></li>
                        <li id="outboxLink"><a href="dropoff_list">Outbox</a></li>
                                                        <li id="logoutLink"><a href="index?action=logout">Logout</a></li>
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

<link rel="stylesheet" href="css/jquery-ui.min.css">
<script type="text/javascript" src="js/jquery.balloon.min.js"></script>
<div id="dropoff-inner">

<script type="text/javascript">
<!--

var allowResend = '';
var resenddefaultIsYes = true;
var waiverAgreed = false;
var resendtheysaidyes = false;
var resendtheysaidno  = false;
var showingResendDialog = false;
var showingPasswordDialog = false;
var wantToDownloadAll = false;
var fidTryingToDecrypt = -1;
var ZendTo = new Object();

function doDelete(){
  if ( confirm("Do you really want to delete this dropoff?") ) {
    return document.deleteDropoff.submit();
  }
  return 0;
}


// This is called by the href in the Yes/No buttons in the resend dialog
function resendYesNo(yesno) {
  if (yesno) {
    resendtheysaidyes = true;
    $(document).trigger('close.facebox');
  } else {
    resendtheysaidno = true;
    $(document).trigger('close.facebox');
  }
}

function keyResend(e) {
  if (!showingResendDialog) return false;
  if (e.keyCode == 13) {
    // They pressed Return so do the default
    if (resenddefaultIsYes)
      resendtheysaidyes = true;
    else
      resendtheysaidno = true;
    $(document).trigger('close.facebox');
  }
}

function doResend(){
      showingPasswordDialog = false;
    showingResendDialog   = true;
    $.facebox(ZendTo.resendDialog);
  }

function doDownloadZip() {
  // Download all the files as a zip.
  // Just the same as doing one file, just set fid to 'all'.
  window.location.href = $('#downloadZipLink').attr('href');
}


function doDownloadAll() {
  // Find all the download links in the table of files
  var links = $('#filesTable a[name^="download_"]');

  // This is how to download all the rest (tail recursion)
  function downloadNext(i) {
    // Bail out if reached the end of the list
    if (i >= links.length) {
      // But re-enable the buttons first!
      $('#deleteButton').prop('disabled', false).removeClass('greyButton');
      $('#resendButton').prop('disabled', false).removeClass('greyButton');
      $('#downloadAllButton').prop('disabled', false).removeClass('greyButton');
      $('#downloadZipButton').prop('disabled', false).removeClass('greyButton');
      return;
    }

    // Highlight the link we are downloading
    $(links[i]).addClass('downloading');

    if (links[i].click)
      // Most browsers have a click() function
      links[i].click();
    else
      // else back off to the jQuery version
      $(links[i]).click();

    // Pause for 1000ms then start all the rest
    // The pause makes it more likely to work!
    setTimeout(function() {
      // De-highlight the link again
      $(links[i]).removeClass('downloading');
      // Start all the rest (the tail recursive bit)
      downloadNext(i+1);
    }, 1000);
  }

  

  // Stop us looping if something fails
  wantToDownloadAll = false;
  // First disable the buttons on the page
  $('#deleteButton').prop('disabled', true).addClass('greyButton');
  $('#resendButton').prop('disabled', true).addClass('greyButton');
  $('#downloadAllButton').prop('disabled', true).addClass('greyButton');
  $('#downloadZipButton').prop('disabled', true).addClass('greyButton');
  // Then kick it all off by starting to download the first one
  downloadNext(0);
}



$(document).ready(function() {
    
      $('#deleteButton').on('click', doDelete);
        $('#resendButton').on('click', doResend);
            $('#downloadAllDiv').css('display', 'flex');
    $('#downloadZipButton').on('click', doDownloadZip);
    // If we are not on IE, enable and show "download all" button
    if (! /MSIE\s|Trident\//i.test(navigator.userAgent)) {
      $('#downloadAllButton').on('click', doDownloadAll);
            $('#downloadAllButton').css('display', 'inline');
    }
  
  //
  // Now set up the facebox dialogs
  //

  $(document).on('keyup', '#resendDialog', keyResend);

  // Bind to the reveal of facebox
  $(document).on('reveal.facebox', function(){
    if (showingResendDialog) {
      // Set up the resend dialog box
      if (resenddefaultIsYes) {
        $('#passcodeYes').addClass('UD_buttonchosen').trigger('focus');
        $('#passcodeNo').removeClass('UD_buttonchosen');
      } else {
        $('#passcodeNo').addClass('UD_buttonchosen').trigger('focus');
        $('#passcodeYes').removeClass('UD_buttonchosen');
      }
      if (resenddefaultIsYes) {
        $('#passcodeYes').addClass('UD_buttonchosen').trigger('focus');
        $('#passcodeNo').removeClass('UD_buttonchosen');
      } else {
        $('#passcodeNo').addClass('UD_buttonchosen').trigger('focus');
        $('#passcodeYes').removeClass('UD_buttonchosen');
      }
    }
  });


  // Bind to facebox's close event
  // This gets called when the box is closed for any reason
  $(document).on('close.facebox', function(){
    if (showingResendDialog) {
      showingResendDialog   = false;
      showingPasswordDialog = false; // Reset both to be sure
      // Not an if-then-else as I want 3 choices.
      if (resendtheysaidyes) {
        $('#resendWithPasscode').val("yes");
        //$('.content').css('cursor', 'wait');
        return document.resendDropoff.submit();
      }
      if (resendtheysaidno) {
        $('#resendWithPasscode').val("no");
        //$('.content').css('cursor', 'wait');
        return document.resendDropoff.submit();
      }
      return false; // Probably thumped escape, so abandon
    }
  });

  // Get the dialogs and copy them into new objects + remove from the DOM.
  ZendTo.passwordDialog = $('#passwordDialog').html();
  ZendTo.resendDialog   = $('#resendDialog').html();
  $('#passwordDialog').remove();
  $('#resendDialog').remove();

  // Do we want to show and enforce the waiver text?
  // First 2 mean: are we a recipient seeing this?
      // Show the main table of the drop-off summary and files
    $('#dropoffTable').css('display', 'table');
    // The "copy to clipboard" button for the link, if it exists
  if ($('#linkbox').length) {
    const copytext = 'Click to copy link to clipboard';
    const copiedtext = 'Copied';
    var linktext = $('#linkbox').val();
    linktext = linktext.match(/^(\S+)/)[0]; // Up to 1st whitespace
    $('#copylinkButton').on('click', function() {
      // Create a temporary input element, fill it, select it, copy it, kill it
      var $temp = $('<input>');
      $("body").append($temp);
      $temp.val(linktext).select();
      document.execCommand("copy");
      $temp.remove();
      // Change the tooltip text. hideComplete() will reset it on mouseleave.
      // I know it doesn't line up right. I can't fix that without major
      // changes to jquery.balloon.js which I didn't write.
      $('#copylinktip').text(copiedtext);
    });
    $('#copylinkButton').balloon({
      position: "top left",
      html: true,
      css: { fontSize: '100%', 'max-width': '40vw' },
      contents: '<span name="copylinktip" id="copylinktip">'+copytext+'</span>',
      showAnimation: function (d, c) { this.fadeIn(d, c); },
      // This puts the original text back on exit, in case click changed it
      hideComplete: function (d) { $('#copylinktip').text(copytext); }
    });
  }
});

//-->
</script>

<span style="display:none">
<div id="resendDialog">
  <h1>Include Passcode?</h1>
  <p>Should the Passcode be included in the emails as well as the Claim ID?</p><p>Click 'Yes' if you are not sure.</p>
  <p class="center" style="margin: 25px 20px 20px">
    <a href="javascript:resendYesNo(true);" id="passcodeYes" name="passcodeYes" class="greyButton" style="float:none;">Yes</a> <a href="javascript:resendYesNo(false);" id="passcodeNo" name="passcodeNo" class="greyButton" style="float:none">No</a>
  </p>
</div>

<div id="passwordDialog">
        <h1>Decryption Passphrase</h1>
        <div class="center dark-red"><strong>You can ask the sender<br/>for the decryption passphrase.</strong></div>
        <div class="center" style="white-space:nowrap">
        <table border="0" width="100%" style="padding:0px"><tr>
          <td class="ui-widget" style="padding-bottom:5px">
            <label for="decryptPassword" class="UILabel">Passphrase:</label></td>
          <td class="ui-widget" style="float:left;padding-bottom:5px">
             <input type="text" id="decryptPassword" name="decryptPassword" size="30" autocomplete="off" value=""/></td>
        </tr><tr>
          <td class="ui-widget">&nbsp;</td>
          <td class="ui-widget" style="float:left">
            <input type="checkbox" name="hideDecryptChars" id="hideDecryptChars" checked="checked"/> <label for="hideDecryptChars">Hide characters</label></td>
          </td>
        </tr><tr>
          <td colspan="2"><button name="setPasswordButton" id="setPasswordButton"  style="margin:0px;margin-top:5px" onclick="javascript:setDecryptPassword();">OK</button> <button onclick="javascript:cancelDecryptPassword();">Cancel</button></td>
        </tr></table>
        </div>
</div>
</span>


<div style="float:right; display:flex">
<button id="deleteButton" name="deleteButton" class="UD_textbutton_admin">Delete Dropoff</button><button id="resendButton" name="resendButton" class="UD_textbutton_admin">Resend Dropoff</button></div>

 
<h1>Drop-Off Summary</h1>

<span name="waiverSpan" id="waiverSpan" style="display:none">
  <span class="infoBox waiverBox">
    This is a terms and conditions waiver that recipients must agree to.
    <br/>To switch it on/off, see the settings <tt>showRecipientsWaiverCheckbox</tt> and <tt>defaultRecipientsWaiver</tt> in <tt>/opt/zendto/config/preferences.php</tt>.
    <br/>It can be long and may contain HTML tags.
    <br/>To change this text:
    <ol>
      <li>look for this text in the <tt>/opt/zendto/config/locale/*_*/LC_MESSAGES/zendto.po</tt> text files</li>
      <li>put your own text in <tt>msgstr&nbsp;"..."</tt> line(s) immediately following it</li>
      <li>run <tt>/opt/zendto/bin/makelanguages</tt> as root</li>
      <li>restart Apache (to ensure it really picks up the new text).</li>
    </ol>
    <p>This is exactly how you change the text for anything in the ZendTo interface. For more info, read <a href="https://zend.to/translators.php">the translations page in the documentation</a>.</p>    <label for="waiverButton"><input name="waiverButton" id="waiverButton" type="checkbox"/>
    I have read, understood and agree to the terms and conditions above.</label>
  </span>
  <br class="clear"/>
</span>

<table name="dropoffTable" id="dropoffTable" border="0" cellpadding="5" style="width:100%; display:none;">
        <tr valign="top">
    <td></td>
    <td colspan="4" style="padding: 12px">
      <span style="font-size: 1.1em">Click on a filename to download that file.<br/>This drop-off will expire in 13 days and 23 hours.</span>
    </td>
  </tr>
    <tr valign="top">
    <td></td>
    <td>

      <table id="filesTable" name="filesTable" class="UD_form" cellpadding="4" style="width:100%">
        <thead class="UD_form_header">
          <td colspan="2">Filename</td>
          <td align="right">Size</td>
          <td align="center">SHA-256 Checksum</td>
          <td>Description</td>
        </thead>
          <tr class="UD_form_lined" valign="middle">
                        <td width="20" align="center"><a href="http://localhost/download?claimID=ydD4nj2aQboPoEwN&claimPasscode=khFZEvNn83udcsvN&emailAddr=one+of+the+recipients&auth=9f675606030e9b17a175bf4632091151&fid=1" download="Sans titre.txt"><img src="images/filetypes/unknown.svg" border="0" title="" alt=""/></a></td>
          <td class="UD_form_lined mono"><a href="http://localhost/download?claimID=ydD4nj2aQboPoEwN&claimPasscode=khFZEvNn83udcsvN&emailAddr=one+of+the+recipients&auth=9f675606030e9b17a175bf4632091151&fid=1" id="download_1" name="download_1" download="Sans titre.txt" title="Sans titre.txt" alt="Sans titre.txt">Sans titre.txt</a></td>
                        <td class="UD_form_lined" align="right">4&nbsp;bytes</td>
          <td class="UD_form_lined" align="center"><span class="checksum">9F86D081884C7D659A2FEAA0C55AD015<br/>A3BF4F1B2B0B822CD15D6C15B0F00A08</span></td>
          <td>&nbsp;</td>
        </tr>
          <tr class="UD_form_footer">
          <td colspan="5" align="center">&nbsp;<br/>1 file<br />
          <div class="center" style="display:none; justify-content:center; align-items:stretch" name="downloadAllDiv" id="downloadAllDiv">
            <button style="width:auto; display:none" id="downloadAllButton" name="downloadAllButton">Download All Files</button>
              <button style="width:auto" id="downloadZipButton" name="downloadZipButton">Download All Files<br/>as a Zip</button>
            <a name="downloadZipLink" id="downloadZipLink" style="display:none" href="http://localhost/download?claimID=ydD4nj2aQboPoEwN&claimPasscode=khFZEvNn83udcsvN&emailAddr=one+of+the+recipients&auth=9f675606030e9b17a175bf4632091151&fid=all">zip</a>
            </div>
          </td>
        </tr>
      </table>
      <form name="resendDropoff" method="post" action="http://localhost/resend">
        <input type="hidden" name="claimID" value="ydD4nj2aQboPoEwN"/>
        <input type="hidden" name="claimPasscode" value="khFZEvNn83udcsvN"/>
        <input type="hidden" name="resendWithPasscode" value="yes"/>

          <input type="hidden" name="emailAddr" value="one of the recipients"/>
        </form>
      <form name="deleteDropoff" method="post" action="http://localhost/delete">
        <input type="hidden" name="claimID" value="ydD4nj2aQboPoEwN"/>
        <input type="hidden" name="claimPasscode" value="khFZEvNn83udcsvN"/>

          <input type="hidden" name="emailAddr" value="one of the recipients"/>
        </form>

            <form name="decryptDropoff" method="post" action="http://localhost/download?claimID=ydD4nj2aQboPoEwN&claimPasscode=khFZEvNn83udcsvN&emailAddr=one+of+the+recipients">
      </form>

    </td>
  </tr>
</table>

<div class="UILabel">From:</div> <br class="clear" />
<div id="fromHolder"><span id="fromName">Admin ZendTo</span> <span id="fromEmail">&lt;admin@localhost&gt;</span> <span id="fromOrg">Southampton University</span> <span>from 172.17.0.1 on 2020-09-09&nbsp;10:46</span></div>


<div class="UILabel">To:</div> <br class="clear" />
<div id="emailHolder">
                <div class='emailButton'>test &lt;test@test.com&gt;</div>
  </div>
<br class="clear" />

<div class="clearfix" style="display:block; margin-top:3px;">
  <!-- Note and its header on the left -->
  <div style="display:inline-block; float:left; width:50%; vertical-align:top;">
    <div style="display:block;">
          <label class="UILabel" style="margin-top:0px; clear:left;" for="comments">Comments:</label><br />
      <textarea readonly="yes" id="comments" name="comments" style="width: 450px; height: 100px;"></textarea>
        </div>
  </div>

  <!-- ClaimID and Passcode and their headings on the right -->
  <div style="display:inline-block; float:left; width:50%; vertical-align:top;">
    <div style="display:block;">
      <!-- Padding -->
      <div class="UILabel" style="display:block; float:none; margin-top:0px;">&nbsp;</div>

              <div id="sendContainer">
        <table style="table-layout:auto;">
          <tr class="sendContainerLinkText">
          <td style="vertical-align:top; padding-top:4px; width:1%;"><i class="fas fa-info-circle fa-fw"></i></td>
                    <td colspan="2">To send the files to someone else, send them this link <button id="copylinkButton" name="copylinkButton" class="resetButton"><i class="fas fa-copy fa-fw"></i></button>, or else the Claim ID & Passcode:</td>
          </tr><tr>
          <td><i class="fas fa-fw"></i></td>
          <td><textarea readonly="yes" id="linkbox" name="linkbox" style="resize:none; margin-left:0px; word-wrap:normal; white-space:pre; margin-bottom:4px; box-sizing: border-box; width:100%;" wrap="hard" rows="3">http://localhost/pickup?claimID=ydD4nj2aQboPoEwN&amp;claimPasscode=khFZEvNn83udcsvN&nbsp;&nbsp;
Claim ID: ydD4nj2aQboPoEwN
Claim Passcode: khFZEvNn83udcsvN</textarea></td>
          <td><i class="fas fa-fw" style="width:1%;"></i></td>
          </tr>
        </table>
      </div>
      </div>
  </div>
</div>
<br />

<table border="0" cellpadding="5">

<!-- Show all the recipients and their pick-up details -->
  <tr>
    <td colspan="2">
      None of the files has been picked-up yet.      </td>
  </tr>
</table>

 
</div>

<!-- End page content -->

  </div>
</div>

<div id="footer">
    <span style="white-space: nowrap">Version 6.03-5&nbsp;|&nbsp;Copyright &copy; 2020 ZendTo&nbsp;|&nbsp;<a href="about">About ZendTo</a></span>
  <br/><span style="white-space: nowrap" title="admin &lt;admin@localhost&gt;">You are currently logged in as <em>Admin ZendTo</em></span>  <br/>
  <span style="white-space: nowrap">This service is powered by a copy of <a href="http://zend.to/" target="_blank">ZendTo</a></span>
</div>

</body>
</html>
<?php }
}
