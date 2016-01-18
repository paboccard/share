<?php /*%%SmartyHeaderCode:25111569d333df2ff60-36270996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52cff80c1de4c9e6bfdfb4c4521c0376d22278ac' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\default-bootstrap\\modules\\blockmyaccountfooter\\blockmyaccountfooter.tpl',
      1 => 1452095428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25111569d333df2ff60-36270996',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_569d388c4b5505_83223834',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569d388c4b5505_83223834')) {function content_569d388c4b5505_83223834($_smarty_tpl) {?>
<!-- Block myaccount module -->
<section class="footer-block col-xs-12 col-sm-4">
	<h4><a href="http://localhost/prestashop/index.php?controller=my-account" title="Gérer mon compte client" rel="nofollow">Mon compte</a></h4>
	<div class="block_content toggle-footer">
		<ul class="bullet">
			<li><a href="http://localhost/prestashop/index.php?controller=history" title="Mes commandes" rel="nofollow">Mes commandes</a></li>
						<li><a href="http://localhost/prestashop/index.php?controller=order-slip" title="Mes avoirs" rel="nofollow">Mes avoirs</a></li>
			<li><a href="http://localhost/prestashop/index.php?controller=addresses" title="Mes adresses" rel="nofollow">Mes adresses</a></li>
			<li><a href="http://localhost/prestashop/index.php?controller=identity" title="Gérer mes informations personnelles" rel="nofollow">Mes informations personnelles</a></li>
						
            <li><a href="http://localhost/prestashop/index.php?mylogout" title="Déconnexion" rel="nofollow">Déconnexion</a></li>		</ul>
	</div>
</section>
<!-- /Block myaccount module -->
<?php }} ?>
