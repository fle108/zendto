<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-09 11:46:00
  from '/opt/zendto/templates/pickup_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f58a458bf8b22_76843831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ee092952e4ef27ddb7cd363a0541e7d86c83668' => 
    array (
      0 => '/opt/zendto/templates/pickup_list.tpl',
      1 => 1593956273,
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
function content_5f58a458bf8b22_76843831 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'hidePHPExt' => 
  array (
    'compiled_filepath' => '/var/zendto/templates_c/bc72b3c654f7aa91ab3f54ebaf6f189ff001cd81_0.file.functions.tpl.cache.php',
    'uid' => 'bc72b3c654f7aa91ab3f54ebaf6f189ff001cd81',
    'call_name' => 'smarty_template_function_hidePHPExt_1815124155f58a458ba74e6_97029653',
  ),
  'button' => 
  array (
    'compiled_filepath' => '/var/zendto/templates_c/bc72b3c654f7aa91ab3f54ebaf6f189ff001cd81_0.file.functions.tpl.cache.php',
    'uid' => 'bc72b3c654f7aa91ab3f54ebaf6f189ff001cd81',
    'call_name' => 'smarty_template_function_button_1815124155f58a458ba74e6_97029653',
  ),
  'footerButtons' => 
  array (
    'compiled_filepath' => '/var/zendto/templates_c/bc72b3c654f7aa91ab3f54ebaf6f189ff001cd81_0.file.functions.tpl.cache.php',
    'uid' => 'bc72b3c654f7aa91ab3f54ebaf6f189ff001cd81',
    'call_name' => 'smarty_template_function_footerButtons_1815124155f58a458ba74e6_97029653',
  ),
));
?><!DOCTYPE html
        PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
         "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">






<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" xml:lang="en-US">
  <head>
    <title>ZendTo</title>
        <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/buttons.dataTables.min.css"/>
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
var howWeGotHere = "pickup_list.php";
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
    '<input type="hidden" name="gothere" id="gothere" value="pickup_list.php"/>'+
    '<input type="hidden" name="template" id="template" value="pickup_list.tpl"/>'+
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
        <div id="logo"><div id="logoxclip"><a href="http://zendto.localhost/">ZendTo</a></div></div>

        <!-- Home, Inbox, etc buttons -->
        <div id="topMenu">
                <ul>
                        <li id="homeLink" class="selected"><a href="http://zendto.localhost/">Home</a></li>
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



<script type="text/javascript" src="js/jquery.balloon.min.js"></script>

<script type="text/javascript">
<!--

var visToReal = []; // map visible column number to real one. -1 ==> empty.

// Update the visToReal map
function mapVisToReal(table) {
  var real=0;
  var visible=0;
  var numColumns = table.init().columns.length;

  // Build the map from visible to real
  while (real < numColumns && visible < numColumns) {
    // Skip the invisible columns
    while (!table.column(real).visible() && real < numColumns)
      real++;
    visToReal[visible] = (real>=numColumns)?-1:real;
    real++;
    visible++
  }
  // Fill the remainder of the map with -1
  while (visible < numColumns) {
    visToReal[visible] = -1;
    visible++;
  }
}

