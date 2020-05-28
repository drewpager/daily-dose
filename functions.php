<?php 

function emd_theme_support() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support( 'custom-logo', array(
    'height' => 480,
    'width'  => 720,
) );
}

add_action('after_setup_theme', 'emd_theme_support');

function emd_register_styles(){
  $version = wp_get_theme()->get( 'Version' );
  wp_enqueue_style('emd-styles', get_template_directory_uri() . '/style.css', array(), $version, 'all');
  wp_enqueue_style('emd-font', "https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,600,700|Material+Icons", array());


}

add_action('wp_enqueue_scripts', 'emd_register_styles');

function emd_register_scripts(){
  wp_enqueue_script('emd-jquery', "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js", array(), true);
  wp_enqueue_script('emd-js', get_template_directory_uri() . '/assets/js/main.js', array(), true);
  wp_enqueue_script('emd-plugins', get_template_directory_uri() . '/assets/js/plugins.js', array(), true);
  // wp_enqueue_script('emd-scss', get_template_directory_uri() . '/assets/scss', array(), true);
}

add_action('wp_enqueue_scripts', 'emd_register_scripts');

?>