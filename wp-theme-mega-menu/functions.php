<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mega-menu
 * @since 1.0.0
 */

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function mega_menu_styles() {
	wp_enqueue_style(
		'mega-menu-style',
		get_stylesheet_uri(),
		[],
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'mega_menu_styles' );

/**
 * Special Scripts and Styles
 */
function petj_mega_menu() {
    // below a css file
    wp_enqueue_style( 'CSS_Mega_Menu', get_template_directory_uri() . '/assets/css/css.css' );
    // below a script
    wp_enqueue_script( 'JS_Mega_Menu', get_template_directory_uri() . '/assets/js/js.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'petj_mega_menu' );