<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-09 10:46:37
  from '/opt/zendto/templates/show_dropoff.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f58966db0b5b9_14574154',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bafc0de2b3df393f6a28e83524f43264c9aa3bc' => 
    array (
      0 => '/opt/zendto/templates/show_dropoff.tpl',
      1 => 1594376424,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f58966db0b5b9_14574154 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/zendto/lib/smarty/plugins/block.t.php','function'=>'smarty_block_t',),1=>array('file'=>'/opt/zendto/lib/smarty/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),2=>array('file'=>'/opt/zendto/lib/smarty/plugins/modifier.mb_wordwrap.php','function'=>'smarty_modifier_mb_wordwrap',),3=>array('file'=>'/opt/zendto/lib/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->compiled->nocache_hash = '14325312545f58966dac2aa2_20561231';
$_smarty_tpl->_assignInScope('thisTemplate', basename($_smarty_tpl->source->filepath));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<link rel="stylesheet" href="css/jquery-ui.min.css">
<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.balloon.min.js"><?php echo '</script'; ?>
>
<div id="dropoff-inner">

<?php echo '<script'; ?>
 type="text/javascript">
<!--

var allowResend = '<?php echo $_smarty_tpl->tpl_vars['allowResend']->value;?>
';
var resenddefaultIsYes = <?php echo $_smarty_tpl->tpl_vars['defaultEmailPasscode']->value;?>
;
var waiverAgreed = false;
var resendtheysaidyes = false;
var resendtheysaidno  = false;
var showingResendDialog = false;
var showingPasswordDialog = false;
var wantToDownloadAll = false;
var fidTryingToDecrypt = -1;
var ZendTo = new Object();

<?php if ($_smarty_tpl->tpl_vars['isDeleteable']->value) {?>
function doDelete(){
  if ( confirm("<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Do you really want to delete this dropoff?<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>") ) {
    return document.deleteDropoff.submit();
  }
  return 0;
}
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['isSendable']->value) {?>

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
  <?php if ($_smarty_tpl->tpl_vars['allowEmailPasscode']->value == "true") {?>
    showingPasswordDialog = false;
    showingResendDialog   = true;
    $.facebox(ZendTo.resendDialog);
  <?php } else { ?>
    $('#resendWithPasscode').val("no");
    return document.resendDropoff.submit();
  <?php }?>
}
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['isClickable']->value && $_smarty_tpl->tpl_vars['dropoffFilesCount']->value > 0) {?>
function doDownloadZip() {
  // Download all the files as a zip.
  // Just the same as doing one file, just set fid to 'all'.
<?php if ($_smarty_tpl->tpl_vars['isEncrypted']->value) {?>
  downloadEncrypted('all');
<?php } else { ?>
  window.location.href = $('#downloadZipLink').attr('href');
<?php }?>
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

<?php if ($_smarty_tpl->tpl_vars['isEncrypted']->value) {?>
  // Find the passphrase if we don't already have one
  if ($('#n').val().length == 0) {
    // No, so display password dialog
    showingPasswordDialog = true;
    showingResendDialog   = false;
    $('#decryptPassword').val('');
    wantToDownloadAll = true;
    $.facebox(ZendTo.passwordDialog);
    return;
  }
<?php }?>  

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
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['isEncrypted']->value) {?>
// Download file fid f
function downloadEncrypted(f) {
  // Have we got the password yet?
  // Need to remember which file they clicked so we can come back to it.
  // If we are called with -1, just try to get the last file we tried.
  // Need to catch zero explicitly, as otherwise 'all'==0.
  if (f==='all' || f===0 || f>0) fidTryingToDecrypt = f;

  // Do we have a confirmed password?
  if ($('#n').val()) {
    // We have a password, so try to download fid
    $('#fid').val(fidTryingToDecrypt);
    // Warn Mac users that big zip files won't work in
    // Archive Utility, so they'll have to use the "unzip"
    // command in a Terminal window.
    // Zips over this size have to be built with Zip64 extensions.
    if (fidTryingToDecrypt==='all' &&
        navigator.platform.toUpperCase().indexOf('MAC')>=0 &&
        (<?php echo $_smarty_tpl->tpl_vars['dropoffFilesCount']->value;?>
-0 > 65500 || <?php echo $_smarty_tpl->tpl_vars['totalBytes']->value;?>
-0 > 4000000000)) {
      alert("<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Warning: Zip files of this size will probably not open on a Mac by double-clicking them. You will have to use another app, or else the 'unzip' or 'ditto' commands in a Terminal window.<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>");
    }
    document.decryptDropoff.submit();
  } else {
    // No, so display password dialog
    showingPasswordDialog = true;
    showingResendDialog   = false;
    $('#decryptPassword').val('');
    $.facebox(ZendTo.passwordDialog);
  }
  return false;
}

function hideDecryptChars() {
  if (this.checked) {
    $('#decryptPassword').attr('type', 'password');
  } else {
    $('#decryptPassword').attr('type', 'text');
  }
  $('#decryptPassword').trigger('focus');
}

// Click cancel in the password dialog ==> don't save password
function cancelDecryptPassword() {
  $(document).trigger('close.facebox');
}

// Click OK in password dialog ==> save password
function setDecryptPassword() {
  $('#n').val($('#decryptPassword').val());
  $(document).trigger('close.facebox');
  $('#error').remove();
}

// Any key is typed in the password text box.
function keyDecryptPassword(e) {
  if ($('#decryptPassword').val()) {
    // Enable OK
    $('#setPasswordButton').prop('disabled', false).removeClass('greyButton');
    // Save password if they pressed return
    if (e.keyCode == 13) setDecryptPassword();
  } else {
    // Disable OK
    $('#setPasswordButton').prop('disabled', true).addClass('greyButton');
  }
}


<?php }?>


$(document).ready(function() {
    <?php if (!$_smarty_tpl->tpl_vars['isClickable']->value && !$_smarty_tpl->tpl_vars['isSendable']->value && !$_smarty_tpl->tpl_vars['isDeleteable']->value) {?>
    $('#localeButton').prop('onclick', null);
    $('#localeButton').removeClass('dropdown-has-hover');
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['isDeleteable']->value) {?>
    $('#deleteButton').on('click', doDelete);
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['isSendable']->value) {?>
    $('#resendButton').on('click', doResend);
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['isClickable']->value && $_smarty_tpl->tpl_vars['dropoffFilesCount']->value > 0) {?>
        $('#downloadAllDiv').css('display', 'flex');
    $('#downloadZipButton').on('click', doDownloadZip);
    // If we are not on IE, enable and show "download all" button
    if (! /MSIE\s|Trident\//i.test(navigator.userAgent)) {
      $('#downloadAllButton').on('click', doDownloadAll);
            $('#downloadAllButton').css('display', 'inline');
    }
  <?php }?>

  //
  // Now set up the facebox dialogs
  //

<?php if ($_smarty_tpl->tpl_vars['isEncrypted']->value) {?>
  $(document).on("change keyup input", '#decryptPassword', keyDecryptPassword);
  $(document).on('change', '#hideDecryptChars', hideDecryptChars);
<?php }
if ($_smarty_tpl->tpl_vars['isSendable']->value) {?>
  $(document).on('keyup', '#resendDialog', keyResend);
<?php }?>

  // Bind to the reveal of facebox
  $(document).on('reveal.facebox', function(){
<?php if ($_smarty_tpl->tpl_vars['isSendable']->value) {?>
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
<?php }
if ($_smarty_tpl->tpl_vars['isEncrypted']->value) {?>
    if (showingPasswordDialog) {
      // Set up the password dialog box
      pwd = $('#n').val();
      $('#decryptPassword').attr('type', 'password');
      $('#decryptPassword').val(pwd);
      $('#decryptPassword').trigger('focus');
      $('#hideDecryptChars').prop('checked', true);
      if (pwd) {
        // Enable OK
        $('#setPasswordButton').prop('disabled', false).removeClass('greyButton');
      } else {
        // Disable OK
        $('#setPasswordButton').prop('disabled', true).addClass('greyButton');
      }
    }
<?php }?>
  });

<?php if ($_smarty_tpl->tpl_vars['isEncrypted']->value && $_smarty_tpl->tpl_vars['isClickable']->value) {?>
  // Bind an event to my new facebox cancel event
  $(document).on('cancel.facebox', function() {
    $('#decryptPassword').val('');
    if (showingPasswordDialog)
      cancelDecryptPassword();
    showingPasswordDialog = false;
  });
<?php }?>

  // Bind to facebox's close event
  // This gets called when the box is closed for any reason
  $(document).on('close.facebox', function(){
<?php if ($_smarty_tpl->tpl_vars['isSendable']->value) {?>
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
<?php }
if ($_smarty_tpl->tpl_vars['isEncrypted']->value) {?>
    if (showingPasswordDialog) {
      showingPasswordDialog = false;
      showingResendDialog   = false; // Reset both to be sure
      // We were trying to download a file.
      // So give it another go, *if* we now have a password set.
      // If it's still blank, do nothing.
      if ($('#decryptPassword').val()) {
        if (wantToDownloadAll)
          doDownloadAll();
        else
          downloadEncrypted(-1);
      }
    }
<?php }?>
  });

  // Get the dialogs and copy them into new objects + remove from the DOM.
  ZendTo.passwordDialog = $('#passwordDialog').html();
  ZendTo.resendDialog   = $('#resendDialog').html();
  $('#passwordDialog').remove();
  $('#resendDialog').remove();

  // Do we want to show and enforce the waiver text?
  // First 2 mean: are we a recipient seeing this?
  <?php if ($_smarty_tpl->tpl_vars['isClickable']->value && !$_smarty_tpl->tpl_vars['isDeleteable']->value && $_smarty_tpl->tpl_vars['showWaiver']->value) {?>
    // Show the waiver
    $('#waiverSpan').css('display', 'block');
    $('#waiverButton').on('click', function() {
      waiverAgreed = true;
      $('#waiverButton').prop('checked', true);
      $('#waiverSpan').css('display', 'none');
      $('#dropoffTable').css('display', 'table');
    });
  <?php } else { ?>
    // Show the main table of the drop-off summary and files
    $('#dropoffTable').css('display', 'table');
  <?php }?>
  // The "copy to clipboard" button for the link, if it exists
  if ($('#linkbox').length) {
    const copytext = '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Click to copy link to clipboard<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>';
    const copiedtext = '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Copied<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>';
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
<?php echo '</script'; ?>
>

<span style="display:none">
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "resenddefault_t", null);
if ($_smarty_tpl->tpl_vars['defaultEmailPasscode']->value == "true") {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Yes<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>No<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
<div id="resendDialog">
  <h1><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Include Passcode?<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></h1>
  <p><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Should the Passcode be included in the emails as well as the Claim ID?<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></p><p><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array(1=>$_smarty_tpl->tpl_vars['resenddefault_t']->value));
$_block_repeat=true;
echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['resenddefault_t']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Click '%1' if you are not sure.<?php $_block_repeat=false;
echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['resenddefault_t']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></p>
  <p class="center" style="margin: 25px 20px 20px">
    <a href="javascript:resendYesNo(true);" id="passcodeYes" name="passcodeYes" class="greyButton" style="float:none;"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Yes<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></a> <a href="javascript:resendYesNo(false);" id="passcodeNo" name="passcodeNo" class="greyButton" style="float:none"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>No<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></a>
  </p>
</div>

<div id="passwordDialog">
        <h1><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Decryption Passphrase<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></h1>
        <div class="center dark-red"><strong><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no'));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>You can ask the sender<br/>for the decryption passphrase.<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></strong></div>
        <div class="center" style="white-space:nowrap">
        <table border="0" width="100%" style="padding:0px"><tr>
          <td class="ui-widget" style="padding-bottom:5px">
            <label for="decryptPassword" class="UILabel"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Passphrase<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>:</label></td>
          <td class="ui-widget" style="float:left;padding-bottom:5px">
             <input type="text" id="decryptPassword" name="decryptPassword" size="30" autocomplete="off" value=""/></td>
        </tr><tr>
          <td class="ui-widget">&nbsp;</td>
          <td class="ui-widget" style="float:left">
            <input type="checkbox" name="hideDecryptChars" id="hideDecryptChars" checked="checked"/> <label for="hideDecryptChars"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Hide characters<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></label></td>
          </td>
        </tr><tr>
          <td colspan="2"><button name="setPasswordButton" id="setPasswordButton"  style="margin:0px;margin-top:5px" onclick="javascript:setDecryptPassword();"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>OK<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></button> <button onclick="javascript:cancelDecryptPassword();"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Cancel<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></button></td>
        </tr></table>
        </div>
</div>
</span>


<?php if ($_smarty_tpl->tpl_vars['isSendable']->value || $_smarty_tpl->tpl_vars['isDeleteable']->value) {?>
<div style="float:right; display:flex">
<?php if ($_smarty_tpl->tpl_vars['isDeleteable']->value) {?><button id="deleteButton" name="deleteButton" class="UD_textbutton_admin"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Delete Dropoff<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></button><?php } else { ?>&nbsp;<?php }
if ($_smarty_tpl->tpl_vars['isSendable']->value) {?><button id="resendButton" name="resendButton" class="UD_textbutton_admin"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Resend Dropoff<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></button><?php } else { ?>&nbsp;<?php }?>
</div>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['isClickable']->value && !$_smarty_tpl->tpl_vars['isSendable']->value && !$_smarty_tpl->tpl_vars['isDeleteable']->value && !empty($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <?php if (count($_smarty_tpl->tpl_vars['errors']->value) > 0) {?>
        <div name="error" id="error">
            <table class="UD_error" width="100%">
          <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = 0;
if ($_smarty_tpl->tpl_vars['i']->value < count($_smarty_tpl->tpl_vars['errors']->value)) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value < count($_smarty_tpl->tpl_vars['errors']->value); $_smarty_tpl->tpl_vars['i']->value++) {
?>
              <tr>
                <td class="UD_error_title"><i class="fas fa-exclamation-circle fa-fw"></i></td><td class="UD_error_title"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->tpl_vars['i']->value]['title'])===null||$tmp==='' ? "&nbsp;" : $tmp);?>
</td>
              </tr>
              <tr>
                <td class="UD_error_message"><i class="fas fa-fw"></i></td><td class="UD_error_message"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->tpl_vars['i']->value]['text'])===null||$tmp==='' ? "&nbsp;" : $tmp);?>
