<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bimwerx
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'bimwerx' ); ?></a>
	<header class="bg-white flex justify-between px-4 py-2 gap-8 items-center top-0 fixed z-[99] w-full border-b border-gray-100">
		<div class="lg:order-1"><a href="/" aria-label="BIMWERX Homepage"><img class="h-14 w-auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/bimwerx-logo-rebrand.png" alt="BIMWERX Logo"></a></div>
		<div class="gap-2 items-center hidden lg:flex lg:order-3">
			<div><a href="tel:888-333-8804">(888) 333-8804</a></div>
			<div><a href="/contact-us/" class="btn btn-primary"><?php esc_html_e('Let\'s Talk', 'bimwerx'); ?></a></div>
		</div>
		<div class="grow lg:order-2">
			<?php
			wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
			);
			?>
		</div>
	</header>
	
