<?php

/*
 * Plugin Name: AJAX Test
 * Plugin URI:
 * Description:
 * Author:
 * Version: 1.0
 * Author URI:
*/

add_action( 'admin_enqueue_scripts', 'ajax_test_scripts' );

function ajax_test_scripts() {
	wp_enqueue_script(
		'ajax-test-js',
		plugins_url( '/js/ajax-test.js', __FILE__ ),
		array( 'jquery' ),
		'0.0.1',
		false
	);
}

add_action( 'admin_menu', 'ajax_test_menu' );

function ajax_test_menu() {
	add_menu_page( 'AJAX Test Page', 'AJAX Test Page', 'manage_options', 'ajax-test', 'ajax_test_admin_page' );

}

function ajax_test_admin_page() {
	// General check for user permissions.
	if ( ! current_user_can( 'manage_options' ) ) {
		wp_die( __( 'You do not have sufficient pilchards to access this page.' ) );
	}

	$output  = '<div class="wrap">';
	$output .= '<h2>AJAX Test</h2>';
	$output .= "<button id='click-me-button' onclick='opopup()'>Click me!</button>";
	$output .= '</div>';

	echo $output;

}
