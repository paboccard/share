<?php /*%%SmartyHeaderCode:22025569d367015b865-11759225%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ae78da44a1992bc164d15c93be88dd30bd49659' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\default-bootstrap\\modules\\blockmanufacturer\\blockmanufacturer.tpl',
      1 => 1452095428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22025569d367015b865-11759225',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_569d3b06751b26_76384452',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569d3b06751b26_76384452')) {function content_569d3b06751b26_76384452($_smarty_tpl) {?>
<!-- Block manufacturers module -->
<div id="manufacturers_block_left" class="block blockmanufacturer">
	<p class="title_block">
					<a href="http://localhost/prestashop/index.php?controller=manufacturer" title="Fabricants">
						Fabricants
					</a>
			</p>
	<div class="block_content list-block">
								<ul>
														<li class="last_item">
						<a 
						href="http://localhost/prestashop/index.php?id_manufacturer=1&amp;controller=manufacturer" title="En savoir plus sur Fashion Manufacturer">
							Fashion Manufacturer
						</a>
					</li>
												</ul>
										<form action="/prestashop/index.php" method="get">
					<div class="form-group selector1">
						<select class="form-control" name="manufacturer_list">
							<option value="0">Tous les fabricants</option>
													<option value="http://localhost/prestashop/index.php?id_manufacturer=1&amp;controller=manufacturer">Fashion Manufacturer</option>
												</select>
					</div>
				</form>
						</div>
</div>
<!-- /Block manufacturers module -->
<?php }} ?>
