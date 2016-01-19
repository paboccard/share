<!-- Block user information module NAV  -->
{if $is_logged}
	<div class="header_user_info block_cart_collapse">
		<a href="{$link->getPageLink($order_process, true)|escape:'html':'UTF-8'}" title="{l s='View my shopping cart' mod='blockcart'}" rel="nofollow"><i class="fa fa-shopping-cart"></i></a>
	</div>
{/if}
{if $is_logged}
	<div class="header_user_info">
		<a href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" title="{l s='View my customer account' mod='blockuserinfo'}" class="account" rel="nofollow"><i class="fa fa-user"></i><span> {$cookie->customer_firstname} <!--{$cookie->customer_lastname}--></span></a>
	</div>

{/if}
	<div class="header_user_info">
		{if $is_logged}
			<a class="logout" href="{$link->getPageLink('index', true, NULL, "mylogout")|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Log me out' mod='blockuserinfo'}">
				{l s='Sign out' mod='blockuserinfo'}
			</a>
		{else}
			<a class="login" href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Log in to your customer account' mod='blockuserinfo'}"><i class="fa fa-sign-in"></i>
				{l s='Sign in' mod='blockuserinfo'}
			</a>
		{/if}
		
	</div>
<!-- /Block usmodule NAV -->
