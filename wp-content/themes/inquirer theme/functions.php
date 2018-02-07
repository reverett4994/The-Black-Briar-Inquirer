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
  add_image_size('small-thumbnail', 180, 120, true);
  add_image_size('banner-image', 920, 210, array( 'left', 'top' ));
  add_image_size('menu', 300, 250);
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
 ?>
