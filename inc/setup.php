<?php
/**
 * Fresh Awards Theme Setup
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Fresh Awards
 */

if ( !function_exists( 'fawards_setup' ) ) {
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function fawards_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Fresh Awards, use a find and replace
         * to change 'fawards' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'fawards', FAWARDS_ROOT . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
                'main_menu' => esc_html__( 'Main Menu', 'fawards' ),
                'footer_menu' => esc_html__( 'Footer Menu', 'fawards' ),
            )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

        add_image_size( 'blog_image', 1200, 900 );

    }
    add_action( 'after_setup_theme', 'fawards_setup' );
}