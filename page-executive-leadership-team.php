<?php
/**
 * The template for displaying /executive-leadership-team/
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

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mt-8">
                <?php
                    $args = array(
                        'post_type' => 'executives',
                        'post_status' => 'publish',
                        'orderby' => 'menu_order',
                        'order' => 'ASC'
                    );
                    $query = new WP_Query($args);
                ?>
                        
                <? if ( $query->have_posts() ) : ?>
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>

                        <a href="<?php echo get_the_permalink(); ?>">
                            <div class="aspect-[4/5]">
                                <?php echo get_the_post_thumbnail(get_the_ID(),'large', array('class' => 'w-full h-full object-cover')); ?>
                            </div>
                            <h2 class="mt-2 text-3xl font-semibold text-right"><?php the_title(); ?></h2>
                            <p class="text-right text-orange-light uppercase"><?php echo get_field('executives_role'); ?></p>
                        </a>

                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
                </div>
            </div>

		<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->

<?php
get_footer();
