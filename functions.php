<?php


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
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

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

    // Localisation Support
    load_theme_textdomain('html5blank', get_template_directory() . '/languages');
}

/*------------------------------------*\
	Functions
\*------------------------------------*/

// HTML5 Blank navigation
function html5blank_nav()
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

// Load HTML5 Blank scripts (header.php)
function html5blank_header_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

    	wp_register_script('conditionizr', get_template_directory_uri() . '/js/lib/conditionizr-4.3.0.min.js', array(), '4.3.0'); // Conditionizr
        wp_enqueue_script('conditionizr'); // Enqueue it!

        wp_register_script('modernizr', get_template_directory_uri() . '/js/lib/modernizr-2.7.1.min.js', array(), '2.7.1'); // Modernizr
        wp_enqueue_script('modernizr'); // Enqueue it!

        wp_register_script('html5blankscripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0'); // Custom scripts
        wp_enqueue_script('html5blankscripts'); // Enqueue it!
    }
}

// Load HTML5 Blank conditional scripts
function html5blank_conditional_scripts()
{
    if (is_page('pagenamehere')) {
        wp_register_script('scriptname', get_template_directory_uri() . '/js/scriptname.js', array('jquery'), '1.0.0'); // Conditional script(s)
        wp_enqueue_script('scriptname'); // Enqueue it!
    }
}

