<?php
/*
Plugin Name: Fragmentions
Version: 1.4.0
Description: Fragmentions allow linking to document sections on WordPress sites using words or phrases.
Author: Luís Rodrigues
Author URI: https://goblindegook.com/
Plugin URI: https://github.com/goblindegook/fragmentions/
Text Domain: fragmentions
Domain Path: /languages
*/

if ( ! defined( 'WPINC' ) ) {
    die;
}

if ( class_exists( 'Fragmentions_Plugin' ) ) {
	return;
}

class Fragmentions_Plugin {

	/**
	 * Plugin slug.
	 */
    const SLUG = 'fragmentions';

    /**
     * Plugin version.
     */
    const VERSION = '1.4.0';

    /**
     * Bootstrap the plugin.
     * @return [type] [description]
     */
    public static function plugins_loaded() {
        load_plugin_textdomain( self::SLUG, false, basename( plugin_dir_path( dirname( __FILE__ ) ) ) . '/languages/' );
        add_action( 'wp_enqueue_scripts', array( __CLASS__, 'enqueue_scripts' ) );
    }

    /**
     * Enqueue scripts and styles.
     */
    public static function enqueue_scripts() {
        $script = 'scripts/fragmention.min.js';
        $styles = 'styles/fragmentions.css';

        if ( defined( 'WP_DEBUG' ) && WP_DEBUG ) {
        	$script = 'scripts/fragmention.js';
        }

        wp_enqueue_style( self::SLUG . '-styles', plugins_url( $styles, __FILE__ ), null, self::VERSION );
        wp_enqueue_script( self::SLUG . '-script', plugins_url( $script, __FILE__ ), null, self::VERSION );
    }
}

add_action( 'plugins_loaded', array( 'Fragmentions_Plugin', 'plugins_loaded' ) );
