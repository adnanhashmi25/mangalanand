<?php
/**
 * 
 * Bootstrap the theme
 * 
 * @package custom-theme
 */

namespace custom_theme\Inc;

use custom_theme\Inc\traits\Singleton;

class custom_theme {
    use Singleton;

    protected function __construct(){
        // load class.

        Assets::get_instance();
        Menus::get_instance();

        $this->setup_hooks();
        
    }

    protected function setup_hooks(){

        /**
         * Actions.
         */
    } 
} 

