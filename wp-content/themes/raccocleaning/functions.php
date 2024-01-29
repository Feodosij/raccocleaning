<?php
/**
 * raccocleaning functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package raccocleaning
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
function raccocleaning_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on raccocleaning, use a find and replace
		* to change 'raccocleaning' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'raccocleaning', get_template_directory() . '/languages' );

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
			'header_menu' => esc_html__( 'Header Menu', 'raccocleaning' ),
			'footer_menu' => esc_html__( 'Footer Menu', 'raccocleaning' ),
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
			'raccocleaning_custom_background_args',
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
add_action( 'after_setup_theme', 'raccocleaning_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function raccocleaning_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'raccocleaning_content_width', 640 );
}
add_action( 'after_setup_theme', 'raccocleaning_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function raccocleaning_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'raccocleaning' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'raccocleaning' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'raccocleaning_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function raccocleaning_scripts() {
	wp_enqueue_style( 'raccocleaning-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'raccocleaning-style', 'rtl', 'replace' );
	
	wp_enqueue_script( 'raccocleaning-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	wp_enqueue_style('critical-style', get_template_directory_uri() . '/src/styles/critical.css');
    wp_enqueue_style('app-style', get_template_directory_uri() . '/src/styles/app.css');
    wp_enqueue_style('fancybox-style', get_template_directory_uri() . '/src/styles/jquery.fancybox.min.css');

	wp_enqueue_script('ajax-form', get_template_directory_uri() . '/js/ajax-form.js', array('jquery'), null, true);

    wp_localize_script('ajax-form', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js');
	wp_enqueue_script( 'jquery' );

    wp_enqueue_script('lottie', 'https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.9.6/lottie.min.js', array(), '', false);

	wp_enqueue_script('inputmask', get_template_directory_uri() . '/src/scripts/jquery.inputmask.min.js', array('jquery'), '', true);
    wp_enqueue_script('validate', get_template_directory_uri() . '/src/scripts/jquery.validate.min.js', array('jquery'), '', true);
    wp_enqueue_script('additional-methods', get_template_directory_uri() . '/src/scripts/additional-methods.min.js', array('jquery'), '', true);
    wp_enqueue_script('fancybox', get_template_directory_uri() . '/src/scripts/jquery.fancybox.min.js', array('jquery'), '', true);
    wp_enqueue_script('swiper', get_template_directory_uri() . '/src/scripts/swiper.js', array(), true);
    wp_enqueue_script('app', get_template_directory_uri() . '/src/scripts/app.js', array('jquery'), '', true);

	
}
add_action( 'wp_enqueue_scripts', 'raccocleaning_scripts' );

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

// create aplications post type
function create_application_post_type() {
    register_post_type('application', array(
        'labels' => array(
            'name' => __('Applications'),
            'singular_name' => __('Application'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'custom-fields'),
		'menu_icon' => 'dashicons-heart',
    ));
}
add_action('init', 'create_application_post_type');

//add customer user role
function add_customer_user_role() {
    add_role('customer', 'Customer', array(
        'read' => true,
        'level_0' => true,
    ));
}
add_action('init', 'add_customer_user_role');

// function form processings
function process_form() {
    $name = sanitize_text_field($_POST['name']);
    $tel = sanitize_text_field($_POST['tel']);
    $email = sanitize_email($_POST['email']);
    $address = sanitize_text_field($_POST['address']);
    $service = sanitize_text_field($_POST['service']);
    $square = sanitize_text_field($_POST['square']);
    $bedrooms = intval($_POST['bedrooms']);
    $bathrooms = intval($_POST['bathrooms']);

    // post customer name
    $post_title = 'New customer - ' . $name;

    // datanfor response ajax
    $processed_data = array(
        'name' => $name,
        'tel' => $tel,
        'email' => $email,
        'address' => $address,
        'service' => $service,
        'square' => $square,
        'bedrooms' => $bedrooms,
        'bathrooms' => $bathrooms,
    );

    // create post with form data
    $post_id = wp_insert_post(array(
        'post_title' => $post_title,
        'post_type' => 'application',
        'post_status' => 'publish',
    ));

    // create user using form data
    $username = sanitize_user($name);
    $password = wp_generate_password();
    $user_id = wp_create_user($username, $password, $email);

    // add role for user
    $user = new WP_User($user_id);
    $user->add_role('customer');

    // update meta data for post
    update_post_meta($post_id, 'name', $name);
    update_post_meta($post_id, 'tel', $tel);
    update_post_meta($post_id, 'email', $email);
    update_post_meta($post_id, 'address', $address);
    update_post_meta($post_id, 'service', $service);
    update_post_meta($post_id, 'square', $square);
    update_post_meta($post_id, 'bedrooms', $bedrooms);
    update_post_meta($post_id, 'bathrooms', $bathrooms);


    wp_send_json($processed_data);

    wp_die();
}

add_action('wp_ajax_process_form', 'process_form');
add_action('wp_ajax_nopriv_process_form', 'process_form');