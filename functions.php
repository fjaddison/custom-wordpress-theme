<?php

function custom_files() {
  wp_enqueue_script('main-custom-js', get_theme_file_uri('/app.js'), NULL, '1.0', true);
  wp_enqueue_style('custom_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'custom_files');

function custom_features() {
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'custom_features');

?>