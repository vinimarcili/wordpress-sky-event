<?php
function my_theme_enqueue_styles() {
  wp_enqueue_style('page-login-css', get_template_directory_uri() . '/assets/css/page-login.css', false, '1.0', 'all');
}
function my_theme_enqueue_scripts() {
  wp_enqueue_script('page-login-js', get_template_directory_uri() . '/assets/js/page-login.js', false, '1.0', true );
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');
add_filter('show_admin_bar', '__return_false');
?>