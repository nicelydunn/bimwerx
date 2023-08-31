<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bimwerx
 */

?>

	<footer class="mt-8">
		<div class="bg-gray-dark py-10">
			<div class="container px-4 md:mx-auto flex items-center justify-between">
				<div><img class="h-16 w-auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/bimwerx-logo-white.png" alt="BIMWERX Logo"></div>
				<div class="flex gap-2">
					<a href="https://www.linkedin.com/company/bimwerx" aria-label="BIMWERX LinkedIn Site" target="_blank"><img class="h-8 w-8" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-linkedin.png" alt="LinkedIn Logo"></a>
					<a href="https://www.facebook.com/BIMWERX/" target="_blank" aria-label="BIMWERX Facebook Page"><img class="h-8 w-8" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-facebook.png" alt="Facebook Logo"></a>
					<a href="https://www.instagram.com/bimwerx/" aria-label="BIMWERX Instagram Page" target="_blank"><img class="h-8 w-8" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-instagram.png" alt="Instagram Logo"></a>
				</div>
			</div>
		</div>
		<div class="bg-gray-light pt-20 pb-4">
			<div class="px-4 container mx-auto grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 pb-20">
				<div class="col-span-2 mb-8">
					<?php if ( is_active_sidebar( 'footer-1' ) ): ?>
						<?php dynamic_sidebar( 'footer-1' ); ?>
					<?php endif; ?>
				</div>
				<div>
					<?php if ( is_active_sidebar( 'footer-2' ) ): ?>
						<?php dynamic_sidebar( 'footer-2' ); ?>
					<?php endif; ?>
				</div>
				<div>
					<?php if ( is_active_sidebar( 'footer-3' ) ): ?>
						<?php dynamic_sidebar( 'footer-3' ); ?>
					<?php endif; ?>
				</div>
				<div>
					<?php if ( is_active_sidebar( 'footer-4' ) ): ?>
						<?php dynamic_sidebar( 'footer-4' ); ?>
					<?php endif; ?>
				</div>
				<div>
					<?php if ( is_active_sidebar( 'footer-5' ) ): ?>
						<?php dynamic_sidebar( 'footer-5' ); ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="container mx-auto ">
				<p class="text-center text-sm text-white">©<?php echo date('Y');?> BIMWERX, LLC</p>
			</div>
		</div>
	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
