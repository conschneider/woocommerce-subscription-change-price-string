<?php
/*
Plugin Name: WooCommerce Subscriptions Change Price String 
Plugin URI: http://conschneider.de/mini-plugin-wooc…dit-price-string/
Description: WooCommerce Subscriptions edit price string globally conviently
Author: Con Schneider
Author URI: http://conschneider.de/
Version: 1.0
*/


/* TO DO - change complete string */

/******************************
* global variables
******************************/

$wcsp_prefix = 'wcsp_';
$wcsp_plugin_name = 'WooCommerce Subscriptions edit Price';

// retrieve our plugin settings from the options table
$wcsp_options = get_option('wcsp_settings');

/******************************
* includes
******************************/

include('includes/data-processing.php'); // this controls all saving of data
include('includes/functions.php'); // display content functions
include('includes/admin-page.php'); // the plugin options page HTML and save functions

/******************************
* useful settings link
******************************/
add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'wcsp_plugin_settings_link' );

function wcsp_plugin_settings_link( $links ) {
   $links[] = '<a href="'. esc_url( get_admin_url(null, 'options-general.php?page=wcsp-options') ) .'">Settings</a>';
   return $links;
}