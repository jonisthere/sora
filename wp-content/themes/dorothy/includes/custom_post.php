<?php
// ==================================================================
// Post type - Slider
// ==================================================================
function post_type_slider() {
register_post_type('sliders', 
  array(
  'label'               => 'Slider',
  'singular'            => 'Slider',
  'description'         => 'Slider content',
  'public'              => true,
  'capability_type'     => 'page',
  'exclude_from_search' => true,
  'hierarchical'        => true,
  'query_var'           => true,
  'menu_position'       => 5,
  'menu_icon'           => 'dashicons-slides',
  'supports'            => array(
    'title',
    'thumbnail',
    'page-attributes',
    'editor',
  ),
  'rewrite'             => true,
  ));
  
}

add_action('init', 'post_type_slider');

function events_cpt_setup () {
  
    // Custom post type for PEOPLE
    register_post_type( 'event', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
      // let's now add all the options for this post type
      array( 'labels' => array(
        'name' => __( 'Event', 'bonestheme' ), /* This is the Title of the Group */
        'singular_name' => __( 'Event', 'bonestheme' ), /* This is the individual type */
        'all_items' => __( 'Event', 'bonestheme' ), /* the all items menu item */
        'add_new' => __( 'Add New Event', 'bonestheme' ), /* The add new menu item */
        'add_new_item' => __( 'Add New Event', 'bonestheme' ), /* Add New Display Title */
        'edit' => __( 'Edit Event', 'bonestheme' ), /* Edit Dialog */
        'edit_item' => __( 'Edit Event', 'bonestheme' ), /* Edit Display Title */
        'new_item' => __( 'New Event', 'bonestheme' ), /* New Display Title */
        'view_item' => __( 'View Event', 'bonestheme' ), /* View Display Title */
        'search_items' => __( 'Search Event', 'bonestheme' ), /* Search Custom Type Title */ 
        'not_found' =>  __( 'Nothing found in the Database.', 'bonestheme' ), /* This displays if there are no entries yet */ 
        'not_found_in_trash' => __( 'Nothing found in Trash', 'bonestheme' ), /* This displays if there is nothing in the trash */
        'parent_item_colon' => ''
        ), /* end of arrays */
        'description' => __( 'This is the Event custom post type', 'bonestheme' ), /* Custom Type Description */
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'show_ui' => true,
        'query_var' => true,
        'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
        //'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png', /* the icon for the custom post type menu */
        'rewrite' => array( 'slug' => 'events', 'with_front' => false ), /* you can specify its url slug */
        'has_archive' => false, /* you can rename the slug here */
        'capability_type' => 'post',
        'hierarchical' => false,
        /* the next one is important, it tells what's enabled in the post editor */
        'supports' => array( 'title', 'author', 'custom-fields','revisions', 'sticky', 'thumbnail','page-attributes','editor')
      ) /* end of options */
    ); /* end of register post type */


    register_post_type( 'designer', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
      // let's now add all the options for this post type
      array( 'labels' => array(
        'name' => __( 'Designer', 'bonestheme' ), /* This is the Title of the Group */
        'singular_name' => __( 'Designer', 'bonestheme' ), /* This is the individual type */
        'all_items' => __( 'Designer', 'bonestheme' ), /* the all items menu item */
        'add_new' => __( 'Add New Designer', 'bonestheme' ), /* The add new menu item */
        'add_new_item' => __( 'Add New Designer', 'bonestheme' ), /* Add New Display Title */
        'edit' => __( 'Edit Designer', 'bonestheme' ), /* Edit Dialog */
        'edit_item' => __( 'Edit Designer', 'bonestheme' ), /* Edit Display Title */
        'new_item' => __( 'New Designer', 'bonestheme' ), /* New Display Title */
        'view_item' => __( 'View Designer', 'bonestheme' ), /* View Display Title */
        'search_items' => __( 'Search Designer', 'bonestheme' ), /* Search Custom Type Title */ 
        'not_found' =>  __( 'Nothing found in the Database.', 'bonestheme' ), /* This displays if there are no entries yet */ 
        'not_found_in_trash' => __( 'Nothing found in Trash', 'bonestheme' ), /* This displays if there is nothing in the trash */
        'parent_item_colon' => ''
        ), /* end of arrays */
        'description' => __( 'This is the Designer custom post type', 'bonestheme' ), /* Custom Type Description */
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'show_ui' => true,
        'query_var' => true,
        'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
        //'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png', /* the icon for the custom post type menu */
        'rewrite' => array( 'slug' => 'designers', 'with_front' => false ), /* you can specify its url slug */
        'has_archive' => false, /* you can rename the slug here */
        'capability_type' => 'post',
        'hierarchical' => false,
        /* the next one is important, it tells what's enabled in the post editor */
        'supports' => array( 'title', 'author', 'custom-fields','revisions', 'sticky', 'thumbnail','page-attributes','editor')
      ) /* end of options */
    ); /* end of register post type */
  }

  add_action('init', 'events_cpt_setup');

  //flush_rewrite_rules();