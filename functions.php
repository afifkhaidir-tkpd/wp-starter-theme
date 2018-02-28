<?php
/* Setup function */
function tkp_theme_setup() {
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}
add_action('after-setup-theme', 'tkp_theme_setup');

/* Theme scripts */
function tkp_theme_scripts() {
  wp_enqueue_style('font-opensans', 'https://fonts.googleapis.com/css?family=Open+Sans:400,600');
  wp_enqueue_style('css-default', get_stylesheet_uri());
  wp_enqueue_style('css-style', get_template_directory_uri().'/dist/css/style.min.css');
  
  wp_enqueue_script('js-main', get_template_directory_uri().'/dist/main.min.js', [], NULL, true);
  // wp_enqueue_script('js-single', get_template_directory_uri().'/dist/js/single.min.js', [], NULL, false);
}
add_action('wp_enqueue_scripts', 'tkp_theme_scripts');
?>