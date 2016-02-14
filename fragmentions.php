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

if ( ! class_exists( 'Fragmentions_Plugin' ) ) {

	class Fragmentions_Plugin {

		/**
		 * Plugin slug.
		 */
	    const NAME = 'fragmentions';

	    /**
	     * Plugin version.
	     */
	    const VERSION = '1.4.0';

	    /**
	     * Bootstrap the plugin.
	     */
	    public static function plugins_loaded() {
	    	$languages = basename( plugin_dir_path( dirname( __FILE__ ) ) ) . '/languages/';
	        load_plugin_textdomain( self::NAME, false, $languages );
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

	        wp_enqueue_style( self::NAME . '-styles',
	        	plugins_url( $styles, __FILE__ ), null, self::VERSION );

	        wp_enqueue_script( self::NAME . '-script',
	        	plugins_url( $script, __FILE__ ), null, self::VERSION, true );
	    }
	}

	add_action( 'plugins_loaded', array( 'Fragmentions_Plugin', 'plugins_loaded' ) );

}
