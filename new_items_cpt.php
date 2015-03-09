<?php
   /*
   Plugin Name: New Items Custom Post Type
   Description: A plugin to create custom post types for new library items.
   Version: .01
   Author: Peter Binkowski
   Author URI: http://peterbinks.net
   */

  add_action( 'init', 'new_books' );

  function new_books() {
  $labels = array(
    'name'               => _x( 'New Books', 'post type general name' ),
    'singular_name'      => _x( 'New Book', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'Book' ),
    'add_new_item'       => __( 'Add New Book' ),
    'edit_item'          => __( 'Edit Book' ),
    'new_item'           => __( 'New Book' ),
    'all_items'          => __( 'All Books' ),
    'view_item'          => __( 'View Book' ),
    'search_items'       => __( 'Search Books' ),
    'not_found'          => __( 'No books found' ),
    'not_found_in_trash' => __( 'No books found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'New Books',
    
  );
  $args = array(
    'labels'        => $labels,
    'show_ui'       => true,
    'description'   => 'Holds our new books and book specific data',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'custom fields' ),
    'has_archive'   => true,
    'query_var'     => true,
    'rewrite'       =>  array('slug' => 'new-books'),
    'menu_icon'     => 'dashicons-book',
    'taxonomies'    => array('category'), 
  );
  register_post_type( 'new_books', $args ); 
}

add_action( 'init', 'new_albums' );

  function new_albums() {
  $labels = array(
    'name'               => _x( 'New Albums', 'post type general name' ),
    'singular_name'      => _x( 'New Album', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'Album' ),
    'add_new_item'       => __( 'Add New Album' ),
    'edit_item'          => __( 'Edit Album' ),
    'new_item'           => __( 'New Album' ),
    'all_items'          => __( 'All Albums' ),
    'view_item'          => __( 'View Album' ),
    'search_items'       => __( 'Search Album' ),
    'not_found'          => __( 'No albums found' ),
    'not_found_in_trash' => __( 'No albums found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'New Albums',
    
  );
  $args = array(
    'labels'        => $labels,
    'show_ui'       => true,
    'description'   => 'Holds our new albums and album specific data',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'custom fields' ),
    'has_archive'   => true,
    'query_var'     => true,
    'rewrite'       =>  array('slug' => 'new-albums'),
    'menu_icon'     => 'dashicons-album',
    'taxonomies'    => array('category'), 
  );
  register_post_type( 'new_albums', $args ); 
}

add_action( 'init', 'new_movies' );

  function new_movies() {
  $labels = array(
    'name'               => _x( 'New Movies', 'post type general name' ),
    'singular_name'      => _x( 'New Movie', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'Movie' ),
    'add_new_item'       => __( 'Add New Movie' ),
    'edit_item'          => __( 'Edit Movie' ),
    'new_item'           => __( 'New Movie' ),
    'all_items'          => __( 'All Movies' ),
    'view_item'          => __( 'View Movie' ),
    'search_items'       => __( 'Search Movie' ),
    'not_found'          => __( 'No movies found' ),
    'not_found_in_trash' => __( 'No movies found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'New Movies',
    
  );
  $args = array(
    'labels'        => $labels,
    'show_ui'       => true,
    'description'   => 'Holds our new movies and movie specific data',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'custom fields' ),
    'has_archive'   => true,
    'query_var'     => true,
    'rewrite'       =>  array('slug' => 'new-moives'),
    'menu_icon'     => 'dashicons-video-alt2',
    'taxonomies'    => array('category'), 
  );
  register_post_type( 'new_movies', $args ); 
}





?>