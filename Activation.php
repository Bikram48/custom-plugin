<?php
    if( !class_exists('Activation') ) {
        class Activation {

            public static function init() {
                register_activation_hook( __FILE__, array( __CLASS__, 'on_activate' ) );
            }

            public static function on_activate() {} 

        }
    }