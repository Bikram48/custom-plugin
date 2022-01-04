<?php 
/**
 * Plugin Name: Custom Plugin
 * Description: This plugin designed for user authentication and authroization.
 * Version: 1.0.0
 * Requires at least: 5.1.0
 * Requires PHP: 7.0.0
 * Author: Bikram
 * Author URI: https://bikram.com
 * License: GNU GPL 
 * License URI: https://license.com
 * Text Domain: CustomTxt
 * Domain Path: /languages
 */

  namespace CustomPlugin;

use IconUploaderMenu;

  include __DIR__.'/admin-menu.php';
  include __DIR__.'/custom-post-type.php';
  include __DIR__.'/NavMenuIconUploader.php';
  if( !class_exists( 'Plugin' ) ) {
      class Plugin {

        public function __construct(){
            AdminMenu::init();
            PostType::init();
            IconUploaderMenu::init();
        }
      }
      new Plugin();
  }
