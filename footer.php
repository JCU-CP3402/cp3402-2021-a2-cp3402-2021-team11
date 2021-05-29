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
		<div class="top-footer">
			<div class="grid md:grid-cols-4 gap-4 items-center md:justify-items-center">
				<div class="footer-brand">
					<div class="flex items-center">
						<img class="object-cover" src="<?php echo get_template_directory_uri();?>/assets/img/logo.png" loading="lazy" alt="..">
						<span><?php bloginfo( 'name' );?></span>
					</div>
					<div class="text-left">
						<?php dynamic_sidebar( 'footer-widget-col-one' ); ?>	
					</div>
				</div>
				<div class="footer-about">
					<div class="text-left">
						<?php dynamic_sidebar( 'footer-widget-col-two' ); ?>
					</div>
				</div>
				<div class="footer-company">
					<div class="text-left">
						<?php dynamic_sidebar( 'footer-widget-col-three' ); ?>
						</div>
				</div>
				<div class="footer-contact">
					<div class="text-left">
						<?php dynamic_sidebar( 'footer-widget-col-four' ); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright-footer py-4">
			<p class="copyright">&copy;<?php bloginfo( 'name' );?> <?php echo date("Y"); ?> / Created by <a href="https://github.com/JCU-CP3402/cp3402-2021-a2-cp3402-2021-team11" target="_blank">Team 11</p>
		</div>
	</footer>
</body>
</html>
