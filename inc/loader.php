<?php 
/**
 * Plugin Main Loader File
 * 
 * @general-blocks
 */

 if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

 if( ! class_exists( 'General_Blocks_Loader' ) ) {

    class General_Blocks_Loader {

        /**
         * Constructor
         * @return void
         */
        public function __construct() {
            $this->includes();
        }

        /**
         * Include all the required files
         * @return void
         */
        public function includes() {
            require_once GENERAL_BLOCKS_PATH . 'inc/classes/blocks-category.php';
            require_once GENERAL_BLOCKS_PATH . 'inc/classes/blocks-register.php';
            require_once GENERAL_BLOCKS_PATH . 'inc/classes/blocks-style.php';
        }

    }

 }

 new General_Blocks_Loader(); // Initialize the class instance