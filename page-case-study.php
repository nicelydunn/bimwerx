<?php
/**
 * The template for displaying case study archive page
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

		<div class="container mx-auto px-4">

			<h1 class="text-4xl"><?php the_title(); ?></h1>
			<div class="w-20 border-b-4 border-orange-dark mt-4"></div>

			<?php while ( have_posts() ) : the_post(); ?>

				<div class="prose-lg">
					<?php the_content(); ?>
				</div>

			<?php endwhile; // End of the loop. ?>

			<?php 
            	$args = array(
					'post_type' => 'case-studies',
				    'posts_per_page' => -1,
					'post_status' => 'publish',
                    'orderby' => 'title',
				    'order' => 'ASC',
			    );
			    $query = new WP_Query($args);
            ?>
			<?php if ( $query->have_posts() ) : ?>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>
                        <a href="<?php echo get_the_permalink(); ?>" class="shadow-md border border-gray-200">
                            <div class="aspect-[16/9]">
                                <?php echo get_the_post_thumbnail(get_the_ID(),'large', array('class' => 'w-full h-full object-cover')); ?>
                            </div>
                            <div class="px-6 mb-4">
                                <h4 class="text-3xl font-semibold mt-4"><?php echo get_the_title(); ?></h4>
                                <p class="text-xs uppercase font-semibold"><?php echo get_field( 'location' ); ?></p>
                                <p class="mt-4"><?php echo get_the_excerpt(); ?></p>
                            </div>
                        </a>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
                </div>
			<?php endif; ?>

		</div>

	</main><!-- #main -->

<?php
get_footer();
