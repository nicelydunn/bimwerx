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

            <h1 class="text-4xl"><?php the_title(); ?></h1>
            <div class="w-20 border-b-4 border-orange-dark mt-4"></div>

            <div class="prose-lg">
                <?php the_content(); ?>
            </div>

            <?php 
                $args = array(
                    'post_type' => 'offices',
                    'post_status' => 'publish',
                    'post_per_page' => -1,
                    'orderby' => 'title',
                    'order' => 'ASC'
                );

                $query = NEW WP_Query($args);
            ?>
            <?php if ( $query->have_posts() ) : ?>

                <h2 class="text-4xl"><?php esc_html_e('Office Locations', 'bimwerx'); ?></h2>
                <div class="w-20 border-b-4 border-orange-dark mt-4"></div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <div>
                        <div class="aspect-[4/3] overflow-hidden relative">
                            <?php echo get_the_post_thumbnail(get_the_ID(),'full', array('class' => 'w-full h-full object-cover')); ?>
                            <div class="absolute h-full w-full top-0 left-0 bg-gray-transparent z-50 flex items-center justify-center opacity-0 hover:opacity-100 transition-all hover:cursor-pointer">
                                <div class="inline-block border-2 border-white text-white p-4 text-sm uppercase tracking-wide"><?php the_field('offices_details'); ?></div>
                            </div>
                        </div>
                        <h3 class="text-2xl mt-2"><?php the_title(); ?>, <?php echo the_field('offices_state'); ?></h3>
                        <p class="text-gray-600 text-sm"><?php the_field('offices_area'); ?></p>
                    </div>
                <?php endwhile; ?>
                </div>
            <?php endif; ?>

		</div>

		<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->

<?php
get_footer();
