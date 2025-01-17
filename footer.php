<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fresh Awards
 */

?>
<footer>
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="footer_logo">
					<?php
					$fawards_footer_logo_1    = cs_get_option( 'fawards-footer-logo-1' );
					$fawards_footer_logo_2    = cs_get_option( 'fawards-footer-logo-2' );
					
					$fawards_footer_logo_url_1 = isset( $fawards_footer_logo_1['url'] ) ? $fawards_footer_logo_1['url'] : '';
					if ( $fawards_footer_logo_url_1 ) { ?>
						<div class="img_1">
							<img src="<?php echo $fawards_footer_logo_url_1; ?>" alt="logo">
						</div>
					<?php }
					$fawards_footer_logo_url_2 = isset( $fawards_footer_logo_2['url'] ) ? $fawards_footer_logo_2['url'] : '';
					if ( $fawards_footer_logo_url_2 ) { ?>
						<div class="img_2">
							<img src="<?php echo $fawards_footer_logo_url_2; ?>" alt="logo">
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="footer-menu">
					<nav id="main-nav" class="main-menu">
						<?php
						wp_nav_menu( array(
							'theme_location' => "footer_menu",
							'container'      => "ul",
						) );
						?>
					</nav>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<?php
				$fawards_copyright    = cs_get_option( 'fawards-footer-copyright' );
				$fawards_copyright_text = str_replace("{year}", date("Y"), $fawards_copyright);
				?>
				<p class="copyright"><?php echo $fawards_copyright_text;?></p>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>

</html>