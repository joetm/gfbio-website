<?php
/**
 * Twenty Sixteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

// The style is stored in a custom location.
// Enqueue it here.
function inject_stylesheet() {
	$version = time(); // development
	wp_enqueue_style('gfbio-style', "/styles.css", [], $version, 'all');
	wp_enqueue_style('gfbio-style-print', "/print.css",  [], $version, 'print');
}
add_action('wp_enqueue_scripts', 'inject_stylesheet');

// remove the emoji code
function disable_wp_emojicons() {
  // all actions related to emojis
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
  // filter to remove TinyMCE emojis
  // add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
}
add_action('init', 'disable_wp_emojicons');

// remove the <link rel='https://api.w.org/' href='http://mydomain.com/wp-json/' /> in the header
remove_action('wp_head', 'rest_output_link_wp_head', 10);
// remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);

/* remove the dns prefetch code */
// remove_action('wp_head', 'dns-prefetch');
function remove_dns_prefetch( $hints, $relation_type ) {
    if ('dns-prefetch' === $relation_type) {
        return array_diff(wp_dependencies_unique_hosts(), $hints);
    }
    return $hints;
}
add_filter('wp_resource_hints', 'remove_dns_prefetch', 10, 2);

// remove the wp-embed.min.js in the footer
function disable_embeds_init() {
    // Remove the REST API endpoint.
    remove_action('rest_api_init', 'wp_oembed_register_route');
    // Turn off oEmbed auto discovery.
    // Don't filter oEmbed results.
    remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
    // Remove oEmbed discovery links.
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    // Remove oEmbed-specific JavaScript from the front-end and back-end.
    remove_action('wp_head', 'wp_oembed_add_host_js');
}
add_action('init', 'disable_embeds_init', 9999);

// disable REST API
add_filter('rest_enabled', '_return_false');
add_filter('rest_jsonp_enabled', '_return_false');

//nuke the stupid admin bar on the frontend
function off_admin_bar(){return false;}
add_filter('show_admin_bar','off_admin_bar');

//prevent akismet from injecting a javascript on EVERY page
// add_action('wp_print_scripts', 'my_deregister_scripts', 100);
// function my_deregister_scripts() {
// 	wp_deregister_script('akismet-form');
// 	if (is_page('submit') || is_page('screenshot-upload')) {
// 		wp_register_script( 'akismet-form', '/akismet-form.js');
//         //wp_enqueue_script( 'my-akismet-script', '/akismet-form.js', array('jquery','akismet-form'));
// 	}
// }

// is_admin variable
// $is_admin = false;
// if(function_exists('is_admin') && is_admin()) $is_admin = true;

// don't add <p> tags to content
remove_filter ('the_content',  'wpautop');
// don't add <p> tags to comments
remove_filter ('comment_text', 'wpautop');

// enable thumbnails in theme
// if (function_exists('add_theme_support')) {
//     add_theme_support('post-thumbnails');
// }

//remove pingback header
function remove_x_pingback($headers) {
    unset($headers['X-Pingback']);
    return $headers;
}
add_filter('wp_headers', 'remove_x_pingback');

// remove shortlink meta tag
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

//http://www.narga.net/how-to-remove-or-disable-comment-reply-js-and-recentcomments-from-wordpress-header
function twentyten_remove_recent_comments_style() {  
        global $wp_widget_factory;  
        remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );  
    }  
add_action('widgets_init', 'twentyten_remove_recent_comments_style');

/**
 * Remove traces of the site being wordpress by exchanging javascript files
 */
function remove_header_links() {
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'feed_links', 2); //removes feed links.
	remove_action('wp_head', 'feed_links_extra', 3);  //removes comments feed. 
	// remove_action('wp_head', 'wp_shortlink_wp_head'); //removes shortlink.
// 	use newest jquery
// 	if(!is_admin()){
// 	   wp_deregister_script('jquery');
// 	   wp_register_script('jquery', "http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js", false, '');
// 	   wp_enqueue_script('jquery');
// 	}
// 	exchange the postratings.js without editing the plugin
}
add_action('init', 'remove_header_links');