</td>
              </tr>
          <?php }
}
?>
            </table>
        </div>
  <?php }?>

<?php } else { ?> 
<h1><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Drop-Off Summary<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></h1>

<span name="waiverSpan" id="waiverSpan" style="display:none">
  <span class="infoBox waiverBox">
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no'));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>This is a terms and conditions waiver that recipients must agree to.
    <br/>To switch it on/off, see the settings <tt>showRecipientsWaiverCheckbox</tt> and <tt>defaultRecipientsWaiver</tt> in <tt>/opt/zendto/config/preferences.php</tt>.
    <br/>It can be long and may contain HTML tags.
    <br/>To change this text:
    <ol>
      <li>look for this text in the <tt>/opt/zendto/config/locale/*_*/LC_MESSAGES/zendto.po</tt> text files</li>
      <li>put your own text in <tt>msgstr&nbsp;"..."</tt> line(s) immediately following it</li>
      <li>run <tt>/opt/zendto/bin/makelanguages</tt> as root</li>
      <li>restart Apache (to ensure it really picks up the new text).</li>
    </ol>
    <p>This is exactly how you change the text for anything in the ZendTo interface. For more info, read <a href="https://zend.to/translators.php">the translations page in the documentation</a>.</p><?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <label for="waiverButton"><input name="waiverButton" id="waiverButton" type="checkbox"/>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no'));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>I have read, understood and agree to the terms and conditions above.<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></label>
  </span>
  <br class="clear"/>
</span>

<table name="dropoffTable" id="dropoffTable" border="0" cellpadding="5" style="width:100%; display:none;">
<?php if ($_smarty_tpl->tpl_vars['dropoffFilesCount']->value > 0) {?>
    <?php if (!$_smarty_tpl->tpl_vars['isClickable']->value && !$_smarty_tpl->tpl_vars['isSendable']->value && !$_smarty_tpl->tpl_vars['isDeleteable']->value && empty($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <tr valign="top">
    <td></td>
    <td colspan="4" style="padding: 12px">
    <?php if ($_smarty_tpl->tpl_vars['isEncrypted']->value) {?>
      <span style="font-size: 1.1em"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Your files have been encrypted and sent successfully.<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?><br/><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array(1=>$_smarty_tpl->tpl_vars['expiresin']->value));
$_block_repeat=true;
echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['expiresin']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>They will expire in %1.<?php $_block_repeat=false;
echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['expiresin']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></span>
    <?php } else { ?>
      <span style="font-size: 1.1em"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Your files have been sent successfully.<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?><br/><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array(1=>$_smarty_tpl->tpl_vars['expiresin']->value));
$_block_repeat=true;
echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['expiresin']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>They will expire in %1.<?php $_block_repeat=false;
echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['expiresin']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></span>
    <?php }?>
    </td>
  </tr>
  <?php } elseif ($_smarty_tpl->tpl_vars['isEncrypted']->value && !$_smarty_tpl->tpl_vars['inPickupPHP']->value) {?>
  <tr valign="top">
    <td></td>
    <td colspan="4" style="padding: 12px">
      <span style="font-size: 1.1em"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>This drop-off is encrypted.<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></span>
    </td>
  </tr>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['isClickable']->value) {?>
  <tr valign="top">
    <td></td>
    <td colspan="4" style="padding: 12px">
      <span style="font-size: 1.1em"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Click on a filename to download that file.<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?><br/><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array(1=>$_smarty_tpl->tpl_vars['expiresin']->value));
$_block_repeat=true;
echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['expiresin']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>This drop-off will expire in %1.<?php $_block_repeat=false;
echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['expiresin']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></span>
    </td>
  </tr>
  <?php }
}?>
  <tr valign="top">
    <td></td>
    <td>

