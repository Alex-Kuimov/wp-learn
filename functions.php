<?php
/**
 * learn functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package learn
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'learn_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function learn_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on learn, use a find and replace
		 * to change 'learn' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'learn', get_template_directory() . '/languages' );

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
				'menu-header' => esc_html__( 'header', 'learn' ),
				'menu-footer' => esc_html__( 'footer', 'learn' ),
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
				'learn_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'learn_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function learn_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'learn_content_width', 640 );
}
add_action( 'after_setup_theme', 'learn_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function learn_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'learn' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'learn' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'learn_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function learn_scripts() {
	wp_enqueue_style( 'learn-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'learn-style', 'rtl', 'replace' );

	wp_enqueue_script( 'learn-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'learn_scripts' );


/**
 * Enqueue scripts and styles.
 */
function load_frondend() {
	// css
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), _S_VERSION );
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/style.css', array(), _S_VERSION );
	wp_enqueue_style( 'swiper', get_template_directory_uri() . '/assets/css/swiper.css', array(), _S_VERSION );
	wp_enqueue_style( 'dark', get_template_directory_uri() . '/assets/css/dark.css', array(), _S_VERSION );
	wp_enqueue_style( 'font-icons', get_template_directory_uri() . '/assets/css/font-icons.css', array(), _S_VERSION );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css', array(), _S_VERSION );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/responsive.css', array(), _S_VERSION );

	//js
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/assets/js/swiper.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'carousel', get_template_directory_uri() . '/assets/js/owl.carousel.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'superfish', get_template_directory_uri() . '/assets/js/superfish.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'jRespond', get_template_directory_uri() . '/assets/js/jRespond.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'cookie', get_template_directory_uri() . '/assets/js/js.cookie.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'jquery-plugin', get_template_directory_uri() . '/assets/js/jquery.plugin.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'countTo', get_template_directory_uri() . '/assets/js/jquery.countTo.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'animsition', get_template_directory_uri() . '/assets/js/animsition.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), _S_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'load_frondend' );


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
 * ACF Fields
 */

require get_template_directory() . '/inc/acf-fields.php';

/**
 * Footer
 */
require get_template_directory() . '/inc/site-footer.php';

/**
 * Class Singleton
 */
require get_template_directory() . '/inc/classes/patterns/class-singleton.php';

/**
 * Class Template
 */
require get_template_directory() . '/inc/classes/class-template.php';

/**
 * Class Header
 */
require get_template_directory() . '/inc/classes/class-header.php';

/**
 * Class Front Page
 */
require get_template_directory() . '/inc/classes/class-front-page.php';

/*
class Test01 {

	private string $var;

	public function set( string $var = '' ) {
		if( $var ) {
			$this->var = $var;
		}

		$this->var = $var;
	}

	public function get():string {

		if( ! empty( $this->var ) ) {
			return $this->var;
		}

		return '';
	}
}

$test = new Test01();
$test->set('test');
$test->get();
*/
