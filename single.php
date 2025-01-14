<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Fresh Awards
 */

get_header();
?>
<main class="site-main">
	<?php get_template_part( 'template-parts/hero_section' ); ?>
	<section class="page_content">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<?php
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content', 'single' );
						the_post_navigation(
							array(
								'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'fawards' ) . '</span> <span class="nav-title">%title</span>',
								'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'fawards' ) . '</span> <span class="nav-title">%title</span>',
							)
						);
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					endwhile;
					?>
				</div>
			</div>
		</div>
	</section>
</main><!-- #main -->
<?php
get_footer();