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
                    'post_type' => 'testimonials',
                    'status' => 'publish',
                    'posts_per_page' => -1
                );
                $query = NEw WP_Query($args);
            ?>
            <?php if ( $query->have_posts() ) : ?>
                <?php $i = 0;?>
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <?php
                        $company = get_field('testimonial-company') ? get_field('testimonial-company') : '';
                        $title = get_field('testimonial-title') ? get_field('testimonial-title') . ', ' : '';
                        $text = get_field('testimonial-text') ? get_field('testimonial-text') : '';
                        $rating = get_field('testimonial-rating') ? get_field('testimonial-rating') : '';
                    ?>
                    <?php // if( $i % 2 === 0 ) : ?>
                    <div class="grid my-16 md:grid-cols-3 gap-8 lg:gap-16">
                        <div class="<?php if ( $i % 2 !== 0 ) : ?>md:col-start-3<?php endif; ?>">
                            <?php echo get_the_post_thumbnail(get_the_ID(),'large', array('class' => 'w-full h-full object-cover')); ?>
                        </div>
                        <div class="md:col-span-2 self-center text-center lg:py-8 max-w-prose mx-auto <?php if ( $i % 2 !== 0 ) : ?>md:col-start-1 md:row-start-1<?php endif; ?>">
                            <div class="flex justify-center opacity-50"><img class="h-12 w-auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/quote.png" alt=""></div>
                            <div class="text-center italic text-lg mt-4"><?php echo $text; ?></div>
                            <div class="flex justify-center gap-2 mt-8">
                            <?php for( $i = 0; $i < $rating; $i++ ){ ?>
                                <img class="h-5 w-5" src="<?php echo get_template_directory_uri(); ?>/assets/images/rating-star.png" alt="">
                            <?php } ?>
                            </div>
                            <p class="text-lg font-semibold uppercase mt-8"><?php echo get_the_title(); ?></p>
                            <p class="text-gray-600"><?php echo $title; ?><?php echo $company; ?></p>
                        </div>
                    </div>
                    <?php if( ($i+1) < $query->found_posts ) : ?>
                        <div class="w-1/2 border-b border-b-gray-200 mx-auto"></div>
                    <?php endif; ?>
                    <?php $i++; ?>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>

		</div>

		<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->

<?php
get_footer();
