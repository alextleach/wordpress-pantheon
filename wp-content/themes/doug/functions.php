<?php
/*
 *  Doug was built on top of the html5blank template:
 *  Author: Todd Motto | @toddmotto
 *  URL: html5blank.com | @html5blank
 *  Custom functions, support, custom post types and more.
 */

/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/

// Load any external files you have here

/*------------------------------------*\
	Theme Support
\*------------------------------------*/

if (!isset($content_width))
{
    $content_width = 900;
}

if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 800, 800, true); // Large Thumbnail
    add_image_size('medium', 300, 337, true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size-test', 700, 200, true); // Custom Thumbnail Size call using
    add_image_size('team-image-sm', 300, 338, true); // custom thumbs for smm team images
    add_image_size('team-image-lg', 800, 800, true); // custom thumbs for smm team images

    // Add Support for Custom Backgrounds - Uncomment below if you're going to use
    /*add_theme_support('custom-background', array(
	'default-color' => 'FFF',
	'default-image' => get_template_directory_uri() . '/img/bg.jpg'
    ));*/

    // Add Support for Custom Header - Uncomment below if you're going to use
    /*add_theme_support('custom-header', array(
	'default-image'			=> get_template_directory_uri() . '/img/headers/default.jpg',
	'header-text'			=> false,
	'default-text-color'		=> '000',
	'width'				=> 1000,
	'height'			=> 198,
	'random-default'		=> false,
	'wp-head-callback'		=> $wphead_cb,
	'admin-head-callback'		=> $adminhead_cb,
	'admin-preview-callback'	=> $adminpreview_cb
    ));*/

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');


    // Jetpack Infinite Scrolling
    function renderFunc()
    {
      while( have_posts() ) {
          the_post();
          echo '<div class="col-sm-4">';
            include 'blog-panel-module.php';
          echo '</div>';
      }
    }

    add_theme_support( 'infinite-scroll', array(
      'type'           => 'scroll',
      'footer'         => false,
      'footer_widgets' => false,
      'container'      => 'articles',
      'wrapper'        => true,
      'render'         => renderFunc,
      'posts_per_page' => 9,
    ) );

    // Localisation Support
    load_theme_textdomain('theme', get_template_directory() . '/languages');
}

/*------------------------------------*\
	Functions
\*------------------------------------*/

// Theme navigation
function theme_nav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul>%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}

