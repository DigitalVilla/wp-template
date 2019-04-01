<?php
////////////  PROJECT SECTION ////////////////////////////////////

  $wp_customize->add_section('projects', array(
    'title' => __('Projects', 'mobilityQ'),
    'description' => sprintf(__('Project options', 'mobilityQ')),
    'capability' => 'edit_theme_options',
    'priority' => 130
  ));

  $wp_customize->add_setting('project_button_text', array(
    'default' => _x('More Projects', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));

  $wp_customize->add_control('project_button_text', array(
    'label' => __('Button Text', 'mobilityQ'),
    'section' =>  'projects',
    'priority' => 20
  ));

  $wp_customize->add_setting('project_button_url', array(
    'default' => _x('#', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('project_button_url', array(
    'label' => __('Button URL', 'mobilityQ'),
    'section' =>  'projects',
    'priority' => 20
  ));

  //Card 1

  // image
  $wp_customize->add_setting('project_image_1', array(
    'default' => get_bloginfo('template_directory') . '/assets/projects/pro-Ahlstrom-Wright-cover.jpg',
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'project_image_1', array(
    'label' => __('Project 1: Image', 'mobilityQ'),
    'section' =>  'projects',
    'settings' => 'project_image_1',
    'priority' => 20
  )));

  $wp_customize->add_setting('project_name_1', array(
    'default' => _x('Ahlstrom Wright', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('project_name_1', array(
    'label' => __('Project 1: Company Name', 'mobilityQ'),
    'section' =>  'projects',
    'priority' => 20
  ));

  $wp_customize->add_setting('project_name_url_1', array(
    'default' => _x('#', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('project_name_url_1', array(
    'label' => __('Project URL', 'mobilityQ'),
    'section' =>  'projects',
    'priority' => 20
  ));

  $wp_customize->add_setting('project_details_1', array(
    'default' => _x('Website Rebuild & Brand Alignment', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('project_details_1', array(
    'label' => __('Project 1: Details', 'mobilityQ'),
    'section' =>  'projects',
    'priority' => 20
  ));

  //Card 2

  // image
  $wp_customize->add_setting('project_image_2', array(
    'default' => get_bloginfo('template_directory') . '/assets/projects/pro-xtime-cover.jpg',
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'project_image_2', array(
    'label' => __('Project 2: Image', 'mobilityQ'),
    'section' =>  'projects',
    'settings' => 'project_image_2',
    'priority' => 20
  )));

  $wp_customize->add_setting('project_name_2', array(
    'default' => _x('XTIME', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('project_name_2', array(
    'label' => __('Project 2: Company Name', 'mobilityQ'),
    'section' =>  'projects',
    'priority' => 20
  ));

  $wp_customize->add_setting('project_name_url_2', array(
    'default' => _x('#', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('project_name_url_2', array(
    'label' => __('Project URL', 'mobilityQ'),
    'section' =>  'projects',
    'priority' => 20
  ));

  $wp_customize->add_setting('project_details_2', array(
    'default' => _x('Customer Relationship Manager', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('project_details_2', array(
    'label' => __('Project 2: Details', 'mobilityQ'),
    'section' =>  'projects',
    'priority' => 20
  ));

 ?>