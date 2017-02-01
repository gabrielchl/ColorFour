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
			'name'      => 'WP Google Maps',
			'slug'      => 'wp-google-maps',
			'required'  => true,
		),
        array(
			'name'      => 'Ultimate Addons for SiteOrigin',
			'slug'      => 'addon-so-widgets-bundle',
			'required'  => true,
		),
        array(
			'name'      => 'The Events Calendar',
			'slug'      => 'the-events-calendar',
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






function awana_prebuilt_layouts_home($layoutshome){
    $layoutshome['home-page'] = array(
        // We'll add a title field
        'name' => __('Default Home', 'vantage'),    // Required
        'description' => __('Default Home', 'vantage'),    // Optional
        //'screenshot' => plugin_dir_url( __FILE__ ) . 'images/layout-screenshot.png',    // Optional
        'widgets' => 
            array (
                0 => 
                    array (
                        'huge-banner-text-button-text-one' => 'Approved Workmen Are Not Ashamed',
                        'huge-banner-text-button-text-two' => 'Awana is an Bible-centered ministry that provides club programs for children through the local church.',
                        'huge-banner-text-button-button-link' => 'http://www.google.com/',
                        'huge-banner-text-button-button-text' => 'About Us',
                        'huge-banner-text-align' => 'left',
                        '_sow_form_id' => '588ad55d86491',
                        'panels_info' => 
                        array (
                            'class' => 'Huge_Banner_Text_Button',
                            'raw' => false,
                            'grid' => 0,
                            'cell' => 0,
                            'id' => 0,
                            'widget_id' => 'e5966d73-370d-486f-9f64-c674b6ec2287',
                            'style' => 
                            array (
                                'background_display' => 'tile',
                            ),
                        ),
                    ),
            1 => 
                array (
                    'text_one' => 'About',
                    'url_one' => 'http://www.google.com.hk/',
                    'color_one' => '#FE8453',
                    'text_two' => 'News',
                    'url_two' => 'http://www.google.com.hk/',
                    'color_two' => '#80C3D3',
                    'text_three' => 'Resources',
                    'url_three' => 'http://www.google.com.hk/',
                    'color_three' => '#88C87A',
                    'text_four' => 'Gallrry',
                    'url_four' => 'http://www.google.com.hk/',
                    'color_four' => '#F1CD3B',
                    '_sow_form_id' => '588808cb77297',
                    'panels_info' => 
                    array (
                      'class' => 'Four_Link_Boxes',
                      'raw' => false,
                      'grid' => 1,
                      'cell' => 0,
                      'id' => 1,
                      'widget_id' => 'bbcfdf76-c581-491a-b9c5-0ae437d82568',
                      'style' => 
                        array (
                            'background_display' => 'tile',
                        ),
                    ),
            ),
    2 => 
    array (
      'section-title-text' => 'LATEST NEWS',
      'section-title-color' => '#F1CD3B',
      '_sow_form_id' => '588a016acd907',
      'panels_info' => 
      array (
        'class' => 'Section_Title',
        'raw' => false,
        'grid' => 2,
        'cell' => 0,
        'id' => 2,
        'widget_id' => 'c339ebb4-89c2-4ba9-a5f1-f37798b0776b',
        'style' => 
        array (
          'background_display' => 'tile',
        ),
      ),
    ),
    3 => 
    array (
      'posts' => 'post_type=post&date_query={"after":"","before":""}&orderby=date&order=DESC&posts_per_page=6&sticky=&additional=',
      '_sow_form_id' => '588a00c3e354c',
      'panels_info' => 
      array (
        'class' => 'Blog_Display_Six',
        'raw' => false,
        'grid' => 2,
        'cell' => 0,
        'id' => 3,
        'widget_id' => '16f322d5-d5dc-4f68-8638-721c3e1c289f',
        'style' => 
        array (
          'background_display' => 'tile',
        ),
      ),
    ),
    4 => 
    array (
      'banner-text-button-text-one' => 'VOLUNTEER!',
      'banner-text-button-text-two' => 'We are currently bla bla bla bla bla and we need you to help!',
      'banner-text-button-button-link' => 'http://www.google.com/',
      'banner-text-button-button-text' => 'Text Here',
      '_sow_form_id' => '588961df2ecba',
      'panels_info' => 
      array (
        'class' => 'Banner_Text_Button',
        'raw' => false,
        'grid' => 3,
        'cell' => 0,
        'id' => 4,
        'widget_id' => '8e36250c-e191-4fb8-8d76-944d2ff34860',
        'style' => 
        array (
          'background_display' => 'tile',
        ),
      ),
    ),
  ),
  'grids' => 
  array (
    0 => 
    array (
      'cells' => 1,
      'style' => 
      array (
        'row_stretch' => 'full',
        'background_image_attachment' => 63,
        'background_display' => 'cover',
      ),
    ),
    1 => 
    array (
      'cells' => 1,
      'style' => 
      array (
        'row_stretch' => 'full',
        'background' => '#ededed',
        'background_display' => 'tile',
      ),
    ),
    2 => 
    array (
      'cells' => 1,
      'style' => 
      array (
      ),
    ),
    3 => 
    array (
      'cells' => 1,
      'style' => 
      array (
        'row_stretch' => 'full',
        'background' => '#4c4c4c',
        'background_image_attachment' => 24,
        'background_display' => 'cover',
      ),
    ),
  ),
  'grid_cells' => 
  array (
    0 => 
    array (
      'grid' => 0,
      'weight' => 1,
    ),
    1 => 
    array (
      'grid' => 1,
      'weight' => 1,
    ),
    2 => 
    array (
      'grid' => 2,
      'weight' => 1,
    ),
    3 => 
    array (
      'grid' => 3,
      'weight' => 1,
    ),
  ),
    );
    return $layoutshome;

}
add_filter('siteorigin_panels_prebuilt_layouts','awana_prebuilt_layouts_home');