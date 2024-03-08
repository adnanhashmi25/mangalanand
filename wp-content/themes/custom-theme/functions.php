<?php
/**
 * 
 * Theme Functions.
 * 
 * @package custom-theme
 */



if( ! defined( 'custom_theme_dir_path' ) ){
   define( 'custom_theme_dir_path', untrailingslashit( get_template_directory() ) );
}

if( ! defined( 'custom_theme_dir_uri' )){
   define( 'custom_theme_dir_uri', untrailingslashit( get_template_directory_uri() ) );
}

require_once custom_theme_dir_path . '/inc/helpers/autoloader.php';

function custom_theme_get_theme_instance(){
   \custom_theme\Inc\custom_theme::get_instance();
}

custom_theme_get_theme_instance();
add_theme_support( 'post-thumbnails' );

 

 ?>