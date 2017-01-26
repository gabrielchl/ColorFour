<?php
/**
 * _tk functions and definitions
 *
 * @package _tk
 */
 
 /**
  * Store the theme's directory path and uri in constants
  */
 define('THEME_DIR_PATH', get_template_directory());
 define('THEME_DIR_URI', get_template_directory_uri());

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 750; /* pixels */

if ( ! function_exists( '_tk_setup' ) ) :
/**
 * Set up theme defaults and register support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function _tk_setup() {
	global $cap, $content_width;

	// Add html5 behavior for some theme elements
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

    // This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	/**
	 * Add default posts and comments RSS feed links to head
	*/
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	*/
	add_theme_support( 'post-thumbnails' );

	/**
	 * Enable support for Post Formats
	*/
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Setup the WordPress core custom background feature.
	*/
	add_theme_support( 'custom-background', apply_filters( '_tk_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
		) ) );
	
	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on _tk, use a find and replace
	 * to change '_tk' to the name of your theme in all the template files
	*/
	load_theme_textdomain( '_tk', THEME_DIR_PATH . '/languages' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	*/
	register_nav_menus( array(
		'primary'  => __( 'Header bottom menu', '_tk' ),
		) );

}
endif; // _tk_setup
add_action( 'after_setup_theme', '_tk_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function _tk_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', '_tk' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
		) );
}
add_action( 'widgets_init', '_tk_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function _tk_scripts() {

	// Import the necessary TK Bootstrap WP CSS additions
	wp_enqueue_style( '_tk-bootstrap-wp', THEME_DIR_URI . '/includes/css/bootstrap-wp.css' );

	// load bootstrap css
	wp_enqueue_style( '_tk-bootstrap', THEME_DIR_URI . '/includes/resources/bootstrap/css/bootstrap.min.css' );

	// load Font Awesome css
	wp_enqueue_style( '_tk-font-awesome', THEME_DIR_URI . '/includes/css/font-awesome.min.css', false, '4.1.0' );

	// load _tk styles
	wp_enqueue_style( '_tk-style', get_stylesheet_uri() );

	// load bootstrap js
	wp_enqueue_script('_tk-bootstrapjs', THEME_DIR_URI . '/includes/resources/bootstrap/js/bootstrap.min.js', array('jquery') );

	// load bootstrap wp js
	wp_enqueue_script( '_tk-bootstrapwp', THEME_DIR_URI . '/includes/js/bootstrap-wp.js', array('jquery') );

	wp_enqueue_script( '_tk-skip-link-focus-fix', THEME_DIR_URI . '/includes/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( '_tk-keyboard-image-navigation', THEME_DIR_URI . '/includes/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}

}
add_action( 'wp_enqueue_scripts', '_tk_scripts' );

/**
 * Implement the Custom Header feature.
 */
require THEME_DIR_PATH . '/includes/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require THEME_DIR_PATH . '/includes/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require THEME_DIR_PATH . '/includes/extras.php';

/**
 * Customizer additions.
 */
require THEME_DIR_PATH . '/includes/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require THEME_DIR_PATH . '/includes/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require THEME_DIR_PATH . '/includes/bootstrap-wp-navwalker.php';

/**
 * Adds WooCommerce support
 */
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
	add_theme_support( 'woocommerce' );
}


require_once get_template_directory() . '/TGM-Plugin-Activation/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'WP_Theme_for_AwanaHK_register_required_plugins' );

function WP_Theme_for_AwanaHK_register_required_plugins() {
	$plugins = array(
		array(
			'name'      => 'Page Builder by SiteOrigin',
			'slug'      => 'siteorigin-panels',
			'required'  => true,
		),
        array(
			'name'      => 'SiteOrigin Widgets Bundle',
			'slug'      => 'so-widgets-bundle',
			'required'  => true,
		),
        array(
			'name'      => 'Polylang',
			'slug'      => 'polylang',
			'required'  => true,
		),
        array(
			'name'      => 'Contact Form 7',
			'slug'      => 'contact-form-7',
			'required'  => true,
		),
	);
	
	$config = array(
		'id'           => 'WP-Theme-for-AwanaHK',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

	);
	tgmpa( $plugins, $config );
}

function add_awana_so_widgets($folders){
    $folders[] = get_stylesheet_directory() . '/so-widgets/widgets/';
    return $folders;
}
add_filter('siteorigin_widgets_widget_folders', 'add_awana_so_widgets');

function awana_logo_setup() {
	add_theme_support( 'custom-logo', array(
		'height'      => 63,
		'width'       => 210,
		'flex-width' => true,
	) );
}
add_action( 'after_setup_theme', 'awana_logo_setup' );

function widget_footer_one() {

	register_sidebar( array(
		'name'          => 'Footer Area One',
		'id'            => 'widget_footer_one',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 style="padding-bottom:15px; margin-bottom:0">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'widget_footer_one' );

function widget_footer_two() {

	register_sidebar( array(
		'name'          => 'Footer Area Two',
		'id'            => 'widget_footer_two',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 style="padding-bottom:15px; margin-bottom:0">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'widget_footer_two' );

function widget_footer_three() {

	register_sidebar( array(
		'name'          => 'Footer Area Three',
		'id'            => 'widget_footer_three',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 style="padding-bottom:15px; margin-bottom:0">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'widget_footer_three' );

function widget_footer_four() {

	register_sidebar( array(
		'name'          => 'Footer Area Four',
		'id'            => 'widget_footer_four',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 style="padding-bottom:15px; margin-bottom:0">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'widget_footer_four' );