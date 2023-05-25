<?php


if ( ! function_exists( 'nikeClone_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function nikeClone_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;
add_action( 'after_setup_theme', 'nikeClone_support' );

/*-------------------------------------------------------------------7

Enque Style
---------------------------------------------------------*/
if ( ! function_exists( 'nikeClone_style' ) ) :
	
function nikeClone_style() {

	// Register stylesheet 
	wp_enqueue_style('nikeClone-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version')); 
	wp_enqueue_style('nikeClone-style-blocks', get_template_directory_uri() . '/assets/css/blocks.css'); 

}
endif;
add_action( 'wp_enqueue_scripts', 'nikeClone_style' );
?>