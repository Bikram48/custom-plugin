<?php
    namespace CustomPlugin;

    if( !class_exists( 'AdminMenu' ) ) {
        class AdminMenu {

            public static function init() {
                self::initAction();
            }

            public static function initAction() {
                add_action( 'admin_menu', array(__CLASS__, 'get_menus') );
            }

            public static function get_menus() {
                add_menu_page(
                    'CustomPlugin',
                    'PluginByBikram',
                    'manage_options',
                    'plugin page',
                    'page_func',
                    '',
                    6
                );

            }
        }
    }