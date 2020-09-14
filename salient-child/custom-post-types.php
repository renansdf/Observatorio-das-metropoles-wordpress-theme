<?php
 
add_action( 'init', 'observatorio_custom_post_types' );
 
// The custom function to register a Boletim post type
function observatorio_custom_post_types() {
 
  // Set the labels, this variable is used in the $args array
  $labels = array(
    'name'               => __( 'Boletins' ),
    'singular_name'      => __( 'Boletim' ),
    'add_new'            => __( 'Add New Boletim' ),
    'add_new_item'       => __( 'Add New Boletim' ),
    'edit_item'          => __( 'Edit Boletim' ),
    'new_item'           => __( 'New Boletim' ),
    'all_items'          => __( 'All Boletins' ),
    'view_item'          => __( 'View Boletim' ),
    'search_items'       => __( 'Search Boletins' ),
    'featured_image'     => 'Poster',
    'set_featured_image' => 'Add Poster'
  );
 
  // The arguments for our post type, to be entered as parameter 2 of register_post_type()
  $args = array(
    'labels'            => $labels,
    'description'       => 'Holds our Boletins and Boletim specific data',
    'public'            => true,
    'menu_position'     => 5,
    'supports'          => array( 'title' ),
    'has_archive'       => true,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'has_archive'       => true,
    'taxonomies'        => array( 'category' ),
    'query_var'         => 'boletim'
  );
 
  register_post_type( 'boletim', $args);
}

?>