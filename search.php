<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CMSAssignmentTheme
 */

get_header();
?>
	<div class="font-sans text-5xl font-light text-gray-500 my-14 mx-auto w-max"><?php single_post_title(); ?></div>
	<div class="flex mx-12 lg:mx-28">
		<main id="primary" class="site-main grid grid-cols-1 lg:grid-cols-2 gap-10 w-full">
			<?php
			if ( have_posts() && is_post_type('post') ) :
				
				/* Start the Loop */
				while ( have_posts() && is_post_type('post') ) :
					the_post();

					/*
					* Include the Post-Type-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Type name) and that will be used instead.
					*/
					get_template_part( 'template-parts/content', get_post_type() );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>

		</main><!-- #main -->
		<div class="hidden md:block ml-10"><?php get_sidebar();?></div>
	</div>
	

<?php get_footer();
