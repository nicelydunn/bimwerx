<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bimwerx
 */

get_header();
?>

	<main id="primary" class="site-main mt-28">

		<?php while ( have_posts() ) : the_post(); ?>

		<div class="container mx-auto px-4">

			<div class="lg:grid grid-cols-3 gap-16">

				<div class="col-span-2">
					<h1 class="text-4xl"><?php the_title(); ?></h1>
					<div class="w-20 border-b-4 border-orange-dark mt-4"></div>
					<div class="prose-lg">
						<?php the_content(); ?>
					</div>
				</div>
				<div class="hidden lg:block">
					<div class="prose-lg"><h2 class="mt-0">Our Services</h2></div>
					<?php 
						$args = array(
							'post_type' => 'services',
							'posts_per_page' => -1,
							'orderby' => 'title',
							'order' => 'ASC'
						);
						$query = new WP_Query($args);
					?>
					<?php if ( $query->have_posts() ) : ?>
						<div>
							<?php while ( $query->have_posts() ) : $query->the_post(); ?>
								<a class="border-b flex items-center border-gray-200 pr-2 py-2 mb-2" href="<?php the_permalink(); ?>">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-gray-400 h-4 w-4">
										<path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/>
									</svg>
									<span class="text-sm uppercase text-gray-400 pl-2 transition-all hover:text-orange-light"><?php the_title(); ?></span>
								</a>
							<?php endwhile; ?>
						</div>
						<?php wp_reset_postdata(); ?>

					<?php endif; ?>
				</div>
			</div>
			
		</div>

		<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->

<?php
get_footer();
