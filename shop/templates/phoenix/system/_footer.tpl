		<footer class="dark-bg">
			<div class="container inner">
				<div class="row">
					
					<div class="col-md-3 col-sm-6 inner">
						<h4>{$lang.header_title_my_account}</h4>
						<a href="index.html"><img class="logo img-intext" src="assets/images/logo-white.svg" alt=""></a>
					<ul class="link-list">
						<li><a href="{html_href_link content=$filename.account connection=SSL}" title="{$lang.login_block_my_account}">{$lang.login_block_my_account}</a></li>
						<li><a href="{html_href_link content=$filename.account_edit connection=SSL}" title="{$lang.login_block_account_edit}">{$lang.login_block_account_edit}</a></li>
						<li><a href="{html_href_link content=$filename.account_history connection=SSL}" title="{$lang.login_block_account_history}">{$lang.login_block_account_history}</a></li>
						<li><a href="{html_href_link content=$filename.account_order_history connection=SSL}" title="{$lang.login_block_order_history}">{$lang.login_block_order_history}</a></li>
						<li><a href="{html_href_link content=$filename.account_address_book connection=SSL}" title="{$lang.login_block_address_book}">{$lang.login_block_address_book}</a></li>
				{if $oEvent->installed_plugin('notify')}
						<li><a href="{html_href_link content=$filename.product_notifications connection=SSL}">{$lang.login_block_product_notifications}</a></li>
				{/if}						
					</ul>
					</div><!-- .col -->
					
					<div class="col-md-3 col-sm-6 inner">
						<h4>{$block_heading_information}</h4>
						
						<ul class="link-list">
						{foreach $information as $info}
							<li><a href="{html_href_link content=$filename.information information_id=$info.information_id}" title="{$info.information_name}">{$info.information_name}</a></li>
						{/foreach}	
						</ul>
					</div><!-- .col -->
					
					
					<div class="col-md-3 col-sm-6 inner">
						<h4>{$lang.header_title_service}</h4>
						<ul class="link-list">
							<li><a href="{html_href_link content=$filename.products_new}" title="{$lang.block_service_new}"><i class="fa fa-bullhorn"></i> {$lang.block_service_new}</a></li>
							<li><a href="{html_href_link content=$filename.specials}" title="{$lang.block_service_specials}"><i class="fa fa-star"></i> {$lang.block_service_specials}</a></li>
							<li><a href="{html_href_link content=$filename.sitemap}" title="{$lang.block_service_sitemap}"><i class="fa fa-sitemap"></i> {$lang.block_service_sitemap}</a></li>
							<li><a href="{html_href_link content=$filename.advanced_search}" title="{$lang.block_service_advanced_search}"><i class="fa fa-search"></i> {$lang.block_service_advanced_search}</a></li>
						{if $oEvent->installed_plugin('reviews')}
							<li><a href="{html_href_link content=$filename.reviews}" title="{$lang.block_service_reviews}"><i class="fa fa-comments"></i> {$lang.block_service_reviews}</a></li>
						{/if}
						<li><a href="{html_href_link content=$filename.shopping_cart}" title="{$lang.block_service_shopping_cart}"><i class="fa fa-shopping-cart"></i> {$lang.block_service_shopping_cart}</a></li>

					</ul>
					</div><!-- .col -->
					
					<div class="col-md-3 col-sm-6 inner">
						<h4>{$lang.get_in_touch_with_us}</h4>
						<address>
						<strong><i class="fa fa-map-marker"></i> {$smarty.const.STORE_NAME}</strong><br>
							{$smarty.const.STORE_ADDRESS_STREET}<br>
							{$smarty.const.STORE_ADDRESS_POSTCODE} {$smarty.const.STORE_ADDRESS_CITY} </address>
						<p>
							<i class="fa fa-phone"></i> {$smarty.const.STORE_ADDRESS_TELEPHONE_NUMBER} <br>
							<a href="{html_href_link content=$filename.contact_us}" title="{$lang.block_service_contact}"><i class="fa fa-envelope-o"></i> {$smarty.const.STORE_ADDRESS_EMAIL}</a>
						</p>
					</div><!-- .col -->
					
				</div><!-- .row --> 
			</div><!--end container-->
		  
			<div class="footer-bottom">
				<div class="container inner"> 				
						{*
							GERMAN:
							Diese Rueckverlinkung darf nur entfernt werden,
							wenn Sie eine MyOOS Lizenz besitzen.
							:: Lizenzbedingungen: 
							http://www.myoos.de/Projektbezogene-Gebuehr-p-38.html

							ENGLISH:
							This back linking maybe only removed,
							if you possess a MyOOS Lizenz license.
							:: License conditions: 
							http://www.myoos.de/Projektbezogene-Gebuehr-p-38.html
						*}		
					<p class="pull-left"><span>Copyright &copy; {$smarty.now|date_format:"%Y"}</span> <a href="{html_href_link content=$filename.main}">{$smarty.const.STORE_NAME}</a> Powered by <a href="http://www.oos-shop.de" target="_blank">MyOOS [Shopsystem]</a>. Alle Rechte vorbehalten. 
						</p>
					<ul class="list-inline pull-right">
						<li><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook-square"></i></a></li>
						<li><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter-square"></i></a></li>
						<li><a href="#" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fa fa-linkedin-square"></i></a></li>
						<li><a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest-square"></i></a></li>
						<li><a href="#" data-toggle="tooltip" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div><!--end container-->
			</div><!-- .footer-bottom -->
		</footer>	

</div><!--/wrapper-->
<!-- JS Global Compulsory -->           
<script type="text/javascript" src="js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery/jquery-migrate.min.js"></script>
<script type="text/javascript" src="js/bootstrap/bootstrap.min.js"></script>

<!-- HTML5 shim and Respond.js IE support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
    <script src="js/plugin/respond.js"></script>
    <script src="js/plugin/html5shiv.js"></script>
<![endif]-->

</body>
</html>
