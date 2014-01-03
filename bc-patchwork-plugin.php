<?php
/**
* Plugin Name: BC PatchWork Plugin
* Plugin URI: http://www.brandoncamenisch.com
* Description:
* Author: Brandon Camenisch
* Author URI: http://www.brandoncamenisch.com
* Version: 1.0.0
* Text Domain: sd-boost
* License: GPLv3
*/

define( 'PW_PATH', plugin_dir_path( __FILE__ ) );
define( 'PW_URL', plugin_dir_url( __FILE__ ) );
define( 'PW_NAME', plugin_basename(  __FILE__ ) );

require_once PW_PATH . 'vendor/antecedent/patchwork/Patchwork.php';


function patchwork_replace_wc_dependencies() {
	return true;
}


if ( function_exists( 'Patchwork\replaceLater' ) ) {
		Patchwork\replaceLater( 'is_woocommerce_active', 'patchwork_replace_wc_dependencies' );
}

