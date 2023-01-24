<?php
/**
 * human appeal functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package human_appeal
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
function human_appeal_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on human appeal, use a find and replace
		* to change 'human-appeal' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'human-appeal', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'human-appeal' ),
			'main-menu'	=> esc_html__( 'Main Menu', 'human-appeal' ),
		),
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
			'human_appeal_custom_background_args',
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

	/* main menu fallback cb function here*/
	function null_menu(){
		
	}
}
add_action( 'after_setup_theme', 'human_appeal_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function human_appeal_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'human_appeal_content_width', 640 );
}
add_action( 'after_setup_theme', 'human_appeal_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function human_appeal_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'human-appeal' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'human-appeal' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'human_appeal_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function human_appeal_scripts() {

	wp_enqueue_style( 'human-appeal-font-awasome', get_template_directory_uri() . "./access/css/all.css", array(), _S_VERSION );
	wp_enqueue_style( 'human-appeal-bootstrap', get_template_directory_uri() . "./access/css/bootstrap.min.css", array(), _S_VERSION );
	wp_enqueue_style( 'human-appeal-t-style', get_template_directory_uri() . "./access/css/style.css", array(), _S_VERSION );
	wp_enqueue_style( 'human-appeal-responsive', get_template_directory_uri() . "./access/css/responsive.css", array(), _S_VERSION );
	wp_enqueue_style( 'human-appeal-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'human-appeal-style', 'rtl', 'replace' );


	wp_enqueue_script('jquery');
	wp_enqueue_script( 'human-appeal-bootstrap', get_template_directory_uri() . './access/js/bootstrap.bundle.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'human-appeal-navigation', get_template_directory_uri() . './access/js/main.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'human-appeal-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'human_appeal_scripts' );


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


/* bootstrap header main menu li a class adding this action here now*/
	function add_class_li($classes, $item, $args) {
	    if (isset($args->li_class)) {
	        $classes[] = $args->li_class;
	    }
	    if (isset($args->a_class)) {
	        $classes[] = $args->a_class;
	    }
	    if (isset($args->active_class) && in_array('current-menu_item', $classes)) {
	        $classes[] = $args->active_class;
	    }
	    return $classes;
	}
	add_filter('nav_menu_css_class', 'add_class_li', 10, 3);


	/* Redux framework include here */
	include"libs/opt/redux-core/framework.php";
	include"libs/opt/sample/sample-config.php";