<?php if ($_smarty_tpl->tpl_vars['dropoffFilesCount']->value > 0) {?>
      <table id="filesTable" name="filesTable" class="UD_form" cellpadding="4" style="width:100%">
        <thead class="UD_form_header">
          <td colspan="2"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Filename<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></td>
          <td align="right"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Size<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></td>
          <td align="center"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>SHA-256 Checksum<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></td>
          <td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Description<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></td>
        </thead>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['files']->value, 'f');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['f']->value) {
?>
        <tr class="UD_form_lined" valign="middle">
      <?php if ($_smarty_tpl->tpl_vars['isClickable']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['isEncrypted']->value) {?>
                    <td width="20" align="center"><a href="#_js" onclick="downloadEncrypted(<?php echo $_smarty_tpl->tpl_vars['f']->value['rowID'];?>
);" title="<?php echo $_smarty_tpl->tpl_vars['f']->value['mimeType'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['f']->value['mimeType'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['f']->value['icon'];?>
" border="0" title="<?php echo $_smarty_tpl->tpl_vars['f']->value['mimeType'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['f']->value['mimeType'];?>
"/></a></td>
          <td class="UD_form_lined mono"><a href="#_js" onclick="downloadEncrypted(<?php echo $_smarty_tpl->tpl_vars['f']->value['rowID'];?>
);" name="download_<?php echo $_smarty_tpl->tpl_vars['f']->value['rowID'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['f']->value['basename'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['f']->value['basename'];?>
"><?php echo $_smarty_tpl->tpl_vars['f']->value['basename'];?>
</a></td>
        <?php } else { ?>
          <td width="20" align="center"><a href="<?php echo $_smarty_tpl->tpl_vars['downloadURL']->value;
if ($_smarty_tpl->tpl_vars['auth']->value != '') {?>&auth=<?php echo $_smarty_tpl->tpl_vars['auth']->value;
}?>&fid=<?php echo $_smarty_tpl->tpl_vars['f']->value['rowID'];?>
" download="<?php echo $_smarty_tpl->tpl_vars['f']->value['downloadname'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['f']->value['icon'];?>
" border="0" title="<?php echo $_smarty_tpl->tpl_vars['f']->value['mimeType'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['f']->value['mimeType'];?>
"/></a></td>
          <td class="UD_form_lined mono"><a href="<?php echo $_smarty_tpl->tpl_vars['downloadURL']->value;
if ($_smarty_tpl->tpl_vars['auth']->value != '') {?>&auth=<?php echo $_smarty_tpl->tpl_vars['auth']->value;
}?>&fid=<?php echo $_smarty_tpl->tpl_vars['f']->value['rowID'];?>
" id="download_<?php echo $_smarty_tpl->tpl_vars['f']->value['rowID'];?>
" name="download_<?php echo $_smarty_tpl->tpl_vars['f']->value['rowID'];?>
" download="<?php echo $_smarty_tpl->tpl_vars['f']->value['downloadname'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['f']->value['basename'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['f']->value['basename'];?>
"><?php echo $_smarty_tpl->tpl_vars['f']->value['basename'];?>
</a></td>
        <?php }?>
      <?php } else { ?>
          <td width="20" align="center"><img src="<?php echo $_smarty_tpl->tpl_vars['f']->value['icon'];?>
" border="0" title="<?php echo $_smarty_tpl->tpl_vars['f']->value['mimeType'];?>
" alt="[file]"/></td>
          <td class="UD_form_lined mono"><?php echo $_smarty_tpl->tpl_vars['f']->value['basename'];?>
</td>
      <?php }?>
          <td class="UD_form_lined" align="right"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['f']->value['length'],' ','&nbsp;');?>
</td>
          <td class="UD_form_lined" align="center"><?php if ($_smarty_tpl->tpl_vars['f']->value['checksum'] != '') {?><span class="checksum"><?php echo smarty_modifier_mb_wordwrap($_smarty_tpl->tpl_vars['f']->value['checksum'],$_smarty_tpl->tpl_vars['f']->value['wrapat'],"<br/>",true);?>
</span><?php } else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Not calculated<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?></td>
          <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['f']->value['description'])===null||$tmp==='' ? "&nbsp;" : $tmp);?>
</td>
        </tr>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <tr class="UD_form_footer">
          <td colspan="5" align="center">&nbsp;<br/><?php if ($_smarty_tpl->tpl_vars['dropoffFilesCount']->value != 1) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array(1=>$_smarty_tpl->tpl_vars['dropoffFilesCount']->value));
$_block_repeat=true;
echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['dropoffFilesCount']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>%1 files<?php $_block_repeat=false;
echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['dropoffFilesCount']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array(1=>$_smarty_tpl->tpl_vars['dropoffFilesCount']->value));
$_block_repeat=true;
echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['dropoffFilesCount']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>%1 file<?php $_block_repeat=false;
echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['dropoffFilesCount']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?><br />
          <div class="center" style="display:none; justify-content:center; align-items:stretch" name="downloadAllDiv" id="downloadAllDiv">
            <button style="width:auto; display:none" id="downloadAllButton" name="downloadAllButton"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Download All Files<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></button>
  <?php if ($_smarty_tpl->tpl_vars['isEncrypted']->value) {?>
            <button style="width:auto" id="downloadZipButton" name="downloadZipButton"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no'));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Download All Files<br/>as an Unencrypted Zip<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></button>
  <?php } else { ?>
            <button style="width:auto" id="downloadZipButton" name="downloadZipButton"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no'));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Download All Files<br/>as a Zip<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></button>
            <a name="downloadZipLink" id="downloadZipLink" style="display:none" href="<?php echo $_smarty_tpl->tpl_vars['downloadURL']->value;
if ($_smarty_tpl->tpl_vars['auth']->value != '') {?>&auth=<?php echo $_smarty_tpl->tpl_vars['auth']->value;
}?>&fid=all">zip</a>
  <?php }?>
          </div>
          </td>
        </tr>
      </table>
      <form name="resendDropoff" method="post" action="<?php echo $_smarty_tpl->tpl_vars['zendToURL']->value;
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'hidePHPExt', array('t'=>'resend.php'), false);?>
">
<?php if ($_smarty_tpl->tpl_vars['isSendable']->value) {?>
        <input type="hidden" name="claimID" value="<?php echo $_smarty_tpl->tpl_vars['claimID']->value;?>
"/>
        <input type="hidden" name="claimPasscode" value="<?php echo $_smarty_tpl->tpl_vars['claimPasscode']->value;?>
"/>
        <input type="hidden" name="resendWithPasscode" value="yes"/>
<?php }?>

  <?php if ($_smarty_tpl->tpl_vars['emailAddr']->value != '') {?>
        <input type="hidden" name="emailAddr" value="<?php echo $_smarty_tpl->tpl_vars['emailAddr']->value;?>
"/>
  <?php }?>
      </form>
      <form name="deleteDropoff" method="post" action="<?php echo $_smarty_tpl->tpl_vars['zendToURL']->value;
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'hidePHPExt', array('t'=>'delete.php'), false);?>
">
<?php if ($_smarty_tpl->tpl_vars['isDeleteable']->value) {?>
        <input type="hidden" name="claimID" value="<?php echo $_smarty_tpl->tpl_vars['claimID']->value;?>
"/>
        <input type="hidden" name="claimPasscode" value="<?php echo $_smarty_tpl->tpl_vars['claimPasscode']->value;?>
"/>
<?php }?>

  <?php if ($_smarty_tpl->tpl_vars['emailAddr']->value != '') {?>
        <input type="hidden" name="emailAddr" value="<?php echo $_smarty_tpl->tpl_vars['emailAddr']->value;?>
"/>
  <?php }?>
      </form>

            <form name="decryptDropoff" method="post" action="<?php echo $_smarty_tpl->tpl_vars['downloadURL']->value;?>
