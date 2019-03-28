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

function customize_MQ($wp_customize)
{
  $wp_customize->add_section('banner', array(
    //banner section
    'title' => __('Banner', 'mobilityQ'),
    'description_top' => sprintf(__('Your Full-Service', 'mobilityQ')),
    'description_bottom' => sprintf(__('Digital Agency', 'mobilityQ')),
    'priority' => 130
  ));

  $wp_customize->add_setting('banner_heading', array(
    'default' => _x('banner Heading', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('banner_heading', array(
    'label' => __('Heading', 'mobilityQ'),
    'section' =>  'banner',
    'priority' => 20
  ));

  //bg image
  $wp_customize->add_setting('banner_image', array(
    'default' => get_bloginfo('template_directory').'/assets/media/hero_mask_compressed_h264.mp4',
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize,'banner_image', array(
    'label' => __('Banner Image', 'mobilityQ'),
    'section' =>  'banner',
    'settings' => 'banner_image',
    'priority' => 20
  )));
}

add_action("wp_enqueue_scripts", "mq_files");
add_action("after_setup_theme", "mq_features");
add_action("customize_register", "customize_MQ");

?>
