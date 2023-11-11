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
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @link https://developer.wordpress.org/themes/advanced-topics/child-themes/
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://developer.wordpress.org/plugins/}
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

/**
 * Twenty Sixteen only works in WordPress 4.4 or later.
 */
if (version_compare($GLOBALS['wp_version'], '4.4-alpha', '<')) {
	require get_template_directory() . '/inc/back-compat.php';
}

if (!function_exists('twentysixteen_setup')):
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
	function twentysixteen_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentysixteen
		 * If you're building a theme based on Twenty Sixteen, use a find and replace
		 * to change 'twentysixteen' to the name of your theme in all the template files
		 */
		load_theme_textdomain('twentysixteen');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for custom logo.
		 *
		 *  @since Twenty Sixteen 1.2
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height' => 240,
				'width' => 240,
				'flex-height' => true,
			)
		);

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/reference/functions/add_theme_support/#post-thumbnails
		 */
		add_theme_support('post-thumbnails');
		set_post_thumbnail_size(1200, 9999);

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'primary' => __('Primary Menu', 'twentysixteen'),
				'social' => __('Social Links Menu', 'twentysixteen'),
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
				'script',
				'style',
				'navigation-widgets',
			)
		);

		/*
		 * Enable support for Post Formats.
		 *
		 * See: https://wordpress.org/documentation/article/post-formats/
		 */
		add_theme_support(
			'post-formats',
			array(
				'aside',
				'image',
				'video',
				'quote',
				'link',
				'gallery',
				'status',
				'audio',
				'chat',
			)
		);

		/*
		 * This theme styles the visual editor to resemble the theme style,
		 * specifically font, colors, icons, and column width. When fonts are
		 * self-hosted, the theme directory needs to be removed first.
		 */
		$font_stylesheet = str_replace(
			array(get_template_directory_uri() . '/', get_stylesheet_directory_uri() . '/'),
			'',
			twentysixteen_fonts_url()
		);
		add_editor_style(array('css/editor-style.css', $font_stylesheet));

		// Load regular editor styles into the new block-based editor.
		add_theme_support('editor-styles');

		// Load default block styles.
		add_theme_support('wp-block-styles');

		// Add support for responsive embeds.
		add_theme_support('responsive-embeds');

		// Add support for custom color scheme.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name' => __('Dark Gray', 'twentysixteen'),
					'slug' => 'dark-gray',
					'color' => '#1a1a1a',
				),
				array(
					'name' => __('Medium Gray', 'twentysixteen'),
					'slug' => 'medium-gray',
					'color' => '#686868',
				),
				array(
					'name' => __('Light Gray', 'twentysixteen'),
					'slug' => 'light-gray',
					'color' => '#e5e5e5',
				),
				array(
					'name' => __('White', 'twentysixteen'),
					'slug' => 'white',
					'color' => '#fff',
				),
				array(
					'name' => __('Blue Gray', 'twentysixteen'),
					'slug' => 'blue-gray',
					'color' => '#4d545c',
				),
				array(
					'name' => __('Bright Blue', 'twentysixteen'),
					'slug' => 'bright-blue',
					'color' => '#007acc',
				),
				array(
					'name' => __('Light Blue', 'twentysixteen'),
					'slug' => 'light-blue',
					'color' => '#9adffd',
				),
				array(
					'name' => __('Dark Brown', 'twentysixteen'),
					'slug' => 'dark-brown',
					'color' => '#402b30',
				),
				array(
					'name' => __('Medium Brown', 'twentysixteen'),
					'slug' => 'medium-brown',
					'color' => '#774e24',
				),
				array(
					'name' => __('Dark Red', 'twentysixteen'),
					'slug' => 'dark-red',
					'color' => '#640c1f',
				),
				array(
					'name' => __('Bright Red', 'twentysixteen'),
					'slug' => 'bright-red',
					'color' => '#ff675f',
				),
				array(
					'name' => __('Yellow', 'twentysixteen'),
					'slug' => 'yellow',
					'color' => '#ffef8e',
				),
			)
		);

		// Indicate widget sidebars can use selective refresh in the Customizer.
		add_theme_support('customize-selective-refresh-widgets');

		// Add support for custom line height controls.
		add_theme_support('custom-line-height');
	}
endif; // twentysixteen_setup()
add_action('after_setup_theme', 'twentysixteen_setup');

