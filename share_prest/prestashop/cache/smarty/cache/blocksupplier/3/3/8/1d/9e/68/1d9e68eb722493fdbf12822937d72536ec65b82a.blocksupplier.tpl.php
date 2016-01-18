<?php /*%%SmartyHeaderCode:18991569d36708a98e1-51341407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d9e68eb722493fdbf12822937d72536ec65b82a' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\default-bootstrap\\modules\\blocksupplier\\blocksupplier.tpl',
      1 => 1452095428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18991569d36708a98e1-51341407',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_569d3b06eb93d9_41075382',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569d3b06eb93d9_41075382')) {function content_569d3b06eb93d9_41075382($_smarty_tpl) {?>
<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<p class="title_block">
					<a href="http://localhost/prestashop/index.php?controller=supplier" title="Fournisseurs">
					Fournisseurs
					</a>
			</p>
	<div class="block_content list-block">
								<ul>
											<li class="last_item">
                					<a 
					href="http://localhost/prestashop/index.php?id_supplier=1&amp;controller=supplier" 
					title="En savoir plus sur Fashion Supplier">
				                Fashion Supplier
                					</a>
                				</li>
										</ul>
										<form action="/prestashop/index.php" method="get">
					<div class="form-group selector1">
						<select class="form-control" name="supplier_list">
							<option value="0">Tous les fournisseurs</option>
													<option value="http://localhost/prestashop/index.php?id_supplier=1&amp;controller=supplier">Fashion Supplier</option>
												</select>
					</div>
				</form>
						</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>