/*Removes prev and next links*/
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');


// filter posts being tagged with a single tag
// add_action('get_header', 'block_singletag');
// 	function singletag_wordpress_groupby($groupby)
// 	{
// 		if(empty($groupby)) $groupby = "wp_posts.ID";
// 		return $groupby . "
// 					HAVING COUNT( tag_terms.term_id ) <> 1
// 					OR MAX( tag_terms.term_id ) <> 1122 ";
// 	}
// 	function singletag_wordpress_join($join)
// 	{
// 		return $join . " INNER JOIN wp_term_relationships AS tag_term_relationships ON (wp_posts.ID = tag_term_relationships.object_id)
// 			INNER JOIN wp_term_taxonomy AS tag_term_taxonomy ON (tag_term_relationships.term_taxonomy_id = tag_term_taxonomy.term_taxonomy_id AND tag_term_taxonomy.taxonomy = 'post_tag')
// 			INNER JOIN wp_terms AS tag_terms ON (tag_term_taxonomy.term_id = tag_terms.term_id) ";
// 	}

// function block_singletag()
// {
// 	if(is_home() || is_tag() || (is_single() && !is_page(22552)) || (!is_page(22552) && !has_tag(array('articles','videos')))) //not submission queue or article
// 	{
// 		//exclude the single tag from showing up
// 		//$includetags = array(107,1127,1140,1141,932,3,1151,1143,1139,1142,1316,1138,950);
// 		$excludetags = array(599,1122);

// 		//posts_groupby hook to remove single tag posts
// 		//full query:
// 		//SELECT SQL_CALC_FOUND_ROWS wp_posts.* FROM wp_posts
// 		//		INNER JOIN wp_term_relationships AS tag_term_relationships ON (wp_posts.ID = tag_term_relationships.object_id)
// 		//		INNER JOIN wp_term_taxonomy AS tag_term_taxonomy ON (tag_term_relationships.term_taxonomy_id = tag_term_taxonomy.term_taxonomy_id AND tag_term_taxonomy.taxonomy = 'post_tag')
// 		//		INNER JOIN wp_terms AS tag_terms ON (tag_term_taxonomy.term_id = tag_terms.term_id)
// 		//WHERE 1=1 AND wp_posts.post_type = 'post' AND (wp_posts.post_status = 'publish') GROUP BY wp_posts.ID HAVING COUNT( tag_terms.term_id ) <> 1 OR MAX( tag_terms.term_id ) <> 1122 ORDER BY wp_posts.post_date DESC LIMIT 0, 10

// 		//1: add join tags into query (to receive the above query)
// 		add_filter('posts_join', 'singletag_wordpress_join', 10);

// 		//2: exclusion of single tag
// 		add_filter('posts_groupby', 'singletag_wordpress_groupby', 10);
// 	}
// }

/* Remove injected jquery-migrate.min.js
 * See:
 * @package   DequeueJqueryMigrate
 * @author    Brady Vercher
 * @link      http://www.cedaro.com/
 * @copyright Copyright (c) 2015 Cedaro, LLC
 * @license   GPL-2.0+
 */
function dequeue_jquery_migrate( $scripts ) {
	if (!is_admin() && !empty($scripts->registered['jquery'])) {
		$jquery_dependencies = $scripts->registered['jquery']->deps;
		$scripts->registered['jquery']->deps = array_diff($jquery_dependencies, array('jquery-migrate'));
	}
}
add_action('wp_default_scripts', 'dequeue_jquery_migrate');







/** DEFAULT functions.php of TwentySixteen **/

