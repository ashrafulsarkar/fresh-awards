<?php
/**
 * Fresh Awards functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Fresh Awards
 */

/**=======================================
 * THEME VERSION CONTROL
=======================================*/
define( 'FAWARDS_VERSION', wp_get_theme()->get( 'Version' ) );

/**=======================================
 * DEFINE FILE FOLDER ROOT
=======================================*/
define( 'FAWARDS_ROOT', get_template_directory() );
define( 'FAWARDS_ROOT_URI', get_template_directory_uri() );
define( 'FAWARDS_ROOT_CSS', FAWARDS_ROOT_URI . '/assets/css' );
define( 'FAWARDS_ROOT_JS', FAWARDS_ROOT_URI . '/assets/js' );
define( 'FAWARDS_ROOT_IMG', FAWARDS_ROOT_URI . '/assets/images' );

/**======================================
 * ADD THEME AFTER SETUP FUNCTIONALITY
=======================================*/
if ( file_exists( FAWARDS_ROOT . '/inc/setup.php' ) ) {
	require_once FAWARDS_ROOT . '/inc/setup.php';
}

/**==============================
 * Enqueue scripts and styles.
===============================*/
if ( file_exists( FAWARDS_ROOT . '/inc/scripts.php' ) ) {
	require_once FAWARDS_ROOT . '/inc/scripts.php';
}

/**======================================
 * Custom Functions.
======================================*/
if ( file_exists( FAWARDS_ROOT . '/inc/custom-functions.php' ) ) {
	require_once FAWARDS_ROOT . '/inc/custom-functions.php';
}

/**======================================
 * Codestar framework.
======================================*/
if ( file_exists( FAWARDS_ROOT . '/inc/csf/codestar-framework.php' ) ) {
	require_once FAWARDS_ROOT . '/inc/csf/codestar-framework.php';
}

/**======================================
 * Codestar framework Custom Option.
======================================*/
if ( file_exists( FAWARDS_ROOT . '/inc/csf_customize/codestar.php' ) ) {
	require_once FAWARDS_ROOT . '/inc/csf_customize/codestar.php';
}

/**==============================================================
 * TGM plugin installer.
==============================================================*/
if ( file_exists( FAWARDS_ROOT . '/inc/installer.php' ) ) {
	require_once FAWARDS_ROOT . '/inc/installer.php';
}

/**============================
 * Customizer additions.
============================*/
if ( file_exists( FAWARDS_ROOT . '/inc/customizer.php' ) ) {
	require_once FAWARDS_ROOT . '/inc/customizer.php';
}

/**=====================================
 * Load Jetpack compatibility file.
=====================================*/
if ( defined( 'JETPACK__VERSION' ) ) {
	require FAWARDS_ROOT . '/inc/jetpack.php';
}