<?php
/*
Plugin Name: 11online Custom Plugin
Description: Site Specific Plugin for custom WP sites.
Version:     1.0
Author:      Eric Debelak & Joshua T Garcia
Author URI:  http://11online.us
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/
/* Start Adding Functions Below this Line */

/*
* CMB2
*/
//Require CMB2
if (file_exists(dirname(__FILE__).'/cmb2/init.php')) {
    require_once dirname(__FILE__).'/cmb2/init.php';
} elseif (file_exists(dirname(__FILE__).'/CMB2/init.php')) {
    require_once dirname(__FILE__).'/CMB2/init.php';
}

//* Add "CPT" custom post type
function create_cpt() {

	$labels = array(
		'name'          => __( 'CPT' ),
		'singular_name' => __( 'CPT' )
	);

	$args = array(
		'labels'       => $labels,
		'public'       => true,
		'has_archive'  => true,
		'show_ui'      => true,
		'show_in_menu' => true,
		'rewrite'      => array( 'slug' => 'cpt' ),
		'supports'     => array( 'title', 'editor', 'genesis-seo', 'thumbnail', 'genesis-cpt-archives-settings' )
	);

	register_post_type( 'cpt', $args );
}

add_action( 'init', 'create_cpt' );
