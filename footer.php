<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CMSAssignmentTheme
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="top-footer ">
			<div class="container mx-auto">
				<div class="grid md:grid-cols-4 md:gap-16 items-center md:justify-items-center md:pb-4">
					<div class="footer-brand">
						<div class="flex items-center">
							<?php the_custom_logo(); ?>
							<span><?php bloginfo( 'name' );?></span>
						</div>
						<?php dynamic_sidebar( 'footer-widget-col-one' ); ?>	
					</div>
					<div class="footer-about footer-child">
						<?php dynamic_sidebar( 'footer-widget-col-two' ); ?>
					</div>
					<div class="footer-latest-post footer-child">
						<?php dynamic_sidebar( 'footer-widget-col-three' ); ?>
					</div>
					<div class="footer-quick-links footer-child">
						<?php dynamic_sidebar( 'footer-widget-col-four' ); ?>
					</div>
				</div>
			</div>	
		</div>
		<div class="copyright-footer py-4">
			<div class="container mx-auto ">
				<div class="flex flex-wrap justify-between">
					<div class="copyright">
						&copy;<?php bloginfo( 'name' );?> <?php echo date("Y"); ?> / Created by 
						<a href="https://github.com/JCU-CP3402/cp3402-2021-a2-cp3402-2021-team11" target="_blank">
							Team 11 
						</a>
					</div>
					<div class="teacher-info">
					Andrew Hannay (Hannay@gmail.com) - Autism Support Group IT Administrator
					</div>
				</div>
			</div>
		</div>
	</footer>
	<?php wp_footer() ?>
</body>
</html>
