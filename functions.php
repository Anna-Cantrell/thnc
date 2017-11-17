<?php
/**
 * Functions and Definitions
 *
 * This document contains the custom functions and definitions for various WordPress
 * theme functionality.
 *
 * @package WordPress
 */
/**
 * Register Styles
 *
 * The code below registers custom WordPress styles using wp_register_style()
 * function.
 *
 */


// function thnc_styles() {
// 	// Load Main Stylesheet
// 	wp_enqueue_style( 'thnc-style', get_stylesheet_uri() );
// 	// Get Dynamic Options
// 	$primary_color = get_field( 'primary_color', 'option' );
// 	$secondary_color = get_field( 'secondary_color', 'option' );
// 	$background_tile = get_field( 'background_tile', 'option' );
// 	// Set Dynamic Styles
// 	if ( $primary_color && $secondary_color && $background_tile ) {
// 		$dynamic_css = "
// 			html {
// 				background-image: url($background_tile);
// 			}
// 			a {
// 				color: $primary_color;
// 			}
// 			a:hover {
// 				color: $secondary_color;
// 			}
// 			.button {
// 				border-color: $primary_color;
// 			}
// 			.button:hover {
// 				border-color: $secondary_color;
// 			}
// 			.call-to-action-link {
// 				background: $primary_color;
// 			}
// 			.call-to-action-link:hover {
// 				background: $secondary_color;
// 			}
// 			.locations-submit {
// 				border-color: $primary_color;
// 				color: $primary_color;
// 			}
// 			.locations-submit:hover {
// 				border-color: $secondary_color;
// 				color: $secondary_color;
// 			}
// 			body div.gform_wrapper .gform_footer input.button, .gform_wrapper .gform_footer input[type=submit] {
// 				background: $primary_color;
// 			}
// 			body div.gform_wrapper .gform_footer input.button:hover, .gform_wrapper .gform_footer input[type=submit]:hover {
// 				background: $secondary_color;
// 			}
// 			@media ( min-width: 800px ) {
// 				.locations-button {
// 					border-color: $primary_color;
// 				}
// 				.locations-button:hover {
// 					border-color: $secondary_color;
// 				}
// 			}
// 		";
// 	}
// 	wp_add_inline_style( 'thnc-style', $dynamic_css );
// }
// add_action( 'wp_enqueue_scripts', 'thnc_styles' );


/**
*
* main style sheet
*
**/

