<?php
    if(!class_exists( 'Deactivation' )){
        class Deactivation {

            public static function init() {
                register_deactivation_hook( __FILE__, array( __CLASS__, 'on_deactivate') );
            }

            public function on_deactivate() {}
        }
    }