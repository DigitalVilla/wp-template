<?php
/////////////////// SERVICES SECTION /////////////
$title = 'What We Do';
///Array of services
$services[0] = array('svg' => 'Blueprint-Icon.svg', 'name' => 'Bluepints', 'details' => 'Create the foundation for your idea', 'button' => 'discover blueprints', 'url' => '#');
$services[1] = array('svg' => 'Creative-icon.svg', 'name' => 'Creative services', 'details' => 'Design, branding, marketing & copy writing', 'button' => 'get creative', 'url' => '#');
$services[2] = array('svg' => 'Implementation-icon.svg', 'name' => 'Custom development', 'details' => 'Software, websites, & mobile apps', 'button' => 'explore services', 'url' => '#');
$services[3] = array('svg' => 'Strategic-icon.svg', 'name' => 'Strategic consulting', 'details' => 'Project audits, planning & management', 'button' => 'view options', 'url' => '#');

//////////////////////////////////

 $wp_customize->add_section('services', array(
    'title' => __('Services', 'mobilityQ'),
    'description' => sprintf(__('services options', 'mobilityQ')),
    'capability' => 'edit_theme_options',
    'priority' => 130
  ));

  $wp_customize->add_setting('services_header', array(
    'default' => _x($title, 'mobilityQ'),
    'type' =>  'theme_mod'
  ));

  $wp_customize->add_control('services_header', array(
    'label' => __('Section Header', 'mobilityQ'),
    'section' =>  'services',
    'priority' => 20
  ));

 ///// Cards
 for ($i = 0; $i < count($services); $i++) {
  $wp_customize->add_setting('service_image_'.($i+1), array(
    'default' => get_bloginfo('template_directory') . '/assets/svg/'.$services[$i]['svg'],
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'service_image_'.($i+1), array(
    'label' => __('Service '.($i+1).': Image', 'mobilityQ'),
    'section' =>  'services',
    'settings' => 'service_image_'.($i+1),
    'priority' => 20
  )));

  $wp_customize->add_setting('service_name_'.($i+1), array(
    'default' => _x($services[$i]['name'], 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('service_name_'.($i+1), array(
    'label' => __('Service '.($i+1).': Name', 'mobilityQ'),
    'section' =>  'services',
    'priority' => 20
  ));

  $wp_customize->add_setting('service_details_'.($i+1), array(
    'default' => _x($services[$i]['details'], 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('service_details_'.($i+1), array(
    'label' => __('Service '.($i+1).': Details', 'mobilityQ'),
    'section' =>  'services',
    'priority' => 20
  ));

 $wp_customize->add_setting('service_button_text_'.($i+1), array(
    'default' => _x($services[$i]['button'], 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('service_button_text_'.($i+1), array(
    'label' => __('Service '.($i+1).': Button Text', 'mobilityQ'),
    'section' =>  'services',
    'priority' => 20
  ));

  $wp_customize->add_setting('service_button_url_'.($i+1), array(
    'default' => _x($services[$i]['url'], 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('service_button_url_'.($i+1), array(
    'label' => __('Service '.($i+1).': Button URL', 'mobilityQ'),
    'section' =>  'services',
    'priority' => 20
  ));
 }

 ?>