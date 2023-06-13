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

		<div class="container mx-auto px-4">

			<h1 class="text-4xl"><?php the_title(); ?></h1>
			<div class="w-20 border-b-4 border-orange-dark mt-4"></div>

			<?php while ( have_posts() ) : the_post(); ?>

				<div class="prose-lg">
					<?php the_content(); ?>
				</div>

			<?php endwhile; // End of the loop. ?>

			<?php 
				$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            	$args = array(
					'post_type' => 'post',
				    'posts_per_page' => 10,
					'post_status' => 'publish',
                    'orderby' => 'date',
				    'order' => 'DESC',
					'paged' => $paged
			    );
			    $query = new WP_Query($args);
            ?>
			<?php if ( $query->have_posts() ) : ?>
				<div class="grid md:grid-cols-2 gap-8 md:gap-12 mt-16">
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>
						<div>
							<div class="flex gap-4">
								<div>
									<p class="font-semibold text-3xl text-center mt-1"><?php echo get_the_date('d'); ?></p>
									<p class="text-sm uppercase text-center"><?php echo get_the_date('M'); ?></p>
									<p class="text-sm text-center"><?php echo get_the_date('Y'); ?></p>
								</div>
								<div class="border-l border-gray-400 pl-4">
									<h1 class="mt-1 text-2xl lg:text-3xl font-semibold"><?php the_title(); ?></h1>
									<p class="mt-4 mb-4">
										BY <span class="uppercase text-orange-dark"><?php the_author(); ?></span> | 
										<?php if( get_field('read_time') ): ?>
											<?php the_field('read_time'); ?>
											min<?php if( get_field('read_time') > 1 ) { echo "s"; } ?>
											read
										<?php endif; ?>
								</div>
							</div>
							<?php if ( has_post_thumbnail() ) { ?>
								<div class="aspect-[3/1] mt-4"><?php the_post_thumbnail('full', ['class' => 'w-full h-full object-cover']); ?></div>
							<?php } ?>
							<div class="mt-4"><?php the_excerpt(); ?></div>
							<div class="mt-4"><a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a></div>
						</div>
					<?php endwhile; ?>
					
				</div>
				<?php
					$GLOBALS['wp_query']= $query;
                	$args = array(
						'show_all'	=> false,
						'prev_next'	=> true,
						'prev_text'	=> __('&lsaquo;'),
						'next_text'	=> __('&rsaquo;'),
						'class'		=> 'number-pagination'
					);
            	?>
				<div class="mt-16">
					<?php the_posts_pagination( $args ); ?>
				</div>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>

		</div>

	</main><!-- #main -->

<?php
get_footer();
