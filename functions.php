<?php
/**
 * SR Restaurant functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package SR_Restaurant
 */

if ( ! function_exists( 'sr_restaurant_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function sr_restaurant_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on SR Restaurant, use a find and replace
	 * to change 'sr-restaurant' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'sr-restaurant', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'sr-restaurant' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'sr_restaurant_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'sr_restaurant_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sr_restaurant_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sr_restaurant_content_width', 640 );
}
add_action( 'after_setup_theme', 'sr_restaurant_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sr_restaurant_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'sr-restaurant' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'sr-restaurant' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'sr_restaurant_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sr_restaurant_scripts() {
	wp_enqueue_style( 'sr-restaurant-style', get_stylesheet_uri() );
	wp_enqueue_style('sr-restaurant-app',get_template_directory_uri().'/assets/css/style.css');

	wp_enqueue_script('core-js',get_template_directory_uri().'/assets/js/core.min.js',array(),'',true);
	wp_enqueue_script('theme-js',get_template_directory_uri().'/assets/js/script.js',array(),'',true);
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if (is_home()) {
	    wp_enqueue_style('jquery-bxslider',get_template_directory_uri().'/assets/css/jquery.bxslider.min.css');
	}
}
add_action( 'wp_enqueue_scripts', 'sr_restaurant_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load bootstrap walker menu
 */
require_once('inc/Walker_Nav_Menu.php');


/**
 * Load Framework
 */
if (defined('FW')):
    // the framework was already included in another place, so this version will be inactive/ignored
else:
    require dirname(__FILE__) .'/framework/bootstrap.php';
endif;





function _action_theme_wp_print_styles()
{
	if (!defined('FW')) {
		return ;
	}
	global $posts;
	if (!posts || $posts->post_type != 'post') {
		return;
	}
	$option_value = fw_get_db_post_option($post->ID,'body-color');
	echo '<style type="text/css">'
		.'body{'
		.'border-color:30px solid'.esc_html($option_value).';'
		.'}'
		.'</style>';
}
add_action('wp_print_styles','_action_theme_wp_print_styles');

add_action('fw_init', '_action_theme_test_fw_settings_form');
function _action_theme_test_fw_settings_form() {
    if (class_exists('FW_Settings_Form')) {
        require_once dirname(__FILE__) . '/class-fw-settings-form-test.php';
        new FW_Settings_Form_Test('test');
    }
}


add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}