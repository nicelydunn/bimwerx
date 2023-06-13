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
                    'post_type' => 'portfolio',
                    'status' => 'publish',
                    'posts_per_page' => -1,
                    'post_parent' => 0,
                    'order' => 'ASC'
                );
                $query = NEW WP_Query( $args );
            ?>
            <?php if ( $query->have_posts() ) : ?>
                <?php $portfolio_images = []; ?>
                <?php $current_gallery; ?>
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 grid-portfolio">
                    <?php $i = 1; ?>
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                        <?php $post_id = get_the_ID(); ?>
                        <div class="relative aspect-[4/3]">
                            <img src="<?php the_field('portfolio_image'); ?>" alt="" class="h-full w-full object-cover">
                            
                                <?php $current_gallery = '<div style="display: none;" class="gallery-' . $i . '"><div><img src="'. get_field('portfolio_image') .'" alt="" class="h-screen w-screen object-contain"></div>'; ?>
                                <?php
                                    $child_args = array(
                                        'post_type' => 'portfolio',
                                        'status' => 'publish',
                                        'posts_per_page' => -1,
                                        'post_parent' => $post_id,
                                        'order' => 'ASC'
                                    );
                                    $child_query = NEW WP_Query( $child_args )
                                ?>
                                <?php $child_count = 0; ?>
                                <?php if ( $child_query->have_posts() ) : ?>
                                    <?php $child_count = $child_query->found_posts; ?>
                                    <?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>
                                    <?php $current_gallery .= '<div><img src="'. get_field('portfolio_image') .'" alt="" class="h-screen w-screen object-contain"></div>'; ?>
                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>
                                <?php endif; ?>
                            <?php $current_gallery .= '</div>'; ?>
                            <?php $portfolio_images[] = $current_gallery; ?>
                            
                            <div class="absolute flex justify-center items-center h-full w-full top-0 left-0 bg-gray-transparent opacity-0 hover:opacity-100 hover:cursor-pointer z-50 transition-all js-open-modal" data-gallery="<?php echo $i; ?>">
                                <div class="flex text-white text-lg ga-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15"/></svg>
                                    <span><?php echo ( $child_count > 0 ) ? '+ ' . $child_count : ''; ?></span>
                                </div>
                            </div>
                        </div>
                        
                        <?php $i++; ?>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            <?php endif; ?>

		</div>

		<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->

<div id="js-gallery-modal" class="fixed left-0 top-0 h-screen w-screen bg-gray-900 z-[100] hidden">
	<div id="close-modal" class="absolute top-4 right-4 z-50 flex align-middle h-12 w-12 hover:cursor-pointer">
	<svg xmlns="http://www.w3.org/2000/svg" class="text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
	</div>
	
    <?php foreach( $portfolio_images as $portfolio_image ) { ?>
        <?php echo $portfolio_image; ?>
    <?php } ?>
	
</div>

<?php
get_footer();
