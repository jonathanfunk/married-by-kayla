<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

 // Register Custom Post Type
 function register_testimonial_post_type() {
 	$labels = array(
 		'name'                  => 'Testimonials',
 		'singular_name'         => 'Testimonial',
 		'menu_name'             => 'Testimonials',
 		'name_admin_bar'        => 'Testimonial',
 		'archives'              => 'Testimonials',
 		'parent_item_colon'     => 'Parent Testimonial:',
 		'all_items'             => 'All Testimonials',
 		'add_new_item'          => 'Add New Testimonial',
 		'add_new'               => 'Add New',
 		'new_item'              => 'New Testimonial',
 		'edit_item'             => 'Edit Testimonial',
 		'update_item'           => 'Update Testimonial',
 		'view_item'             => 'View Testimonial',
 		'search_items'          => 'Search Testimonial',
 		'not_found'             => 'Not found',
 		'not_found_in_trash'    => 'Not found in Trash',
 		'featured_image'        => 'Featured Image',
 		'set_featured_image'    => 'Set featured image',
 		'remove_featured_image' => 'Remove featured image',
 		'use_featured_image'    => 'Use as featured image',
 		'insert_into_item'      => 'Insert into Testimonial',
 		'uploaded_to_this_item' => 'Uploaded to this Testimonial',
 		'items_list'            => 'Testimonials list',
 		'items_list_navigation' => 'Testimonials list navigation',
 		'filter_items_list'     => 'Filter testimonials list',
 	);
 	$args = array(
 		'label'                 => 'Testimonial',
 		'description'           => 'Collection of testimonials from Married by Kayla clients',
 		'labels'                => $labels,
 		'supports'              => array( 'title', 'editor', 'thumbnail', ),
 		'hierarchical'          => false,
 		'public'                => true,
 		'show_ui'               => true,
 		'show_in_menu'          => true,
 		'menu_position'         => 10,
 		'menu_icon'             => 'dashicons-yes',
 		'show_in_admin_bar'     => true,
 		'show_in_nav_menus'     => true,
 		'can_export'            => false,
 		'has_archive'           => 'testimonial',
 		'exclude_from_search'   => false,
 		'publicly_queryable'    => true,
 		'capability_type'       => 'post',
 	);
 	register_post_type( 'testimonial', $args );
 }
 add_action( 'init', 'register_testimonial_post_type', 0 );

 function register_faq_post_type() {
 	$labels = array(
 		'name'                  => 'FAQs',
 		'singular_name'         => 'FAQ',
 		'menu_name'             => 'FAQs',
 		'name_admin_bar'        => 'FAQ',
 		'archives'              => 'FAQs',
 		'parent_item_colon'     => 'Parent FAQ:',
 		'all_items'             => 'All FAQs',
 		'add_new_item'          => 'Add New FAQ',
 		'add_new'               => 'Add New',
 		'new_item'              => 'New FAQ',
 		'edit_item'             => 'Edit FAQ',
 		'update_item'           => 'Update FAQ',
 		'view_item'             => 'View FAQ',
 		'search_items'          => 'Search FAQ',
 		'not_found'             => 'Not found',
 		'not_found_in_trash'    => 'Not found in Trash',
 		'featured_image'        => 'Featured Image',
 		'set_featured_image'    => 'Set featured image',
 		'remove_featured_image' => 'Remove featured image',
 		'use_featured_image'    => 'Use as featured image',
 		'insert_into_item'      => 'Insert into FAQ',
 		'uploaded_to_this_item' => 'Uploaded to this FAQ',
 		'items_list'            => 'FAQs list',
 		'items_list_navigation' => 'FAQs list navigation',
 		'filter_items_list'     => 'Filter FAQ list',
 	);
 	$args = array(
 		'label'                 => 'FAQ',
 		'description'           => 'Frequently Asked Questions for Married By Kayla',
 		'labels'                => $labels,
 		'supports'              => array( 'title', 'editor', 'thumbnail', ),
 		'hierarchical'          => false,
 		'public'                => true,
 		'show_ui'               => true,
 		'show_in_menu'          => true,
 		'menu_position'         => 10,
 		'menu_icon'             => 'dashicons-info',
 		'show_in_admin_bar'     => true,
 		'show_in_nav_menus'     => true,
 		'can_export'            => false,
 		'has_archive'           => 'faq',
 		'exclude_from_search'   => false,
 		'publicly_queryable'    => true,
 		'capability_type'       => 'post',
 	);
 	register_post_type( 'faq', $args );
 }
 add_action( 'init', 'register_faq_post_type', 0 );