function thnc_styles() {

  // Load bootstrap
	wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
	// Load Main Stylesheet
	wp_enqueue_style( 'thnc-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'thnc_styles' );


/**
 * Register Scripts
 *
 * The code below registers custom WordPress scripts using wp_register_script()
 * function.
 *
 */
function thnc_scripts() {
	// Load Main Script
	wp_enqueue_script( 'google-maps-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBN52rMtw3s6Uh4L5st0CIIKaCOOg1xY7Y', '', '', true);
	wp_enqueue_script( 'thnc-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery', 'google-maps-api' ), '1.0', true );
	wp_enqueue_script( 'thnc-script2', get_template_directory_uri() . '/js/scripts.js', array( 'jquery', 'google-maps-api' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'thnc_scripts' );
/**
 * Register Features
 *
 * The code below registers custom WordPress theme features using
 * add_theme_support() function.
 *
 * @since EyeCare Partners 1.0.0
 */
function thnc_features()  {
	// Support Title Tag
	add_theme_support( 'title-tag' );
	// Support Editor Styles
	add_editor_style( 'editor-style.css' );
}
add_action( 'after_setup_theme', 'thnc_features' );
/**
 * Register Custom Post Types
 *
 * The code below registers custom WordPress post types such as the one used for
 * location posts.
 *
 * @since EyeCare Partners 1.0.0
 */
function thnc_locations() {
	// Register the locations custom post type
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
		'description'           => __( 'Individual physical office locations' ),
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

/**
 * Advanced Custom Fields Settings
 *
 * The code below adds and adjusts various functionality for the Advanced Custom
 * Fields PRO plugin.
 *
 */


 // Includes Fields
 require_once('acf-fields.php');

// Create Direction Links
function thnc_acf_directions_link() {
	$directions_link = 'https://www.google.com/maps/dir/Current+Location/';
	$directions_link .= get_field( 'address' ) . ' ';
	$directions_link .= get_field( 'city' ) . ' ';
	$directions_link .= get_field( 'state' ) . ' ';
	$directions_link .= get_field( 'zip_code' );
	$directions_link = str_replace(' ', '+', $directions_link);
	echo $directions_link;
}
// Create Callable Links
function thnc_acf_call_number() {
	$call_number = get_field( 'phone_number' );
	$call_number = str_replace( '(', '', $call_number );
	$call_number = str_replace( ')', '', $call_number );
	$call_number = str_replace( '-', '', $call_number );
	$call_number = str_replace( ' ', '', $call_number );
	return $call_number;
}
// Add Google Maps API Key
function thnc_acf_google_map_api( $api ){
	$api['key'] = 'AIzaSyBN52rMtw3s6Uh4L5st0CIIKaCOOg1xY7Y';
	return $api;
}
add_filter('acf/fields/google_map/api', 'thnc_acf_google_map_api');
/**
 * Add Location Search Support
 *
 * The script allows users to search on the locations archive page by grabbing
 * URL parameters and modifying the page's WP Query object.
 */
function thnc_pre_get_posts( $query ) {
	// Quit if Admin Page
	if ( is_admin() ) {
		return;
	}
	// Quit if Not Main Query
	if ( !$query->is_main_query() ) {
		return;
	}

	// Quit if Not Locations Archive Page
	if ( !is_post_type_archive('locations') ) {
		return;
	}

  // Removes all posts from start
//	if ( is_post_type_archive('locations') ) {
//		$query->set( 'post__in', none );
//	}

	// Show All Locations
	$query->set( 'posts_per_page', -1 );

	// Get All Published Locations
	$locations = get_posts( array(
		'post_type' => 'locations',
		'posts_per_page' => -1
	) );

	// Delete Distance Values
	foreach ( $locations as $location ) {
		delete_post_meta( $location->ID, 'distance' );
	}

	// Quit if Needed Values Aren't Available
	if ( empty($_GET['searchtext']) || empty($_GET['lat']) || empty($_GET['lng']) ) {
		return;
	}

	// Create Array to Hold Matching Location IDs
	$location_ids_in_radius = array();

  // Create Spanish variable
	$spanish = fasle;
	if(isset($_POST['espanol'])) {
		$spanish = true;
	}

	// Go Through Each Location
	foreach ( $locations as $location ) {
		// Calculate Distance Between Searched Value
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
		// Save Distance as a Meta Field
		add_post_meta( $location->ID, 'distance', $distance, 2 );

    // $_GET['type_of_care'] == 'general'
		// this line of code can grab info out of the URL,
		// JS can add things to the URL based on
		// changes to the form.
		// This is how we'll determine the other variables.

    // Grab the custom field value
		$care = get_post_meta( $location->ID, 'type_of_care', true );
    // the result is an array so we call the first item
		// and turn it into an array then make it all lower
        $care1 = (string)$care[0];
		$care2 = (string)$care[1];
		$care3 = (string)$care[2];
		$care4 = (string)$care[3];

		$care = strtolower($care);
		$care1 = strtolower($care1);
		$care2 = strtolower($care2);
		$care3 = strtolower($care3);
		$care4 = strtolower($care4);

		$spanish = get_post_meta( $location->ID, 'espanol', true );
		$spanish = $spanish[0];
		$spanish = strtolower($spanish);
		$notilde = array ('ñ'=>'n', ' ' => '');
		$spanish = strtr( $spanish, $notilde );


		// Add Location to Matches if In Range
		if ( $_GET['spanish'] == 'no' ) {
			if ( $distance <= $_GET['radius']) {

				if ($_GET['care'] == $care1 || $_GET['care'] == $care2 || $_GET['care'] == $care3 || $_GET['care'] == $care4 ) {
				$location_ids_in_radius[] = $location->ID;
			    }

			}
	    }

		if ( $_GET['spanish'] == 'hablaespanol' ){
			if ( $distance <= $_GET['radius'] && $_GET['spanish'] == $spanish) {

				if ($_GET['care'] == $care1 || $_GET['care'] == $care2 || $_GET['care'] == $care3 || $_GET['care'] == $care4 ) {
				$location_ids_in_radius[] = $location->ID;
			    }

			}
	    }


	}

	// Show No Results If Empty
	if ( empty( $location_ids_in_radius ) ) {
		$location_ids_in_radius[] = 0;
	}
	// Modify the Query
	$query->set( 'post__in', $location_ids_in_radius );
	$query->set( 'orderby', 'meta_value_num' );
	$query->set( 'meta_key', 'distance' );
	$query->set( 'meta_key', 'type_of_care' );
	$query->set( 'order', 'ASC' );
}
add_action('pre_get_posts', 'thnc_pre_get_posts', 10, 1);
