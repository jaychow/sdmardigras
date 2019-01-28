<?php
/*
Plugin Name: Mtheme Custom posts
Plugin URI: http://multia.in
Description: Declares a plugin that will create a custom post.
Version: 1.0
Author: Multia-Studio
Author URI: http://themeforest.net/user/Multia-Studio
License: GPLv1
*/
add_action( 'init', 'create_mtheme_custom_posts' );
function create_mtheme_custom_posts() {
    register_post_type( 'slide',
        array(
            'labels' => array(
                'name' => 'Hero Slider',
                'singular_name' => 'Hero Slide',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Slide',
                'edit' => 'Edit',
                'edit_item' => 'Edit Slide',
                'new_item' => 'New Slide',
                'view' => 'View',
                'view_item' => 'View Slide',
                'search_items' => 'Search Slide',
                'not_found' => 'No Slide found',
                'not_found_in_trash' => 'No Slide found in Trash',
                'parent' => 'Parent Slide'
            ),
 
            'public' => true,
            'menu_position' => 10,
            'supports' => array( 'title', 'thumbnail', 'page-attributes' ),
            'taxonomies' => array( '' ),
            'has_archive' => true
        )
    );
	
	register_post_type( 'event_slider',
        array(
            'labels' => array(
                'name' => 'Hero Background',
                'singular_name' => 'Hero Background',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Slide',
                'edit' => 'Edit',
                'edit_item' => 'Edit Slide',
                'new_item' => 'New Slide',
                'view' => 'View',
                'view_item' => 'View Slide',
                'search_items' => 'Search Slide',
                'not_found' => 'No Slide found',
                'not_found_in_trash' => 'No Slide found in Trash',
                'parent' => 'Parent Slide'
            ),
 
            'public' => true,
            'menu_position' => 10,
            'supports' => array( 'title'),
            'taxonomies' => array( '' ),
            'has_archive' => true
        )
    );
	
	register_post_type( 'gallery_slide',
        array(
            'labels' => array(
                'name' => '3D Image Slider',
                'singular_name' => '3D Image Slide',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Slide',
                'edit' => 'Edit',
                'edit_item' => 'Edit Slide',
                'new_item' => 'New Slide',
                'view' => 'View',
                'view_item' => 'View Slide',
                'search_items' => 'Search Slide',
                'not_found' => 'No Slide found',
                'not_found_in_trash' => 'No Slide found in Trash',
                'parent' => 'Parent Slide'
            ),
 
            'public' => true,
            'menu_position' => 10,
            'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes'),
            'taxonomies' => array( '' ),
            'has_archive' => true
        )
    );
	
	register_post_type( 'carousel_slide',
        array(
            'labels' => array(
                'name' => 'Carousel Slider',
                'singular_name' => 'Carousel Slide',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Slide',
                'edit' => 'Edit',
                'edit_item' => 'Edit Slide',
                'new_item' => 'New Slide',
                'view' => 'View',
                'view_item' => 'View Slide',
                'search_items' => 'Search Slide',
                'not_found' => 'No Slide found',
                'not_found_in_trash' => 'No Slide found in Trash',
                'parent' => 'Parent Slide'
            ),
 
            'public' => true,
            'menu_position' => 10,
            'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
            'taxonomies' => array( '' ),
            'has_archive' => true
        )
    );
	
	register_post_type( 'event',
        array(
            'labels' => array(
                'name' => 'Events',
                'singular_name' => 'Event',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Event',
                'edit' => 'Edit',
                'edit_item' => 'Edit Event',
                'new_item' => 'New Event',
                'view' => 'View',
                'view_item' => 'View Event',
                'search_items' => 'Search Event',
                'not_found' => 'No Event found',
                'not_found_in_trash' => 'No Event found in Trash',
                'parent' => 'Parent Event'
            ),
 
            'public' => true,
            'menu_position' => 10,
            'supports' => array('title','thumbnail', 'page-attributes'),
            'taxonomies' => array( '' ),
            'has_archive' => true
        )
    );
	
	register_post_type( 'schedule',
        array(
            'labels' => array(
					'name' => 'Schedules',
					'singular_name' => 'Schedule',
					'add_new' => 'Add New',
					'add_new_item' => 'Add New Schedule',
					'edit_item' => 'Edit Schedule',
					'new_item' => 'New Schedule',
					'view_item' => 'View Schedule',
					'search_items' => 'Search Schedule',
					'not_found' =>  'No Schedule Found',
					'not_found_in_trash' => 'No Schedule Found in Trash',
				 ),
 				'public' => true,
				'exclude_from_search' => false,
				'capability_type' => 'post',
				'map_meta_cap' => true,
				'hierarchical' => false,
				'menu_position' => 10,
				'supports' => array('title', 'page-attributes'),
				'rewrite' => array('slug' => 'schedule'),
        )
    );
	
	register_post_type( 'speaker',
        array(
            'labels' => array(
					'name' => 'Speakers',
					'singular_name' => 'speaker',
					'add_new' => 'Add New',
					'add_new_item' => 'Add New speaker',
					'edit_item' => 'Edit speaker',
					'new_item' => 'New speaker',
					'view_item' => 'View speaker',
					'search_items' => 'Search speaker',
					'not_found' =>  'No speaker Found',
					'not_found_in_trash' => 'No speaker Found in Trash',
				 ),
 				'public' => true,
				'exclude_from_search' => false,
				'capability_type' => 'post',
				'map_meta_cap' => true,
				'hierarchical' => false,
				'menu_position' => 10,
				'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
				'rewrite' => array('slug' => 'speaker'),
        )
    );
	
	register_post_type( 'package',
        array(
            'labels' => array(
					'name' => 'Packages',
					'singular_name' => 'Package',
					'add_new' => 'Add New',
					'add_new_item' => 'Add New Package',
					'edit_item' => 'Edit Package',
					'new_item' => 'New Package',
					'view_item' => 'View Package',
					'search_items' => 'Search Package',
					'not_found' =>  'No Package Found',
					'not_found_in_trash' => 'No Package Found in Trash',
				 ),
 				'public' => true,
				'exclude_from_search' => false,
				'capability_type' => 'post',
				'map_meta_cap' => true,
				'hierarchical' => false,
				'menu_position' => 10,
				'supports' => array('title', 'editor', 'page-attributes'),
				'rewrite' => array('slug' => 'package'),
        )
    );
	
	register_post_type( 'sponsor',
        array(
            'labels' => array(
					'name' => 'Sponsors',
					'singular_name' => 'Sponsor',
					'add_new' => 'Add New',
					'add_new_item' => 'Add New Sponsor',
					'edit_item' => 'Edit Sponsor',
					'new_item' => 'New Sponsor',
					'view_item' => 'View Sponsor',
					'search_items' => 'Search Sponsor',
					'not_found' =>  'No Sponsor Found',
					'not_found_in_trash' => 'No Sponsor Found in Trash',
				 ),
 				'public' => true,
				'exclude_from_search' => false,
				'capability_type' => 'post',
				'map_meta_cap' => true,
				'hierarchical' => false,
				'menu_position' => 10,
				'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
				'rewrite' => array('slug' => 'sponsor'),
        )
    );
}
?>