<?php
/**
 * 
 * Enqueue Theme assets
 * 
 * @package custom-theme
 */

namespace custom_theme\Inc;

use custom_theme\Inc\traits\Singleton;

class Assets{
    use Singleton;

    protected function __construct(){
        // load class.
        $this->setup_hooks();
    }

    protected function setup_hooks(){

        /**
         * Actions.
         */
        add_action( 'wp_enqueue_scripts', [ $this, 'register_styles' ] );
        add_action( 'wp_enqueue_scripts', [ $this, 'register_scripts' ] );
    }

    public function register_styles(){
        //register styles.
        wp_register_style( 'style-css', get_stylesheet_uri(), [], filemtime( custom_theme_dir_path . '/style.css'), 'all' );
        wp_register_style( 'bootstrap-css', custom_theme_dir_uri . '/assets/css/bootstrap.min.css', [], false , 'all' );
        wp_register_style( 'owl-css', custom_theme_dir_uri . '/assets/css/owl.carousel.min.css', [], false , 'all' );
        wp_register_style( 'jalerts-css', custom_theme_dir_uri . '/assets/css/jquery.alerts.css', [], false , 'all' );

        //enqueue styles.
        wp_enqueue_style('bootstrap-css');
        wp_enqueue_style('owl-css');
        wp_enqueue_style('jalerts-css');
        wp_enqueue_style('style-css');
    }

    public function register_scripts(){
        //register scripts.
        wp_register_script( 'main-js',  custom_theme_dir_uri . '/assets/main.js', [], filemtime( custom_theme_dir_path . '/assets/main.js'), true );
        wp_register_script( 'popper',  custom_theme_dir_uri . '/assets/js/popper.min.js', ['jquery'], false , true );
        wp_register_script( 'alerts',  custom_theme_dir_uri . '/assets/js/jquery.alerts.js', ['jquery'], false , true );
        wp_register_script( 'bootstrap-js',  custom_theme_dir_uri . '/assets/js/bootstrap.min.js', ['jquery', 'popper'], false , true );
        wp_register_script( 'owl-js',  custom_theme_dir_uri . '/assets/js/owl.carousel.min.js', ['jquery'], false , true );

        //enqueue scripts
        wp_enqueue_script('bootstrap-js');
        wp_enqueue_script('owl-js');
        wp_enqueue_script('alerts');
        wp_enqueue_script('main-js');
    }
 }