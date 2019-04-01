<?php


///// DEFAULT VALUES
$title = 'Trasnform your brand With';
$button = 'Free Consultation';
$bg_image = '/assets/design/c_action_bg.jpg';
$logo = '/assets/svg/MQfull-logoWhite.svg';
$url = '#';
/////////////////


 $wp_customize->add_section('contact', array(
    'title' => __('Contact', 'mobilityQ'),
    'description' => sprintf(__('Contact options', 'mobilityQ')),
    'capability' => 'edit_theme_options',
    'priority' => 130
  ));

  $wp_customize->add_setting('contact_header', array(
    'default' => _x($title, 'mobilityQ'),
    'type' =>  'theme_mod'
  ));

  $wp_customize->add_control('contact_header', array(
    'label' => __('Section Header', 'mobilityQ'),
    'section' =>  'contact',
    'priority' => 20
  ));

 $wp_customize->add_setting('contact_button', array(
    'default' => _x($button, 'mobilityQ'),
    'type' =>  'theme_mod'
  ));

  $wp_customize->add_control('contact_button', array(
    'label' => __('Button Text', 'mobilityQ'),
    'section' =>  'contact',
    'priority' => 20
  ));

 $wp_customize->add_setting('contact_button_url', array(
    'default' => _x($url, 'mobilityQ'),
    'type' =>  'theme_mod'
  ));

  $wp_customize->add_control('contact_button_url', array(
    'label' => __('Button URL', 'mobilityQ'),
    'section' =>  'contact',
    'priority' => 20
  ));


//bacground Image
  $wp_customize->add_setting('contact_bg_image', array(
    'default' => get_bloginfo('template_directory') . $bg_image,
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'contact_bg_image', array(
    'label' => __('Background Image', 'mobilityQ'),
    'section' =>  'contact',
    'settings' => 'contact_bg_image',
    'priority' => 20
  )));

//bacground Image
  $wp_customize->add_setting('contact_logo', array(
    'default' => get_bloginfo('template_directory') . $logo,
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'contact_logo', array(
    'label' => __('Contact Logo', 'mobilityQ'),
    'section' =>  'contact',
    'settings' => 'contact_logo',
    'priority' => 20
  )));




 ?>