// Load Theme scripts (header.php)
function theme_header_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

        // START OPTIONAL BOOTSTRAP MODULES ----------------------------------------------------------------------

        // $path = get_template_directory_uri() . '/lib/js/bootstrap-sass/affix.js';
        // $modified = filemtime( $path );
        // wp_register_script('bootstrap-affix', $path, array('jquery'), $modified); // Custom scripts
        // wp_enqueue_script('bootstrap-affix'); // Enqueue it!

        // $path = get_template_directory_uri() . '/lib/js/bootstrap-sass/alert.js';
        // $modified = filemtime( $path );
        // wp_register_script('bootstrap-alert', $path, array('jquery'), $modified); // Custom scripts
        // wp_enqueue_script('bootstrap-alert'); // Enqueue it!

        // $path = get_template_directory_uri() . '/lib/js/bootstrap-sass/button.js';
        // $modified = filemtime( $path );
        // wp_register_script('bootstrap-button', $path, array('jquery'), $modified); // Custom scripts
        // wp_enqueue_script('bootstrap-button'); // Enqueue it!

        // $path = get_template_directory_uri() . '/lib/js/bootstrap-sass/carousel.js';
        // $modified = filemtime( $path );
        // wp_register_script('bootstrap-carousel', $path, array('jquery'), $modified); // Custom scripts
        // wp_enqueue_script('bootstrap-carousel'); // Enqueue it!

        $path = get_template_directory_uri() . '/lib/js/bootstrap-sass/collapse.js';
        $modified = filemtime( $path );
        wp_register_script('bootstrap-collapse', $path, array('jquery'), $modified); // Custom scripts
        wp_enqueue_script('bootstrap-collapse'); // Enqueue it!

        $path = get_template_directory_uri() . '/lib/js/bootstrap-sass/dropdown.js';
        $modified = filemtime( $path );
        wp_register_script('bootstrap-dropdown', $path, array('jquery'), $modified); // Custom scripts
        wp_enqueue_script('bootstrap-dropdown'); // Enqueue it!

        // $path = get_template_directory_uri() . '/lib/js/bootstrap-sass/modal.js';
        // $modified = filemtime( $path );
        // wp_register_script('bootstrap-modal', $path, array('jquery'), $modified); // Custom scripts
        // wp_enqueue_script('bootstrap-modal'); // Enqueue it!

        // $path = get_template_directory_uri() . '/lib/js/bootstrap-sass/popover.js';
        // $modified = filemtime( $path );
        // wp_register_script('bootstrap-popover', $path, array('jquery'), $modified); // Custom scripts
        // wp_enqueue_script('bootstrap-popover'); // Enqueue it!

        // $path = get_template_directory_uri() . '/lib/js/bootstrap-sass/scrollspy.js';
        // $modified = filemtime( $path );
        // wp_register_script('bootstrap-scrollspy', $path, array('jquery'), $modified); // Custom scripts
        // wp_enqueue_script('bootstrap-scrollspy'); // Enqueue it!

        // $path = get_template_directory_uri() . '/lib/js/bootstrap-sass/tab.js';
        // $modified = filemtime( $path );
        // wp_register_script('bootstrap-tab', $path, array('jquery'), $modified); // Custom scripts
        // wp_enqueue_script('bootstrap-tab'); // Enqueue it!

        // $path = get_template_directory_uri() . '/lib/js/bootstrap-sass/tooltip.js';
        // $modified = filemtime( $path );
        // wp_register_script('bootstrap-tooltip', $path, array('jquery'), $modified); // Custom scripts
        // wp_enqueue_script('bootstrap-tooltip'); // Enqueue it!

        $path = get_template_directory_uri() . '/lib/js/bootstrap-sass/transition.js';
        $modified = filemtime( $path );
        wp_register_script('bootstrap-transition', $path, array('jquery'), $modified); // Custom scripts
        wp_enqueue_script('bootstrap-transition'); // Enqueue it!

        // END OPTIONAL BOOTSTRAP MODULES ------------------------------------------------------------------------


        $path = get_template_directory_uri() . '/lib/js/imagesloaded/imagesloaded.pkgd.js';
        $modified = filemtime( $path );
        wp_register_script('imagesloadedscripts', $path, array('jquery'), $modified); // Custom scripts
        wp_enqueue_script('imagesloadedscripts'); // Enqueue it!

        $path = get_template_directory_uri() . '/lib/js/jquery-validation/jquery.validate.js';
        $modified = filemtime( $path );
        wp_register_script('validationscripts', $path, array('jquery')); // Custom scripts
        wp_enqueue_script('validationscripts'); // Enqueue it!

        $path = get_template_directory_uri() . '/lib/js/magnific-popup/jquery.magnific-popup.js';
        $modified = filemtime( $path );
        wp_register_script('magnificscripts', $path, array('jquery'), $modified); // Custom scripts
        wp_enqueue_script('magnificscripts'); // Enqueue it!

        $path = get_template_directory_uri() . '/lib/js/slideout.js/slideout.js';
        $modified = filemtime( $path );
        wp_register_script('slideoutscripts', $path, array('jquery'), $modified); // Custom scripts
        wp_enqueue_script('slideoutscripts'); // Enqueue it!

        $path = get_template_directory_uri() . '/js/dist/global.js';
        $modified = filemtime( $path );
        wp_register_script('globalscripts', $path, array('jquery'), $modified); // Custom scripts
        wp_enqueue_script('globalscripts'); // Enqueue it!
    }
}

// Load Theme conditional scripts
function theme_conditional_scripts()
{
    if (is_page('home')) {
      $path = get_template_directory_uri() . '/js/dist/home.js';
      $modified = filemtime( $path );
      wp_register_script('homescripts', $path, array('jquery'), $modified); // Custom scripts
      wp_enqueue_script('homescripts'); // Enqueue it!
    }
}

