<?php
    namespace CustomPlugin;

    if( !class_exists( 'AdminMenu' ) ) {
        class AdminMenu {

            public static function init() {
                self::initAction();
            }

            public static function initAction() {
                add_action( 'admin_menu', array(__CLASS__, 'get_menus'), 10 );
            }

            public static function get_menus() {
                add_menu_page(
                    'PluginByBikram',
                    'PluginByBikram',
                    'manage_options',
                    'custom-plugin',
                    array(__CLASS__,'display_menu_message'),
                    '',
                    9
                );

                add_submenu_page(
                    'custom-plugin',
                    'Plugin Setting',
                    'Plugin Setting',
                    'manage_options',
                    'add-new',
                    array(__CLASS__,'display_submenu_message')
                );

            }

            public static function display_submenu_message() {
                echo "New submenu";
            }

            public static function display_menu_message() {
                echo "New Menu added";
            }
        }
    }