/**
 * Twenty Sixteen only works in WordPress 4.4 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.4-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'twentysixteen_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * Create your own twentysixteen_setup() function to override in a child theme.
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentysixteen
	 * If you're building a theme based on Twenty Sixteen, use a find and replace
	 * to change 'twentysixteen' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'twentysixteen' );

	// Add default posts and comments RSS feed links to head.
	// add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for custom logo.
	 *
	 *  @since Twenty Sixteen 1.2
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 9999 );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'twentysixteen' ),
		'social'  => __( 'Social Links Menu', 'twentysixteen' ),
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

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
	) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', twentysixteen_fonts_url() ) );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif; // twentysixteen_setup
add_action( 'after_setup_theme', 'twentysixteen_setup' );

/**
 * Sets the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'twentysixteen_content_width', 840 );
}
add_action( 'after_setup_theme', 'twentysixteen_content_width', 0 );

/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'twentysixteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom 1', 'twentysixteen' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom 2', 'twentysixteen' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'twentysixteen_widgets_init' );

if ( ! function_exists( 'twentysixteen_fonts_url' ) ) :
/**
 * Register Google fonts for Twenty Sixteen.
 *
 * Create your own twentysixteen_fonts_url() function to override in a child theme.
 *
 * @since Twenty Sixteen 1.0
 *
 * @return string Google fonts URL for the theme.
 */
function twentysixteen_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/* translators: If there are characters in your language that are not supported by Merriweather, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Merriweather font: on or off', 'twentysixteen' ) ) {
		$fonts[] = 'Merriweather:400,700,900,400italic,700italic,900italic';
	}

	/* translators: If there are characters in your language that are not supported by Montserrat, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Montserrat font: on or off', 'twentysixteen' ) ) {
		$fonts[] = 'Montserrat:400,700';
	}

	/* translators: If there are characters in your language that are not supported by Inconsolata, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'twentysixteen' ) ) {
		$fonts[] = 'Inconsolata:400';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_javascript_detection() {
	echo "<script type=\"text/javascript\">(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action('wp_head', 'twentysixteen_javascript_detection', 0);

/**
 * Disable Genericons style enqueue
 */
// function wp_genericons_dequeue_style()
// {
// 	wp_dequeue_style('genericons');
// }
// add_action('wp_enqueue_scripts', 'wp_genericons_dequeue_style', 20);

/**
 * Enqueues scripts and styles.
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'twentysixteen-fonts', twentysixteen_fonts_url(), array(), null);

	// Add Genericons, used in the main stylesheet.
	// wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.4.1');

	// Theme stylesheet.
	// wp_enqueue_style( 'twentysixteen-style', get_stylesheet_uri());

	// Load the Internet Explorer specific stylesheet.
		// wp_enqueue_style( 'twentysixteen-ie', get_template_directory_uri() . '/css/ie.css', array( 'twentysixteen-style' ), '20160816');
		// wp_style_add_data( 'twentysixteen-ie', 'conditional', 'lt IE 10' );

	// Load the Internet Explorer 8 specific stylesheet.
		// wp_enqueue_style( 'twentysixteen-ie8', get_template_directory_uri() . '/css/ie8.css', array( 'twentysixteen-style' ), '20160816' );
		// wp_style_add_data( 'twentysixteen-ie8', 'conditional', 'lt IE 9' );

	// Load the Internet Explorer 7 specific stylesheet.
		// wp_enqueue_style( 'twentysixteen-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'twentysixteen-style' ), '20160816' );
		// wp_style_add_data( 'twentysixteen-ie7', 'conditional', 'lt IE 8' );

	// Load the html5 shiv.
	// wp_enqueue_script( 'twentysixteen-html5', get_template_directory_uri() . '/js/html5.js', array(), '3.7.3' );
	// wp_script_add_data( 'twentysixteen-html5', 'conditional', 'lt IE 9' );

	// wp_enqueue_script( 'twentysixteen-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20160816', true );

	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }

	// if ( is_singular() && wp_attachment_is_image() ) {
	// 	wp_enqueue_script( 'twentysixteen-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20160816' );
	// }

	// wp_enqueue_script( 'twentysixteen-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20160816', true );

	// wp_localize_script( 'twentysixteen-script', 'screenReaderText', array(
	// 	'expand'   => __( 'expand child menu', 'twentysixteen' ),
	// 	'collapse' => __( 'collapse child menu', 'twentysixteen' ),
	// ) );
}
add_action('wp_enqueue_scripts', 'twentysixteen_scripts');

/**
 * Adds custom classes to the array of body classes.
 *
 * @since Twenty Sixteen 1.0
 *
 * @param array $classes Classes for the body element.
 * @return array (Maybe) filtered body classes.
 */
