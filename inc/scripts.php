<?php
/**
 * Fresh Awards Theme Style script
 *
 * @package Fresh Awards
 */

function fawards_scripts() {
	/**==================
	 * Google Fonts
	 * Font name: Quicksand
	 ==================*/
	wp_enqueue_style( 'google-font-Quicksand', '//fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap' );
	wp_enqueue_style( 'fawards-fonts', FAWARDS_ROOT_CSS . '/fonts.css' );
	
	wp_enqueue_style( 'bootstrap-grid', FAWARDS_ROOT_CSS . '/bootstrap-grid.min.css' );
	wp_enqueue_style( 'fontawesome', FAWARDS_ROOT_CSS . '/fontawesome.min.css' );
	wp_enqueue_style( 'hc-offcanvas-nav', FAWARDS_ROOT_CSS . '/hc-offcanvas-nav.css' );
	wp_enqueue_style( 'fawards-main-style', FAWARDS_ROOT_CSS . '/style.css', [], FAWARDS_VERSION );
	wp_enqueue_style( 'fawards-responsive-style', FAWARDS_ROOT_CSS . '/responsive.css', [], FAWARDS_VERSION );
	wp_enqueue_style( 'fawards-style', get_stylesheet_uri(), [], FAWARDS_VERSION );

	wp_enqueue_script( 'hc-offcanvas-nav', FAWARDS_ROOT_JS . '/hc-offcanvas-nav.js', ['jquery'], '6.1.5', true );
	wp_enqueue_script( 'fawards-script', FAWARDS_ROOT_JS . '/main.js', ['jquery'], FAWARDS_VERSION, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fawards_scripts' );