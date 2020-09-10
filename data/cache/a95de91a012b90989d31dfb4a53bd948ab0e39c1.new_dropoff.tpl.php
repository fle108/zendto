<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-09 10:46:07
  from '/opt/zendto/templates/new_dropoff.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f58964f0a58a1_15373094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5de5e9af4d5d077a82a2316006c3fe2d57d709c4' => 
    array (
      0 => '/opt/zendto/templates/new_dropoff.tpl',
      1 => 1592571183,
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
    '7ea9441e6b5167a889d33f453899581dea430ffe' => 
    array (
      0 => '/opt/zendto/templates/new_dropoff.js.tpl',
      1 => 1594376424,
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
function content_5f58964f0a58a1_15373094 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'hidePHPExt' => 
  array (
    'compiled_filepath' => '/var/zendto/templates_c/bc72b3c654f7aa91ab3f54ebaf6f189ff001cd81_0.file.functions.tpl.cache.php',
    'uid' => 'bc72b3c654f7aa91ab3f54ebaf6f189ff001cd81',
    'call_name' => 'smarty_template_function_hidePHPExt_14737338095f58964ef0df23_77610717',
  ),
  'button' => 
  array (
    'compiled_filepath' => '/var/zendto/templates_c/bc72b3c654f7aa91ab3f54ebaf6f189ff001cd81_0.file.functions.tpl.cache.php',
    'uid' => 'bc72b3c654f7aa91ab3f54ebaf6f189ff001cd81',
    'call_name' => 'smarty_template_function_button_14737338095f58964ef0df23_77610717',
  ),
  'footerButtons' => 
  array (
    'compiled_filepath' => '/var/zendto/templates_c/bc72b3c654f7aa91ab3f54ebaf6f189ff001cd81_0.file.functions.tpl.cache.php',
    'uid' => 'bc72b3c654f7aa91ab3f54ebaf6f189ff001cd81',
    'call_name' => 'smarty_template_function_footerButtons_14737338095f58964ef0df23_77610717',
  ),
));
?><!DOCTYPE html
        PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
         "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">






<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" xml:lang="en-US">
  <head>
    <title>ZendTo</title>
    <link rel="stylesheet" href="css/jquery-ui.min.css">
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
var howWeGotHere = "verify.php";
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
    '<input type="hidden" name="gothere" id="gothere" value="verify.php"/>'+
    '<input type="hidden" name="template" id="template" value="new_dropoff.tpl"/>'+
    //'<input type="hidden" name="goingto" id="goingto" value=""/>'+
    //'<input type="hidden" name="getput" id="getput" value=""/>'+
    '<input type="hidden" name="getdata" id="getdata" value="[]"/>'+
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

<script type="text/javascript" src="js/jquery-ui-1.12.1.min.js"></script>
<script type="text/javascript" src="js/dropoff.js"></script>
<script type="text/javascript" src="js/jquery.balloon.min.js"></script>
<script type="text/javascript" src="js/addressbook.js"></script>
<!-- FormData is from https://github.com/jimmywarting/FormData -->
<script type="text/javascript" src="js/formdata.min.js"></script>
<script type="text/javascript">
  // All the JS for new-dropoff.tpl

