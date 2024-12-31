<?php
/**
 * Plugin Name:       General Blocks
 * Description:       A simple plugin with some important blocks for Gutenberg.
 * Requires at least: 6.0
 * Requires PHP:      7.4
 * Version:           1.0.0
 * Author:            Maruf Khan
 * Author URI:        https://github.com/marufmks
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       general-blocks
 * Domain Path:       /languages
 */



if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if( ! class_exists( 'General_Blocks' ) ) {

	final class General_Blocks {

		protected static $instance = null;

		/**
		 * Constructor
		 * @return void
		 */
		public function __construct() {
			$this->define_constants();
			$this->includes();
		}

		/**
		 * Definte the plugin constants
		 * @return void
		 */
		public function define_constants() {
			define( 'GENERAL_BLOCKS_VERSION', '1.0.0' );
			define( 'GENERAL_BLOCKS_DIR', __DIR__ );
			define( 'GENERAL_BLOCKS_URL', plugin_dir_url( __FILE__ ) );
			define( 'GENERAL_BLOCKS_PATH', plugin_dir_path( __FILE__ ) );
		}

		/**
		 * Include all the required files
		 * @return void
		 */
		public function includes() {
			require_once __DIR__ . '/inc/loader.php';
		}

		/**
		 * Initialize the plugin
		 * @return \General_Blocks
		 */
		public static function init() {
			if( is_null( self::$instance ) ) {
				self::$instance = new self();
			}
			return self::$instance;
		}
	}
}

/**
 * Initialize the plugin
 * @return \General_Blocks
 */
function general_blocks_blocks_init() {
	return General_Blocks::init();
}

// kick-off the plugin
general_blocks_blocks_init();