<?php
/**
 * Understrap Child Theme functions and definitions
 *
 * @package UnderstrapChild
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;



/**
 * Removes the parent themes stylesheet and scripts from inc/enqueue.php
 */
function understrap_remove_scripts() {
	wp_dequeue_style( 'understrap-styles' );
	wp_deregister_style( 'understrap-styles' );

	wp_dequeue_script( 'understrap-scripts' );
	wp_deregister_script( 'understrap-scripts' );
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );



/**
 * Enqueue our stylesheet and javascript file
 */
function theme_enqueue_styles() {

	// Get the theme data.
	$the_theme = wp_get_theme();

	$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
	// Grab asset urls.
	$theme_styles  = "/css/child-theme{$suffix}.css";
	$theme_scripts = "/js/child-theme{$suffix}.js";
	$slick = "/js/slick.min.js";

	wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . $theme_styles, array(), $the_theme->get( 'Version' ) );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . $theme_scripts, array(), $the_theme->get( 'Version' ), true );
	wp_enqueue_script( 'slick-scripts', get_stylesheet_directory_uri() . $slick, array(), $the_theme->get( 'Version' ), true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );



/**
 * Load the child theme's text domain
 */
function add_child_theme_textdomain() {
	load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );



/**
 * Overrides the theme_mod to default to Bootstrap 5
 *
 * This function uses the `theme_mod_{$name}` hook and
 * can be duplicated to override other theme settings.
 *
 * @param string $current_mod The current value of the theme_mod.
 * @return string
 */
function understrap_default_bootstrap_version( $current_mod ) {
	return 'bootstrap5';
}
add_filter( 'theme_mod_understrap_bootstrap_version', 'understrap_default_bootstrap_version', 20 );



/**
 * Loads javascript for showing customizer warning dialog.
 */
function understrap_child_customize_controls_js() {
	wp_enqueue_script(
		'understrap_child_customizer',
		get_stylesheet_directory_uri() . '/js/customizer-controls.js',
		array( 'customize-preview' ),
		'20130508',
		true
	);
}
add_action( 'customize_controls_enqueue_scripts', 'understrap_child_customize_controls_js' );

/**
 * Custom POST TYPES
 */

function case_study_post_type() {
	$args = array(
		'labels' => array(
			'name' => 'Případové studie',
			'singular_name' => 'Případová studie'
		),
		'hierarchical' => true,
		'public' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-media-interactive',
		'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
		'rewrite' => array('slug' => 'pripadove-studie')
	);

	register_post_type('case-studies', $args);
}

add_action('init', 'case_study_post_type');

/**
 * Custom TAXONOMY
 */

function case_study_tags() {
	$args = array(
		'labels' => array(
			'name' => 'Služby',
			'singular_name' => 'Služba'
		),
		'public' => true,
	);

	register_taxonomy('case-studies-tags', array('case-studies'), $args);
}

add_action('init', 'case_study_tags');

/**
 * Disable editor
 */

function hide_editor() {    
	$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'];	

	if (!isset($post_id))
			return;
	// Hide the editor on a page with a specific page template
	// Get the name of the Page Template file.
	$template_file = get_post_meta($post_id, '_wp_page_template', true);
	//---
	if ($template_file == 'template-contact.php') { // the filename of the page template
			remove_post_type_support('page', 'editor');
	}
}

add_action('admin_init', 'hide_editor');

// SET MAX UPLOAD SIZES
@ini_set( 'upload_max_size' , '512M' );
@ini_set( 'post_max_size', '512M');
@ini_set( 'max_execution_time', '300' );