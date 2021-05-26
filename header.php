<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CMSAssignmentTheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'cmsassignmenttheme' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="flex justify-center bg-gray-100 truncate">
			<div class="flex justify-between my-0 md:my-3 w-0 h-0 md:h-auto lg:w-6/7 md:w-11/12 lg:text-base overflow-hidden text-sm">
				<div>Visit Us Daily from 8.00 AM to 6.00 PM</div>
				<div class="flex">
					<div class="ml-10 mr-3 lg:mr-10">455 Wallstreet St., NY, USA</div>
					<a class="mr-3 lg:mr-10 cursor-pointer">optima@yoursite.com</a>
					<div class="">Request a Free Consultation</div>
				</div>
			</div>
		</div>
		<div class="site-branding mx-12 lg:mx-20 md:28 py-5 flex">
			<div class="w-20 h-20 mr-3"><?php the_custom_logo(); ?></div>
			
				<?php
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
			<div class="grid place-content-center">
					<p class="site-title font-serif text-2xl m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$cmsassignmenttheme_description = get_bloginfo( 'description', 'display' );
				if ( $cmsassignmenttheme_description || is_customize_preview() ) :
					?>
					<p class="site-description m-0 text-base text-gray-400"><?php echo $cmsassignmenttheme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php endif; ?>
			</div>
		</div><!-- .site-branding -->
		
		<div class="border-t border-b border-gray-200">
			<div class="relative flex justify-between my-2 mx-0">
				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'cmsassignmenttheme' ); ?></button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</nav><!-- #site-navigation -->
				<div id="searchId">
					<?php get_search_form() ?>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
