<?php

    if ( ! class_exists( 'IconUploaderMenu' ) ) {

        class IconUploaderMenu {

            public static function init() {
                self::init_action();
            }

            public static function init_action() {
                add_action( 'wp_nav_menu_item_custom_fields', array( __CLASS__, 'add_upload_option' ) );
            }

            public static function add_upload_option( $item_id ) { ?>
                <?php 
                echo '
                	<input id="plupload-browse-button" type="text" placeholder="Upload Icon">
                ';
                ?>
<?php       }

        }

    }