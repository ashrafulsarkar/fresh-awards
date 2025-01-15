<?php
/**
 * Fresh Awards Theme Style script
 *
 * @package Fresh Awards
 */

function fawards_scripts() {
	/**==================
	 * Google Fonts
	 * Font name: Oswald
	 ==================*/
	wp_enqueue_style( 'google-font-Oswald', '//fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap' );
	
	wp_enqueue_style( 'bootstrap-grid', fawards_ROOT_CSS . '/bootstrap-grid.min.css' );
	wp_enqueue_style( 'fontawesome', fawards_ROOT_CSS . '/fontawesome.min.css' );
	wp_enqueue_style( 'hc-offcanvas-nav', fawards_ROOT_CSS . '/hc-offcanvas-nav.css' );
	wp_enqueue_style( 'fawards-main-style', fawards_ROOT_CSS . '/style.css', [], fawards_VERSION );
	wp_enqueue_style( 'fawards-responsive-style', fawards_ROOT_CSS . '/responsive.css', [], fawards_VERSION );
	wp_enqueue_style( 'fawards-style', get_stylesheet_uri(), [], fawards_VERSION );

	wp_enqueue_script( 'hc-offcanvas-nav', fawards_ROOT_JS . '/hc-offcanvas-nav.js', ['jquery'], '6.1.5', true );
	wp_enqueue_script( 'fawards-script', fawards_ROOT_JS . '/main.js', ['jquery'], fawards_VERSION, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fawards_scripts' );