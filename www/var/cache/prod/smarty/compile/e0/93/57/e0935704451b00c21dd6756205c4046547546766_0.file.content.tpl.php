<?php
/* Smarty version 3.1.33, created on 2020-02-25 07:32:21
  from '/var/www/html/admin868pryjui/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e54bf75233135_28593664',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0935704451b00c21dd6756205c4046547546766' => 
    array (
      0 => '/var/www/html/admin868pryjui/themes/default/template/content.tpl',
      1 => 1582722860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e54bf75233135_28593664 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
