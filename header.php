<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fresh Awards
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<style>
		:root {
			--site_primary_color: #c1a057;
			--site_secondary_color: #ffd539;
			--site_text_color: #000000;
		}
	</style>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php
	wp_body_open();
	$fawards_logo     = cs_get_option( 'fawards-header-logo' );
	$fawards_logo_url = isset( $fawards_logo['url'] ) ? $fawards_logo['url'] : '';
	?>
	<header>
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-3 col-10">
					<?php if ( ! empty( $fawards_logo_url ) ) { ?>
						<div class="logo">
							<a href="<?php echo home_url(); ?>">
								<img class="menu_logo" src="<?php echo $fawards_logo_url; ?>" alt="logo">
							</a>
						</div>
					<?php } else { ?>
						<div class="site-branding">
							<h3>
								<a href="<?php echo home_url(); ?>"><?php echo bloginfo( 'name' ) ?></a>
							</h3>
						</div>
					<?php } ?>
				</div>
				<div class="col-md-9 col-2">
					<div class="primary-menu">
						<nav id="main-nav" class="main-menu">
							<!-- main nav menu -->
							<?php
							wp_nav_menu( array(
								'theme_location' => "main_menu",
								'container'      => "ul",
							) );
							?>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>