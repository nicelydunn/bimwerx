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

	<main id="primary" class="site-main">



            <?php while ( have_posts() ) : the_post(); ?>

                <div class="bg-cover" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
                    <div class=" min-h-[75vh] grid items-end">
                        <div class="py-8 px-4 md:max-w-prose mx-8 bg-orange-light mb-8">
                            <h1 class="text-4xl text-white"><?php the_title(); ?></h1>
                            <div class="text-white text-lg mt-6"><?php the_excerpt(); ?></div>
                        </div>
                    </div>
                </div>

                <div class="container mx-auto px-4">
                    <div class="lg:grid grid-cols-3 gap-16">
                        <div class="prose-lg col-span-2">
                            <?php the_content(); ?>
                            <p class="text-center"><button data-tf-popup="zv2BnB2V" data-tf-iframe-props="title=BIMWERX Contact Form" data-tf-medium="snippet" style="" class="btn btn-primary">Contact Form</button></p><script src="//embed.typeform.com/next/embed.js"></script>
                        </div>
                        <div class="hidden lg:block">
                            <div class="prose-lg"><h2>Our Services</h2></div>
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
