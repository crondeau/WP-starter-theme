<?php
/**
 * BLM Basic Starter Theme functions and definitions
 *
 * @package blm_basic
 */


/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'blm_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function blm_theme_setup() {


	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Add theme support for post thumbnails (featured images). 
	add_theme_support( 'post-thumbnails' );

	// Add theme support for menus
	register_nav_menus( array(
		'primary' 	=> __( 'Main Menu', 'blm_basic' ),
		'secondary' => __( 'Footer Menu', 'blm_basic' ),
		'social' 	=> __( 'Social Media', 'blm_basic' ),
	) );
	
	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

}
endif; // blm_theme_setup
add_action( 'after_setup_theme', 'blm_theme_setup' );


/**
 * Register widget area
 */

function blm_widgets_init() {
	register_sidebar( array(
		'id' => 'primary',
		'name' => __( 'Blog Sidebar', 'blm_basic' ),
		'description' => __( 'The following widgets will appear on your blog section.', 'blm_basic' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	) );
		
	register_sidebar( array(
		'id' => 'secondary',
		'name' => __( 'Page Sidebar', 'blm_basic' ),
		'description' => __( 'The following widgets will appear on your pages.', 'blm_basic' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	) );
}
add_action( 'widgets_init', 'blm_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function blm_basic_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	
	wp_enqueue_style('googleFonts', 'http://fonts.googleapis.com/css?family=Droid+Serif' );

	wp_enqueue_script( 'blm_navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	
	wp_enqueue_script( 'blm-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'blm_basic_scripts' );


/**
 * Set up title if SEO plugin is not used
 */

function blm_basic_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'blm_basic' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'blm_basic_wp_title', 10, 2 );


// Remove ellipses from excerpt

function blm_custom_excerpt_more($more) {
	return '<br /><a href="'. get_permalink() .'" class="more-link">Read more</a>';
	}
add_filter('excerpt_more', 'blm_custom_excerpt_more');


//Modify the excerpt length

function blm_custom_excerpt_length($length) {
	return 50;
	}
add_filter('excerpt_length', 'blm_custom_excerpt_length');


// remove junk from head
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);	