/**
 * Sets the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_content_width()
{
	$GLOBALS['content_width'] = apply_filters('twentysixteen_content_width', 840);
}
add_action('after_setup_theme', 'twentysixteen_content_width', 0);

/**
 * Add preconnect for Google Fonts.
 *
 * @since Twenty Sixteen 1.6
 * @deprecated Twenty Sixteen 2.9 Disabled filter because, by default, fonts are self-hosted.
 *
 * @param array  $urls          URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed.
 * @return array URLs to print for resource hints.
 */
function twentysixteen_resource_hints($urls, $relation_type)
{
	if (wp_style_is('twentysixteen-fonts', 'queue') && 'preconnect' === $relation_type) {
		$urls[] = array(
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		);
	}

	return $urls;
}
// add_filter( 'wp_resource_hints', 'twentysixteen_resource_hints', 10, 2 );

/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_widgets_init()
{
	register_sidebar(
		array(
			'name' => __('Sidebar', 'twentysixteen'),
			'id' => 'sidebar-1',
			'description' => __('Add widgets here to appear in your sidebar.', 'twentysixteen'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name' => __('Content Bottom 1', 'twentysixteen'),
			'id' => 'sidebar-2',
			'description' => __('Appears at the bottom of the content on posts and pages.', 'twentysixteen'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name' => __('Content Bottom 2', 'twentysixteen'),
			'id' => 'sidebar-3',
			'description' => __('Appears at the bottom of the content on posts and pages.', 'twentysixteen'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		)
	);
}
add_action('widgets_init', 'twentysixteen_widgets_init');

if (!function_exists('twentysixteen_fonts_url')):
	/**
	 * Register fonts for Twenty Sixteen.
	 *
	 * Create your own twentysixteen_fonts_url() function to override in a child theme.
	 *
	 * @since Twenty Sixteen 1.0
	 * @since Twenty Sixteen 2.9 Replaced Google URL with self-hosted fonts.
	 *
	 * @return string Fonts URL for the theme.
	 */
	function twentysixteen_fonts_url()
	{
		$fonts_url = '';
		$fonts = array();

		/*
		 * translators: If there are characters in your language that are not supported
		 * by Merriweather, translate this to 'off'. Do not translate into your own language.
		 */
		if ('off' !== _x('on', 'Merriweather font: on or off', 'twentysixteen')) {
			$fonts[] = 'merriweather';
		}

		/*
		 * translators: If there are characters in your language that are not supported
		 * by Montserrat, translate this to 'off'. Do not translate into your own language.
		 */
		if ('off' !== _x('on', 'Montserrat font: on or off', 'twentysixteen')) {
			$fonts[] = 'montserrat';
		}

		/*
		 * translators: If there are characters in your language that are not supported
		 * by Inconsolata, translate this to 'off'. Do not translate into your own language.
		 */
		if ('off' !== _x('on', 'Inconsolata font: on or off', 'twentysixteen')) {
			$fonts[] = 'inconsolata';
		}

		if ($fonts) {
			$fonts_url = get_template_directory_uri() . '/fonts/' . implode('-plus-', $fonts) . '.css';
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
function twentysixteen_javascript_detection()
{
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action('wp_head', 'twentysixteen_javascript_detection', 0);

/**
 * Enqueues scripts and styles.
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_scripts()
{
	// Add custom fonts, used in the main stylesheet.
	$font_version = (0 === strpos((string) twentysixteen_fonts_url(), get_template_directory_uri() . '/')) ? '20230328' : null;
	wp_enqueue_style('twentysixteen-fonts', twentysixteen_fonts_url(), array(), $font_version);

	// Add Genericons, used in the main stylesheet.
	wp_enqueue_style('genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '20201208');

	// Theme stylesheet.
	wp_enqueue_style('twentysixteen-style', get_stylesheet_uri(), array(), '20230328');

	// Theme block stylesheet.
	wp_enqueue_style('twentysixteen-block-style', get_template_directory_uri() . '/css/blocks.css', array('twentysixteen-style'), '20230206');

	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style('twentysixteen-ie', get_template_directory_uri() . '/css/ie.css', array('twentysixteen-style'), '20170530');
	wp_style_add_data('twentysixteen-ie', 'conditional', 'lt IE 10');

	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style('twentysixteen-ie8', get_template_directory_uri() . '/css/ie8.css', array('twentysixteen-style'), '20170530');
	wp_style_add_data('twentysixteen-ie8', 'conditional', 'lt IE 9');

	// Load the Internet Explorer 7 specific stylesheet.
	wp_enqueue_style('twentysixteen-ie7', get_template_directory_uri() . '/css/ie7.css', array('twentysixteen-style'), '20170530');
	wp_style_add_data('twentysixteen-ie7', 'conditional', 'lt IE 8');

	// Load the html5 shiv.
	wp_enqueue_script('twentysixteen-html5', get_template_directory_uri() . '/js/html5.js', array(), '3.7.3');
	wp_script_add_data('twentysixteen-html5', 'conditional', 'lt IE 9');

	wp_enqueue_script('twentysixteen-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20170530', true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}

	if (is_singular() && wp_attachment_is_image()) {
		wp_enqueue_script('twentysixteen-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array('jquery'), '20170530');
	}

	wp_enqueue_script('twentysixteen-script', get_template_directory_uri() . '/js/functions.js', array('jquery'), '20211130', true);

	wp_localize_script(
		'twentysixteen-script',
		'screenReaderText',
		array(
			'expand' => __('expand child menu', 'twentysixteen'),
			'collapse' => __('collapse child menu', 'twentysixteen'),
		)
	);
}
add_action('wp_enqueue_scripts', 'twentysixteen_scripts');

/**
 * Enqueue styles for the block-based editor.
 *
 * @since Twenty Sixteen 1.6
 */
function twentysixteen_block_editor_styles()
{
	// Block styles.
	wp_enqueue_style('twentysixteen-block-editor-style', get_template_directory_uri() . '/css/editor-blocks.css', array(), '20221004');
	// Add custom fonts.
	$font_version = (0 === strpos((string) twentysixteen_fonts_url(), get_template_directory_uri() . '/')) ? '20230328' : null;
	wp_enqueue_style('twentysixteen-fonts', twentysixteen_fonts_url(), array(), $font_version);
}
add_action('enqueue_block_editor_assets', 'twentysixteen_block_editor_styles');

/**
 * Adds custom classes to the array of body classes.
 *
 * @since Twenty Sixteen 1.0
 *
 * @param array $classes Classes for the body element.
 * @return array (Maybe) filtered body classes.
 */
function twentysixteen_body_classes($classes)
{
	// Adds a class of custom-background-image to sites with a custom background image.
	if (get_background_image()) {
		$classes[] = 'custom-background-image';
	}

	// Adds a class of group-blog to sites with more than 1 published author.
	if (is_multi_author()) {
		$classes[] = 'group-blog';
	}

	// Adds a class of no-sidebar to sites without active sidebar.
	if (!is_active_sidebar('sidebar-1')) {
		$classes[] = 'no-sidebar';
	}

	// Adds a class of hfeed to non-singular pages.
	if (!is_singular()) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter('body_class', 'twentysixteen_body_classes');

/**
 * Converts a HEX value to RGB.
 *
 * @since Twenty Sixteen 1.0
 *
 * @param string $color The original color, in 3- or 6-digit hexadecimal form.
 * @return array Array containing RGB (red, green, and blue) values for the given
 *               HEX code, empty array otherwise.
 */
function twentysixteen_hex2rgb($color)
{
	$color = trim($color, '#');

	if (strlen($color) === 3) {
		$r = hexdec(substr($color, 0, 1) . substr($color, 0, 1));
		$g = hexdec(substr($color, 1, 1) . substr($color, 1, 1));
		$b = hexdec(substr($color, 2, 1) . substr($color, 2, 1));
	} elseif (strlen($color) === 6) {
		$r = hexdec(substr($color, 0, 2));
		$g = hexdec(substr($color, 2, 2));
		$b = hexdec(substr($color, 4, 2));
	} else {
		return array();
	}

	return array(
		'red' => $r,
		'green' => $g,
		'blue' => $b,
	);
}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Block Patterns.
 */
require get_template_directory() . '/inc/block-patterns.php';

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
function twentysixteen_content_image_sizes_attr($sizes, $size)
{
	$width = $size[0];

	if (840 <= $width) {
		$sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px';
	}

	if ('page' === get_post_type()) {
		if (840 > $width) {
			$sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
		}
	} else {
		if (840 > $width && 600 <= $width) {
			$sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 61vw, (max-width: 1362px) 45vw, 600px';
		} elseif (600 > $width) {
			$sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
		}
	}

	return $sizes;
}
add_filter('wp_calculate_image_sizes', 'twentysixteen_content_image_sizes_attr', 10, 2);

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails
 *
 * @since Twenty Sixteen 1.0
 *
 * @param string[]     $attr       Array of attribute values for the image markup, keyed by attribute name.
 *                                 See wp_get_attachment_image().
 * @param WP_Post      $attachment Image attachment post.
 * @param string|int[] $size       Requested image size. Can be any registered image size name, or
 *                                 an array of width and height values in pixels (in that order).
 * @return string[] The filtered attributes for the image markup.
 */
function twentysixteen_post_thumbnail_sizes_attr($attr, $attachment, $size)
{
	if ('post-thumbnail' === $size) {
		if (is_active_sidebar('sidebar-1')) {
			$attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 60vw, (max-width: 1362px) 62vw, 840px';
		} else {
			$attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px';
		}
	}
	return $attr;
}
add_filter('wp_get_attachment_image_attributes', 'twentysixteen_post_thumbnail_sizes_attr', 10, 3);

/**
 * Modifies tag cloud widget arguments to display all tags in the same font size
 * and use list format for better accessibility.
 *
 * @since Twenty Sixteen 1.1
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array The filtered arguments for tag cloud widget.
 */
function twentysixteen_widget_tag_cloud_args($args)
{
	$args['largest'] = 1;
	$args['smallest'] = 1;
	$args['unit'] = 'em';
	$args['format'] = 'list';

	return $args;
}
add_filter('widget_tag_cloud_args', 'twentysixteen_widget_tag_cloud_args');


/* Mihir Setup */

/**
 * Proper way to enqueue scripts and styles.
 */
function standard_theme_style_scripts()
{

	/*
	 * Standard Css
	 */
	wp_enqueue_style('pricexauto-css', get_template_directory_uri() . '/assets/css/main3.css');
	wp_enqueue_style('pricexauto-css2', get_template_directory_uri() . '/assets/css/yfc-styles3.css');
	wp_enqueue_style('bootstrap-min-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
	wp_enqueue_style('bootstrap-icons-css', 'https://unpkg.com/bootstrap-icons@1.8.2/font/bootstrap-icons.css');
	/*
	 * Standard Js
	 */
	wp_register_script('recaptcha-ui-js', 'https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit', '', '', true);
	wp_enqueue_script('recaptcha-ui-js');

	wp_register_script('axios-ui-js', 'https://unpkg.com/axios/dist/axios.min.js', '', '', true);
	wp_enqueue_script('axios-ui-js');

	wp_register_script('api-ui-js', 'https://www.google.com/recaptcha/api.js', '', '', true);
	wp_enqueue_script('api-ui-js');

	wp_register_script('jquery-ui-js', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', '', '3.6.0', true);
	wp_enqueue_script('jquery-ui-js');

	wp_register_script('popper-min-js', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js', '', '2.11.8', true);
	wp_enqueue_script('popper-min-js');

	wp_register_script('bootstrap-min-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js', '', '5.3.2', true);
	wp_enqueue_script('bootstrap-min-js');

	wp_register_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', '', '', true);
	wp_enqueue_script('custom-js');
}

add_action('wp_enqueue_scripts', 'standard_theme_style_scripts');


function my_theme_create_new_user()
{
	if (
		!isset($_POST['djie3duhb3edub3u'])
		|| !wp_verify_nonce($_POST['djie3duhb3edub3u'], 'create_user_form_submit')
	) {
	} else {
		$username = sanitize_text_field($_POST['fencername']);
		$email = sanitize_text_field($_POST['femail']);
		$user_id = username_exists($username);
		if (!$user_id && email_exists($email) === false) {
			$userid = wp_insert_user(
				array(
					'user_login' => $email,
					'first_name' => $username,
					'user_email' => $email,
				)
			);
			wp_set_password($_POST['upassword'], $userid);
			if (isset($_POST['fschool'])) {
				add_user_meta($userid, 'YFReg_school', $_POST['fschool'], true);
			}
			if (isset($_POST['fgrade'])) {
				add_user_meta($userid, 'YFReg_Grade', $_POST['fgrade'], true);
			}
			if (isset($_POST['weaponone'])) {
				add_user_meta($userid, 'weaponone', $_POST['weaponone'], true);
			}
			if (isset($_POST['ratingone'])) {
				add_user_meta($userid, 'ratingone', $_POST['ratingone'], true);
			}
			if (isset($_POST['ratingyearone'])) {
				add_user_meta($userid, 'ratingyearone', $_POST['ratingyearone'], true);
			}
			if (isset($_POST['weapontwo'])) {
				add_user_meta($userid, 'weapontwo', $_POST['weapontwo'], true);
			}
			if (isset($_POST['ratingtwo'])) {
				add_user_meta($userid, 'ratingtwo', $_POST['ratingtwo'], true);
			}
			if (isset($_POST['ratingyeartwo'])) {
				add_user_meta($userid, 'ratingyeartwo', $_POST['ratingyeartwo'], true);
			}
			if (isset($_POST['weaponthree'])) {
				add_user_meta($userid, 'weaponthree', $_POST['weaponthree'], true);
			}
			if (isset($_POST['ratingthree'])) {
				add_user_meta($userid, 'ratingthree', $_POST['ratingthree'], true);
			}
			if (isset($_POST['ratingyearthree'])) {
				add_user_meta($userid, 'ratingyearthree', $_POST['ratingyearthree'], true);
			}
			if (isset($_POST['ftrackingurl'])) {
				add_user_meta($userid, 'ftrackingurl', $_POST['ftrackingurl'], true);
			}
		} else {
			return false; //username exists already
		}
	}
}
add_action('init', 'my_theme_create_new_user');

function mysite_custom_define()
{
	$custom_meta_fields = array();
	$custom_meta_fields['YFReg_school'] = 'School';
	$custom_meta_fields['YFReg_Grade'] = 'Grade';
	$custom_meta_fields['weaponone'] = 'Weapon One';
	$custom_meta_fields['ratingone'] = 'Rating One';
	$custom_meta_fields['ratingyearone'] = 'Rating Year One';
	$custom_meta_fields['weapontwo'] = 'Weapon Two';
	$custom_meta_fields['ratingtwo'] = 'Rating Two';
	$custom_meta_fields['ratingyeartwo'] = 'Rating Year Two';
	$custom_meta_fields['weaponthree'] = 'Weapon Three';
	$custom_meta_fields['ratingthree'] = 'Rating Three';
	$custom_meta_fields['ratingyearthree'] = 'Rating Year Three';
	$custom_meta_fields['ftrackingurl'] = 'Fencing Tracker URL';

	return $custom_meta_fields;
}
function mysite_columns($defaults)
{
	$meta_number = 0;
	$custom_meta_fields = mysite_custom_define();
	foreach ($custom_meta_fields as $meta_field_name => $meta_disp_name) {
		$meta_number++;
		$defaults[('mysite-usercolumn-' . $meta_number . '')] = __($meta_disp_name, 'user-column');
	}
	return $defaults;
}

function mysite_custom_columns($value, $column_name, $id)
{
	$meta_number = 0;
	$custom_meta_fields = mysite_custom_define();
	foreach ($custom_meta_fields as $meta_field_name => $meta_disp_name) {
		$meta_number++;
		if ($column_name == ('mysite-usercolumn-' . $meta_number . '')) {
			return get_the_author_meta($meta_field_name, $id);
		}
	}
}
function mysite_show_extra_profile_fields($user)
{
	print('<h3>Extra profile information</h3>');

	print('<table class="form-table">');

	$meta_number = 0;
	$custom_meta_fields = mysite_custom_define();
	foreach ($custom_meta_fields as $meta_field_name => $meta_disp_name) {
		$meta_number++;
		print('<tr>');
		print('<th><label for="' . $meta_field_name . '">' . $meta_disp_name . '</label></th>');
		print('<td>');
		print('<input type="text" name="' . $meta_field_name . '" id="' . $meta_field_name . '" value="' . esc_attr(get_the_author_meta($meta_field_name, $user->ID)) . '" class="regular-text" /><br />');
		print('<span class="description"></span>');
		print('</td>');
		print('</tr>');
	}
	print('</table>');
}
function mysite_save_extra_profile_fields($user_id)
{

	if (!current_user_can('edit_user', $user_id))
		return false;

	$meta_number = 0;
	$custom_meta_fields = mysite_custom_define();
	foreach ($custom_meta_fields as $meta_field_name => $meta_disp_name) {
		$meta_number++;
		update_user_meta($user_id, $meta_field_name, $_POST[$meta_field_name]);
	}
}
add_action('show_user_profile', 'mysite_show_extra_profile_fields');
add_action('edit_user_profile', 'mysite_show_extra_profile_fields');
add_action('personal_options_update', 'mysite_save_extra_profile_fields');
add_action('edit_user_profile_update', 'mysite_save_extra_profile_fields');
add_action('manage_users_custom_column', 'mysite_custom_columns', 15, 3);
//add_filter('manage_users_columns', 'mysite_columns', 15, 1);


function getUserMetaData()
{
	$getuserid = $_POST['getuserid'];
	$user = get_user_by('ID', $getuserid);
	$useremail = $user->user_email;
	echo get_user_meta($getuserid, 'YFReg_school', true) . "~" . get_user_meta($getuserid, 'YFReg_Grade', true) . "~" . get_user_meta($getuserid, 'weaponone', true) . "~" . get_user_meta($getuserid, 'ratingone', true) . "~" . get_user_meta($getuserid, 'ratingyearone', true) . "~" . get_user_meta($getuserid, 'weapontwo', true) . "~" . get_user_meta($getuserid, 'ratingtwo', true) . "~" . get_user_meta($getuserid, 'ratingyeartwo', true) . "~" . get_user_meta($getuserid, 'weaponthree', true) . "~" . get_user_meta($getuserid, 'ratingthree', true) . "~" . get_user_meta($getuserid, 'ratingyearthree', true) . "~" . get_user_meta($getuserid, 'ftrackingurl', true) . "~" . $useremail;
	die();
}
add_action('wp_ajax_getUserMetaData', 'getUserMetaData');
add_action('wp_ajax_nopriv_getUserMetaData', 'getUserMetaData');

// function custom_login_redirect($redirect_to, $request, $user)
// {
// 	$user_role = $user->roles[0];
// 	if ($user_role == 'subscriber') {
// 		$redirect_to = get_site_url() . '/pledge-form/';
// 	}
// 	return $redirect_to;
// }
// add_filter('login_redirect', 'custom_login_redirect', 10, 3);
function my_theme_create_new_form_data()
{
	if (
		!isset($_POST['dasdasdasdasdsfgd'])
		|| !wp_verify_nonce($_POST['dasdasdasdasdsfgd'], 'create_pledge_form_submit')
	) {

	} else {
		if ('POST' == $_SERVER['REQUEST_METHOD'] && !empty($_POST['action']) && $_POST['action'] == "front_post")
			$fm_Sponsor_phone = $_POST['fm_Sponsor_phone'];
		$fmlumpsumamt = $_POST['fm-lump-sum-amt'];
		$fmpledgeperpointamt1 = $_POST['fm-pledge-per-point-amt1'];
		$fmpledgeperpointamt2 = $_POST['fm-pledge-per-point-amt2'];
		$fmpledgeperpointamt3 = $_POST['fm-pledge-per-point-amt3'];
		$fmpledgeperpointamt4 = $_POST['fm-pledge-per-point-amt4'];
		$fmpledgeperpointamt5 = $_POST['fm-pledge-per-point-amt5'];
		$fmpledgeperpointamt6 = $_POST['fm-pledge-per-point-amt6'];
		$fmpledgeperpointamt7 = $_POST['fm-pledge-per-point-amt7'];
		$fmpledgeperpointamt8 = $_POST['fm-pledge-per-point-amt8'];
		$fmpledgeperpointamt9 = $_POST['fm-pledge-per-point-amt9'];
		global $user_ID;
		$post_type = 'pledge-form-data';

		$fencers_id = $_POST['fencers_name'];
		$user_info = get_userdata($fencers_id);
		$first_name = $user_info->first_name;
		$user_email = $user_info->user_email;

		$YFReg_school = get_user_meta($fencers_id, 'YFReg_school', true);
		$YFReg_Grade = get_user_meta($fencers_id, 'YFReg_Grade', true);
		$weaponone = get_user_meta($fencers_id, 'weaponone', true);
		$ratingone = get_user_meta($fencers_id, 'ratingone', true);
		$ratingyearone = get_user_meta($fencers_id, 'ratingyearone', true);
		$weapontwo = get_user_meta($fencers_id, 'weapontwo', true);
		$ratingtwo = get_user_meta($fencers_id, 'ratingtwo', true);
		$ratingyeartwo = get_user_meta($fencers_id, 'ratingyeartwo', true);
		$weaponthree = get_user_meta($fencers_id, 'weaponthree', true);
		$ratingthree = get_user_meta($fencers_id, 'ratingthree', true);
		$ratingyearthree = get_user_meta($fencers_id, 'ratingyearthree', true);
		$ftrackingurl = get_user_meta($fencers_id, 'ftrackingurl', true);

		$new_post = array(
			'post_title' => $_POST['fm_Sponsor_name'],
			'post_content' => 'Lorem Ipsum',
			'post_status' => 'publish',
			'post_type' => $post_type
		);
		$postid = wp_insert_post($new_post);

		add_post_meta($postid, '1_Fencer_First_Name', $first_name, true);
		add_post_meta($postid, '2_Fencer_Email', $user_email, true);
		add_post_meta($postid, '3_Fencer_School', $YFReg_school, true);
		add_post_meta($postid, '4_Fencer_Grade', $YFReg_Grade, true);
		add_post_meta($postid, '5_Fencer_Weapon_One', $weaponone, true);
		add_post_meta($postid, '6_Fencer_Rating_One', $ratingone, true);
		add_post_meta($postid, '7_Fencer_Rating_Year_One ', $ratingyearone, true);

		add_post_meta($postid, '8_Fencer_Weapon_Two', $weapontwo, true);
		add_post_meta($postid, '9_Fencer_Rating_Two', $ratingtwo, true);
		add_post_meta($postid, '10_Fencer_Rating_Year_Two', $ratingyeartwo, true);

		add_post_meta($postid, '11_Fencer_Weapon_Three', $weaponthree, true);
		add_post_meta($postid, '12_Fencer_Rating_Three', $ratingthree, true);
		add_post_meta($postid, '13_Fencer_Rating_Year_Three', $ratingyearthree, true);

		add_post_meta($postid, '14_Fencer_Tracking_Url', $ftrackingurl, true);

		if (isset($_POST['fm_Sponsor_email'])) {
			add_post_meta($postid, '15_Sponsor_Email', $_POST['fm_Sponsor_email'], true);
		}
		if (isset($_POST['fm_Sponsor_phone'])) {
			add_post_meta($postid, '16_Sponsor_Phone', $_POST['fm_Sponsor_phone'], true);
		}
		if (isset($fmlumpsumamt)) {
			add_post_meta($postid, '17_Lump_sum_Amt', $fmlumpsumamt, true);
		}
		if (isset($fmpledgeperpointamt1)) {
			add_post_meta($postid, '18_Pledge_per_point_amt_1', $fmpledgeperpointamt1, true);
		}
		if (isset($fmpledgeperpointamt2)) {
			add_post_meta($postid, '19_Pledge_per_point_amt_2', $fmpledgeperpointamt2, true);
		}
		if (isset($fmpledgeperpointamt3)) {
			add_post_meta($postid, '20_Pledge per point amt 3', $fmpledgeperpointamt3, true);
		}
		if (isset($fmpledgeperpointamt4)) {
			add_post_meta($postid, '21_Pledge_per_point_amt_4', $fmpledgeperpointamt4, true);
		}
		if (isset($fmpledgeperpointamt5)) {
			add_post_meta($postid, '22_Pledge_per_point_amt_5', $fmpledgeperpointamt5, true);
		}
		if (isset($fmpledgeperpointamt6)) {
			add_post_meta($postid, '23_Pledge_per_point_amt_6', $fmpledgeperpointamt6, true);
		}
		if (isset($fmpledgeperpointamt7)) {
			add_post_meta($postid, '24_Pledge_per_point_amt_7', $fmpledgeperpointamt7, true);
		}
		if (isset($fmpledgeperpointamt8)) {
			add_post_meta($postid, '25_Pledge_per_point_amt_8', $fmpledgeperpointamt8, true);
		}
		if (isset($fmpledgeperpointamt9)) {
			add_post_meta($postid, '26_Pledge_per_point_amt_9', $fmpledgeperpointamt9, true);
		}
		if (isset($_POST['fencers_name'])) {
			add_post_meta($postid, '27_FencerId', $_POST['fencers_name'], true);
		}
		wp_redirect(get_permalink(128));
		die;

	}
}
add_action('init', 'my_theme_create_new_form_data');

function register_custom_menu_page()
{
	global $wp_roles;
	$wp_roles->add_cap('administrator', 'view_custom_menu');
	$wp_roles->add_cap('subscriber', 'view_custom_menu');

	add_menu_page('My Plugin Options', 'Pledge Data', 'view_custom_menu', 'documents', 'my_plugin_options', '', 11);
}
add_action('admin_menu', 'register_custom_menu_page');

function my_plugin_options()
{
	$cuserid = get_current_user_id();

	$args = array(
		'post_type' => 'pledge-form-data',
		'posts_per_page' => -1,
		'meta_query' => array(
			array(
				'key' => '27_FencerId',
				'value' => $cuserid,
				'compare' => '=',
			),
		)
	);
	$query = new WP_Query($args);
	?>
	<div class="row">
		<?php
		$i = 1;
		if ($query->have_posts()):
			while ($query->have_posts()):
				$query->the_post();
				$postid = get_the_ID();
				?>
				<div class="col-md-12">
					<h3>Sponsor Information
						<?php echo $i; ?>
					</h3>
					<table class="customers">
						<thead>
							<tr>
								<th>Sponsor Name</th>
								<th>Sponsor Email</th>
								<th>Sponsor Phone</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<?php echo get_the_title(); ?>
								</td>
								<td>
									<?php echo get_post_meta($postid, '15_Sponsor_Email', true); ?>
								</td>
								<td>
									<?php echo get_post_meta($postid, '16_Sponsor_Phone', true); ?>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-md-12">
					<h3>Pledge Amount Information</h3>
					<table class="customers">
						<tr>
							<td>Pools - Pledge Amount</td>
							<td>
								<?php
								if (get_post_meta($postid, '18_Pledge_per_point_amt_1', true)) {
									echo get_post_meta($postid, '18_Pledge_per_point_amt_1', true);
								} else {
									echo "-";
								} ?>
							</td>
						</tr>
						<tr>
							<td>Table 256 - Pledge Amount</td>
							<td>
								<?php
								if (get_post_meta($postid, '19_Pledge_per_point_amt_2', true)) {
									echo get_post_meta($postid, '19_Pledge_per_point_amt_2', true);
								} else {
									echo "-";
								}
								?>
							</td>
						</tr>
						<tr>
							<td>Table 128 - Pledge Amount</td>
							<td>
								<?php
								if (get_post_meta($postid, '20_Pledge_per_point_amt_3', true)) {
									echo get_post_meta($postid, '20_Pledge_per_point_amt_3', true);
								} else {
									echo "-";
								}
								?>
							</td>
						</tr>
						<tr>
							<td>Table 64 - Pledge Amount</td>
							<td>
								<?php
								if (get_post_meta($postid, '21_Pledge_per_point_amt_4', true)) {
									echo get_post_meta($postid, '21_Pledge_per_point_amt_4', true);
								} else {
									echo "-";
								}
								?>
							</td>
						</tr>
						<tr>
							<td>Table 32 - Pledge Amount</td>
							<td>
								<?php
								if (get_post_meta($postid, '22_Pledge_per_point_amt_5', true)) {
									echo get_post_meta($postid, '22_Pledge_per_point_amt_5', true);
								} else {
									echo "-";
								}
								?>
							</td>
						</tr>
						<tr>
							<td>Table 16 - Pledge Amount</td>
							<td>
								<?php
								if (get_post_meta($postid, '23_Pledge_per_point_amt_6', true)) {
									echo get_post_meta($postid, '23_Pledge_per_point_amt_6', true);
								} else {
									echo "-";
								}
								?>
							</td>
						</tr>
						<tr>
							<td>Table 8 - Pledge Amount</td>
							<td>
								<?php
								if (get_post_meta($postid, '24_Pledge_per_point_amt_7', true)) {
									echo get_post_meta($postid, '24_Pledge_per_point_amt_7', true);
								} else {
									echo "-";
								}
								?>
							</td>
						</tr>
						<tr>
							<td>Semi-Final</td>
							<td>
								<?php
								if (get_post_meta($postid, '25_Pledge_per_point_amt_8', true)) {
									echo get_post_meta($postid, '25_Pledge_per_point_amt_8', true);
								} else {
									echo "-";
								}
								?>
							</td>
						</tr>
						<tr>
							<td>Final</td>
							<td>
								<?php
								if (get_post_meta($postid, '26_Pledge_per_point_amt_9', true)) {
									echo get_post_meta($postid, '26_Pledge_per_point_amt_9', true);
								} else {
									echo "-";
								}
								?>
							</td>
						</tr>
						<tr>
							<td>Lump Sum Donation</td>
							<td>
								<?php
								if (get_post_meta($postid, '17_Lump_sum_Amt', true)) {
									echo get_post_meta($postid, '17_Lump_sum_Amt', true);
								} else {
									echo "-";
								}
								?>
							</td>
						</tr>
						<tr>
							<td>Fencer Tracking Url</td>
							<td>
								<?php
								if (get_post_meta($postid, '14_Fencer_Tracking_Url', true)) {
									echo get_post_meta($postid, '14_Fencer_Tracking_Url', true);
								} else {
									echo "-";
								}
								?>
							</td>
						</tr>
					</table>
				</div>
				<hr>
				<?php
				$i++;
			endwhile;
		endif;
		?>
	</div>

	<style>
		.customers {
			font-family: Arial, Helvetica, sans-serif;
			border-collapse: collapse;
			width: 50%;
		}

		.customers td,
		.customers th {
			border: 1px solid #ddd;
			padding: 8px;
		}

		.customers tr:nth-child(even) {
			background-color: #f2f2f2;
		}

		.customers tr:hover {
			background-color: #ddd;
		}

		.customers th {
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: left;
			background-color: #04AA6D;
			color: white;
		}
	</style>
	<?php
}
