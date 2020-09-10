<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-09 11:45:59
  from '/opt/zendto/templates/dropoff_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f58a4579c4457_23950248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52de2e3fdd7e70b8ec0d66c40fe64a125013d948' => 
    array (
      0 => '/opt/zendto/templates/dropoff_list.tpl',
      1 => 1593956273,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f58a4579c4457_23950248 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/zendto/lib/smarty/plugins/block.t.php','function'=>'smarty_block_t',),1=>array('file'=>'/opt/zendto/lib/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->compiled->nocache_hash = '19500238465f58a457997667_22137572';
$_smarty_tpl->_assignInScope('thisTemplate', basename($_smarty_tpl->source->filepath));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->_assignInScope('tick', '<i class="fas fa-fw fa-check"></i>');
$_smarty_tpl->_assignInScope('cross', '<i class="fas fa-fw fa-times"></i>');
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "picked_up", null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Picked up<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo '<script'; ?>
 type="text/javascript" src="js/jquery.balloon.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
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
    var table = $('#dropoff_list').DataTable( {
       "pagingType": "full_numbers",
       "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>All<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>"] ],
       "language": {
         "search":       "<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Search:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>",
         "lengthMenu":   "<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Show _MENU_ entries<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>",
         "info":         "<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Showing _START_ to _END_ of _TOTAL_ entries<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>",
         "infoEmpty":    "<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Showing 0 to 0 of 0 entries<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>",
         "infoFiltered": "<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>(filtered from _MAX_ total entries)<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>",
         "infoPostFix":  "",
         "zeroRecords":  "<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>No matching records found<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>",
         "emptyTable":   "<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>No data available in table<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>",
         "paginate": {
           first:    '<i class="fas fa-angle-double-left fa-fw"></i>',
           previous: '<i class="fas fa-angle-left fa-fw"></i>',
           next:     '<i class="fas fa-angle-right fa-fw"></i>',
           last:     '<i class="fas fa-angle-double-right fa-fw"></i>'
         },
         aria: {
           "paginate": {
             first:    '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>First<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>',
             previous: '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Previous<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>',
             next:     '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Next<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>',
             last:     '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Last<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>'
           }
         }
       },
       "order":      [[ 5, "desc" ]],
       "columns":    [
         { "title": "<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Claim ID<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>", "className": "dt-body-left", "width": "5%" },
         { "title": "<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Sender<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>",   "className": "dt-body-left" , "visible": false },
         { "title": "<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Recipients<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>", "className": "dt-body-left" },
         { "title": "<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Subject<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>",  "className": "dt-body-left", "visible": false },
         { "title": "<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Size<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>",     "className": "dt-body-right", "width": "5%" },
         { "title": "<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Created<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>",  "className": "dt-body-center" },
         { "title": "<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Expires<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>",  "className": "dt-body-center", "visible": false },
         { "title": "<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Picked up<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?> <i id='pickedup-balloon' name='pickedup-balloon' class='fas fa-info-circle' style='vertical-align:middle'></i>","className": "dt-body-center", "width": "5%" },
         { "title": "<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Encrypted<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?> <i id='encrypted-balloon' name='encrypted-balloon' class='fas fa-info-circle' style='vertical-align:middle'></i>","className": "dt-body-center", "width": "5%" },
       ],
       dom: '<"hidden"B>lfrtip', // was "clearfix"
       "buttons": [ {
         extend: 'csvHtml5',
         text:   '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Export as CSV<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>',
         filename: '<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ServiceTitle');?>
 <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Outbox<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>',
         charset: 'utf-8',
         exportOptions: {
           // Beware: the columns are numbered
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
      contents: '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['tick']->value,2=>$_smarty_tpl->tpl_vars['picked_up']->value));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['tick']->value,2=>$_smarty_tpl->tpl_vars['picked_up']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>A "%1" in the "%2" column cannot <em>guarantee</em> that any file has been completely downloaded successfully.<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['tick']->value,2=>$_smarty_tpl->tpl_vars['picked_up']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?><br /><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['cross']->value));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['cross']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>But a "%1" does mean it has <em>not</em> been downloaded successfully.<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['cross']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>',
      showAnimation: function (d, c) { this.fadeIn(d, c); }
    });
    $('#encrypted-balloon').balloon({
      position: "top left",
      html: true,
      css: { fontSize: '100%', 'max-width': '40vw' },
      contents: '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['tick']->value,2=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ServiceTitle')));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['tick']->value,2=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ServiceTitle')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>%1 = Encrypted by %2<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['tick']->value,2=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ServiceTitle')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?><br /><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['cross']->value,2=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ServiceTitle')));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['cross']->value,2=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ServiceTitle')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>%1 = Not encrypted by %2<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no',1=>$_smarty_tpl->tpl_vars['cross']->value,2=>$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ServiceTitle')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>',
      showAnimation: function (d, c) { this.fadeIn(d, c); }
    });
    $('.fas.fa-fw.fa-check').balloon({
      position: "right",
      css: { fontSize: '100%' },
      contents: '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Yes<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>',
      showDuration: 0,
      hideDuration: 0,
      showAnimation: null,
      hideAnimation: null
    });
    $('.fas.fa-fw.fa-times').balloon({
      position: "right",
      css: { fontSize: '100%' },
      contents: '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>No<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>',
      showDuration: 0,
      hideDuration: 0,
      showAnimation: null,
      hideAnimation: null
    });
} );
//-->
<?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['isAuthorizedUser']->value) {?>

  <?php if ($_smarty_tpl->tpl_vars['countDropoffs']->value > 0) {?>
<div style="float:right; display:flex">
  <button id="exportCSVButton" class="UD_textbutton"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Export as CSV<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></button>
</div>

<h1><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Outbox<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></h1>
<p><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Click on a drop-off to view the information and files for that drop-off.<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></p>
<p><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Show or hide:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
          <a class="toggle-vis" data-column="-1"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>All<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></a>
  &ndash; <a class="toggle-vis" data-column="0"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Claim ID<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></a>
  &ndash; <a class="toggle-vis" data-column="1"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Sender<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></a>
  &ndash; <a class="toggle-vis" data-column="2"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Recipients<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></a>
  &ndash; <a class="toggle-vis" data-column="3"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Subject<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></a>
  &ndash; <a class="toggle-vis" data-column="4"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Size<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></a>
  &ndash; <a class="toggle-vis" data-column="5"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Created<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></a>
  &ndash; <a class="toggle-vis" data-column="6"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Expires<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></a>
  &ndash; <a class="toggle-vis" data-column="7"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Picked up<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></a>
  &ndash; <a class="toggle-vis" data-column="8"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Encrypted<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></a>
</p>

<table id="dropoff_list" class="display" width="100%">
  <tbody class="nowrap">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dropoffs']->value, 'd');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
?>
  <tr>
    <td class="mono"><?php echo $_smarty_tpl->tpl_vars['d']->value['claimID'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['d']->value['senderName'];
if ($_smarty_tpl->tpl_vars['d']->value['senderOrg'] != '') {?>, <?php echo $_smarty_tpl->tpl_vars['d']->value['senderOrg'];
}?><br/>&lt;<?php echo $_smarty_tpl->tpl_vars['d']->value['senderEmail'];?>
&gt;</td>
    <td><?php echo $_smarty_tpl->tpl_vars['d']->value['recipients'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['d']->value['subject'];?>
</td>
    <td data-order="<?php echo $_smarty_tpl->tpl_vars['d']->value['Bytes'];?>
"><?php echo $_smarty_tpl->tpl_vars['d']->value['formattedBytes'];?>
</td>
    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['d']->value['createdDate'],"%Y-%m-%d %H:%M:%S");?>
</td>
    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['d']->value['expiresDate'],"%Y-%m-%d %H:%M:%S");?>
</td>
    <td data-order="<?php echo $_smarty_tpl->tpl_vars['d']->value['numPickups'];?>
"><i class="fas fa-fw <?php echo $_smarty_tpl->tpl_vars['d']->value['numPickups'] > 0 ? 'fa-check' : 'fa-times';?>
"></i></td>
    <td data-order="<?php echo $_smarty_tpl->tpl_vars['d']->value['isEncrypted'] ? '1' : '0';?>
"><i class="fas fa-fw <?php echo $_smarty_tpl->tpl_vars['d']->value['isEncrypted'] ? 'fa-check' : 'fa-times';?>
"></i></td>
  </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </tbody>
</table>

  <form name="pickup" method="post" action="<?php echo $_smarty_tpl->tpl_vars['zendToURL']->value;
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'hidePHPExt', array('t'=>'pickup.php'), false);?>
"> <!-- Add target="_blank" if you always want a new tab -->
  <input type="hidden" id="claimID" name="claimID" value=""/>
</form>

  <?php } else { ?>
<div id="error">
  <p>
    <i class="fas fa-exclamation-circle fa-fw"></i> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>There are no drop-offs made by you at this time.<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
  </p>
</div>
  <?php }?>

<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
