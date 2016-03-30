<?php

/**
 * Storefront automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.css file.
 *
 * Uncomment the line below if you'd like to disable the Storefront Core CSS.
 *
 * If you don't plan to dequeue the Storefront Core CSS you can remove the subsequent line and as well
 * as the sf_child_theme_dequeue_style() function declaration.
 */
add_action('wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999);

/**
 * Dequeue the Storefront Parent theme core CSS
 */
function sf_child_theme_dequeue_style() {
	wp_dequeue_style('storefront-style');
	//wp_dequeue_style('storefront-woocommerce-style');
}

/**
 * Note: DO NOT! alter or remove the code above this text and only add your custom PHP functions below this text.
 */



/**
 * Add Browsersync for development
 */
function is_hocalhost() {
	$whitelist = array('127.0.0.1', '::1');
	return in_array($_SERVER['REMOTE_ADDR'], $whitelist);
}

if(is_hocalhost()) {
	add_action('storefront_after_footer', 'add_browsersync');

	function add_browsersync() {
		?> 
		<script type='text/javascript' id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:8890/browser-sync/browser-sync-client.2.11.1.js'><\/script>".replace("HOST", location.hostname));
//]]></script>
<?php
	}
}
/*
add_action('woocommerce_after_single_product', 'add_fb_share');
function add_fb_share() {
	echo "ALup";
}*/

/* HEADER STUFF .. should me moved to a single file */
function storefront_site_branding() {
	?>
	<div class="site-logo">
		<a href="<?php echo esc_url(home_url( '/' )); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri().'/img/logo.png'; ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
	</div>
	<?php 
}
function storefront_skip_links() { }
function storefront_product_search() { }
function storefront_header_cart() { }
function storefront_secondary_navigation() { }