// Replace HTML entities by their real equivalents for CSV
function htmlUnescape(str){
  return str
        .replace(/\<br\/?\>/g, ' ')
        .replace(/&quot;/g, '"')
        .replace(/&#39;/g, "'")
        .replace(/&lt;/g, '<')
        .replace(/&gt;/g, '>')
        .replace(/&amp;/g, '&');
}

// As above, but also handle linebreaks
function htmlUnescapeAndBR(str){
  return str
        .replace(/\<br\/?\>/g, "; ") // Separator for emails
        .replace(/&quot;/g, '"')
        .replace(/&#39;/g, "'")
        .replace(/&lt;/g, '<')
        .replace(/&gt;/g, '>')
        .replace(/&amp;/g, '&');
}

// Given the cell we're converting and the HTML in it,
// convert it to the CSV we're going to export.
function cellToCSV(html, rowNum, colNum, node) {
  // Massage the HTML into the CSV
  switch(visToReal[colNum]) {
    case -1:          // This should never happen.
      return html;
    case 2:           // Recipients
      return htmlUnescapeAndBR(html);
    case 4:           // Size in bytes
      // Export the real size, not the formatted string
      return $(node).attr('data-order');
    case 7:           // picked-up and encrypted
    case 8:           // booleans
      // Reduce the tick-boxes to yes/no
      return html.replace(/^.*times.*$/, 'false')
                 .replace(/^.*check.*$/, 'true');
    default:
      // Otherwise just clean up the HTML
      return htmlUnescape(html);
  }
  return html;
}

$(document).ready(function() {
    // This enables date sorting with the same spec as the date_format below
    $.fn.dataTable.moment('YYYY-MM-DD HH:mm:ss');
    var table = $('#pickup_list').DataTable( {
       "pagingType": "full_numbers",
       "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
       "language": {
         "search":       "Search:",
         "lengthMenu":   "Show _MENU_ entries",
         "info":         "Showing _START_ to _END_ of _TOTAL_ entries",
         "infoEmpty":    "Showing 0 to 0 of 0 entries",
         "infoFiltered": "(filtered from _MAX_ total entries)",
         "infoPostFix":  "",
         "zeroRecords":  "No matching records found",
         "emptyTable":   "No data available in table",
         "paginate": {
           first:    '<i class="fas fa-angle-double-left fa-fw"></i>',
           previous: '<i class="fas fa-angle-left fa-fw"></i>',
           next:     '<i class="fas fa-angle-right fa-fw"></i>',
           last:     '<i class="fas fa-angle-double-right fa-fw"></i>'
         },
         aria: {
           "paginate": {
             first:    'First',
             previous: 'Previous',
             next:     'Next',
             last:     'Last'
           }
         }
       },
       "order":      [[ 5, "desc" ]],
       "columns":    [
         { "title": "Claim ID", "className": "dt-body-left", "width": "5%" },
         { "title": "Sender",   "className": "dt-body-left" },
         { "title": "Recipients", "className": "dt-body-left", "visible": false },
         { "title": "Subject",  "className": "dt-body-left", "visible": false },
         { "title": "Size",     "className": "dt-body-right", "width": "5%" },
         { "title": "Created",  "className": "dt-body-center" },
         { "title": "Expires",  "className": "dt-body-center", "visible": false },
         { "title": "Picked up <i id='pickedup-balloon' name='pickedup-balloon' class='fas fa-info-circle' style='vertical-align:middle'></i>","className": "dt-body-center", "width": "5%" },
         { "title": "Encrypted <i id='encrypted-balloon' name='encrypted-balloon' class='fas fa-info-circle' style='vertical-align:middle'></i>","className": "dt-body-center", "width": "5%" },
       ],
       dom: '<"hidden"B>lfrtip', // was "clearfix"
       "buttons": [ {
         extend: 'csvHtml5',
         text:   'Export as CSV',
         filename: 'ZendTo Inbox',
         charset: 'utf-8',
         exportOptions: {
           // Bware: the columns are numbered
           // according to what's visible, not the real
           // column numbers. :-(
           columns: ':visible',
           stripNewline: false,
           stripHtml: true,
           format: {
            body: cellToCSV,
           },
           modifier: {
             selected: null
           }
         }
       } ]
    });
    $('.dataTable').on('click', 'tbody td', function() {
      doPickup(table.row( this ).data()[0]);
    });
    $(window).on('unload', function() {
      $('.dataTable').off('click', 'tbody td');
    });
    // The column visibility toggles
    $('a.toggle-vis').on('click', function (e) {
      e.preventDefault();
      dataColumn = $(this).attr('data-column');
      if (dataColumn < 0) {
        // Show/hide ALL columns (show all unless all shown)
        // Start with TRUE. 'and' it with each column. Gives 'all shown'
        allShown = true;
        table.columns().every( function() {
          allShown = allShown && this.visible();
        });
        // If they were all shown, hide all. Else show all.
        table.columns().every( function() {
          this.visible( ! allShown );
        });
      } else {
        // Show/hide 1 column
        // Get the column API object
        var column = table.column( dataColumn );
        // Toggle the visibility
        column.visible( ! column.visible() );
      }
      // Recalculate the visible=>real map
      mapVisToReal(table);
    });
    // Build the initial visible=>real map
    mapVisToReal(table);
    // The Export button
    $('#exportCSVButton').on('click', function(e) {
      e.preventDefault();
      table.button(0).trigger();
    });
    // All the balloon tooltips
    $('#pickedup-balloon').balloon({
      position: "top left",
      html: true,
      css: { fontSize: '100%', 'max-width': '40vw' },
      contents: 'A "<i class="fas fa-fw fa-check"></i>" in the "Picked up" column cannot <em>guarantee</em> that any file has been completely downloaded successfully.<br />But a "<i class="fas fa-fw fa-times"></i>" does mean it has <em>not</em> been downloaded successfully.',
      showAnimation: function (d, c) { this.fadeIn(d, c); }
    });
    $('#encrypted-balloon').balloon({
      position: "top left",
      html: true,
      css: { fontSize: '100%', 'max-width': '40vw' },
      contents: '<i class="fas fa-fw fa-check"></i> = Encrypted by ZendTo<br /><i class="fas fa-fw fa-times"></i> = Not encrypted by ZendTo',
      showAnimation: function (d, c) { this.fadeIn(d, c); }
    });
    $('.fas.fa-fw.fa-check').balloon({
      position: "right",
      css: { fontSize: '100%' },
      contents: 'Yes',
      showDuration: 0,
      hideDuration: 0,
      showAnimation: null,
      hideAnimation: null
    });
    $('.fas.fa-fw.fa-times').balloon({
      position: "right",
      css: { fontSize: '100%' },
      contents: 'No',
      showDuration: 0,
      hideDuration: 0,
      showAnimation: null,
      hideAnimation: null
    });
});
//-->
</script>


  <div id="error">
  <p>
    <i class="fas fa-exclamation-circle fa-fw"></i> There are no drop-offs available for you at this time.  </p>
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