">
<?php if ($_smarty_tpl->tpl_vars['isEncrypted']->value) {?>
        <input type="hidden" id="auth" name="auth" value="<?php echo $_smarty_tpl->tpl_vars['auth']->value;?>
"/>
        <input type="hidden" id="fid" name="fid" value=""/>
        <input type="hidden" id="n" name="n" value=""/>
<?php }?>
      </form>
<?php } else { ?>
      <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>No files in the dropoff... something is amiss!<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

    </td>
  </tr>
</table>

<?php if ($_smarty_tpl->tpl_vars['dropoffFilesCount']->value > 0) {?>
<div class="UILabel"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>From<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>:</div> <br class="clear" />
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "from_t", null);?><span id="fromName"><?php echo $_smarty_tpl->tpl_vars['senderName']->value;?>
</span> <span id="fromEmail">&lt;<?php echo $_smarty_tpl->tpl_vars['senderEmail']->value;?>
&gt;</span> <span id="fromOrg"><?php echo $_smarty_tpl->tpl_vars['senderOrg']->value;?>
</span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "date_t", null);
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['createdDate']->value,"%Y-%m-%d&nbsp;%H:%M");
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
<div id="fromHolder"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['from_t']->value,2=>$_smarty_tpl->tpl_vars['senderHost']->value,3=>$_smarty_tpl->tpl_vars['date_t']->value));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['from_t']->value,2=>$_smarty_tpl->tpl_vars['senderHost']->value,3=>$_smarty_tpl->tpl_vars['date_t']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>%1 <span>from %2 on %3</span><?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['from_t']->value,2=>$_smarty_tpl->tpl_vars['senderHost']->value,3=>$_smarty_tpl->tpl_vars['date_t']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></div>

