<?php
/**
 * Plugin Name:       Query with Template Part
 * Plugin URI:        https://andreamorim.site/plugin-documentation/afca-query-with-template-part/
 * Description:       Allow template part block inside WP default query loop block.
 * Requires at least: 6.0
 * Requires PHP:      8.1
 * Version:           0.1
 * Author:            André Amorim
 * Author URI:        https://andreamorim.site
 * Text Domain:       afca-query-with-template-part
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Require composer autoload for psr-4
 */
if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once __DIR__ . '/vendor/autoload.php';
}

use Afca\Plugins\QueryWithTemplatePart\Init;
new Init( plugin_dir_path( __FILE__ ), plugin_dir_url( __FILE__ ) );
