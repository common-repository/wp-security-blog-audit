<?php
/*
Plugin Name: WordPress Security Blog Audit
Plugin URI:  https://www.howtostartablog101.com/wp-security-blog-audit
Description: This plugin audits your site for specific security related checkpoints. Made by HowToStartABlog101.com where beginners learn how to start a blog.
Version:     2.0
Author:      Arlie Wall
Author URI:  https://www.howtostartablog101.com/
Text Domain: wpsec
Domain Path: /english
License:     GPL2
 
Wordpress Security Blog Audit is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
Wordpress Security Blog Audit is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with Wordpress Security Audit Pro. If not, see {License URI}.
This plugin is developed and managed by WPHEXA - A Premium WordPress Plugin Development Agency
*/


defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

if ( !function_exists( 'wpsec_plugin_uninstallation_hook' ) ) {
	function wpsec_plugin_uninstallation_hook() {
		global $wpdb;
	}
}
register_uninstall_hook(__FILE__, 'wpsec_plugin_uninstallation_hook');


if ( !function_exists( 'wpsec_plugin_activation_hook' ) ) {
	function wpsec_plugin_activation_hook(){
		global $wpdb;


	}
}
register_activation_hook( __FILE__, 'wpsec_plugin_activation_hook' );


if ( !function_exists( 'wpsec_plugin_deactivation_hook' ) ) {
	function wpsec_plugin_deactivation_hook(){
		global $wpdb;

	}
}
register_deactivation_hook( __FILE__, 'wpsec_plugin_deactivation_hook' );



function wpsec_security_blog_audit_settings_page() {
	global $wpdb;
	if( is_admin() ){ 
		include("includes/wp-security-blog-audit-settings-page.php");
	} else {
		echo '<div class="wrap">You have not enough rights to view this page</div>';
	}
}

function wpsec_security_blog_audit_enqueue_style() {
	$page = $_GET['page'];
    if($page != 'wpsec-security-blog-audit-settings') {
            return;
    }
	wp_enqueue_style( 'wpsec-bootstrap', plugins_url('assets/css/bootstrap.min.css', __FILE__), false ); 
	wp_enqueue_style( 'wpsec-bootstrap-animate', plugins_url('assets/css/animate.min.css', __FILE__), false ); 
	wp_enqueue_style( 'wpsec-light-bootstrap-dashboard', plugins_url('assets/css/light-bootstrap-dashboard.css', __FILE__), false ); 
	wp_enqueue_style( 'wpsec-font-awesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css', false ); 
	wp_enqueue_style( 'wpsec-google-fonts', 'http://fonts.googleapis.com/css?family=Roboto:400,700,300', false ); 
	wp_enqueue_style( 'wpsec-icons', plugins_url('assets/css/pe-icon-7-stroke.css', __FILE__), false ); 
}

function wpsec_security_blog_audit_enqueue_script() {
	$page = $_GET['page'];
    if($page != 'wpsec-security-blog-audit-settings') {
            return;
    }
	wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'wpsec-bootstrap', plugins_url('assets/js/bootstrap.min.js', __FILE__), false );
	wp_enqueue_script( 'wpsec-checkbox', plugins_url('assets/js/bootstrap-checkbox-radio-switch.js', __FILE__), false );
	wp_enqueue_script( 'wpsec-bootstrap-notify', plugins_url('assets/js/bootstrap-notify.js', __FILE__), false );
	wp_enqueue_script( 'wpsec-bootstrap-dashboard', plugins_url('assets/js/light-bootstrap-dashboard.js', __FILE__), false );
	wp_enqueue_script( 'wpsec-custom', plugins_url('assets/js/wpsec-custom.js', __FILE__), false );

}

add_action( 'admin_enqueue_scripts', 'wpsec_security_blog_audit_enqueue_style' );
add_action( 'admin_enqueue_scripts', 'wpsec_security_blog_audit_enqueue_script' );

/**
 * Register a plugin's options menu page.
 */
function wpsec_register_security_audit_menu_page() {
    add_menu_page(
        __( 'WP Security Audit', 'wpsec' ),
        'WP Security Audit',
        'manage_options',
        'wpsec-security-blog-audit-settings',
        'wpsec_security_blog_audit_settings_page',
        plugins_url( 'wp-security-blog-audit/assets/img/wpsec-admin-icon.png' )
    );
}
add_action( 'admin_menu', 'wpsec_register_security_audit_menu_page' );
