<?php
/**
 * bimwerx functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bimwerx
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function bimwerx_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on bimwerx, use a find and replace
		* to change 'bimwerx' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'bimwerx', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'bimwerx' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'bimwerx_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'bimwerx_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bimwerx_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bimwerx_content_width', 640 );
}
add_action( 'after_setup_theme', 'bimwerx_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bimwerx_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 1st', 'bimwerx' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets here.', 'bimwerx' ),
			'before_widget' => '<section class="footer-widget">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 2nd', 'bimwerx' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add widgets here.', 'bimwerx' ),
			'before_widget' => '<section class="footer-widget">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 3rd', 'bimwerx' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Add widgets here.', 'bimwerx' ),
			'before_widget' => '<section class="footer-widget">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 4th', 'bimwerx' ),
			'id'            => 'footer-4',
			'description'   => esc_html__( 'Add widgets here.', 'bimwerx' ),
			'before_widget' => '<section class="footer-widget">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 5th', 'bimwerx' ),
			'id'            => 'footer-5',
			'description'   => esc_html__( 'Add widgets here.', 'bimwerx' ),
			'before_widget' => '<section class="footer-widget">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Projects - BIM Coordination', 'bimwerx' ),
			'id'            => 'projects-1',
			'description'   => esc_html__( 'Add widgets here.', 'bimwerx' ),
			'before_widget' => '<section class="projects-widget">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Projects - Mechanical BIM', 'bimwerx' ),
			'id'            => 'projects-2',
			'description'   => esc_html__( 'Add widgets here.', 'bimwerx' ),
			'before_widget' => '<section class="projects-widget">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Projects - Plumbing BIM', 'bimwerx' ),
			'id'            => 'projects-3',
			'description'   => esc_html__( 'Add widgets here.', 'bimwerx' ),
			'before_widget' => '<section class="projects-widget">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Projects - Electrical BIM', 'bimwerx' ),
			'id'            => 'projects-4',
			'description'   => esc_html__( 'Add widgets here.', 'bimwerx' ),
			'before_widget' => '<section class="projects-widget">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Projects - Architectural/Interior Design BIM', 'bimwerx' ),
			'id'            => 'projects-5',
			'description'   => esc_html__( 'Add widgets here.', 'bimwerx' ),
			'before_widget' => '<section class="projects-widget">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Projects - BIM Constructability Reporting', 'bimwerx' ),
			'id'            => 'projects-6',
			'description'   => esc_html__( 'Add widgets here.', 'bimwerx' ),
			'before_widget' => '<section class="projects-widget">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'bimwerx_widgets_init' );

/**
 * Google fonts prefecth
 */
function gg_gfonts_prefetch() {
	echo '<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>';
	echo '<link rel="preconnect" href="https://fonts.googleapis.com/" crossorigin>';
}
add_action( 'wp_head', 'gg_gfonts_prefetch' );

/**
 * Enqueue scripts and styles.
 */
function bimwerx_scripts() {
	wp_enqueue_style( 'bimwerx-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap', false );
	wp_enqueue_style( 'animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', false );
	wp_enqueue_style( 'slick-css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', false );
	// wp_style_add_data( 'bimwerx-style', 'rtl', 'replace' );

	// wp_enqueue_script( 'bimwerx-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bimwerx', get_template_directory_uri() . '/js/site.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'slick-js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bimwerx_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


add_theme_support( 'editor-styles' );
add_editor_style( 'style.css' );
