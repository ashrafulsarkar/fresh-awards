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
	<?php
	$fawards_primary_color   = cs_get_option( 'fawards-primary-color', '#003C97' );
	$fawards_secondary_color = cs_get_option( 'fawards-secondary-color', '#1570EF' );
	$fawards_text_color      = cs_get_option( 'fawards-text-color', '#1A1927' );
	?>
	<style>
		:root {
			--site_primary_color:
				<?php echo $fawards_primary_color; ?>
			;
			--site_secondary_color:
				<?php echo $fawards_secondary_color; ?>
			;
			--site_text_color:
				<?php echo $fawards_text_color; ?>
			;
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
				<div class="col-md-3">
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
				<div class="col-md-9">
					<div class="primary-menu">
						<nav id="main-nav" class="main-menu">
							<!-- mobile sidebar logo -->
							<?php
							if( ! empty( $fawards_logo_url ) ){ ?>
								<ul>
									<li class="d-block d-sm-none">
										<div class="logo mobile-nav">
											<img src="<?php echo $fawards_logo_url; ?>" alt="logo">
										</div>
									</li>
								</ul>
							<?php } ?>
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