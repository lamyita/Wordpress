<?php
/**
 * gutenshop functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package guten_shop
 */

if ( ! function_exists( 'guten_shop_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
function guten_shop_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on gutenshop, use a find and replace
		 * to change 'gutenshop' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'gutenshop', get_template_directory() . '/languages' );

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
	add_image_size( 'gutenshop-related', 200, 125, true ); //related


		// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary Menu', 'gutenshop' ),
		'footer-menu' => esc_html__( 'Footer Menu', 'gutenshop' ),
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
		add_theme_support( 'custom-background', apply_filters( 'guten_shop_custom_background_args', array(
			'default-color' => 'fff',
			'default-image' => '',
			) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
			) );
	}
	endif;
	add_action( 'after_setup_theme', 'guten_shop_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function guten_shop_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'guten_shop_content_width', 640 );
}
add_action( 'after_setup_theme', 'guten_shop_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function guten_shop_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'gutenshop' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'gutenshop' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
		) );

	register_sidebar( array(
		'name'          => esc_html__( 'Woocommerce Sidebar', 'gutenshop' ),
		'id'            => 'woocommerce-sidebar-1',
		'description'   => esc_html__( 'Shown on Woocommerce pages, and pages with the template Woocommerce Sidebar.', 'gutenshop' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
		) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget (First)', 'gutenshop' ),
		'id'            => 'footer-widget-one',
		'description'   => esc_html__( 'Add widgets here.', 'gutenshop' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
		) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget (Second)', 'gutenshop' ),
		'id'            => 'footer-widget-two',
		'description'   => esc_html__( 'Add widgets here.', 'gutenshop' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
		) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget (Third)', 'gutenshop' ),
		'id'            => 'footer-widget-three',
		'description'   => esc_html__( 'Add widgets here.', 'gutenshop' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
		) );

}
add_action( 'widgets_init', 'guten_shop_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function guten_shop_scripts() {
	wp_enqueue_style( 'gutenshop-owl-slider-default', get_template_directory_uri() . '/css/owl.carousel.min.css' );
	wp_enqueue_style( 'gutenshop-owl-slider-theme', get_template_directory_uri() . '/css/owl.theme.default.css' );

	wp_enqueue_script( 'gutenshop-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_script( 'gutenshop-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_style( 'gutenshop-foundation', get_template_directory_uri() . '/css/foundation.css' );
	wp_enqueue_style( 'gutenshop-font', 'https://fonts.googleapis.com/css?family=Saira+Semi+Condensed:400,700' );
	wp_enqueue_style( 'gutenshop-dashicons', get_home_url() . '/wp-includes/css/dashicons.css' );

	wp_enqueue_script( 'gutenshop-foundation-js-jquery', get_template_directory_uri() . '/js/vendor/foundation.js', array('jquery'), '6', true );
	wp_enqueue_script( 'gutenshop-custom-js-jquery', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'gutenshop-owl-slider-js-jquery', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_style( 'gutenshop-style', get_stylesheet_uri() );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'guten_shop_scripts' );


/**
 *  Copyright and License for Upsell button by Justin Tadlock - 2016-2018 © Justin Tadlock. customizer button https://github.com/justintadlock/trt-customizer-pro
 */
require_once( trailingslashit( get_template_directory() ) . 'justinadlock-customizer-button/class-customize.php' );


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

/** 
 * gutenshop Get Custom Fonts 
 */
function guten_shop_load_google_fonts() {
	wp_enqueue_style( 'gutenshop-google-fonts', '//fonts.googleapis.com/css?family=Lato:400,300italic,700,700i|Source+Sans+Pro:400,400italic' ); 
}
add_action( 'wp_enqueue_scripts', 'guten_shop_load_google_fonts' );



/**
 * Compare page CSS
 */

function gutenshop_comparepage_css($hook) {
	if ( 'appearance_page_gutenshop-info' != $hook ) {
		return;
	}
	wp_enqueue_style( 'gutenshop-custom-style', get_template_directory_uri() . '/css/compare.css' );
}
add_action( 'admin_enqueue_scripts', 'gutenshop_comparepage_css' );

/**
 * Compare page content
 */

add_action('admin_menu', 'gutenshop_themepage');
function gutenshop_themepage(){
	$theme_info = add_theme_page( __('Gutenshop Info','gutenshop'), __('Gutenshop Info','gutenshop'), 'manage_options', 'gutenshop-info.php', 'gutenshop_info_page' );
}

function gutenshop_info_page() {
	$user = wp_get_current_user();
	?>
	<div class="wrap about-wrap gutenshop-add-css">
		<div>
			<h1>
				<?php echo esc_html_e('Welcome to Gutenshop!','gutenshop'); ?>
			</h1>

			<div class="feature-section three-col">
				<div class="col">
					<div class="widgets-holder-wrap">
						<h3><?php echo esc_html_e("Review Gutenshop", "gutenshop"); ?></h3>
						<p><?php echo esc_html_e("Nothing motivates us more than feedback, are you are enjoying Gutenshop? We would love to hear what you think!", "gutenshop"); ?></p>
						<p><a target="blank" href="<?php echo esc_url('https://wordpress.org/support/theme/gutenshop/reviews/', 'gutenshop'); ?>" class="button button-primary">
							<?php echo esc_html_e("Submit A Review", "gutenshop"); ?>
						</a></p>
					</div>
				</div>
				<div class="col">
					<div class="widgets-holder-wrap">
						<h3><?php echo esc_html_e("Contact Support", "gutenshop"); ?></h3>
						<p><?php echo esc_html_e("Our support stand ready every day  to help with Gutenshop theme related questions and issues.", "gutenshop"); ?></p>
						<p><a target="blank" href="<?php echo esc_url('https://superbthemes.com/customer-support/', 'gutenshop'); ?>" class="button button-primary">
							<?php echo esc_html_e("Contact Support", "gutenshop"); ?>
						</a></p>
					</div>
				</div>
				<div class="col">
					<div class="widgets-holder-wrap">
						<h3><?php echo esc_html_e("Premium Edition", "gutenshop"); ?></h3>
						<p><?php echo esc_html_e("If you enjoy Gutenshop and want to take your website to the next step, then check out our premium edition here.", "gutenshop"); ?></p>
						<p><a target="blank" href="<?php echo esc_url('https://superbthemes.com/gutenshop/', 'gutenshop'); ?>" class="button button-primary">
							<?php echo esc_html_e("Read More", "gutenshop"); ?>
						</a></p>
					</div>
				</div>
			</div>
		</div>
		<hr>

		<h2><?php echo esc_html_e("Free Vs Premium","gutenshop"); ?></h2>
		<div class="gutenshop-button-container">
			<a target="blank" href="<?php echo esc_url('https://superbthemes.com/gutenshop/', 'gutenshop'); ?>" class="button button-primary">
				<?php echo esc_html_e("Read Full Description", "gutenshop"); ?>
			</a>
			<a target="blank" href="<?php echo esc_url('https://superbthemes.com/demo/gutenshop/', 'gutenshop'); ?>" class="button button-primary">
				<?php echo esc_html_e("View Theme Demo", "gutenshop"); ?>
			</a>
		</div>


		<table class="wp-list-table widefat">
			<thead>
				<tr>
					<th><strong><?php echo esc_html_e("Theme Feature", "gutenshop"); ?></strong></th>
					<th><strong><?php echo esc_html_e("Basic Version", "gutenshop"); ?></strong></th>
					<th><strong><?php echo esc_html_e("Premium Version", "gutenshop"); ?></strong></th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td><?php echo esc_html_e("Hide Featured Images On Blog Posts", "gutenshop"); ?></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo esc_html_e("Custom Navigation Logo & Title/Tagline", "gutenshop"); ?></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo esc_html_e("Hide Navigation Title and/or Tagline	", "gutenshop"); ?></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo esc_html_e("Hide Navigation Completely	", "gutenshop"); ?></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo esc_html_e("Hide Shopping Cart From Menu", "gutenshop"); ?></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo esc_html_e("Fullwidth Page Template	", "gutenshop"); ?></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo esc_html_e("Landing Page Template	", "gutenshop"); ?></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo esc_html_e("Header & Footer Menu	", "gutenshop"); ?></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo esc_html_e("Sidebar & Footer Widgets	", "gutenshop"); ?></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo esc_html_e("Hide Navigation Completely", "gutenshop"); ?></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
				</tr>

				<tr>
					<td><?php echo esc_html_e("Premium Support", "gutenshop"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo esc_html_e("No", "gutenshop"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo esc_html_e("Fully SEO Optimized	", "gutenshop"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo esc_html_e("No", "gutenshop"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo esc_html("Share buttons for: Facebook, Twitter, LinkedIn, Pinterest, WhatsApp", "gutenshop"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo esc_html("No", "gutenshop"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html("Yes", "gutenshop"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo esc_html("Hide/Show Share Buttons on: Pages, Products, Posts", "gutenshop"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo esc_html("No", "gutenshop"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html("Yes", "gutenshop"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo esc_html("Hide Share Buttons Individually", "gutenshop"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo esc_html("No", "gutenshop"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html("Yes", "gutenshop"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo esc_html_e("Easy Google Fonts	", "gutenshop"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo esc_html_e("No", "gutenshop"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo esc_html_e("Header Content Slideshow	", "gutenshop"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo esc_html_e("No", "gutenshop"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo esc_html_e("Header Image Slideshow	", "gutenshop"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo esc_html_e("No", "gutenshop"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo esc_html_e("Align Slideshow Content Left/Center/Right", "gutenshop"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo esc_html_e("No", "gutenshop"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo esc_html_e("Only Show Slideshow On Front Page", "gutenshop"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo esc_html_e("No", "gutenshop"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo esc_html_e("Show Slideshow Everywhere", "gutenshop"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo esc_html_e("No", "gutenshop"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo esc_html_e("Hide Slideshow Top Border", "gutenshop"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo esc_html_e("No", "gutenshop"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo esc_html_e("Custom Slideshow Colors", "gutenshop"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo esc_html_e("No", "gutenshop"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo esc_html_e("Custom Slideshow Title, Tagline & Button", "gutenshop"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo esc_html_e("No", "gutenshop"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo esc_html_e("Remove the Related Products Section on Product Pages", "gutenshop"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo esc_html_e("No", "gutenshop"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo esc_html_e("Hide About The Author Section On Posts", "gutenshop"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo esc_html_e("No", "gutenshop"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo esc_html_e("Hide Sidebar On Posts", "gutenshop"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo esc_html_e("No", "gutenshop"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo esc_html_e("Hide Sidebar On Pages", "gutenshop"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo esc_html_e("No", "gutenshop"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo esc_html_e("Hide Top Borders On Pages", "gutenshop"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo esc_html_e("No", "gutenshop"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo esc_html_e("Hide Sidebar On Blog Feed", "gutenshop"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo esc_html_e("No", "gutenshop"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo esc_html_e("Hide Add To Cart Button from Product Overviews", "gutenshop"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo esc_html_e("No", "gutenshop"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo esc_html_e("Hide Sidebar On Woocommerce Product Pages", "gutenshop"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo esc_html_e("No", "gutenshop"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo esc_html_e("Custom Footer Copyright Text", "gutenshop"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo esc_html_e("No", "gutenshop"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo esc_html_e("Custom Navigation Colors", "gutenshop"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo esc_html_e("No", "gutenshop"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo esc_html_e("Custom Post & Page Colors", "gutenshop"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo esc_html_e("No", "gutenshop"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo esc_html_e("Custom Sidebar Colors", "gutenshop"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo esc_html_e("No", "gutenshop"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo esc_html_e("Custom Blog Feed Colors", "gutenshop"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo esc_html_e("No", "gutenshop"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo esc_html_e("Custom Footer Colors", "gutenshop"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo esc_html_e("No", "gutenshop"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo esc_html_e("Contact Form 7 Integration", "gutenshop"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo esc_html_e("No", "gutenshop"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
				</tr>

				<tr>
					<td><?php echo esc_html_e("Instagram Feed", "gutenshop"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo esc_html_e("No", "gutenshop"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo esc_html_e("Recent Posts Extended	", "gutenshop"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo esc_html_e("No", "gutenshop"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo esc_html_e("Child Themes", "gutenshop"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo esc_html_e("No", "gutenshop"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo esc_html_e("SEO Plugins", "gutenshop"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo esc_html_e("No", "gutenshop"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
				</tr>
				<tr>
					<td><?php echo esc_html_e("Importable Demo Content", "gutenshop"); ?></td>
					<td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo esc_html_e("No", "gutenshop"); ?>" /></span></td>
					<td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo esc_html_e("Yes", "gutenshop"); ?>" /></span></td>
				</tr>
			</tbody>
		</table>

		<div class="gutenshop-button-container">
			<a target="blank" href="<?php echo esc_url('https://superbthemes.com/gutenshop/', 'gutenshop'); ?>" class="button button-primary">
				<?php echo esc_html_e("GO PREMIUM", "gutenshop"); ?>
			</a>
		</div>

	</div>
	<?php
}




/**
 * @package    TGM-Plugin-Activation
 * @subpackage Gutenshop
 * @version    2.6.1 for parent theme Gutenshop for publication on WordPress.org
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

require_once get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'guten_shop_register_required_plugins' );


function guten_shop_register_required_plugins() {
	$plugins = array(
		array(
			'name'      => 'Woocommerce',
			'slug'      => 'woocommerce',
			'required'  => false,
			),
		array(
			'name'      => 'Superb Helper',
			'slug'      => 'superb-helper',
			'required'  => false,
			),
		array(
			'name'      => 'Woocommerce Gutenberg Blocks',
			'slug'      => 'woo-gutenberg-products-block',
			'required'  => false,
			),
		);

	$config = array(
		'id'           => 'gutenshop',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
		);
	tgmpa( $plugins, $config );
}





add_action( 'woocommerce_before_single_product', 'move_variations_single_price', 1 );
function move_variations_single_price(){
	global $product, $post;

	if ( $product->is_type( 'variable' ) ) {
        // removing the variations price for variable products
		remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );

        // Change location and inserting back the variations price
		add_action( 'woocommerce_single_product_summary', 'gutenshop_replace_variation_single_price', 10 );
	}
}

function gutenshop_replace_variation_single_price(){
	global $product;

    // Main Price
	$prices = array( $product->get_variation_price( 'min', true ), $product->get_variation_price( 'max', true ) );
	$price = $prices[0] !== $prices[1] ? sprintf( __( '%1$s', 'woocommerce' ), wc_price( $prices[0] ) ) : wc_price( $prices[0] );

    // Sale Price
	$prices = array( $product->get_variation_regular_price( 'min', true ), $product->get_variation_regular_price( 'max', true ) );
	sort( $prices );
	$saleprice = $prices[0] !== $prices[1] ? sprintf( __( '%1$s', 'woocommerce' ), wc_price( $prices[0] ) ) : wc_price( $prices[0] );

	if ( $price !== $saleprice && $product->is_on_sale() ) {
		$price = '<del>' . $saleprice . $product->get_price_suffix() . '</del> <ins>' . $price . $product->get_price_suffix() . '</ins>';
	}

	?>
	<style>
	div.woocommerce-variation-price,
	div.woocommerce-variation-availability,
	div.hidden-variable-price {
		height: 0px !important;
		overflow:hidden;
		position:relative;
		line-height: 0px !important;
		font-size: 0% !important;
	}
	</style>
	<script>
	jQuery(document).ready(function($) {
		$('select').blur( function(){
			if( '' != $('input.variation_id').val() ){
				if($('p.availability'))
					$('p.availability').remove();
				$('p.price').html($('div.woocommerce-variation-price > span.price').html()).append('<p class="availability">'+$('div.woocommerce-variation-availability').html()+'</p>');
				console.log($('input.variation_id').val());
			} else {
				$('p.price').html($('div.hidden-variable-price').html());
				if($('p.availability'))
					$('p.availability').remove();
				console.log('NULL');
			}
		});
	});
	</script>
	<?php

	echo '<p class="price">'.$price.'</p>
	<div class="hidden-variable-price" >'.$price.'</div>';
}
