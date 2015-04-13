<?php
/**
 * darrenpuscas functions and definitions
 *
 * @package darrenpuscas
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'darrenpuscas_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function darrenpuscas_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on locals-theme, use a find and replace
	 * to change 'locals-theme' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'darrenpuscas', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
    add_image_size('mainpost-thumb', 775, 500, true);
    add_image_size('frontpage-thumb', 800, 600, true);
    add_image_size('newspage-thumb', 800, 00, true);

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Menu', 'darrenpuscas' ),
        'social-menu' => __( 'Social Menu', 'darrenpuscas' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(

	) );

	// Set up the WordPress core custom background feature.
//	add_theme_support( 'custom-background', apply_filters( 'locals_theme_custom_background_args', array(
//		'default-color' => 'ffffff',
//		'default-image' => '',
//	) ) );
}
endif; // darrenpuscas_setup
add_action( 'after_setup_theme', 'darrenpuscas_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function darrenpuscas_widgets_init() {
    register_sidebar(array(
        'name' => __('Sidebar', 'darrenpuscas'),
        'id' => 'sidebar-1',
        'description' => 'Sidebar on the homepage',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));
    register_sidebar(array(
        'name' => __('Pages Sidebar', 'darrenpuscas'),
        'id' => 'pages-sidebar',
        'description' => 'Sidebar used on Pages',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));

    register_sidebar( array(
        'name'          => __( 'Footer Widgets', 'darrenpuscas' ),
        'id'            => 'sidebar-2',
        'description'   => '__the widget on the left of the footer',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );
}
add_action( 'widgets_init', 'darrenpuscas_widgets_init' );


add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'web_design_article',
        array(
            'labels' => array(
                'name' => __( 'Web Design Articles' ),
                'singular_name' => __( 'Web Design Article' )
            ),
            'public' => true,
            'has_archive' => true,
        )
    );
}

/**
 * Enqueue scripts and styles.
 */
function darrenpuscas_scripts() {


    wp_enqueue_style( 'darrenpuscas-style', get_stylesheet_uri() );

    wp_enqueue_style('darrenpuscas-content-sidebar', get_template_directory_uri() . '/layouts/content-sidebar.css' );

    wp_enqueue_script( 'darrenpuscas-superfish', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

    wp_enqueue_script( 'darrenpuscas-superfish-settings', get_template_directory_uri() . '/js/superfish-settings.js', array('locals-superfish'), '20140328', true );


    wp_enqueue_script( 'darrenpuscas-navigation', get_template_directory_uri() . '/js/superfish.min.js', array('jquery'), '20150207', true );

    wp_enqueue_script('darrenpuscas-equal-columns', get_template_directory_uri() . '/js/equal-columns.js', array('jquery'), '20150202', true );

    wp_enqueue_script('darrenpuscas-scroll-animation.js', get_template_directory_uri() . '/js/scroll-animation.js', array('jquery'), '201504013', true );

    wp_enqueue_Style( 'darrenpuscas-fontawesome', 'http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css' );

    wp_enqueue_script( 'darrenpuscas-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );


    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'darrenpuscas_scripts' );

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


