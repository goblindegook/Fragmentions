<?php
/*
Plugin Name: Fragmentions
Version: 1.0.0
Description: Fragmentions allow linking to document sections on WordPress sites using words or phrases.
Author: Luís Rodrigues
Author URI: http://goblindegook.net/
Plugin URI: https://github.com/goblindegook/fragmentions/
Text Domain: fragmentions
Domain Path: /languages
*/

if (!defined( 'WPINC' )) {
    die;
}

if (!class_exists( 'FragmentionsPlugin' )):

class FragmentionsPlugin {

    const VERSION     = '1.0.0';

    const PLUGIN_SLUG = 'fragmentions';

    function __construct () {
        add_action( 'init', array( $this, 'init' ) );
    }

    public function init () {
        load_plugin_textdomain( 'fragmentions', FALSE, basename( plugin_dir_path( dirname( __FILE__ ) ) ) . '/languages/' );

        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
    }

    public function enqueue_scripts() {
        wp_enqueue_style( self::PLUGIN_SLUG . '-styles', plugins_url( 'assets/fragmentions.css', __FILE__ ), array(), self::VERSION );
        wp_enqueue_script( self::PLUGIN_SLUG . '-script', plugins_url( 'assets/fragmention.js', __FILE__ ), array(), self::VERSION );
    }
}

endif;

new FragmentionsPlugin;