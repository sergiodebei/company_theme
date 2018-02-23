<?php
/**
 * Fresh Theme functions and definitions.
 * @package Fresh Theme
 */

if ( ! function_exists( 'cygnific_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function cygnific_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on L\'Oréal Brands, use a find and replace
	 * to change 'cygnific' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'cygnific', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'cygnific' ),
	) );
	register_nav_menus( array(
		'secondary' => esc_html__( 'Secondary', 'cygnific' ),
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
	add_theme_support( 'custom-background', apply_filters( 'cygnific_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'cygnific_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cygnific_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'cygnific' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'cygnific' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'cygnific_widgets_init' );

// This theme uses wp_nav_menu() in one location.
register_nav_menus( array(
	'primary' => esc_html__( 'Primary', 'cygnific' )
) );

function change_submenu_class($menu) {  
  $menu = preg_replace('/ class="sub-menu"/','/ class="hidden" /',$menu);  
  return $menu;  
}  
add_filter('wp_nav_menu','change_submenu_class');  

// function add_menuclass($ulclass) {
//   return preg_replace('/<a /', '<a class="dropdown"', $ulclass, 2);
// }
// add_filter('wp_nav_menu','add_menuclass');

/**
 * Enqueue scripts and styles.
 */

function cygnific_scripts() {

	wp_enqueue_style( 'cygnific-magnific-popup-style', get_template_directory_uri(). '/css/css_vendor/magnific-popup.css');
	// wp_enqueue_style( 'cygnific-lightslider-style', get_template_directory_uri(). '/css/css_vendor/lightslider.min.css');
	wp_enqueue_style( 'cygnific-unslider-style', get_template_directory_uri(). '/css/css_vendor/unslider.css');
	wp_enqueue_style( 'cygnific-style', get_stylesheet_uri() );

	// name-of-the-script, url-of-the-script, array-of-script-the-script-depends-on, script-version-number, if-the-script-needs-to-be-placed-before-the-end-of-the-body

	wp_enqueue_script( 'cygnific-jquery', get_template_directory_uri() . '/js/js_vendor/jquery-1.11.2.min.js', array(), '', '' );
	wp_enqueue_script( 'cygnific-magnific-popup', get_template_directory_uri() . '/js/js_vendor/jquery.magnific-popup.js', array(), '', '' );
	// wp_enqueue_script( 'cygnific-lightslider', get_template_directory_uri() . '/js/js_vendor/lightslider.min.js', array(), '', '' );
	wp_enqueue_script( 'cygnific-unslider', get_template_directory_uri() . '/js/js_vendor/unslider-min.js', array(), '', '' );
	wp_enqueue_script( 'cygnific-main', get_template_directory_uri() . '/js/main.js', array(), '', true );

	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
add_action( 'wp_enqueue_scripts', 'cygnific_scripts' );

// function add_class_to_the_last($items) {
// 	print_r($items[count($items)]);
// 	$items[count($items)]->classes[] = 'button button_blue';
//     $items[count($items)]->attr_title = 'button button_blue';
//     return $items;
// }
// add_filter('wp_nav_menu_objects', 'add_class_to_the_last');

/* -----------------------------------------
 * Put excerpt meta-box after editor
 * ----------------------------------------- */

function jb_post_excerpt_meta_box($post) {
    remove_meta_box( 'postexcerpt' , $post->post_type , 'normal' );  ?>
    <div class="postbox" style="margin-bottom: 0;">
        <h3 class="hndle"><span>Excerpt</span></h3>
        <div class="inside">
             <label class="screen-reader-text" for="excerpt"><?php _e('Excerpt') ?></label>
             <textarea rows="1" cols="40" name="excerpt" id="excerpt">
                  <?php echo $post->post_excerpt; ?>
             </textarea>
        </div>
    </div>
<?php }

add_action('edit_form_after_title', 'my_post_excerpt_meta_box');


/**
 * Get first paragraph from a WordPress post. Use inside the Loop.
 *
 * @return string
 */
function get_first_paragraph(){
	global $post;
	
	$str = wpautop( get_the_content() );
	$str = substr( $str, 0, strpos( $str, '</p>' ) + 4 );
	$str = strip_tags($str, '<a><strong><em>');
	return '<p>' . $str . '</p>';
}

require get_template_directory().'/inc/ajax.php';

//Page Slug Body Class
function add_slug_body_class( $classes ) {
global $post;
if ( isset( $post ) ) {
$classes[] = $post->post_type . '-' . $post->post_name;
}
return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );


// function excludePages($query) {
// 	if ($query->is_search) {
// 		$query->set('post_type', array( 'post', 'page' ));
// 	}
// 	return $query; 
// }
 
// add_filter('pre_get_posts','excludePages');

// Extend WordPress search to include custom fields
 
function cf_search_join( $join ) {
    global $wpdb;

    if ( is_search() ) {    
        $join .=' LEFT JOIN '.$wpdb->postmeta. ' ON '. $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
    }

    return $join;
}
add_filter('posts_join', 'cf_search_join' );

// Modify the search query with posts_where

function cf_search_where( $where ) {
    global $pagenow, $wpdb;

    if ( is_search() ) {
        $where = preg_replace(
            "/\(\s*".$wpdb->posts.".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
            "(".$wpdb->posts.".post_title LIKE $1) OR (".$wpdb->postmeta.".meta_value LIKE $1)", $where );
    }

    return $where;
}
add_filter( 'posts_where', 'cf_search_where' );

// Prevent duplicates

function cf_search_distinct( $where ) {
    global $wpdb;

    if ( is_search() ) {
        return "DISTINCT";
    }

    return $where;
}
add_filter( 'posts_distinct', 'cf_search_distinct' );
add_filter( 'gform_confirmation_anchor', '__return_true' );