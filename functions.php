<?php

function mq_files()
{
  wp_enqueue_style('google_font', '//fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800|Ubuntu:300,400,500,700|Open+Sans:300,400,600,700,800');
  // Swiper CSS & JS
  // wp_enqueue_script('swiper_js', get_theme_file_uri('/vendors/swiper/dist/js/swiper.min.js'),NULL,'1.0',true);
  // wp_enqueue_style('swiper_css', get_theme_file_uri('/vendors/swiper/dist/css/swiper.min.css'));
  // Main CSS & JS
  wp_enqueue_script('bndle_js', get_theme_file_uri('/dist/bundle.min.js'), null, '1.0', true);
  wp_enqueue_style('bundle_css', get_theme_file_uri('/dist/style.min.css'));
  //  wp_enqueue_style('main_style_css',get_stylesheet_uri());
}

//theme support
function mq_features()
{
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post_thumbnails');


  register_nav_menus(array(
    'primary' => __('Primary Menu')
  ));
}

add_action("wp_enqueue_scripts", "mq_files");
add_action("after_setup_theme", "mq_features");
require get_template_directory() . '/inc/customizer.php';

 ?>