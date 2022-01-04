<?php

    if ( ! class_exists( 'IconUploaderMenu' ) ) {

        class IconUploaderMenu {

            public static function init() {
                self::init_action();
            }

            public static function init_action() {
                add_action( 'wp_nav_menu_item_custom_fields', array( __CLASS__, 'add_upload_option' ) );
                add_action( 'admin_enqueue_scripts', array( __CLASS__, 'enqueue_script' ) );
            }

            public static function add_upload_option( $item_id ) { ?>
                <?php 
                echo '
                    <label for="submit">Upload Icon <br/>
                	<input id="submit" type="text" placeholder="Upload Icon">
                    </label>
                ';
                ?>
<?php       }

            public static function enqueue_script() {
                wp_enqueue_media();
                wp_enqueue_script( 'custom-plugin-script', plugin_dir_url( __FILE__ ) . '/custom.js' );
            }
        }
    }
    
