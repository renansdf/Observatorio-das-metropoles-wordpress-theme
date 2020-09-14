<?php

  include('custom-post-types.php');

  function enqueue_child_theme_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
  }
  add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);

  // ENQUEUE CUSTOM SCRIPTS
  function enqueue_custom_scripts() {
      wp_enqueue_script('custom-script',  get_stylesheet_directory_uri() . '/customScripts.min.js', array('jquery'), true);
  }
  add_action( 'wp_enqueue_scripts', 'enqueue_custom_scripts' );


  // ADD CUSTOM POST TYPES TO SEARCH RESULTS
  function include_cpt_search( $query ) {
	
    if ( $query->is_search ) {
		  $query->set( 'post_type', array( 'post', 'page', 'boletins' ) );
    }
    
    return $query;
    
  }
  add_filter( 'pre_get_posts', 'include_cpt_search' ); 

?>