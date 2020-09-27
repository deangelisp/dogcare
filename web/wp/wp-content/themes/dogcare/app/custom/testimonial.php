<?php
/**
 * Register a custom post type called "testimonial".
 *
 * @see get_post_type_labels() for label keys.
 */
function custom_post_type_testimonial() {
    $labels = array(
        'name'                  => 'Testimonials',
        'singular_name'         => 'Testimonial',
        'menu_name'             => 'Testimonials',
        'name_admin_bar'        => 'Testimonial',
        'add_new'               => 'Add New',
        'add_new_item'          => 'Add New testimonial',
        'new_item'              => 'New testimonial',
        'edit_item'             => 'Edit testimonial',
        'view_item'             => 'View testimonial',
        'all_items'             => 'All testimonials',
        'search_items'          => 'Search testimonials',
        'parent_item_colon'     => 'Parent testimonials:',
        'not_found'             => 'No testimonials found.',
        'not_found_in_trash'    => 'No testimonials found in Trash.',
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'testimonial' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'           => 'dashicons-format-status',
        'supports'           => array( 'title',  'thumbnail', 'excerpt', ),
    );
 
    register_post_type( 'testimonial', $args );
}
 
add_action( 'init', 'custom_post_type_testimonial' );