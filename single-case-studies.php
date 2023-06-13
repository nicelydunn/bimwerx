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

            <div class="h-[60vh] md:h-[80vh] bg-cover bg-center grid items-center" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
                <div class="container mx-auto px-4">
                    <p class="text-base md:text-xl uppercase text-white drop-shadow-lg"><?php esc_html_e('Case Studies', 'bimwerx'); ?></p>
                    <div class="w-20 mt-2 border-b-2 border-orange-dark"></div>
                    <h1 class="text-4xl md:text-6xl font-semibold mt-4 text-white drop-shadow-lg"><?php the_title(); ?></h1>
                </div>
            </div>

            <div class="container mx-auto px-4">

                <div class="max-w-prose mx-auto mt-8">
                    <div class="w-16 border-b-2 border-orange-dark"></div>
                    <h2 class="text-3xl uppercase mt-4"><?php esc_html_e('The Story', 'bimwerx'); ?></h2>
                    <div class="prose-lg"><?php the_field('story'); ?></div>
                </div>

            </div>

            <?php $associated_services = get_field('associated_services'); ?>
            <?php if( $associated_services ): ?>
                <div class="bg-orange-light mt-8">
                    <div class="container mx-auto px-4 py-8">
                        <h2 class="text-3xl text-white font-semibold text-center">
                            <?php esc_html_e('Project Highlights', 'bimwerx'); ?>
                        </h2>
                        <p class="uppercase text-white text-center mt-4">
                            <?php esc_html_e('Services Provided', 'bimwerx'); ?>
                        </p>
                        <div class="grid md:flex justify-center gap-4 mt-8">
                            <?php foreach( $associated_services as $post ): ?>
                            <?php setup_postdata($post); ?>
                            
                                <div class="grid gap-4 justify-center">
                                    <div class="flex justify-center"><div class="inline-block bg-white rounded-full p-4"><img class="h-20 w-20 object-contain" src="<?php echo get_field('icon'); ?>" alt=""></div></div>
                                    <p class="text-white"><?php the_title(); ?></p>
                                </div>    
                            
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

            <?php wp_reset_postdata(); ?>
            <?php endif; ?>

            
                    

                

            <div class="container mx-auto px-4">

                <?php if( have_rows('objectives') ): ?>
                    <?php while( have_rows('objectives') ): the_row(); ?>
                        <div class="grid md:grid-cols-2 gap-8 items-center mt-16">
                            <div class="aspect-[1/1] lg:order-2">
                                <?php echo wp_get_attachment_image( get_sub_field('image'), 'full', "", array( "class" => "h-full w-full object-cover" ) ); ?>
                            </div>
                            <div class="lg:order-1">
                                <div class="w-16 border-b-2 border-orange-dark"></div>
                                <h2 class="text-3xl uppercase mt-4"><?php esc_html_e('Objectives', 'bimwerx'); ?></h2>
                                <div class="prose-lg"><?php the_sub_field('description') ?></div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

                <?php if( have_rows('schedule') ): ?>
                    <?php while( have_rows('schedule') ): the_row(); ?>
                        <div class="grid md:grid-cols-2 gap-8 items-center mt-16">
                            <div class="aspect-[1/1]">
                                <?php echo wp_get_attachment_image( get_sub_field('image'), 'full', "", array( "class" => "h-full w-full object-cover" ) ); ?>
                            </div>
                            <div>
                                <div class="w-16 border-b-2 border-orange-dark"></div>
                                <h2 class="text-3xl uppercase mt-4"><?php esc_html_e('Impact on the Construction Process', 'bimwerx'); ?></h2>
                                <div class="prose-lg"><?php the_sub_field('description') ?></div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                
            </div>

        <?php endwhile; // End of the loop. ?>

        <div class="container mx-auto px-4 mt-16">

            <div class="w-16 border-b-2 border-gray-600"></div>
            <h4 class="text-3xl mt-4 text-orange-dark"><?php esc_html_e('More Projects Completed By BIMWERX', 'bimwerx') ?></h4>

            <div>
                <?php if ( is_active_sidebar( 'projects-1' ) ): ?>
                    <h5 class="font-semibold uppercase text-lg mt-8 text-gray-600"><?php esc_html_e('BIM Coordination', 'bimwerx'); ?></h5>
                    <?php dynamic_sidebar( 'projects-1' ); ?>
                <?php endif; ?>
            </div>
            <div>
                <?php if ( is_active_sidebar( 'projects-2' ) ): ?>
                    <h5 class="font-semibold uppercase text-lg mt-8 text-gray-600"><?php esc_html_e('Mechanical BIM', 'bimwerx'); ?></h5>
                    <?php dynamic_sidebar( 'projects-2' ); ?>
                <?php endif; ?>
            </div>
            <div>
                <?php if ( is_active_sidebar( 'projects-3' ) ): ?>
                    <h5 class="font-semibold uppercase text-lg mt-8 text-gray-600"><?php esc_html_e('Plumbing BIM', 'bimwerx'); ?></h5>
                    <?php dynamic_sidebar( 'projects-3' ); ?>
                <?php endif; ?>
            </div>
            <div>
                <?php if ( is_active_sidebar( 'projects-4' ) ): ?>
                    <h5 class="font-semibold uppercase text-lg mt-8 text-gray-600"><?php esc_html_e('Electrical BIM', 'bimwerx'); ?></h5>
                    <?php dynamic_sidebar( 'projects-4' ); ?>
                <?php endif; ?>
            </div>
            <div>
                <?php if ( is_active_sidebar( 'projects-5' ) ): ?>
                    <h5 class="font-semibold uppercase text-lg mt-8 text-gray-600"><?php esc_html_e('Architectural/Interior Design BIM', 'bimwerx'); ?></h5>
                    <?php dynamic_sidebar( 'projects-5' ); ?>
                <?php endif; ?>
            </div>
            <div>
                <?php if ( is_active_sidebar( 'projects-6' ) ): ?>
                    <h5 class="font-semibold uppercase text-lg mt-8 text-gray-600"><?php esc_html_e('BIM Constructability Reporting', 'bimwerx'); ?></h5>
                    <?php dynamic_sidebar( 'projects-6' ); ?>
                <?php endif; ?>
            </div>
        <div>

	</main><!-- #main -->

<?php
get_footer();
