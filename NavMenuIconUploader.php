<?php

    if ( ! class_exists( 'IconUploaderMenu' ) ) {

        class IconUploaderMenu {

            public static function init() {
                self::init_action();
            }

            public static function init_action() {
                add_action( 'wp_nav_menu_item_custom_fields', array( __CLASS__, 'add_upload_option' ), 10, 2 );
                add_action( 'admin_enqueue_scripts', array( __CLASS__, 'enqueue_script' ) );
                add_action( 'wp_update_nav_menu_item', array( __CLASS__, 'save_menu_item' ) );
            }

            public static function add_upload_option( $item_id, $item ) { 
                error_log( print_r( $item, true ) );
                ?>
                <p class="menu-icon=">
					<label for="menu-icon-upload-<?php echo $item_id; ?>">
						<?php _e( 'Upload Icon', 'custom-plugin' ); ?><br />
						<textarea id="menu-icon-upload-<?php echo $item_id; ?>" 
                        class="menu-icon-upload" rows="3" cols="20" 
                        name="menu-icon[<?php echo $item_id; ?>]">
                        <?php echo esc_html( $item->description ); // textarea_escaped ?></textarea>
						
					</label>
				</p>
<?php       }

            public static function save_menu_item() {

            }

            public static function enqueue_script() {
                wp_enqueue_media();
                wp_enqueue_script( 'custom-plugin-script', plugin_dir_url( __FILE__ ) . '/custom.js' );
            }
        }
    }
