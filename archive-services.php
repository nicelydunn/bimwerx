<?php
/**
 * The template for displaying services post_type archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bimwerx
 */

get_header();
?>

    <main id="primary" class="site-main mt-28">

		<div class="container mx-auto px-4">

            <h1 class="text-4xl">Our Services</h1>
			<div class="w-20 border-b-4 border-orange-dark mt-4"></div>

            <?php 
                $args = array(
                    'post_status' => 'publish',
                    'post_type' => 'services',
                    'posts_per_page' => -1,
                    'orderby' => 'title',
                    'order' => 'ASC'
                );
                $query = new WP_Query( $args );
                
                if ( $query->have_posts() ) :
            ?>

                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8 mt-8">

                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>

                        <a class="border border-gray-200 bg-white transition-all hover:bg-gray-100 hover:cursor-pointer" href="<?php the_permalink(); ?>">

                            <div class="bg-cover aspect-[3/1]" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>
                            <div class="px-8 py-4 pt-0 -mt-8">
                                <div class="flex justify-center"><div class="inline-block bg-white p-4 rounded-full"><img class="h-12 w-12 object-contain" src="<?php echo get_field( 'icon' ); ?>" alt=""></div></div>
                                <h2 class="text-center font-semibold text-lg"><?php the_title(); ?></h2>
                                <?php $excerpt = wp_trim_words( get_the_excerpt(), '15', '...' ); ?>
                                <p class="hidden md:block text-center mt-4"><?php echo $excerpt; ?></p>
                            </div>
                        </a>

                    <?php endwhile; ?>

                </div>

            <?php endif; ?>

        </div>

	</main><!-- #main -->

<?php

get_footer();