// Email regex
var emailFormatRegex = /(\S+@\S+)/;
var emailBracketRegex = /<(\S+@\S+)>/;
var emailRegex = /^([a-zA-Z0-9][a-zA-Z0-9\.\_\-\+\&']*)\@([a-zA-Z0-9][a-zA-Z0-9\_\-\.]+)$/i;

var presetToName = "";
var presetToEmail = "";

var maxFileSize = '21474836480';
var maxTotalSize = '21474836480';
var maxChecksumSize = '314572800';
var maxEncryptSize = '314572800';
var minPassphraseLength = '10';

var processingText = "Scanning for viruses...";

// Is the password dialog or the addRecipient dialog being displayed?
var showingPasswordDialog = false;
var tryingToUpload = false;
var ZendTo = new Object();

// Library information
var usingLibrary = '';
var library = [];

var recipient_id = 1;
var numRecips = 0;
// The number of files we have, which will be in range 1..n
var num_files = 0;
var totalbytes = 0;
var file_objects = [];
var file_descs = [];
var fileInLibrary = []; // true => file is library, false => file is upload
var maxNoteLength = 1000;
var noteLength = 0;
var checksumUnticked = false;

// Does this browser support drag and drop file selection?
var isAdvancedUpload = function() {
  var div = document.createElement('div');
  return (('draggable' in div) ||
          ('ondragstart' in div && 'ondrop' in div)) &&
         'FormData' in window && 'FileReader' in window;
}();

// These must be here so Smarty can substitute values
var addressbook = [{"name":"test","email":"test@test.com"}];
var deleteText = 'Delete';

var ignore_unload = true;



function updateNoteLength() {
  noteLength = $('#note').val().length;
  var left = maxNoteLength - noteLength;
  if (left < 0) {
    $('#noteLengthText').text('__CHARS__ too long'.replace('__CHARS__', (0-left)));
    $('#noteLengthText').css({ "color":"red", "font-weight":"bold" });
  } else {
    $('#noteLengthText').text('__CHARSLEFT__ / __MAXLENGTH__ left'.replace('__CHARSLEFT__', left).replace('__MAXLENGTH__', maxNoteLength));
    $('#noteLengthText').css({ "color":"black", "font-weight":"normal" });
  }
}

function addFilesButtonClick(e) {
  $("#AddFiles").click();
  e.preventDefault(); // stop navigation to #
}

function hideEncryptChars() {
  if (this.checked) {
    $('#encryptPassword1').attr('type', 'password');
    $('#encryptPassword2').attr('type', 'password');
  } else {
    $('#encryptPassword1').attr('type', 'text');
    $('#encryptPassword2').attr('type', 'text');
  }
}

// Check if the password is good enough.
// Return a string to display in the error box, or else return ''
function checkPassword() {
  one = $('#encryptPassword1').val();
  two = $('#encryptPassword2').val();
  if (one === undefined) one = '';
  if (two === undefined) two = '';
  length1 = one.length;
  length2 = two.length;
  longer  = (length1>length2)?length1:length2; // max(length1,length2)
  // They have typed something, but not enough
  if (longer>0 && longer<minPassphraseLength)
    return "Too short!";
  if (one !== two)
    return "Entries do not match";
  return '';
}

// Return true if they haven't entered anything for the password at all
// function checkPassword() above will return '' (ie success) if the
// password entries are both blank. It's used for UI validation.
function blankPassword() {
  one = $('#encryptPassword1').val();
  two = $('#encryptPassword2').val();
  if (one === undefined) one = '';
  if (two === undefined) two = '';
  length1 = one.length;
  length2 = two.length;
  return (length1+length2>0)?false:true;
}

var dndcollection = $(); // Keeps track of when we're in and out

function dragStart(e) {
  e.originalEvent.dataTransfer.effectAllowed = 'copy';
}

function dragOver(e) {
  e.originalEvent.dataTransfer.dropEffect = 'copy';
  if (dndcollection.length === 0) {
    $('#overlay').fadeIn('fast');
  }
  dndcollection = dndcollection.add(e.target);
}

function dragLeave(e) {
  setTimeout(function() {
    dndcollection = dndcollection.not(e.target);
    if (dndcollection.length === 0) {
      $('#overlay').fadeOut('fast');
    }
  }, 1);
}

function dragDrop(e) {
  dndcollection = $();
  $('#overlay').toggle(false); // Drop, so don't fade out slowly
  if (e.originalEvent && e.originalEvent.dataTransfer &&
      e.originalEvent && e.originalEvent.dataTransfer.files) {
    addFiles(e.originalEvent.dataTransfer.files);
  }
}

// Setup all the Drag-n-Drop stuff. We need it again if upload failed.
function setupDragDrop() {
  $('#AddFilesButton').text('Click to Add Files or Drag Them Here');
  $(window).on('drag dragstart dragend dragover dragenter dragleave drop', function(e) {
    e.preventDefault();
    e.stopPropagation();
  })
  .on('dragstart',          dragStart)
  .on('dragover dragenter', dragOver)
  .on('dragleave dragend',  dragLeave)
  .on('drop', dragDrop);
}


//
// When document is all loaded, set it up
//
$(document).ready(function(){
  // Setup the address book autocompletion
  addAddressBook();

  function doBeforeUnload() {
    var msg="If you leave this page, you will abandon this drop-off.";
    if (ignore_unload) return; // Let the page unload
    if (window.event)
      window.event.returnValue = msg; // IE
    else
      return msg; // FF
  }

  if (window.body)
    window.body.onbeforeunload = doBeforeUnload; // IE
  else
    window.onbeforeunload = doBeforeUnload; // FF
  if (presetToName != "" && presetToEmail != "") {
    // If the preset fields are set, add the recipient.
    addRecipient(presetToName, presetToEmail);
  }

  // Check to see if maxFileSize & maxTotalFileSize is set.
  // If so we need to convert to ints from strings.
  if(maxFileSize != '')
    maxFileSize = parseInt(maxFileSize);
  else
    maxFileSize = 0;
  if(maxTotalSize != '')
    maxTotalSize = parseInt(maxTotalSize);
  else
    maxTotalSize = 0;
  if(maxChecksumSize != '')
    maxChecksumSize = parseInt(maxChecksumSize);
  else
    maxChecksumSize = 0;
  if(maxEncryptSize != '')
    maxEncryptSize = parseInt(maxEncryptSize);
  else
    maxEncryptSize = 0;
  if(minPassphraseLength != '')
    minPassphraseLength = parseInt(minPassphraseLength);
  else
    minPassphraseLength = 1;

  // Set the event handlers for the initial file selectors
  // Not needed after all. $("#AddFilesButton").off("click");
  $("#AddFilesButton").on("click", addFilesButtonClick);

  // What of the tickboxes do we show them? This doesn't affect
  // their functionality at all, we just hide them from the UI.
  if (! true)
    $('.newdropoff-encryptSpan').css('display', 'none');
  if (! true)
    $('.newdropoff-checksumSpan').css('display', 'none');
  if (! true)
    $('.newdropoff-confirmSpan').css('display', 'none');
  if (! true)
    $('.newdropoff-informSpan').css('display', 'none');
  if (! true)
    $('.newdropoff-informPasscodeSpan').css('display', 'none');
  if (! true)
    $('.newdropoff-waiverSpan').css('display', 'none');
  if (! 14>0) {
    $('.newdropoff-lifetimeSpan').css('display', 'none');
  } else {
    // lifetime box is shown
    $('#lifedays').balloon({
    position: "top center",
    html: false,
    css: { fontSize: '100%', 'max-width': '30vw' },
    contents: 'This number can include a decimal point, it does not have to be a whole number.',
    showAnimation: function (d, c) { this.fadeIn(d, c); }
    });
  }

  // Do we allow them to change either of the email tickboxes?
  // informRecipients and informPasscode
  // Both are allowed and on by default.
  if (! true) {
    $('.newdropoff-informSpan').css('display', 'none');
    $('#informRecipients').prop('checked', false).prop('disabled', true);
    $('#informPasscode').prop('checked', false).prop('disabled', true);
    $('#informRecipientsLabel').addClass('disabledtext');
    $('#informPasscodeLabel').addClass('disabledtext');
  }
  if (! true) {
    $('.newdropoff-informPasscodeSpan').css('display', 'none');
    $('#informPasscode').prop('checked', false).prop('disabled', true);
    $('#informPasscodeLabel').addClass('disabledtext');
  }
  if (! true) {
    $('#informRecipients').prop('checked', false);
    $('#informPasscode').prop('checked', false);
  }
  if (! true) {
    $('#confirmDelivery').prop('checked', false);
  }
  if (! true) {
    $('#informPasscode').prop('checked', false);
  }
  if (! false) {
    $('#recipWaiver').prop('checked', false);
  }
  if (maxChecksumSize == 0) {
    $('.newdropoff-checksumSpan').css('display', 'none');
    $('#checksumFiles').prop('checked', false).prop('disabled', true);
    $('#checksumFilesLabel').addClass('disabledtext');
  } else {
    // They can untick it always. But can only tick it if total dropoff
    // size is less than maxChecksumSize.
    $('#checksumFiles').on('change', function() {
      // Did they try to tick it with a huge drop-off?
      if ($(this).is(':checked')) {
        if (totalbytes > maxChecksumSize) {
          // Too big, so untick it and yell at them.
          $('#checksumFiles').prop('checked', false);
          alert("It will take too long to calculate the checksum of your drop-off.\nOnly drop-offs up to a maximum of __MAXSIZE__ can be checksummed.".replace('__MAXSIZE__', formatFileSize(maxChecksumSize)));
        }
      } else {
        // They manually unticked it, so remember not to auto-tick it again
        checksumUnticked = true;
      }
    });
  }
  if (maxEncryptSize == 0 || false) {
          $('.newdropoff-encryptSpan').css('display', 'none');
    $('#encryptFilesLabel').addClass('disabledtext');
      $('#encryptFiles').prop('checked', false).prop('disabled', true);
  }
  if (true && true) {
    // Uncheck informPasscode if user unchecks informRecipients
    $('#informRecipients').on('change', function() {
      if ($(this).is(':checked')) {
        // Tick informPasscode is they tick informRecips and default is yes
        if (true)
          $('#informPasscode').prop('checked', true);
      } else {
        // Untick informPasscode if they untick informRecips
        $('#informPasscode').prop('checked', false);
      }
    });
    // Check informRecipients is user checks informPasscode
    $('#informPasscode').on('change', function() {
      if ($(this).is(':checked')) {
        // Tick informRecips if they tick informPasscode
        $('#informRecipients').prop('checked', true);
      }
    });
  }
  $('#lifedays').val(14);

  // Now show the checkboxes, as they are all configured
  $('#newdropoff-checkboxes').css('visibility', 'visible');

  // Hide the files and submit button until we've got some files
  $('#uploadTable').toggle(false);
  $('#DropoffButton').toggle(false);

  // If we have drag-n-drop (dnd) support, set it up
  if (isAdvancedUpload) setupDragDrop();

  // Setup the counter & initial value for the note length
  $('#note').on("keyup", updateNoteLength);
  updateNoteLength();

  // Live event for removing recipients.
  // Live allows us to bind to any instance of .emailButton a.remove
  // now or in the future (even if the element doesn't exist yet.)
  $(document).on("click", ".emailButton a.remove", function(){
          $(this).parent().remove();
          if (numRecips > 0) numRecips--;
  });
        
  // If the user hits enter in this field, add the recipient.
  $(document).on("keyup", '#recipEmail', function(e) {
          if(e.keyCode == 13) addSingleRecipient();
  });
  $(document).on("keyup", '#recipName', function(e) {
          if(e.keyCode == 13) addSingleRecipient();
  });
 
  // If they typed an email address into the name field,
  // move it to the email field automatically.
  $(document).on('change', '#recipName', function(e) {
    // Must look ike an email address
    var em = this.value;
    if ((emailFormatRegex.test(em) ||
         emailBracketRegex.test(em)) &&
         $('#recipEmail').val() === '') {
      var r = emailBracketRegex.exec(em);
      if (r !== null) {
        em = r[1];
      }
      $('#recipEmail').val(em);
      $(this).val('');
    }
  });

  $('#addRecipients').on('click', function(){
          showingPasswordDialog = false;
          $.facebox(ZendTo.addRecipients);
          addAddressBook();
  });

  $(document).on('click', '#addMultipleRecipients', function(){
          addMultiple();
          return false;
  });
        
  $(document).on('click', '#showSingleDialog, #showMultipleDialog', function(){
          switch($(this).attr('id')){
                  case "showSingleDialog":
                          $('#showSingleDialog').removeClass('greyButton');
                          $('#showMultipleDialog').addClass('greyButton');
                          
                          $( "#sendMultiple" ).fadeOut(200, function(){
                                  $( "#sendSingle" ).fadeIn(200);
                          });
                  break;
                  case "showMultipleDialog":
                          $('#showMultipleDialog').removeClass('greyButton');
                          $('#showSingleDialog').addClass('greyButton');        
                          
                          $('#sendSingle').fadeOut(200, function(){
                                  $( "#sendMultiple" ).fadeIn(200);
                          });
                  break;
          }
  });
        
  // Get the new recipients form and copy it into a new object,
  // then remove it from the DOM.
  ZendTo.addRecipients = $('#addNewRecipient').html();
  $('#addNewRecipient').remove();

  //
  // Encryption checkbox support
  //
  //
  // This is all totally disabled if they aren't allowed to enter
  // a passphrase or anything, which will happen if this drop-off
  // is the result of a request that had a passphrase stored in it.
  $(document).on("keyup", '#encryptPassword1', keyEncryptPassword);
  $(document).on("keyup", '#encryptPassword2', keyEncryptPassword);
  $(document).on('change', '#hideEncryptChars', hideEncryptChars);

  $('#encryptFiles').on('change', function() {
    if (this.checked) {
      // Box just ticked
      showingPasswordDialog = true;
      // Did they try to tick it with a huge drop-off?
      if (!false && maxEncryptSize>0 &&
          totalbytes>maxEncryptSize) {
        // Too big, so untick it, yell at them and exit
        $('#encryptFiles').prop('checked', false);
        alert("It will take too long to encrypt your drop-off.\nOnly drop-offs up to a maximum of __MAXSIZE__ can be encrypted.".replace('__MAXSIZE__', formatFileSize(maxEncryptSize)));
      } else {
        $.facebox(ZendTo.encryptPasswordDialog);
      }
    } else {
      encryptFiles = false;
    }
  });

  // Bind to the reveal of facebox
  $(document).on('reveal.facebox', function(){
    if (showingPasswordDialog) {
      // Set up the password dialog box
      pwd = $('#encryptPassword').val();
      $('#encryptPassword1').attr('type', 'password')
                            .val(pwd)
                            .trigger('focus');
      $('#encryptPassword2').attr('type', 'password')
                            .val(pwd);
      $('#hideEncryptChars').prop('checked', true);
      if (pwd !== '') {
        // Enable OK
        $('#setPasswordButton').prop('disabled', false).removeClass('greyButton');
      } else {
        // Disable OK
        $('#setPasswordButton').prop('disabled', true).addClass('greyButton');
      }
    } else {
      // Set up the add recipient(s) dialog box
      $('#recipName').trigger('focus');
    }
  });

  // Bind an event to my new facebox cancel event
  $(document).on('cancel.facebox', function() {
      // Can always cancel encryption passphrase box,
      // but won't allow submission (if enforcing encrypt)
      // until we have a valid password.
      // Cannot cancel password dialog if forcing encryption
      tryingToUpload = false;
      if (showingPasswordDialog) {
        showingPasswordDialog = false;
        cancelEncryptPassword();
      }
  });

  // Bind an event to facebox's close event
  $(document).on('afterClose.facebox', function(){
    if (showingPasswordDialog && false) {
      // The were entering a password and they MUST encrypt
      if (blankPassword() || checkPassword() !== '') {
        // We haven't got a good non-blank password,
        // so re-present the password dialog.
        $('#encryptFiles').prop('checked', true).trigger('change');
      } else {
        // We have now got a good password, so if they are trying
        // to hit the Upload button, then try it again as it should
        // succeed this time. This will recurse, and we aren't
        // clearing up, but at the end of the upload all of this
        // gets thrown away anyway.
        if (tryingToUpload) submitform();
      }
    } else {
      // Focus on the 'note' element
      $('#note').trigger('focus');
      showingPasswordDialog = false;
    }
  });
  // End of code that only happens if they are allowed to see the
  // passphrase dialog ($allowPassphraseDialog).
  //
  // Get the password form and copy it into a new object + remove it
  ZendTo.encryptPasswordDialog = $('#encryptPasswordDialog').html();
  $('#encryptPasswordDialog').remove();

  // Code for dealing with selecting already uploaded files.
  if (usingLibrary == "1") {
    var fs = $('#file_select');
    populateSelectFileFields(fs);
    fs.on('change', function(){
      var selectedOption = $(this).children('option:selected');
      var selectedFile = selectedOption.val();
      if (selectedFile != "-1") { // Did they actually pick a file?
        var desc = "";
        if (typeof selectedOption.data('info') != "undefined")
          desc = selectedOption.data('info').description;
        num_files++; // Pre-increment so 1st element is num_files[1]
        file_objects[num_files] = selectedFile;
        file_descs[num_files] = desc;
        fileInLibrary[num_files] = true;
        appendNewFile(num_files, selectedFile, desc, -1); // -1=>Library
        updateTotalSize();
        $(this).val("-1");
        $('#uploadTable').toggle(num_files>0?true:false);
        $('#DropoffButton').toggle(num_files>0?true:false);
      }
    });
  } else {
    // Don't show the file selector or surrounding text
    $('#libraryselector').toggle(false);
  }

  // If there isn't a recipient already (we may be the end of a request)
  // then click the "Add Recipient" button for them, to add the
  // first recipient, which saves them 1 click.
  if (recipient_id == 1) {
    $('#addRecipients').trigger('click');
  }

});
// End of document(ready) function!

// List the contents of the library into the file selector
function populateSelectFileFields(target){
  $.each(library, function(i, v){
    $(target).append(
      $('<option>', { html: v.filename, 'val': v.where }).data('info', v)
        );
  });
}

// Display a floating point value to "precision" decimal places
function toFixed(value, precision) {
  var precision = precision || 0,
      power = Math.pow(10, precision),
      absValue = Math.abs(Math.round(value * power)),
      result = (value < 0 ? '-' : '') + String(Math.floor(absValue / power));

  if (precision > 0) {
    var fraction = String(absValue % power),
        padding = new Array(Math.max(precision - fraction.length, 0) + 1).join('0');
    result += '.' + padding + fraction;
  }
  return result;
}

// Return an integer number of bytes in MB to 1 decimal place
function formatFileSize(size){
  if (size<0) {
    // It's a library file so doesn't consume any space at all
    return 'Library';
  }
  if (size>=1048576) {
    return toFixed(size / 1048576, 1) + " MB";
  }
  kb = toFixed(size / 1024, 1);
  // Make tiny files appear to be non-zero length
  if (size>0 && kb==='0.0') kb = '<0.1';
  return kb + " KB";
}

// Return an integer number of bytes in MB to 0 decimal place
function formatMaxSize(size){
  if (size>=1048576) {
    return toFixed(size / 1048576, 0) + " MB";
  }
  kb = toFixed(size / 1024, 1);
  // Make tiny files appear to be non-zero length
  if (size>0 && kb==='0.0') kb = '<0.1';
  return kb + " KB";
}

// Is this thing a file or a directory?
// Note this code only works on a few browsers right now, but it doesn't
// cause any harm so it's staying. One day it might work, who knows?
// Does work on some Windows browsers, which is handy!
function isFile(f) {
  // Works on some Webkit
  if (typeof(f.webkitGetAsEntry) == "function") {
    return f.webkitGetAsEntry().isFile;
  }
  // Works on some other recent stuff
  if (typeof(f.getAsEntry) == "function") {
    return f.getAsEntry().isFile;
  }
  // We can't tell, so assume it is a file.
  return true;
}

// Add files that the user has chosen from local filesystem.
// This does not include library files.
function addFiles(files) {
  for(var i=0; i<files.length && num_files<199; i++) {
    var filei = files[i];
    if (filei.size>0 && filei.kind != 'string' && isFile(filei)) {
      num_files++; // Pre-increment so 1st element is num_files[1]
      file_objects[num_files] = filei;
      file_descs[num_files] = '';
      fileInLibrary[num_files] = false;
      appendNewFile(num_files, filei.name, '', filei.size);

      // This is an abandoned version of the inside of the "if" above.
      // I hoped a dir would fail to read with FileReader, but no such luck!
      //// To test if it's a file or a directory,
      //// let's try to read the 1st byte of it.
      //reader = new FileReader();
      //reader.onerror = function() { console.log("error occurred on file "+filei.name); };
      //reader.onabort = function() { console.log("abort occurred on file "+filei.name); };
      //// This uses an IIFE so I can synchronously pass filei
      //// into the handler (which picks it up as f)
      //reader.onload = (function(f) {
      //  // The file load (of just the 1st byte) completed successfully
      //  num_files++; // Pre-increment so 1st element is num_files[1]
      //  file_objects[num_files] = f;
      //  file_descs[num_files] = '';
      //  fileInLibrary[num_files] = false;
      //  appendNewFile(num_files, f.name, '', f.size);
      //})(filei);
      //// Now we've setup the FileReader, try to read just the 1st byte
      //var firstbyte = filei.slice(0, 0);
      //reader.readAsBinaryString(firstbyte);
    }
  }
  
  // Now replace the element with a fresh one. Otherwise
  // we can't add a file then delete it then re-add it as the element
  // still thinks that file is selected, so doesn't do anything.
  var filecopy = $('<input type="file" id="AddFiles" multiple style="display:none" onchange="addFiles(this.files)">');
  $('#AddFiles').replaceWith(filecopy);
  
  $('#uploadTable').toggle(num_files>0?true:false);
  $('#DropoffButton').toggle(num_files>0?true:false);
}

var entityMap = {
  '&': '&amp;',
  '<': '&lt;',
  '>': '&gt;',
  '"': '&quot;',
  "'": '&#39;',
  '/': '&#x2F;',
  '`': '&#x60;',
  '=': '&#x3D;'
};
function escapeHtml (string) {
  return String(string).replace(/[&<>"'`=\/]/g, function (s) {
    return entityMap[s];
  });
}

// Append a new file to the list in the UI
function appendNewFile(n, name, desc, size) {
  // Convert the inputs to usable safe strings
  var sizeString = formatFileSize(size);
  var edesc = escapeHtml(desc);
  // Remove leading sub-directory names and so on, ie everything up
  // to and including the last \ or /. ".*" is greedy.
  var ename = name.replace(/^.*[\\\/]/, '');
  ename = escapeHtml(ename);
  var f = $("<tr>", { 'id': n, 'class': 'file' });
  f.append('<td class="filelabel" for="file_'+n+'">'+n+':</td>');
  f.append('<td class="ndfilename">'+ename+'</td>');
  f.append('<td class="fileSize ndfilesize">'+sizeString+'</td>');
  f.append('<td class="filedesc" for="desc_'+n+'"><input type="text" name="desc_'+n+'" id="desc_'+n+'" onchange="saveDesc('+n+',this)" size="30" value="'+edesc+'"/></td>');
  f.append('<td class="fileremove"><a href="#_js" onclick="removeFile('+n+')"><img src="images/x.png" alt="Remove file" title="Remove file '+n+'" border="0" style="vertical-align: middle"></a></td>');

  $('#uploadFiles').append(f);
  updateTotalSize();
}

// The description of a file has changed, so save it
function saveDesc(n, el) {
  file_descs[n] = el.value;
}

// Remove file n from the UI (then the data on completion)
function removeFile(n) {
  if (n<=0 || n>num_files) return; // Out of valid range

  // Delete it from the relevant arrays and remove from the page
  file_objects.splice(n, 1);
  file_descs.splice(n, 1);
  fileInLibrary.splice(n, 1);
  $('#'+n).fadeOut('fast', function() { adjustTable(this, n); });
  return false;
}

// The animation has finished, so really update the table
function adjustTable(row, n) {
  $(row).remove();
  num_files--;

  if (num_files<=0) {
    // No files left, so no redraw of anything
    $('#uploadTable').toggle(false);
    $('#DropoffButton').toggle(false);
    num_files = 0;
    updateTotalSize();
    return;
  }

  // If we deleted the last row, nothing else to do except update totals
  if (n>num_files) {
    updateTotalSize();
    return;
  }

  // Now need to renumber everything from n+1 to num_files+1 down by 1
  $('#uploadFiles tr').each(function() {
    // this is a row
    var rownum = $(this).attr('id');
    var newrow = rownum-1;
    if (rownum<=n) return; // Before the ones we want to move

    $(this).attr('id', newrow);
    $(this).children().each(function() {
      // this is a td cell
      // These children are the 4 <td> elements in the row
      if ($(this).hasClass('filelabel')) {
        $(this).attr('for', 'file_'+newrow).text(newrow+':');
      } else if ($(this).hasClass('filedesc')) {
        $(this).attr('for', 'desc_'+newrow);
        // And update its child that's an "input"
        var inp = $(this).children('input').first();
        $(inp).attr('id', 'desc_'+newrow)
              .attr('name', 'desc_'+newrow)
              .removeAttr('onchange')
              .off('change');
        $(inp).on('onchange', function() { saveDesc(newrow, this); });
      } else if ($(this).hasClass('fileremove')) {
        // Only update its "a" child
        var rem = $(this).children('a').first();
        $(rem).removeAttr('onclick')
              .off('click');
        $(rem).on('click', function() { removeFile(newrow); });
        // And the img inside that
        $(rem).children('img').first().attr('title', 'Remove file '+newrow);
      }
    });
  });
  updateTotalSize();
}

// Update the text showing the total size of all the files.
// Returns total bytes, which may be useful elsewhere.
function updateTotalSize() {
  totalbytes = 0;
  for (var i=1; i<=num_files; i++) {
    if (!fileInLibrary[i]) totalbytes += file_objects[i].size;
  }
  var s = formatFileSize(totalbytes)+" / "+formatMaxSize(maxTotalSize);
  $('#totalSize').text(s);
  // If the drop-off is too big to checksum, untick that box
  // Otherwise auto-tick the box unless the user has touched it.
  if (totalbytes > maxChecksumSize) {
    $('#checksumFiles').prop('checked', false);
  } else if (! checksumUnticked) {
    $('#checksumFiles').prop('checked', true);
  }
  // If the drop-off is too big to encrypt, untick that box
  if (!false && totalbytes > maxEncryptSize &&
      $('#encryptFiles').prop('checked')) {
    $('#encryptFiles').prop('checked', false);
    alert('It will now take too long to encrypt your drop-off, so encryption has been disabled. If you want to encrypt your drop-off, reduce your drop-off below __MAXSIZE__ and select "Encrypt" again.'.replace('__MAXSIZE__', formatFileSize(maxEncryptSize)));
  }
  return totalbytes;
}

//
// Encryption dialog support
//

// Click cancel in the password dialog ==> untick encryption
function cancelEncryptPassword() {
  tryingToUpload = false; // Abandon any ongoing upload attempt
  if (false) {
    $('#encryptFiles').prop('checked', true);
    $('#encryptPassword1').val("");
    $('#encryptPassword2').val("");
  } else {
    $('#encryptFiles').prop('checked', false);
    $(document).trigger('close.facebox');
  }
}

// Click OK/Set in password dialog ==> save password
function setEncryptPassword() {
  if (!blankPassword() && checkPassword() === '') {
    $('#encryptPassword').val(one);
    $(document).trigger('close.facebox');
  } else {
    $('#setPasswordButton').prop('disabled', true).addClass('greyButton');
    $('#encryptFiles').prop('checked', false);
  }
}

// Any key is typed in the password text boxes.
// Enable/disable OK button if they match/mismatch
function keyEncryptPassword(e) {
  error = checkPassword();
  if (!blankPassword() && error === '') {
    // Valid password
    $('#passwordError').html('&nbsp;');
    // Enable OK
    $('#setPasswordButton').prop('disabled', false).removeClass('greyButton');
    // Save password if they pressed return
    if (e.keyCode == 13) setEncryptPassword();
  } else {
    // Invalid password, reason is in error
    $('#passwordError').text(error);
    // Disable OK
    $('#setPasswordButton').prop('disabled', true).addClass('greyButton');
  }
}

//
// They clicked on "Add & Close" in the Add Recipient dialog
//
function add1RecipientAndClose() {
  if (addSingleRecipient()) {
    $(document).trigger('close.facebox');
    return true;
  } else {
    $("#recipEmail").trigger('focus');
    return false;
  }
}


function addSingleRecipient(){
  var currentName = $('#recipName').val();
  var currentEmail = $('#recipEmail').val();
  return addRecipient(currentName, currentEmail);
}

function addRecipient(currentName, currentEmail){
  currentEmail = $.trim(currentEmail);
  currentName = $.trim(currentName);

  currentName = currentName.replace(/[<>]/g, '');

  // Automatically strip surrounding < and >
  var r = emailBracketRegex.exec(currentEmail);
  if (r !== null) {
    currentEmail = r[1];
  }

  if(emailRegex.test(currentEmail) == false) {
    alert("Please enter a valid email address.");
    $("#recipEmail").trigger('focus');
    return false;
  }

  if ( currentEmail != "" ) {
    // New data
    var format = currentName + " &lt;" + currentEmail + "&gt;";
    
    var emailTemplate = $("<div>", { 'class':'emailButton', 'html': format });
    
    emailTemplate.append($("<a>", { 'class': 'remove', 'style': 'float:right; top:-3px; position:relative' }).append($('<img>', { src: 'images/swish/minus-circle.png', alt: 'Remove selected recipient' })));
    
    emailTemplate.append($("<input>", { 'type': 'hidden', 'name': 'recipName_' + recipient_id, 'value': currentName }));
    emailTemplate.append($("<input>", { 'type': 'hidden', 'name': 'recipEmail_' + recipient_id, 'value': currentEmail }));
    emailTemplate.append($("<input>", { 'type': 'hidden', 'name': 'recipient_' + recipient_id, 'value': 'recipient_id' }));
    
    emailTemplate.insertBefore('#emailHolder a#addRecipients');
    
    recipient_id++; // This keeps counting ever-upwards, regardless of deletes
    numRecips++; // For ensuring we have more than 0
    
    clearRecipientFields();
    $("#recipName").trigger('focus');
    return true;
  }
  return false;
}

function addMultiple(){
  // Get contents of text field.
  var rawData = $('#multipleRecipients').val();
  var rejectedAddresses = "";
  
  if (rawData.length == 0) return;
  
  // Pull out the lines.
  var lines = rawData.split(/\r\n|\r|\n/);
  
  for (recipient in lines){
    if ( emailFormatRegex.test(lines[recipient]) ) {
      var email = emailFormatRegex.exec(lines[recipient]);
      var thisEmail = email[1];
      var thisName = lines[recipient].replace(thisEmail, "");
      
      if (emailBracketRegex.test(thisEmail)) {
        em = emailBracketRegex.exec(thisEmail);
        thisEmail = em[1];
      }
      thisName = thisName.replace(/[<>]/g, '');
      if (emailRegex.test(thisEmail) == false) {
        rejectedAddresses += lines[recipient] + "\n";
        continue;
      }
      addRecipient(thisName, thisEmail);
    } else {
      rejectedAddresses += lines[recipient] + "\n";        
    }
  }
  $('#multipleRecipients').val(rejectedAddresses);
}


function clearRecipientFields(){
  $('#recipName, #recipEmail').val("");
}

function focus(el){
  $($(el)).trigger('focus');
}

function validateForm()
{
  if ( num_files < 1 ) {
    alert("Please add at least one file first!");
    return false;
  }
  if ( numRecips < 1 ) {
    // Show the Add Recipients box instead of an alert.
    $('#addRecipients').trigger('click');
    return false;
  }
  if(updateTotalSize() > maxTotalSize){
    alert('Your files are larger than the maximum total size you can send in one drop-off (__MAXTOTALSIZE__).'.replace('__MAXTOTALSIZE__', formatMaxSize(maxTotalSize)));
    return false;
  }
  for (var i=1; i<=num_files; i++) {
    if (!fileInLibrary[i] && file_objects[i].size > maxFileSize) {
      alert('File __NUMBER__ is larger than the maximum file size you can send in a drop-off (__MAXFILESIZE__).'.replace('__NUMBER__',i).replace('__MAXFILESIZE__', formatFileSize(maxFileSize)));
      return false;
    }
  }
  var days = Number($('#lifedays').val());
  if ( isNaN(days) || days<0.1 || days>14 ) {
    $('#lifedays').addClass('error-highlight');
    alert('Drop-off expiry time must be a number of days, at most 14.');
    return false;
  } else {
    $('#lifedays').removeClass('error-highlight');
  }

  // Are we encrypting?
  if (false || $('#encryptFiles').is(':checked')) {
    // Have they entered nothing, or have they entered a bad password?
    if (blankPassword() || checkPassword() !== '') {
      // Show the password entry dialog
      $('#encryptFiles').prop('checked', true).trigger('change');
      return false;
    }
  }
  return true;
}

// Convert the number of a file_object into an array of its metadata
function filemeta2JSON(n) {
  var f = file_objects[n];
  var a = {
    "name": f.name,
    "type": f.type,
    "size": f.size.toString(),
    "tmp_name": n.toString(),
    "error": 0
  };
  return JSON.stringify(a);
}

// Do all the preparatory work needed before starting to upload
// anything to the server. Gets this stuff out of the way.
function setupPosting() {
    var fileSizes = updateTotalSize(); // Need this for progress bar
    // Switch off all the drag and drop functionality
    //$('#container').off('drag dragstart dragend dragover dragenter dragleave drop');
    $('#note').off("keyup", updateNoteLength);
    // Disable all the buttons
    $('#AddFilesButton').prop('disabled', true).addClass('greyButton');
    $('#RealDropoffButton').prop('disabled', true).addClass('greyButton');
    $('#file_select').prop('disabled', true);

    // Set the "processing..." text depending on what we're doing
    checksumming = $('#checksumFiles').is(':checked');
    encrypting   = $('#encryptFiles').is(':checked');
    if (checksumming || encrypting) {
      // Start by shortening it
      processingText = "Scanning";
      if (checksumming)
        processingText = processingText + ", Checksumming"
      if (encrypting)
        processingText = processingText + ", Encrypting"
      processingText = processingText + "..."
    }
    
    showUpload();
    scroll(0,0);
    ignore_unload = false;

    return fileSizes;
}

function submitform() {
  tryingToUpload = true; // Marker so we know what user is doing

  // Form invalid? Then just bail out.
  if (!validateForm())
    return;

  // Do all the pre-amble to setup the UI for uploading,
  // and find the grand total number of bytes of files to
  // upload.
  var grandTotalBytes = setupPosting();
  var totalSentFile   = 0; // total bytes sent in completed files
  var totalSentChunk  = 0; // total bytes sent in completed chunks of current file

  var form = document.forms.namedItem("dropoff");
  var cData = new FormData(form); // This is for chunking & gets pruned
  var oData = new FormData(form); // Want 2 copies of the original!

  //
  // Are we going to attempt uploading files in small chunks?
  // Doing so changes how we do the upload process a *lot*.
  //
  // First need to check we have any non-library files, and what index
  // they start at. Indexes start at 1.
  var firstNonLibraryFile = 0;
  var uploadingInChunks = 50000000>0?true:false;
  do {
    firstNonLibraryFile++;
  } while (firstNonLibraryFile<=num_files && fileInLibrary[firstNonLibraryFile]);
  // Set it to false if there are no files for upload
  uploadingInChunks = uploadingInChunks &&
                      (firstNonLibraryFile <= num_files);

  if (uploadingInChunks) {
    // Prune all the unwanted data out of the form, as this
    // all gets sent with every chunk otherwise.
    // We'll get it back later with new FormData(form);
    const regexToPrune = RegExp('^desc_|^recipName_|^recipEmail_|^recipient_');
    var keysToDelete = ['Action', 'senderOrganization', 'encryptPassword', 'note', 'subject', 'checksumFiles', 'confirmDelivery', 'informRecipients', 'informPasscode'];
    var formDataEntries = cData.entries(), formDataEntry = formDataEntries.next(), k;
    // This is what you have to do, to work on IE as well
    while (!formDataEntry.done) {
      k = formDataEntry.value[0];
      if (regexToPrune.test(k))
        keysToDelete.push(k);
      formDataEntry = formDataEntries.next();
    }
    // Having found the keys to delete, delete them
    keysToDelete.forEach(function (k) {
      cData.delete(k);
    });

    // But add everything nneded for the final POST
    for (var i=1; i<=num_files; i++) {
      if (fileInLibrary[i]) {
        oData.append('file_select_'+i, file_objects[i]);
      } else {
        // We have already sent the file contents,
        // so just send all the metadata
        oData.append('file_'+i, filemeta2JSON(i));
      }
      oData.append('desc_'+i, file_descs[i]);
    }
    // Add the signal to say we've uploaded chunks already
    oData.append('sentInChunks', 1);

  }

  // This is done after the last chunk is complete.
  // Send the rest of all the form data.
  function sendOtherFormData() {
    $.ajax({
        url: "http://localhost/dropoff",
        method: 'POST',
        data: oData,
        cache: false,
        contentType: false,
        processData: false,
        complete: function(jqXHR, status) {
          ignore_unload = true;
          if (status == "success") {
            var dropOffPage = $(jqXHR.responseText);
                          $('#container').html(dropOffPage.children('#container').children('#dropoff-inner'));
                        $('.ui-helper-hidden-accessible div').hide();
          } else {
            // The upload failed for some reason
            alert( 'ZendTo upload failed: ' + status );
            console.log( 'ZendTo upload failed: ', status );
            hideUpload();
            alert("Sorry, I failed to drop-off your files!\nNote that you cannot drop-off directories, only files.");
            // Put the form back into a working state again
            enableFormAgain();
          }
        }
    });
  }

  // This function only called when sending files in small chunks
  function sendFileInChunks(fileNum, fileObj) {
    var chunkSize = 50000000;
    var retries = 0; // Number of retries of this chunk
    var maxRetries = 5; // This should be a prefs setting?
    var reader = new FileReader();
    cData.set('chunkOf', fileNum);
    uploadChunks(0);

    function uploadChunks(start) {
      var nextChunk = start + chunkSize; // OFFBY1: + 1;
      var blob = fileObj.slice( start, nextChunk );
      cData.set('chunkData', blob);

      reader.onloadend = function (e) {
        if ( e.target.readyState !== FileReader.DONE ) {
          return;
        }

        $.ajax( {
          xhr: function() {
            var xhr = new window.XMLHttpRequest();
            xhr.upload.addEventListener("progress", function(e) {
              // total of all completed files so far,
              // + start location within this file,
              // + data actually sent in this chunk so far
              // Then convert it to a percentahge.
              var pc = Math.floor(((totalSentFile + totalSentChunk + e.loaded)*100)/grandTotalBytes);
              pc = Math.min(pc, 100); // Clip it at max 100%
              //var pc = Math.floor((e.loaded*100)/e.total);
              // pc = Math.min(100, Math.max(0, pc)); // Limit to 0-100 for safety
              var c = (Math.max((pc-95)*3, 0)).toString();
              $('#progressinner').css({ "width": pc.toString()+'%', "border-radius": "15px "+c+"px "+c+"px 15px" });
              if (pc == 100) {
                $('#percentText').text(processingText);
              } else {
                $('#percentText').text("Uploaded: __PERCENT__%".replace("__PERCENT__", pc.toString()));
              }
            }, false);
            return xhr;
          },
          url: "http://localhost/savechunk",
          method: 'POST',
          cache: false,
          contentType: false,
          processData: false,
          data: cData,
          error: function (jqXHR, textStatus, errorThrown) {
             // The upload failed for some reason
            console.log( 'ZendTo file chunk upload failed: ',
                         textStatus, errorThrown );
            console.log( 'Response was ' + $(jqXHR.responseText) );
            // Upload of chunk failed, but not totally sure why.
            // There might be something helpful in responseText,
            // but not always. So retry.
            retries++;
            if (retries < maxRetries) {
              // Retry the same chunk
              uploadChunks(start);
            } else {
              // Too many retries
              console.log( 'ZendTo file chunk retried too many times' );
              hideUpload();
              alert("Sorry, I failed to drop-off your files!\nNote that you cannot drop-off directories, only files.");
              // Put the form back into a working state again
              enableFormAgain();
            }

          },
          success: function( data ) {
            if ( data.substr(0, 7) !== 'Success' ) {
              console.log( 'ZendTo file chunk upload failed:', data );
              // Does the server say we should retry?
              if ( data.substr(0,5) === 'Retry' ) {
                retries++;
                if (retries < maxRetries) {
                  // Send the same chunk again
                  uploadChunks( start );
                } else {
                  hideUpload();
                  // alert(sprintf("Sorry, I tried %d times to send a section of one of your files, but the transfer never succeeded.", maxRetries));
                  alert("Sorry, I tried %d times to send a section of one of your files, but the transfer never succeeded.".replace('%d', maxRetries));
                  retries = 0;
                  enableFormAgain();
                }
                return;
              }
              // Not told to retry
              hideUpload();
              // alert(sprintf("Sorry, I could not send your files. The server said %s.", data));
              alert("Sorry, I could not send your files. The server said %s.".replace('%s', data));
              retries = 0;
              enableFormAgain();
              return;
            }
            // Reset counter of retries per chunk
            retries = 0;
            // Move onto the next chunk
            if ( nextChunk < fileObj.size ) {
              totalSentChunk = nextChunk;
              uploadChunks( nextChunk );
            } else {
              // Upload of this file complete.
              totalSentFile = totalSentFile + file_objects[fileNum].size;
              totalSentChunk = 0;
              // Work out next non-library file number
              do {
                fileNum++;
              } while (fileNum<=num_files && fileInLibrary[fileNum]);
              // Have we fallen off the end of the list?
              if (fileNum<=num_files) {
                // No, so start the next one (tail recursive).
                sendFileInChunks(fileNum, file_objects[fileNum]);
              } else {
                sendOtherFormData();
              }
            }
          }
        });
      };

      reader.readAsArrayBuffer(blob);
    }

  }

  if (uploadingInChunks) {
    // Send the contents of each uploaded file
    // (not library ones)
    // Start it all off by sending the 1st non-library file.
    // That uses tail recursion to upload all
    // the rest of the files and then finally all
    // the metadata for the drop-off and its files.
    sendFileInChunks(firstNonLibraryFile, file_objects[firstNonLibraryFile]);

  } else {

    //
    // Uploading everything in 1 go (traditional).
    //
    // Add the objects for each of the files
    var i;
    for (i=1; i<=num_files; i++) {
      if (fileInLibrary[i]) {
        oData.append('file_select_'+i, file_objects[i]);
      } else {
        oData.append('file_'+i, file_objects[i]);
      }
      oData.append('desc_'+i, file_descs[i]);
    }
    // Send all the file data the old fashioned way.
    $.ajax({
        xhr: function() {
          var xhr = new window.XMLHttpRequest();
          xhr.upload.addEventListener("progress", function(e) {
            var pc = Math.floor((e.loaded*100)/e.total);
            // pc = Math.min(100, Math.max(0, pc)); // Limit to 0-100 for safety
            var c = (Math.max((pc-95)*3, 0)).toString();
            $('#progressinner').css({ "width": pc.toString()+'%', "border-radius": "15px "+c+"px "+c+"px 15px" });
            if (pc == 100) {
              $('#percentText').text(processingText);
            } else {
              $('#percentText').text("Uploaded: __PERCENT__%".replace("__PERCENT__", pc.toString()));
            }
          }, false);
          return xhr;
        },
        method: "POST",
        url: "http://localhost/dropoff",
        // JKF not allowed to do this: headers: { Connection: 'close' },
        data: oData,
        cache: false,
        // contentType: "multipart/form-data",
        contentType: false,
        processData: false,
        // dataType:    'html', // Trying this out
        // This used to never get called by Safari, but does now.
        complete: function(jqXHR, status) {
          ignore_unload = true;
          if (status == "success") {
            var dropOffPage = $(jqXHR.responseText);
                          $('#container').html(dropOffPage.children('#container').children('#dropoff-inner'));
                        $('.ui-helper-hidden-accessible div').hide();
          } else {
            // The upload failed for some reason
            hideUpload();
            alert("Sorry, I failed to drop-off your files!\nNote that you cannot drop-off directories, only files.");
            // Put the form back into a working state again
            enableFormAgain();
          }
        }
    });
  }
}

function enableFormAgain() {
  $('#uploadTable').toggle(true);
  $('#DropoffButton').toggle(true);
  $('#note').on("keyup", updateNoteLength);
  $('#AddFilesButton').prop('disabled', false)
                      .removeClass('greyButton');
  $('#RealDropoffButton').prop('disabled', false)
                      .removeClass('greyButton');
  $('#file_select').prop('disabled', false);
}

</script>

  <div style="padding:4px;border:2px solid #C01010;background:#FFF0F0;color:#C01010;text-align:justify;" class="round">
    <strong>PLEASE NOTE</strong>
    <br>
    <br>
    Files uploaded to ZendTo are scanned for viruses.  But still exercise the same degree of caution as you would with any other file you download. Users are also <strong>strongly encouraged</strong> to encrypt every file if any contain sensitive information (e.g. personal private information)!  </div>

  <p>This web page will allow you to drop-off (upload) one or more files for anyone (either a Southampton user or others). The recipient will receive an automated email containing the information you enter below and instructions for downloading the file. Your IP address will also be logged and sent to the recipient for identity confirmation purposes.</p>

<form name="dropoff" id="dropoff" method="post" enctype="multipart/form-data">

<input type="hidden" name="Action" value="dropoff"/>
<input type="hidden" id="auth" name="auth" value=""/>
<input type="hidden" id="req" name="req" value=""/>
<input type="hidden" id="senderOrganization" name="senderOrganization" value="Southampton University"/>
<input type="hidden" id="encryptPassword" name="encryptPassword" value=""/>
<input type="hidden" id="chunkName" name="chunkName" value="RWHaHW36T2vfABrz9QY4ZdxqfYeWEe5V"/>

<div id="newdropoff-boxes">
  <!-- First boxes about the sender and subject -->
  <span id="fromLabel" class="labels">From:</span>
  <span id="subjectLabel" class="labels">Subject:</span>
  <span id="fromHolder" class="text"><span id="fromName">Admin ZendTo</span> <span id="fromEmail">&lt;admin@localhost&gt;</span> <span id="fromOrg">Southampton University</span></span>
  <input type="text" id="subject" name="subject" class="text" value="Admin ZendTo has dropped off files for you"/>
  <!-- Then the recipients -->
  <span id="emailLabel" class="labels">To:</span>
  <span id="emailHolder" class="text"> <a id="addRecipients" href="#"><img src="images/swish/plus-circle-frame.png" alt="Add recipients" /></a> </span>
  <!-- Then the note on the left side -->
  <span id="noteLabel" class="labels">Short note to the Recipients:</span>
  <span id="noteHolder"><textarea name="note" id="note" wrap="soft"></textarea><!-- <br class="clear" /> -->
    <span id="noteLengthText"></span>
  </span>

  <!-- And all the checkboxes on the right side -->
  <!-- Hidden until we have removed everything we don't want to show -->
  <div id="newdropoff-checkboxes" name="newdropoff-checkboxes" style="visibility:hidden">
    <input type="checkbox" name="encryptFiles" id="encryptFiles" class="newdropoff-encryptSpan" />
    <label name="encryptFilesLabel" id="encryptFilesLabel" for="encryptFiles" class="ndcbLabel newdropoff-encryptSpan">Encrypt every file</label>
    <input type="checkbox" name="checksumFiles" id="checksumFiles" class="newdropoff-checksumSpan" checked="checked" />
    <label name="checksumFilesLabel" id="checksumFilesLabel" for="checksumFiles" class="ndcbLabel newdropoff-checksumSpan">Calculate SHA-256 checksum of each file</label>
    <input type="checkbox" name="confirmDelivery" id="confirmDelivery" class="newdropoff-confirmSpan" checked="checked" />
    <label for="confirmDelivery" class="ndcbLabel newdropoff-confirmSpan">Send me an email when each recipient picks up the files</label>
    <input type="checkbox" name="informRecipients" id="informRecipients" class="newdropoff-informSpan newdropoff-informRecipientsSpan" checked="checked" />
    <label id="informRecipientsLabel" name="informRecipientsLabel" for="informRecipients" class="ndcbLabel newdropoff-informSpan newdropoff-informRecipientsSpan">Send email message to recipients</label>
    <input type="checkbox" name="informPasscode" id="informPasscode" class="newdropoff-informPasscodeSpan newdropoff-informSpan" checked="checked" />
    <label id="informPasscodeLabel" name="informPasscodeLabel" for="informPasscode" class="ndcbLabel newdropoff-informPasscodeSpan newdropoff-informSpan">which includes Passcode as well as Claim ID</label>
    <input type="checkbox" name="recipWaiver" id="recipWaiver" class="newdropoff-waiverSpan" checked="checked" />
    <label id="recipWaiverLabel" name="recipWaiverLabel" for="recipWaiver" class="ndcbLabel newdropoff-waiverSpan">Recipients must agree to terms and conditions</label>
    <input type="number" name="lifedays" id="lifedays" class="newdropoff-lifetimeSpan" min="0" max="14" value="14" />
    <label id="lifetimeLabel" name="lifetimeLabel" for="lifedays" class="ndcbLabel newdropoff-lifetimeSpan">days until drop-off expires</label>
  </div>
</div>


<span style="display:none">
<!-- Add Recipients dialog (hidden till we need it) -->
<!-- This div is removed from the DOM in $(document).ready() -->
<div id="addNewRecipient">
  <h1>Add Recipients</h1>
  <div class="center buttonHolder" style="display:flex; justify-content:center;"><button id="showSingleDialog">Add One</button> <button id="showMultipleDialog" class="greyButton">Add Many</button></div>
        
  <!-- Sending to a single recipient -->
  <div id="sendSingle" class="center">
    <!-- Centre the table itself -->
    <table class="ui-widget" style="margin:0px auto 3px auto;">
      <tr>
        <td style="text-align:right;"><label for="recipName" class="UILabel" style="float:right; margin-right: 3px;">Name:</label></td>
        <td style="text-align:left;"><input type="text" id="recipName" name="recipName" size="33" placeholder="Adds to your address book" autocomplete="off" value=""/></td>
      </tr>
      <tr>
        <td style="text-align:right;"><label for="recipEmail" class="UILabel" style="float:right; margin-right:3px;">Email:</label></td>
        <td style="text-align:left;"><input type="text" id="recipEmail" name="recipEmail" size="33" autocomplete="off" value=""/></td>
      </tr>
    </table>
    <div class="center buttonHolder" style="display:flex; justify-content:center;"><button onclick="javascript:addSingleRecipient();">Add</button> <button onclick="javascript:add1RecipientAndClose();">Add &amp; Close</button></div>
  </div>

  <div id="sendMultiple" class="center ui-widget">
    <textarea id="multipleRecipients" rows="10" cols="38" placeholder="Bulk add recipients"></textarea>
    <p>One recipient per line, for example: <br /><em>Recipient's Name email@example.com</em></p>
    <div class="center"><button id="addMultipleRecipients">Verify</button></div>
  </div>
</div>

<!-- Encryption Passphrase dialog (hidden till we need it) -->
<div id="encryptPasswordDialog">
  <h1>Encryption Passphrase</h1>
  <div class="center dark-red"><strong>This passphrase will not be sent to the recipients.<br/>You need to do this yourself.</strong></div>
  <div class="center" style="white-space:nowrap">
  <table border="0" width="100%" style="padding:0px"><tr>
    <td class="ui-widget" style="padding-bottom:5px">
      <label for="encryptPassword1" class="UILabel">Passphrase:</label></td>
    <td class="ui-widget" style="float:left;padding-bottom:5px">
            <input type="password" id="encryptPassword1" name="encryptPassword1" size="30" autocomplete="off" value=""/></td>
  </tr><tr>
    <td class="ui-widget" style="padding-bottom:5px">
      <label for="encryptPassword2" class="UILabel">And again:</label></td>
    <td class="ui-widget" style="float:left;padding-bottom:5px">
            <input type="password" id="encryptPassword2" name="encryptPassword2" size="30" autocomplete="off" value=""/></td>
  </tr><tr>
    <td class="ui-widget">&nbsp;</td>
    <td class="ui-widget" style="float:left">
      <input type="checkbox" name="hideEncryptChars" id="hideEncryptChars" checked="checked"/> <label for="hideEncryptChars">Hide characters</label></td>
  </tr><tr>
    <td class="ui-widget">&nbsp;</td>
    <td class="ui-widget" style="float:left">
      <span class="password-error" name="passwordError" id="passwordError">&nbsp;</span>
    </td>
  </tr><tr>
    <td colspan="2"><button name="setPasswordButton" id="setPasswordButton" disabled="disabled" class="greyButton" style="margin:0px;margin-top:5px" onclick="javascript:setEncryptPassword();">OK</button> <button onclick="javascript:cancelEncryptPassword();">Cancel</button></td>
  </tr></table>
  </div>
</div>
</span> <!-- End of hidden dialogs -->


<!-- Add Files button -->
<div class="center" style="margin-top:20px; display:block;">
  <input type="file" id="AddFiles" multiple style="display:none" onchange="addFiles(this.files)">
  <button id="AddFilesButton">Add Files</button><span id="libraryselector"> <select id="file_select" name="file_select" class="file_select"><option value="-1">and/or select a file...</option></select></span>
</div>

<table id="uploadTable" width="100%" border="0" cellpadding="5">
  <tr valign="top">
   <td> </td>
   <td>
    <table class="UD_form" cellpadding="4">
      <thead class="UD_form_header"><tr>
        <td> </td>
        <td>Filename</td>
        <td class="ndfilesize">Size</td>
        <td colspan="2">Description</td>
      </tr></thead>
      <tbody id="uploadFiles">
      </tbody>
    </table>
   </td>
  </tr>
</table>

</form>


<div id="uploadDialog" style="display: none;">
  <h1>Uploading...</h1>
  <div id="progressBarContainer" style="border: none; height: 80px; width: 350px; margin-left: 25px;">
    <div id="progressContainer">
      <div id="progressouter" style="display: block; margin-bottom: 10px;">
        <div id="progressinner" style="width:0%;"></div>
      </div>
      <div id="percentText" style="visibility:visible;"></div>
    </div>
  </div>
</div>

<div class="center" id="DropoffButton"><span id="totalSize"></span><br /><button id="RealDropoffButton" onclick="submitform();">Drop-off Files</button></div>

<div id="overlay" style="display:none">
  <span id="overlaytext">Drop to<br/>Add Files<br/><span id="overlaytextsub">(It will copy, not move)</span></span>
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