<?php if ($_smarty_tpl->tpl_vars['showSubject']->value) {?>
<div class="UILabel"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Subject<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>:</div> <br class="clear" />
<div id="subjectHolder"><?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['showRecips']->value) {?>
<div class="UILabel"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>To<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>:</div> <br class="clear" />
<div id="emailHolder">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recipients']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
              <div class='emailButton'><?php echo $_smarty_tpl->tpl_vars['r']->value[0];?>
 &lt;<?php echo $_smarty_tpl->tpl_vars['r']->value[1];?>
&gt;</div>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }?>
<br class="clear" />
<?php }?>

<div class="clearfix" style="display:block; margin-top:3px;">
  <!-- Note and its header on the left -->
  <div style="display:inline-block; float:left; width:50%; vertical-align:top;">
    <div style="display:block;">
    <?php if ($_smarty_tpl->tpl_vars['dropoffFilesCount']->value > 0) {?>
      <label class="UILabel" style="margin-top:0px; clear:left;" for="comments"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Comments<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>:</label><br />
      <textarea readonly="yes" id="comments" name="comments" style="width: 450px; height: 100px;"><?php echo $_smarty_tpl->tpl_vars['note']->value;?>
</textarea>
    <?php } else { ?>
      <!-- Padding -->
      <div class="UILabel" style="display:block; float:none; margin-top:0px;">&nbsp;</div>
      &nbsp;<br />
    <?php }?>
    </div>
  </div>

