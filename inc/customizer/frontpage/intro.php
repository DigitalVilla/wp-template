<?php
 ////////////  INTRO SECTION ////////////////////////////////////
  $wp_customize->add_section('intro', array(
    'title' => __('Intro', 'mobilityQ'),
    'description' => sprintf(__('intro options', 'mobilityQ')),
    'capability' => 'edit_theme_options',
    'priority' => 130
  ));

  //HEADER top
  $wp_customize->add_setting('intro_heading', array(
    'default' => _x('More than just a', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('intro_heading', array(
    'label' => __('Intro Title', 'mobilityQ'),
    'section' =>  'intro',
    'priority' => 20
  ));

  //HEADER bottom
  $wp_customize->add_setting('intro_subheading', array(
    'default' => _x('web dev shop', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('intro_subheading', array(
    'label' => __('Intro Title', 'mobilityQ'),
    'section' =>  'intro',
    'priority' => 20
  ));

  //text top
  $wp_customize->add_setting('intro_main_text', array(
    'default' => _x('Based in Calgary, AB, Mobility Quotient (MQ) specializes in software development, marketing, business process management, and digital transformations.', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('intro_main_text', array(
    'label' => __('Main Text', 'mobilityQ'),
    'section' =>  'intro',
    'type' => 'text',
    'priority' => 20
  ));
  //text bottom
  $wp_customize->add_setting('intro_secondary_text', array(
    'default' => _x('If you need a team to help you with your website, then we’re the people to call. However, we’re more than just a web development shop. We can improve your online brand strategy, we can design mockups to visualize your next great idea, and we can help you reinvent your business by embracing technology.', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('intro_secondary_text', array(
    'label' => __('Secondary Text', 'mobilityQ'),
    'section' =>  'intro',
    'priority' => 20
  ));

  //BUTTON TEXT
  $wp_customize->add_setting('intro_button_text', array(
    'default' => _x('More About Us', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('intro_button_text', array(
    'label' => __('Button Text', 'mobilityQ'),
    'section' =>  'intro',
    'priority' => 20
  ));

    //BUTTON URL
  $wp_customize->add_setting('intro_button_url', array(
    'default' => _x('#', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('intro_button_url', array(
    'label' => __('Button URL', 'mobilityQ'),
    'section' =>  'intro',
    'priority' => 20
  ));

  //BG image large
  $wp_customize->add_setting('intro_image', array(
    'default' => get_bloginfo('template_directory') . '/assets/design/MQgraph02-comp.png',
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'intro_image', array(
    'label' => __('Intro Image', 'mobilityQ'),
    'section' =>  'intro',
    'settings' => 'intro_image',
    'priority' => 20
  )));
  //BG image Mobile
  $wp_customize->add_setting('intro_mobile_image', array(
    'default' => get_bloginfo('template_directory') . '/assets/design/mobility-quotient-rocky-mountains-bg.jpg',
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'intro_mobile_image', array(
    'label' => __('Mobile Image', 'mobilityQ'),
    'section' =>  'intro',
    'settings' => 'intro_mobile_image',
    'priority' => 20
  )));

 ?>