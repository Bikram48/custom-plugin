<?php

    if ( ! class_exists( 'IconUploaderMenu' ) ) {

        class IconUploaderMenu {

            public static function init() {
                self::init_action();
            }

            public static function init_action() {
                add_action( 'wp_nav_menu_item_custom_fields', array( __CLASS__, 'add_upload_option' ), 10, 2 );
                add_action( 'wp_update_nav_menu_item', array( __CLASS__, 'save_menu_item' ), 10, 2 );
                add_action( 'admin_enqueue_scripts', array( __CLASS__, 'enqueue_script' ) );
            }

            public static function add_upload_option( $item_id, $item ) { 
                error_log( print_r( $item, true ) );
                $menu_item_desc = get_post_meta( $item_id, '_menu_item_desc', true );
                ?>
                <p class="menu-icon=">
					<label for="menu-icon-upload">
						<?php _e( 'Upload Icon', 'custom-plugin' ); ?><br />
						<textarea id="menu-icon-upload" 
                        class="menu-icon-upload" rows="3" cols="20" 
                        name="menu-icon[<?php echo $item_id; ?>]">
                        <?php  echo esc_attr( $menu_item_desc );// textarea_escaped ?></textarea>
						
					</label>
				</p>
<?php       }

            public static function save_menu_item( $menu_id, $menu_item_db_id ) {
                $filename =  $_POST['menu-icon'][$menu_item_db_id];
                error_log($filename,true);
                update_post_meta( $menu_item_db_id, '_menu_item_desc', $filename );
            }

            public static function enqueue_script() {
                wp_enqueue_media();
                wp_enqueue_script( 'custom-plugin-script', plugin_dir_url( __FILE__ ) . '/custom.js' );
            }
        }
    }
