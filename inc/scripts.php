<?php
/**
 * Fresh Awards Theme Style script
 *
 * @package Fresh Awards
 */

function fawards_scripts() {
	/**==================
	 * Google Fonts
	 * Font name: Inter Tight, Inter, Roboto
	 ==================*/
	wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css2?family=Inter&family=Inter+Tight:ital,wght@0,100..900;1,100..900&family=Roboto:wght@400;500;700&display=swap' );
	
	wp_enqueue_style( 'bootstrap-grid', fawards_ROOT_CSS . '/bootstrap-grid.min.css' );
	wp_enqueue_style( 'fontawesome', fawards_ROOT_CSS . '/fontawesome.min.css' );
	wp_enqueue_style( 'hc-offcanvas-nav', fawards_ROOT_CSS . '/hc-offcanvas-nav.css' );
	wp_enqueue_style( 'fawards-main-style', fawards_ROOT_CSS . '/style.css', [], fawards_VERSION );
	wp_enqueue_style( 'fawards-style', get_stylesheet_uri(), [], fawards_VERSION );

	wp_enqueue_script( 'hc-offcanvas-nav', fawards_ROOT_JS . '/hc-offcanvas-nav.js', ['jquery'], '6.1.5', true );
	wp_enqueue_script( 'fawards-script', fawards_ROOT_JS . '/main.js', ['jquery'], fawards_VERSION, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fawards_scripts' );