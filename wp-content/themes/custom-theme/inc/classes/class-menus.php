<?php
/**
 * 
 * Register Menus
 * 
 * @package custom-theme
 */

namespace custom_theme\Inc;

use custom_theme\Inc\traits\Singleton;

class Menus{
    use Singleton;

    protected function __construct(){
        // load class.
        $this->setup_hooks();
    }

    protected function setup_hooks(){

        /**
         * Actions.
         */
        add_action( 'init', [ $this, 'register_my_menus' ] );

    }

    public function register_my_menus(){
        register_nav_menus([
            'custom-theme-header-menu' => esc_html__('Header Menu', 'custom_theme'),
            'custom-theme-footer-menu' => esc_html__('Footer Menu', 'custom_theme')
        ]);
    }

    public function get_menu_id( $location ){
        // Get all the locations
        $locations = get_nav_menu_locations();

        // Get object id by loaction
        $menu_id = $locations[$location];

        return ! empty( $menu_id ) ? $menu_id : '';
    }

    public function get_child_menu_items( $menu_array, $parent_id ){
        
        $child_menus = [];

        if ( ! empty( $menu_array ) && is_array( $menu_array )){
            foreach ( $menu_array as $menu){
                if( intval( $menu->menu_item_parent) == $parent_id){
                    array_push( $child_menus, $menu);
                }
            }
        }

        return $child_menus;
    }
}