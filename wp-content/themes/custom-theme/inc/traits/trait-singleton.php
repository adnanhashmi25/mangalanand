<?php 

namespace custom_theme\Inc\traits;

trait Singleton {
    public function __construct(){

    }

    public function __clone(){
        //prevents object cloning
    }

    final public static function get_instance(){
        static $instance = [];

        $called_class = get_called_class();

        if( !isset($instance[ $called_class ])){

            $instance[ $called_class ] = new $called_class();

            do_action ( sprintf('custom_theme_singleton_init%s', $called_class ));
        }

        return $instance[ $called_class ];
    }
}
