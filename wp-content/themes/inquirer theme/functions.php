<?php

function addCSS(){
  wp_enqueue_style('style',get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','addCSS');



//Theme Setup
function learning_wp_setup(){
  //Feature Image Support
  add_theme_support('post-thumbnails');
  // width,height,cropping
  add_image_size('large', 500, 350, true);
  add_image_size('small-thumbnail', 300, 250);
  //nav menus
  register_nav_menus(array(
    'header' => __('Header Menu'),
    'header_dropdown' => __('Header Dropdown Menu'),
    'footer' => __('Footer Menu'),
  ));

  // add post format stream_support
  add_theme_support('post-formats',array('aside','gallery','link'));


}

add_action('after_setup_theme','learning_wp_setup');

function new_excerpt_more( $more ) {
	return ' ...';
}
add_filter('excerpt_more', 'new_excerpt_more');

function article_cats($article){
  $post = $article;
  $taxonomy = 'category';

  // Get the term IDs assigned to post.
  $post_terms = wp_get_object_terms( $post->ID, $taxonomy, array( 'fields' => 'ids' ) );

  // Separator between links.
  $separator = ', ';

  if ( ! empty( $post_terms ) && ! is_wp_error( $post_terms ) ) {

      $term_ids = implode( ',' , $post_terms );

      $terms = wp_list_categories( array(
          'title_li' => '',
          'style'    => 'none',
          'echo'     => false,
          'taxonomy' => $taxonomy,
          'include'  => $term_ids
      ) );

      $terms = rtrim( trim( str_replace( '<br />',  $separator, $terms ) ), $separator );

      // Display post categories.
      echo  $terms;
  }
}
 ?>
