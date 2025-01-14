<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fresh Awards
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php fawards_post_thumbnail(); ?>
	<div class="entry-content">
		<?php
		the_content();
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fawards' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>
</article>