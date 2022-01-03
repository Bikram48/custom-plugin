<?php

    namespace CustomPlugin;

    if( !class_exists( 'PostType' ) ) {

        class PostType {

            public static function init() {
                self::initAction();
            }

            public static function initAction() {
                add_action( 'init', array( __CLASS__,'init_post_type' ) );
            }

            public static function init_post_type() {
                register_post_type('wporg_product',
                array(
                    'labels'      => array(
                    'name'          => __('Products', 'CustomTxt'),
                    'singular_name' => __('Product', 'CustomTxt'),
                ),
                    'public'      => true,
                    'has_archive' => true,
                )
                );
            }
        }
        
    }
