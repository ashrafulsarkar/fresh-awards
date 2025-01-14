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
		<div class="row align-items-center">
			<div class="col-lg-4 col-md-3">
				<div class="footer_logo">
					<?php
					$fawards_footer_logo     = cs_get_option( 'fawards-footer-logo' );
					$fawards_footer_logo_url = isset( $fawards_footer_logo['url'] ) ? $fawards_footer_logo['url'] : '';
					if ( $fawards_footer_logo_url ) { ?>
						<img src="<?php echo $fawards_footer_logo_url; ?>" alt="logo">
					<?php } ?>
				</div>
			</div>
			<div class="col-lg-8 col-md-9">
				<div class="primary-menu footer-menu">
					<nav id="main-nav" class="main-menu">
						<!-- main nav menu -->
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
	</div>
</footer>
<script>
    let uploadElements = document.querySelectorAll('.fawards_form .forminator-icon-upload');
    let uploadElementTexts = document.querySelectorAll('.fawards_form .forminator-multi-upload-message p');

    uploadElements.forEach(function(element) {
        element.innerHTML = "<img src ='<?php echo fawards_ROOT_IMG.'/upload.svg';?>' >";
    });

    uploadElementTexts.forEach(function(element) {
        element.innerHTML = "<div class='fawards_contain'><p class='fawards_title'>Wähle eine Datei aus oder ziehe sie per Drag & Drop hierher</p><p class='fawards_desc'>PDF-Dateigröße nicht mehr als 10 MB</p></div><p class='fawards_link'>Wähle eine Datei aus</p>";
    });
</script>
<?php wp_footer(); ?>
</body>

</html>