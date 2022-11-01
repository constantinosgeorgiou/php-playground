<?php
/**
 * Plugin Name: mini-wc-client
 *
 * @package WooCommerce\Admin
 */

require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce;
use Automattic\WooCommerce\Client;

/**
 * Register the JS and CSS.
 */
function mwcc_add_extension_register_script() {
	if ( ! method_exists( 'Automattic\WooCommerce\Admin\Loader', 'is_admin_or_embed_page' ) ||
		! \Automattic\WooCommerce\Admin\Loader::is_admin_or_embed_page()
	) {
		return;
	}

	$script_path       = '/build/index.js';
	$script_asset_path = dirname( __FILE__ ) . '/build/index.asset.php';
	$script_asset      = file_exists( $script_asset_path )
		? require $script_asset_path
		: array(
			'dependencies' => array(),
			'version'      => filemtime( $script_path ),
		);
	$script_url        = plugins_url( $script_path, __FILE__ );

	wp_register_script(
		'mini-wc-client',
		$script_url,
		$script_asset['dependencies'],
		$script_asset['version'],
		true
	);

	wp_register_style(
		'mini-wc-client',
		plugins_url( '/build/index.css', __FILE__ ),
		// Add any dependencies styles may have, such as wp-components.
		array(),
		filemtime( dirname( __FILE__ ) . '/build/index.css' )
	);

	wp_enqueue_script( 'mini-wc-client' );
	wp_enqueue_style( 'mini-wc-client' );
}

add_action( 'admin_enqueue_scripts', 'mwcc_add_extension_register_script' );

/**
 * Register a WooCommerce Admin page.
 */
function mwcc_add_extension_register_page() {
	if ( ! function_exists( 'wc_admin_register_page' ) ) {
		return;
	}

	wc_admin_register_page(
		array(
			'id'       => 'mini-wc-client',
			'title'    => __( 'Mini WooCommerce Client', 'mini-wc-client' ),
			'parent'   => 'woocommerce',
			'path'     => '/mini-wc-client',
			'nav_args' => array(
				'order'  => 10,
				'parent' => 'woocommerce',
			),
		)
	);
}

add_action( 'admin_menu', 'mwcc_add_extension_register_page' );
