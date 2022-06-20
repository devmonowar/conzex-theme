<?php
/**
 * Conzex functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Conzex
 * @since Conzex 1.0
 */


/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function conzex_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/conzex
	 * If you're building a theme based on Conzex, use a find and replace
	 * to change 'conzex' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'conzex' );


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

	add_image_size( 'conzex-thumbnail-avatar', 100, 100, true );

	// Set content-width.
	global $content_width;
	if ( ! isset( $content_width ) ) {
		$content_width = 1170;
	}


	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus(
		array(
			'top'    => __( 'Top Menu', 'conzex' ),
		)
	);

	// Add theme support for Custom Logo.
	add_theme_support(
		'custom-logo',
		array(
			'width'      => 250,
			'height'     => 250,
			'flex-width' => true,
		)
	);

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
		)
	);
		/*
	 * Enable support for Post Formats.
	 *
	 * See: https://wordpress.org/support/article/post-formats/
	 */
	add_theme_support(
		'post-formats',
		array(
			'image',
			'audio',
			'video',
			'gallery',
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Load regular editor styles into the new block-based editor.
	add_theme_support( 'editor-styles' );


	// Add support for responsive embeds.
	add_theme_support( 'responsive-embeds' );
	

}
add_action( 'after_setup_theme', 'conzex_setup' );





/**
 * Enqueues scripts and styles.
 */
function conzex_scripts() {

	wp_enqueue_style( 'googleapis-font', '//fonts.googleapis.com/css?family=Poppins:300,400,500,500i,600,700,800,900' );
	wp_enqueue_style( 'flaticon-style', get_theme_file_uri( 'assets/css/flaticon.css' ), array(), '1.0', 'all' );
	wp_enqueue_style( 'font-awesome-style', get_theme_file_uri( 'assets/css/font-awesome.min.css' ), array(), '1.0', 'all' );
	wp_enqueue_style( 'owl-carousel-style', get_theme_file_uri( 'assets/css/owl.carousel.min.css' ), array(), '1.0', 'all' );
	wp_enqueue_style( 'tiny-slider-style', get_theme_file_uri( 'assets/css/tiny-slider.css' ), array(), '1.0', 'all' );
	wp_enqueue_style( 'custom-animate-style', get_theme_file_uri( 'assets/css/custom-animate.css' ), array(), '1.0', 'all' );
	wp_enqueue_style( 'custom-animation-style', get_theme_file_uri( 'assets/css/custom-animation.css' ), array(), '1.0', 'all' );
	wp_enqueue_style( 'magnific-popup-style', get_theme_file_uri( 'assets/css/magnific-popup.css' ), array(), '1.0', 'all' );
	wp_enqueue_style( 'nice-select-style', get_theme_file_uri( 'assets/css/nice-select.css' ), array(), '1.0', 'all' );
	wp_enqueue_style( 'bootstrap-style', get_theme_file_uri( 'assets/css/bootstrap-v4.1.3.min.css' ) );
	wp_enqueue_style( 'conzex-global-style', get_theme_file_uri( 'assets/css/global.css' ), array(), '1.0.1', 'all' );
	wp_enqueue_style( 'conzex-element-style', get_theme_file_uri( 'assets/css/element.css' ), array(), '1.0.1', 'all' );
	wp_enqueue_style( 'conzex-mainmenu-style', get_theme_file_uri( 'assets/css/mainmenu.css' ), array(), '1.0.1', 'all' );
	wp_enqueue_style( 'conzex-default-style', get_theme_file_uri( 'assets/css/style.css' ), array(), '2.1', 'all' );
	wp_enqueue_style( 'conzex-responsive-style', get_theme_file_uri( 'assets/css/responsive.css' ), array(), '1.0', 'all' );
	wp_enqueue_style( 'conzex-style', get_stylesheet_uri(), array(), '1.0', 'all' );
    wp_style_add_data( 'conzex-style', 'rtl', 'replace' );


	wp_enqueue_script( 'pooper-js', get_theme_file_uri( 'assets/js/popper-v1.14.3.min.js' ), array( 'jquery' ), '1.14.3', true );
	wp_enqueue_script( 'bootstrap-js', get_theme_file_uri( 'assets/js/bootstrap-v4.1.3.min.js' ), array( 'jquery' ), '1.14.3', true );
	wp_enqueue_script( 'owl-carousel-js', get_theme_file_uri( 'assets/js/owl.carousel.min.js' ), array( 'jquery' ), '1.14.3', true );
	wp_enqueue_script( 'countTo-js', get_theme_file_uri( 'assets/js/jquery.countTo.js' ), array( 'jquery' ), '1.14.3', true );
	wp_enqueue_script( 'simpleLoadMore-js', get_theme_file_uri( 'assets/js/jquery.simpleLoadMore.min.js' ), array( 'jquery' ), '1.14.3', true );
	wp_enqueue_script( 'magnific-popup-js', get_theme_file_uri( 'assets/js/jquery.magnific-popup.min.js' ), array( 'jquery' ), '1.14.3', true );
	wp_enqueue_script( 'wow-js', get_theme_file_uri( 'assets/js/wow.min.js' ), array( 'jquery' ), '1.14.3', true );
	wp_enqueue_script( 'isotope-js', get_theme_file_uri( 'assets/js/isotope.pkgd.min.js' ), array( 'jquery' ), '1.14.3', true );
	wp_enqueue_script( 'conzex-main-js', get_theme_file_uri( 'assets/js/main.js' ), array( 'jquery' ), '1.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'conzex_scripts' );



/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function conzex_widgets_setup() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Column 1', 'conzex' ),
			'id'            => 'footer_area_1',
			'description'   => esc_html__( 'Add widgets here.', 'conzex' ),
			'before_widget' => '<div id="%1$s" class="footer-widget logo-widget">',
			'after_widget'  => '</div>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Column 2', 'conzex' ),
			'id'            => 'footer_area_2',
			'description'   => esc_html__( 'Add widgets here.', 'conzex' ),
			'before_widget' => '<div id="%1$s" class="footer-widget links-widget float-lg-right %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="footer-title">',
			'after_title'   => '</h5>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Column 3', 'conzex' ),
			'id'            => 'footer_area_3',
			'description'   => esc_html__( 'Add widgets here.', 'conzex' ),
			'before_widget' => '<div id="%1$s" class="footer-widget links-widget float-lg-right %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="footer-title">',
			'after_title'   => '</h5>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Column 4', 'conzex' ),
			'id'            => 'footer_area_4',
			'description'   => esc_html__( 'Add widgets here.', 'conzex' ),
			'before_widget' => '<div id="%1$s" class="footer-widget links-widget float-lg-right %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="footer-title">',
			'after_title'   => '</h5>',
		)
	);

}
add_action( 'widgets_init', 'conzex_widgets_setup' );




/**
 * Additional features to TGM-Plugin-Activation
 */
require get_parent_theme_file_path( '/inc/TGM-Plugin-Activation-develop/tgm-conzex.php' );
//require get_parent_theme_file_path( '/inc/redux-options.php' );

/**
 * Theme options
 */

 if (file_exists(dirname(__FILE__).'/inc/redux-framework-master/redux-framework.php')){
 	require_once(dirname(__FILE__).'/inc/redux-framework-master/redux-framework.php');
 }
 if (file_exists(dirname(__FILE__).'/inc/redux-framework-master/sample/barebones-config.php')){
 	require_once(dirname(__FILE__).'/inc/redux-framework-master/sample/barebones-config.php');
 }



/**
 * Demo options
 */
require_once get_template_directory() . '/inc/demo-install.php';