// Load HTML5 Blank styles
function html5blank_styles()
{
    wp_register_style('normalize', get_template_directory_uri() . '/normalize.css', array(), '1.0', 'all');
    wp_enqueue_style('normalize'); // Enqueue it!

    wp_register_style('html5blank', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('html5blank'); // Enqueue it!
}


// Register HTML5 Blank Navigation
function register_html5_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu', 'html5blank'), // Main Navigation
        'sidebar-menu' => __('Sidebar Menu', 'html5blank'), // Sidebar Navigation
        'extra-menu' => __('Extra Menu', 'html5blank') // Extra Navigation if needed (duplicate as many as you need!)
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
        'name' => __('Widget Area 1', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Define Sidebar Widget Area 2
    register_sidebar(array(
        'name' => __('Widget Area 2', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
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
function html5wp_pagination()
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
function html5wp_index($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
{
    return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
function html5wp_custom_post($length)
{
    return 40;
}

// Create the Custom Excerpts callback
function html5wp_excerpt($length_callback = '', $more_callback = '')
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
function html5_blank_view_article($more)
{
    global $post;
    return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('View Article', 'html5blank') . '</a>';
}

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}

// Remove 'text/css' from our enqueued stylesheet
function html5_style_remove($tag)
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
function html5blankgravatar ($avatar_defaults)
{
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}


/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

function thnc_scripts() {
	// Load Main Script
	wp_enqueue_script( 'google-maps-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBN52rMtw3s6Uh4L5st0CIIKaCOOg1xY7Y', '', '', true);
	wp_enqueue_script( 'thnc-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery', 'google-maps-api' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'thnc_scripts' );

/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/

// Create 1 Custom Post type for a Demo
// function create_post_type_html5()
// {
//     register_taxonomy_for_object_type('category', 'html5-blank'); // Register Taxonomies for Category
//     register_taxonomy_for_object_type('post_tag', 'html5-blank');
//     register_post_type('html5-blank', // Register Custom Post Type
//         array(
//         'labels' => array(
//             'name' => __('HTML5 Blank Custom Post', 'html5blank'), // Rename these to suit
//             'singular_name' => __('HTML5 Blank Custom Post', 'html5blank'),
//             'add_new' => __('Add New', 'html5blank'),
//             'add_new_item' => __('Add New HTML5 Blank Custom Post', 'html5blank'),
//             'edit' => __('Edit', 'html5blank'),
//             'edit_item' => __('Edit HTML5 Blank Custom Post', 'html5blank'),
//             'new_item' => __('New HTML5 Blank Custom Post', 'html5blank'),
//             'view' => __('View HTML5 Blank Custom Post', 'html5blank'),
//             'view_item' => __('View HTML5 Blank Custom Post', 'html5blank'),
//             'search_items' => __('Search HTML5 Blank Custom Post', 'html5blank'),
//             'not_found' => __('No HTML5 Blank Custom Posts found', 'html5blank'),
//             'not_found_in_trash' => __('No HTML5 Blank Custom Posts found in Trash', 'html5blank')
//         ),
//         'public' => true,
//         'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
//         'has_archive' => true,
//         'supports' => array(
//             'title',
//             'editor',
//             'excerpt',
//             'thumbnail'
//         ), // Go to Dashboard Custom HTML5 Blank post for supports
//         'can_export' => true, // Allows export in Tools > Export
//         'taxonomies' => array(
//             'post_tag',
//             'category'
//         ) // Add Category and Post Tags support
//     ));
// }

function thnc_locations() {
	// Create the locations custom post type
	$labels = array(
		'name'                  => _x( 'Locations', 'Post Type General Name' ),
		'singular_name'         => _x( 'Location', 'Post Type Singular Name' ),
		'menu_name'             => __( 'Locations' ),
		'name_admin_bar'        => __( 'Location' ),
		'archives'              => __( 'Location Archives' ),
		'attributes'            => __( 'Location Attributes' ),
		'parent_item_colon'     => __( 'Parent Location:' ),
		'all_items'             => __( 'All Locations' ),
		'add_new_item'          => __( 'Add New Location' ),
		'add_new'               => __( 'Add New' ),
		'new_item'              => __( 'New Location' ),
		'edit_item'             => __( 'Edit Location' ),
		'update_item'           => __( 'Update Location' ),
		'view_item'             => __( 'View Location' ),
		'view_items'            => __( 'View Locations' ),
		'search_items'          => __( 'Search Locations' ),
		'not_found'             => __( 'Not found' ),
		'not_found_in_trash'    => __( 'Not found in Trash' ),
		'featured_image'        => __( 'Featured Image' ),
		'set_featured_image'    => __( 'Set featured image' ),
		'remove_featured_image' => __( 'Remove featured image' ),
		'use_featured_image'    => __( 'Use as featured image' ),
		'insert_into_item'      => __( 'Insert into location' ),
		'uploaded_to_this_item' => __( 'Uploaded to this location' ),
		'items_list'            => __( 'Locations list' ),
		'items_list_navigation' => __( 'Locations list navigation' ),
		'filter_items_list'     => __( 'Filter locations list' ),
	);
	$args = array(
		'label'                 => __( 'Location' ),
		'description'           => __( 'Locations of healthcare providers' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'page-attributes' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-location',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'locations', $args );
}
add_action( 'init', 'thnc_locations' );





// Add Google Maps API Key
function thnc_acf_google_map_api( $api ){
	$api['key'] = 'AIzaSyBN52rMtw3s6Uh4L5st0CIIKaCOOg1xY7Y';
	return $api;
}
add_filter('acf/fields/google_map/api', 'thnc_acf_google_map_api');


// adds a link for directions by combining field elements
//and outputting a directions url
function thnc_directions_link() {
	$directions_link = 'https://www.google.com/maps/dir/Current+Location/';
	$directions_link .= get_field( 'street_address' ) . ' ';
	$directions_link .= get_field( 'city' ) . ' ';
	$directions_link .= get_field( 'state' ) . ' ';
	$directions_link .= get_field( 'zipcode' );
	$directions_link = str_replace(' ', '+', $directions_link);
	echo $directions_link;
}


// queries locations and arranges by distance
function thnc_pre_get_posts( $query ) {

  // stop if admin page
  if ( is_admin() ) {
    return;
  }

  // stop if not the main query
  if ( !$query->is_main_query() ) {
    return;
  }

  // stop if not locations archive page
  if ( !is_post_type_archive('locations') ) {
    return;
  }

  // defining locations array of all of them
  $locations = get_posts( array(
    'post_type' => 'locations',
    'post_per_page' => -1
  ));

  // shows all posts
  // -1 makes it show them all
  $query->set( 'posts_per_page', -1 );

  // Deletes distance values
  //might remove though
  foreach ( $locations as $location ) {
    delete_post_meta( $location->ID, 'distance' );
  }

  // stops if theres no search text lat or long
  if ( empty($_GET['searchtext']) || empty($_GET['lat']) || empty($_GET['lng']) ) {
    return;
  }

  // an array to hold locations in the radius
  $location_ids_in_radius = array();

  // determines distance for each location
  // adds as meta and adds if in radius
  foreach ( $locations as $location ) {

    // Calculate distance between searched values
		$location_lat = floatval( get_field( 'latitude', $location->ID ) );
		$location_lng = floatval( get_field( 'longitude', $location->ID ) );
		$location_lat = deg2rad( $location_lat );
		$location_lng = deg2rad( $location_lng );
		$searched_lat = deg2rad( $_GET['lat'] );
		$searched_lng = deg2rad( $_GET['lng'] );
		$lat_delta = $location_lat - $searched_lat;
		$lng_delta = $location_lng - $searched_lng;
		$angle = 2 * asin( sqrt( pow( sin( $lat_delta / 2 ), 2 ) + cos( $searched_lat ) * cos( $location_lat ) * pow( sin( $lng_delta / 2 ), 2 ) ) );
		$distance = round( $angle * 3959, 1 );

    // saves distance as meta field
    // why is there a 2 there? can I just get rid of it?
    // it's in $unique argument space.
    // My research shows maybe it should say false?
    add_post_meta( $location->ID, 'distance', $distance, 2 );

    // adds location to matched if in radius
    if ( $distance <= $_GET['radius'] ) {
      $location_ids_in_radius[] = $location->ID;
    }

  }

  // show no results if empty
  if ( empty( $location_ids_in_radius ) ) {
    $location_ids_in_radius[] = 0;
  }

  //modifying the query
  // grabs locations in radius
  // sets what to order by
  // identifies distance as number
  // orders by distance ascending
  $query->set( 'post__in', $location_ids_in_radius );
  $query->set( 'orderby', 'meta_value_num' );
  $query->set( 'meta_key', 'distance' );
  $query->set( 'order', 'ASC' );

}
add_action('pre_get_posts', 'thnc_pre_get_posts', 10, 1);


/*------------------------------------*\
	ShortCode Functions
\*------------------------------------*/

// Shortcode Demo with Nested Capability
function html5_shortcode_demo($atts, $content = null)
{
    return '<div class="shortcode-demo">' . do_shortcode($content) . '</div>'; // do_shortcode allows for nested Shortcodes
}

// Shortcode Demo with simple <h2> tag
function html5_shortcode_demo_2($atts, $content = null) // Demo Heading H2 shortcode, allows for nesting within above element. Fully expandable.
{
    return '<h2>' . $content . '</h2>';
}

?>