<?php if ($_smarty_tpl->tpl_vars['showIDPasscode']->value) {?>
  <!-- ClaimID and Passcode and their headings on the right -->
  <div style="display:inline-block; float:left; width:50%; vertical-align:top;">
    <div style="display:block;">
      <!-- Padding -->
      <div class="UILabel" style="display:block; float:none; margin-top:0px;">&nbsp;</div>

        <?php if ($_smarty_tpl->tpl_vars['isSendable']->value || (!$_smarty_tpl->tpl_vars['isSendable']->value && $_smarty_tpl->tpl_vars['isAuthorizedUser']->value)) {?>
      <div id="sendContainer">
        <table style="table-layout:auto;">
          <tr class="sendContainerLinkText">
          <td style="vertical-align:top; padding-top:4px; width:1%;"><i class="fas fa-info-circle fa-fw"></i></td>
          <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "copybutton", null);?><button id="copylinkButton" name="copylinkButton" class="resetButton"><i class="fas fa-copy fa-fw"></i></button><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
          <td colspan="2"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['copybutton']->value));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['copybutton']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>To send the files to someone else, send them this link %1, or else the Claim ID & Passcode:<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['copybutton']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></td>
          </tr><tr>
          <td><i class="fas fa-fw"></i></td>
          <td><textarea readonly="yes" id="linkbox" name="linkbox" style="resize:none; margin-left:0px; word-wrap:normal; white-space:pre; margin-bottom:4px; box-sizing: border-box; width:100%;" wrap="hard" rows="3"><?php echo $_smarty_tpl->tpl_vars['linkURL']->value;
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'hidePHPExt', array('t'=>'pickup.php'), false);?>
?claimID=<?php echo $_smarty_tpl->tpl_vars['claimID']->value;?>
&amp;claimPasscode=<?php echo $_smarty_tpl->tpl_vars['claimPasscode']->value;?>
&nbsp;&nbsp;
<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Claim ID<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>: <?php echo $_smarty_tpl->tpl_vars['claimID']->value;?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Claim Passcode<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>: <?php echo $_smarty_tpl->tpl_vars['claimPasscode']->value;?>
</textarea></td>
          <td><i class="fas fa-fw" style="width:1%;"></i></td>
          </tr>
        </table>
      </div>
  <?php } elseif ($_smarty_tpl->tpl_vars['isAuthorizedUser']->value) {?>
            <div id="sendContainer">
        <strong><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Claim ID<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>:</strong> <?php echo $_smarty_tpl->tpl_vars['claimID']->value;?>
<br/>
        <strong><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Claim Passcode<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>:</strong> <?php echo $_smarty_tpl->tpl_vars['claimPasscode']->value;?>

      </div>
  <?php } else { ?>
      &nbsp;
  <?php }?>
    </div>
  </div>
