<?php
/**
 * Regiser Blocks Category
 * @general-blocks
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if( ! class_exists( 'General_Blocks_Category' ) ) {
    
    class General_Blocks_Category {

        /**
         * Constructor
         * @return void
         */
        public function __construct() {
            if( version_compare( $GLOBALS['wp_version'], '5.7', '<' ) ) {
                add_filter( 'block_categories', [ $this, 'register_block_category' ], 10, 2 );
            } else {
                add_filter( 'block_categories_all', [ $this, 'register_block_category' ], 10, 2 );
            }
        }

        /**
         * Register Blocks Category 
         * @return array
         */
        public function register_block_category( $categories, $post ) {
            return array_merge(
                array(
                    array(
                        'slug'  => 'general-blocks',
                        'title' => __( 'General Blocks', 'general-blocks' ),
                    ),
                ),
                $categories,
            );
        }

    }
}

new General_Blocks_Category(); // Initialize the class instance 