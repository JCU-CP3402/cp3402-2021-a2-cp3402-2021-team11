<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package CMSAssignmentTheme
 */

get_header();
?>
	<div class="flex mx-12 lg:mx-28 mt-12">
		<main id="primary" class="site-main grid w-full">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );

				the_post_navigation(
					array(
						'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'cmsassignmenttheme' ) . '</span> <span class="nav-title">%title</span>',
						'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'cmsassignmenttheme' ) . '</span> <span class="nav-title">%title</span>',
					)
				);

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) : ?>
					<div class="my-3 single__comment border-t border-gray-300 pt-5"><?php comments_template();?></div>
				<?php endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
		<div class="hidden md:block ml-10"><?php get_sidebar();?></div>
	</div>
	
<?php

get_footer();
