<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CMSAssignmentTheme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		if ( is_singular() ) :?>
			<div class="content__postthumbnail content__is-singular"><?php cmsassignmenttheme_post_thumbnail(); ?></div>
		<?php else :?>
			<div class="content__postthumbnail"><?php cmsassignmenttheme_post_thumbnail(); ?></div>
		<?php
		endif;
	?>
	
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title text-4xl text-gray-500 my-3">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title text-4xl text-gray-500 my-3">
				<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>
			</h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				cmsassignmenttheme_posted_on();
				cmsassignmenttheme_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'cmsassignmenttheme' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'cmsassignmenttheme' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php cmsassignmenttheme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
