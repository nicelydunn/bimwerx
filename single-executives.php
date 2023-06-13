<?php
/**
 * The template for displaying all single executives
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bimwerx
 */

get_header();
?>

	<main id="primary" class="site-main mt-28">

        <?php while ( have_posts() ) : the_post(); ?>

            <div class="container mx-auto px-4">

                <div class="md:grid grid-cols-3 gap-16">
                    <div>
                        <div class="aspect-[4/5]">
                            <?php echo get_the_post_thumbnail(get_the_ID(),'full', array('class' => 'w-full h-full object-cover')); ?>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <?php if ( get_field('executives_role') ) : ?>
                            <p class="uppercase text-orange-light mt-4 md:mt-0"><?php echo get_field('executives_role'); ?></p>
                        <?php endif; ?>
                        <h1 class="text-4xl uppercase font-semibold mt-1"><?php the_title(); ?></h1>
                        <?php if ( get_field('executives_introduction') ) : ?>
                            <div class="prose-lg mt-4">
                                <?php echo get_field('executives_introduction') ?>
                            </div>
                        <?php endif; ?>
                        <div><a href="/executive-leadership-team/" class="btn btn-primary"><?php esc_html_e('Executive Leadership Team', 'bimwerx'); ?></a></div>
                    </div>
                </div>

                <!--<?php if( have_rows('executives_family') ): ?>
                    <?php while( have_rows('executives_family') ): the_row(); ?>
                        <div class="grid md:grid-cols-2 gap-8 items-center mt-16">
                            <div class="aspect-[1/1] lg:order-2">
                                <?php echo wp_get_attachment_image( get_sub_field('image'), 'full', "", array( "class" => "h-full w-full object-cover" ) ); ?>
                            </div>
                            <div class="lg:order-1">
                                <div class="w-16 border-b-2 border-orange-dark"></div>
                                <h3 class="text-3xl uppercase mt-4"><?php esc_html_e('My Family', 'bimwerx'); ?></h3>
                                <div class="mt-8 text-lg"><?php the_sub_field('description') ?></div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>-->

                <!--<?php if( have_rows('executives_experience') ): ?>
                    <?php while( have_rows('executives_experience') ): the_row(); ?>
                        <div class="grid md:grid-cols-2 gap-8 items-center mt-16">
                            <div class="aspect-[1/1]">
                                <?php echo wp_get_attachment_image( get_sub_field('image'), 'full', "", array( "class" => "h-full w-full object-cover" ) ); ?>
                            </div>
                            <div class="">
                                <div class="w-16 border-b-2 border-orange-dark"></div>
                                <h3 class="text-3xl uppercase mt-4"><?php esc_html_e('My Experience', 'bimwerx'); ?></h3>
                                <div class="mt-8 text-lg"><?php the_sub_field('description') ?></div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>-->

                <!--<?php if( have_rows('executives_education') ): ?>
                    <?php while( have_rows('executives_education') ): the_row(); ?>
                        <div class="grid md:grid-cols-2 gap-8 items-center mt-16">
                            <div class="aspect-[1/1] lg:order-2">
                                <?php echo wp_get_attachment_image( get_sub_field('image'), 'full', "", array( "class" => "h-full w-full object-cover" ) ); ?>
                            </div>
                            <div class="lg:order-1">
                                <div class="w-16 border-b-2 border-orange-dark"></div>
                                <h3 class="text-3xl uppercase mt-4"><?php esc_html_e('My Education', 'bimwerx'); ?></h3>
                                <div class="mt-8 text-lg"><?php the_sub_field('description') ?></div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>-->

            <!--<?php 
            	$args = array(
                    'post_type' => 'case-studies',
                    'meta_query' => [
                        array(  
                            'key' => 'associated_executive',
                            'value' => '"' . get_the_ID() . '"',
                            'compare' => 'LIKE'
                        )
                    ]
			    );
			    $query = new WP_Query($args);
            ?>
			<?php if ( $query->have_posts() ) : ?>
                <div class="mt-16">
                    <p class="uppercase text-orange-light"><?php esc_html_e('Check-Out', 'bimwerx'); ?></p>
                    <h3 class="text-3xl uppercase">The Project's I've Worked On</h3>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mt-8">
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>
                        <a href="<?php echo get_the_permalink(); ?>" class="">
                            <div class="aspect-[16/9] overflow-hidden">
                                <?php echo get_the_post_thumbnail(get_the_ID(),'large', array('class' => 'w-full h-full object-cover scale-100 hover:scale-110 transition-all')); ?>
                            </div>
                            <div class="px-6 mb-4">
                                <h3 class="text-2xl mt-4 text-center"><?php echo get_the_title(); ?></h3>
                                <p class="text-xs uppercase text-center"><?php echo get_field( 'location' ); ?></p>
                            </div>
                        </a>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
                </div>
			<?php endif; ?>-->

            </div>

        <?php endwhile; // End of the loop. ?>



	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
