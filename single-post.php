<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bimwerx
 */

get_header();
?>

	<main id="primary" class="site-main mt-36">

        <div class="container mx-auto px-4">

            <?php while ( have_posts() ) : the_post(); ?>

                <div class="md:grid grid-cols-3 gap-12">
                    <div class="col-span-2">
                        <div class="flex gap-4">
                            <div>
                                <p class="font-semibold text-3xl text-center mt-1"><?php echo get_the_date('d'); ?></p>
                                <p class="text-sm uppercase text-center"><?php echo get_the_date('M'); ?></p>
                                <p class="text-sm text-center"><?php echo get_the_date('Y'); ?></p>
                            </div>
                            <div class="border-l border-gray-400 pl-4">
                                <h1 class="mt-1 text-3xl md:text-4xl font-semibold"><?php the_title(); ?></h1>
                                <p class="mt-4 mb-4">
                                    BY <span class="uppercase text-orange-dark"><?php the_author(); ?></span> | 
                                    <?php if( get_field('read_time') ): ?>
                                        <?php the_field('read_time'); ?>
                                        min<?php if( get_field('read_time') > 1 ) { echo "s"; } ?>
                                        read
                                    <?php endif; ?>
                            </div>
                        </div>
                        
                        <div class="prose-lg">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-2xl font-semibold uppercase">Latest News</h2>
                        <div class="grid grid-cols-5 mt-2">
                            <div class="border-b-2 border-orange-dark"></div>
                            <div class="col-span-4 border-b-2 border-gray-200"></div>
                        </div>
                        <?php 
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 3,
                                'orderby' => 'date',
                                'order' => 'DESC',
                                'post__not_in' => [get_the_ID()]
                            );
                            $query = new WP_Query($args);
                        ?>
                        <?php if ( $query->have_posts() ) : ?>
                        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                            <a href="<?php the_permalink(); ?>">
                                <h3 class="font-semibold uppercase text-lg mt-6 transition-all hover:text-orange-light"><?php the_title(); ?></h3>
                                <p class="mt-2 text-sm uppercase text-gray-600"><?php echo get_the_date('F j, Y'); ?></p>
                            </a>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                        <div class="mt-4"><a href="/news/" class="btn btn-primary">View All</a></div>
                    </div>
                </div>

            <?php endwhile; // End of the loop. ?>

        </div>

	</main><!-- #main -->

<?php
get_footer();
