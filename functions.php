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
//add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999 );

/**
 * Dequeue the Storefront Parent theme core CSS
 */
function sf_child_theme_dequeue_style() {
	wp_dequeue_style('storefront-style');
	wp_dequeue_style('storefront-woocommerce-style');
}

/**
 * Note: DO NOT! alter or remove the code above this text and only add your custom PHP functions below this text.
 */

function is_hocalhost() {
	$whitelist = array('127.0.0.1', '::1');
	return in_array($_SERVER['REMOTE_ADDR'], $whitelist);
}


if(is_hocalhost()) {
	add_action('storefront_after_footer', 'add_browsersync');
	function add_browsersync() {
		echo "<script type='text/javascript' id=\"__bs_script__\">//<![CDATA[
				document.write(\"<script async src='http://HOST:81/browser-sync/browser-sync-client.2.11.1.js'><\/script>\".replace
			(\"HOST\", location.hostname));
			//]]></script>";
	}
}