// function twentysixteen_body_classes( $classes ) {
// 	// Adds a class of custom-background-image to sites with a custom background image.
// 	if ( get_background_image() ) {
// 		$classes[] = 'custom-background-image';
// 	}

// 	// Adds a class of group-blog to sites with more than 1 published author.
// 	if ( is_multi_author() ) {
// 		$classes[] = 'group-blog';
// 	}

// 	// Adds a class of no-sidebar to sites without active sidebar.
// 	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
// 		$classes[] = 'no-sidebar';
// 	}

// 	// Adds a class of hfeed to non-singular pages.
// 	if ( ! is_singular() ) {
// 		$classes[] = 'hfeed';
// 	}

// 	return $classes;
// }
// add_filter( 'body_class', 'twentysixteen_body_classes' );

/**
 * Converts a HEX value to RGB.
 *
 * @since Twenty Sixteen 1.0
 *
 * @param string $color The original color, in 3- or 6-digit hexadecimal form.
 * @return array Array containing RGB (red, green, and blue) values for the given
 *               HEX code, empty array otherwise.
 */
// function twentysixteen_hex2rgb( $color ) {
// 	$color = trim( $color, '#' );

// 	if ( strlen( $color ) === 3 ) {
// 		$r = hexdec( substr( $color, 0, 1 ).substr( $color, 0, 1 ) );
// 		$g = hexdec( substr( $color, 1, 1 ).substr( $color, 1, 1 ) );
// 		$b = hexdec( substr( $color, 2, 1 ).substr( $color, 2, 1 ) );
// 	} else if ( strlen( $color ) === 6 ) {
// 		$r = hexdec( substr( $color, 0, 2 ) );
// 		$g = hexdec( substr( $color, 2, 2 ) );
// 		$b = hexdec( substr( $color, 4, 2 ) );
// 	} else {
// 		return array();
// 	}

// 	return array( 'red' => $r, 'green' => $g, 'blue' => $b );
// }

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images
 *
 * @since Twenty Sixteen 1.0
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function twentysixteen_content_image_sizes_attr( $sizes, $size ) {
	$width = $size[0];

	840 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px';

	if ( 'page' === get_post_type() ) {
		840 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
	} else {
		840 > $width && 600 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 61vw, (max-width: 1362px) 45vw, 600px';
		600 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
	}

	return $sizes;
}
add_filter('wp_calculate_image_sizes', 'twentysixteen_content_image_sizes_attr', 10 , 2);

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails
 *
 * @since Twenty Sixteen 1.0
 *
 * @param array $attr Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size Registered image size or flat array of height and width dimensions.
 * @return string A source size value for use in a post thumbnail 'sizes' attribute.
 */
function twentysixteen_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
	if ( 'post-thumbnail' === $size ) {
		is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 60vw, (max-width: 1362px) 62vw, 840px';
		! is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px';
	}
	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'twentysixteen_post_thumbnail_sizes_attr', 10 , 3 );

/**
 * Modifies tag cloud widget arguments to have all tags in the widget same font size.
 *
 * @since Twenty Sixteen 1.1
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array A new modified arguments.
 */
// function twentysixteen_widget_tag_cloud_args( $args ) {
// 	$args['largest'] = 1;
// 	$args['smallest'] = 1;
// 	$args['unit'] = 'em';
// 	return $args;
// }
// add_filter( 'widget_tag_cloud_args', 'twentysixteen_widget_tag_cloud_args' );