// Load Theme styles
function theme_styles()
{
    wp_register_style('normalize', get_template_directory_uri() . '/normalize.css', array(), '1.0', 'all');
    wp_enqueue_style('normalize'); // Enqueue it!

    $path = get_template_directory() . '/fonts/fonts.css';
    $modified = filemtime( $path );
    wp_register_style('fonts', get_template_directory_uri() . '/fonts/fonts.css', array(), $modified, 'all');
    wp_enqueue_style('fonts'); // Enqueue it!

    $path = get_template_directory() . '/fonts/fontawesome.css';
    $modified = filemtime( $path );
    wp_register_style('fontawesome', get_template_directory_uri() . '/fonts/fontawesome.css', array(), $modified, 'all');
    wp_enqueue_style('fontawesome'); // Enqueue it!

    $path = get_template_directory_uri() . '/lib/css/magnific-popup/magnific-popup.css';
    $modified = filemtime( $path );
    wp_register_style('magnificstyles', $path, array(), $modified, 'all');
    wp_enqueue_style('magnificstyles'); // Enqueue it!

    $path = get_template_directory_uri() . '/lib/css/slick-carousel/slick.css';
    $modified = filemtime( $path );
    wp_register_style('slickstyles', $path, array(), $modified, 'all');
    wp_enqueue_style('slickstyles'); // Enqueue it!

    $path = get_template_directory() . '/style.css';
    $modified = filemtime( $path );
    wp_register_style('theme', get_template_directory_uri() . '/style.css', array(), $modified, 'all');
    wp_enqueue_style('theme'); // Enqueue it!
}

// Register Theme Navigation
function register_theme_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu', 'theme'), // Main Navigation
        'sidebar-menu' => __('Sidebar Menu', 'theme'), // Sidebar Navigation
        'extra-menu' => __('Extra Menu', 'theme') // Extra Navigation if needed (duplicate as many as you need!)
    ));
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
    return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar'))
{
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Widget Area 1', 'theme'),
        'description' => __('Description for this widget-area...', 'theme'),
        'id' => 'widget-area-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Define Sidebar Widget Area 2
    register_sidebar(array(
        'name' => __('Widget Area 2', 'theme'),
        'description' => __('Description for this widget-area...', 'theme'),
        'id' => 'widget-area-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style()
{
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
    ));
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function themewp_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}

// Custom Excerpts
function themewp_index($length) // Create 20 Word Callback for Index page Excerpts, call using themewp_excerpt('themewp_index');
{
    return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using themewp_excerpt('themewp_custom_post');
function themewp_custom_post($length)
{
    return 40;
}

// Create the Custom Excerpts callback
function themewp_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// Custom View Article link to Post
function theme_view_article($more)
{
    global $post;
    return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('View Article', 'theme') . '</a>';
}

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}

// Remove 'text/css' from our enqueued stylesheet
function theme_style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html )
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Custom Gravatar in Settings > Discussion
function themegravatar ($avatar_defaults)
{
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}

// Threaded Comments
function enable_threaded_comments()
{
    if (!is_admin()) {
        if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}

// Custom Comments Callback
function themecomments($comment, $args, $depth)
{
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
?>
    <!-- heads up: starting < for the html tag (li or div) in the next line: -->
    <<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
	<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
	<?php endif; ?>
	<div class="comment-author vcard">
	<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['180'] ); ?>
	<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
	</div>
<?php if ($comment->comment_approved == '0') : ?>
	<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
	<br />
<?php endif; ?>

	<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
		<?php
			printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
		?>
	</div>

	<?php comment_text() ?>

	<div class="reply">
	<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
	</div>
	<?php if ( 'div' != $args['style'] ) : ?>
	</div>
	<?php endif; ?>
<?php }

/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('init', 'theme_header_scripts'); // Add Custom Scripts to wp_head
add_action('wp_print_scripts', 'theme_conditional_scripts'); // Add Conditional Page Scripts
add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
add_action('wp_enqueue_scripts', 'theme_styles'); // Add Theme Stylesheet
add_action('init', 'register_theme_menu'); // Add Theme Menu
add_action('init', 'create_post_type_theme'); // Add our Doug Type
add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
add_action('init', 'themewp_pagination'); // Add our theme Pagination




// add custom styles to WYSIWYG styles dropdown
function my_theme_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'my_theme_add_editor_styles' );

