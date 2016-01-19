<?php /* Smarty version Smarty-3.1.19, created on 2016-01-18 20:32:56
         compiled from "C:\wamp\www\prestashop\admin576emysd7\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10021569d3de8159957-77022234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a94f0b7d309ddbcca7a47ba401f8c33212624eed' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\admin576emysd7\\themes\\default\\template\\content.tpl',
      1 => 1452095428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10021569d3de8159957-77022234',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_569d3de817d259_02854527',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569d3de817d259_02854527')) {function content_569d3de817d259_02854527($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