<?php }?>
</div>
<br />

<table border="0" cellpadding="5">

<!-- Show all the recipients and their pick-up details -->
<?php if ($_smarty_tpl->tpl_vars['showRecips']->value) {?>
  <tr>
    <td colspan="2">
  <?php if ($_smarty_tpl->tpl_vars['pickupsCount']->value > 0) {?>
      <table width="100%" class="UD_form" cellpadding="4">
        <thead class="UD_form_header">
          <td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Picked-up on date...<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></td>
          <td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>...from remote address...<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></td>
          <td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>...by recipient.<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></td>
        </thead>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pickups']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
        <tr class="UD_form_lined" valign="middle">
          <td class="UD_form_lined mono"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['p']->value['pickupDate'],"%Y-%m-%d&nbsp;%H:%M");?>
</td>
          <td class="UD_form_lined"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['p']->value['hostname'])===null||$tmp==='' ? "&nbsp;" : $tmp);?>
</td>
          <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['p']->value['pickedUpBy'])===null||$tmp==='' ? "&nbsp;" : $tmp);?>
</td>
        </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <tr class="UD_form_footer">
          <td colspan="3" align="center"><?php if ($_smarty_tpl->tpl_vars['pickupsCount']->value != 1) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array(1=>$_smarty_tpl->tpl_vars['pickupsCount']->value));
$_block_repeat=true;
echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['pickupsCount']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>%1 pickups<?php $_block_repeat=false;
echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['pickupsCount']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>1 pickup<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?></td>
        </tr>
      </table>
  <?php } else { ?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>None of the files has been picked-up yet.<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
  <?php }?>
    </td>
  </tr>
<?php }?>
</table>

<?php }?> 
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