// add fonts to WYSIWYG editor
function my_theme_add_editor_fonts() {
    $font_url = str_replace( ',', '%2C', '//fonts.googleapis.com/css?family=Montserrat:400,700|Ubuntu:300,400,500,700' );
    add_editor_style( $font_url );
}
add_action( 'after_setup_theme', 'my_theme_add_editor_fonts' );


// Callback function to insert 'styleselect' into the $buttons array
function my_mce_buttons_2( $buttons ) {
    array_unshift( $buttons, 'styleselect' );
    return $buttons;
}
// Register our callback to the appropriate filter
add_filter('mce_buttons_2', 'my_mce_buttons_2');


// Callback function to filter the MCE settings
function my_mce_before_init_insert_formats( $init_array ) {
    // Define the style_formats array
    $style_formats = array(
        // Each array child is a format with it's own settings
        array(
            'title' => 'Heading 1',
            'block' => 'span',
            'classes' => 'h1',
            'wrapper' => false
        ),
        array(
            'title' => 'Heading 2',
            'block' => 'span',
            'classes' => 'h2',
            'wrapper' => false
        ),
        array(
            'title' => 'Heading 3',
            'block' => 'span',
            'classes' => 'h3',
            'wrapper' => false
        ),
        array(
            'title' => 'SEO Heading 1',
            'block' => 'h1',
            'classes' => 'h1',
            'wrapper' => false
        ),
        array(
            'title' => 'SEO Heading 2',
            'block' => 'h2',
            'classes' => 'h2',
            'wrapper' => false
        ),
        array(
            'title' => 'SEO Heading 3',
            'block' => 'h3',
            'classes' => 'h3',
            'wrapper' => false
        ),
        array(
            'title' => 'Large Body Copy',
            'inline' => 'span',
            'classes' => 'large-body',
            'wrapper' => false
        ),
        array(
            'title' => 'Button',
            'block' => 'span',
            'classes' => 'btn btn-arrow',
            'wrapper' => false
        )
    );
    // Insert the array, JSON ENCODED, into 'style_formats'
    $init_array['style_formats'] = json_encode( $style_formats );

    return $init_array;

}
// Attach callback to 'tiny_mce_before_init'
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );






// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('avatar_defaults', 'themegravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'theme_view_article'); // Add 'View Article' button instead of [...] for Excerpts
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'theme_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

// Shortcodes
add_shortcode('theme_shortcode_demo', 'theme_shortcode_demo'); // You can place [theme_shortcode_demo] in Pages, Posts now.
add_shortcode('theme_shortcode_demo_2', 'theme_shortcode_demo_2'); // Place [theme_shortcode_demo_2] in Pages, Posts now.

// Shortcodes above would be nested like this -
// [theme_shortcode_demo] [theme_shortcode_demo_2] Here's the page title! [/theme_shortcode_demo_2] [/theme_shortcode_demo]

/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/

// Create 1 Custom Post type for a Demo, called doug
function create_post_type_theme()
{
    register_taxonomy_for_object_type('category', 'doug'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'doug');
    register_post_type('doug', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Dougs', 'theme'), // Rename these to suit
            'singular_name' => __('Doug', 'theme'),
            'add_new' => __('Add New', 'theme'),
            'add_new_item' => __('Add New Doug', 'theme'),
            'edit' => __('Edit', 'theme'),
            'edit_item' => __('Edit Doug', 'theme'),
            'new_item' => __('New Doug', 'theme'),
            'view' => __('View Doug', 'theme'),
            'view_item' => __('View Doug', 'theme'),
            'search_items' => __('Search Doug', 'theme'),
            'not_found' => __('No Dougs found', 'theme'),
            'not_found_in_trash' => __('No Dougs found in Trash', 'theme')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail'
        ), // Go to Dashboard Custom Theme post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
    ));
}

/*------------------------------------*\
	ShortCode Functions
\*------------------------------------*/

// Shortcode Demo with Nested Capability
function theme_shortcode_demo($atts, $content = null)
{
    return '<div class="shortcode-demo">' . do_shortcode($content) . '</div>'; // do_shortcode allows for nested Shortcodes
}

// Shortcode Demo with simple <h2> tag
function theme_shortcode_demo_2($atts, $content = null) // Demo Heading H2 shortcode, allows for nesting within above element. Fully expandable.
{
    return '<h2>' . $content . '</h2>';
}

?>
