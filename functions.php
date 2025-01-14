<?php
/**
 * VüCH functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Fresh Awards
 */

/**=======================================
 * THEME VERSION CONTROL
=======================================*/
define( 'fawards_VERSION', wp_get_theme()->get( 'Version' ) );

/**=======================================
 * DEFINE FILE FOLDER ROOT
=======================================*/
define( 'fawards_ROOT', get_template_directory() );
define( 'fawards_ROOT_URI', get_template_directory_uri() );
define( 'fawards_ROOT_CSS', fawards_ROOT_URI . '/assets/css' );
define( 'fawards_ROOT_JS', fawards_ROOT_URI . '/assets/js' );
define( 'fawards_ROOT_IMG', fawards_ROOT_URI . '/assets/images' );

/**======================================
 * ADD THEME AFTER SETUP FUNCTIONALITY
=======================================*/
if ( file_exists( fawards_ROOT . '/inc/setup.php' ) ) {
	require_once fawards_ROOT . '/inc/setup.php';
}

/**==============================
 * Enqueue scripts and styles.
===============================*/
if ( file_exists( fawards_ROOT . '/inc/scripts.php' ) ) {
	require_once fawards_ROOT . '/inc/scripts.php';
}

/**======================================
 * Codestar framework.
======================================*/
if ( file_exists( fawards_ROOT . '/inc/csf/codestar-framework.php' ) ) {
	require_once fawards_ROOT . '/inc/csf/codestar-framework.php';
}

/**======================================
 * Codestar framework Custom Option.
======================================*/
if ( file_exists( fawards_ROOT . '/inc/csf_customize/codestar.php' ) ) {
	require_once fawards_ROOT . '/inc/csf_customize/codestar.php';
}

/**======================================
 * Custom Functions.
======================================*/
if ( file_exists( fawards_ROOT . '/inc/custom-functions.php' ) ) {
	require_once fawards_ROOT . '/inc/custom-functions.php';
}

/**==============================================================
 * TGM plugin installer.
==============================================================*/
if ( file_exists( fawards_ROOT . '/inc/installer.php' ) ) {
	require_once fawards_ROOT . '/inc/installer.php';
}

/**============================
 * Customizer additions.
============================*/
if ( file_exists( fawards_ROOT . '/inc/customizer.php' ) ) {
	require_once fawards_ROOT . '/inc/customizer.php';
}

/**=====================================
 * Load Jetpack compatibility file.
=====================================*/
if ( defined( 'JETPACK__VERSION' ) ) {
	require fawards_ROOT . '/inc/jetpack.php';
}