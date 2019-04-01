<?php

//////////////   Edits HERE ////////////////////////
$title = 'Our Work';
//slides
$work[0] = array('img' => 'web-grocery.jpg', 'details' => 'Website Acquisition, Migration and Redesign', 'name' => 'Grocery Business','button'=> 'View More', 'url' => '#');
$work[1] = array('img' => 'web-justbeer.jpg', 'details' => 'The Website and App for Beer Drinkers!', 'name' => 'JustBeer', 'button'=> 'View More','url' => '#');
$work[2] = array('img' => 'web-news.jpg', 'details' => 'Hyper-Local News Publisher', 'name' => 'Patch.com','button'=> 'View More', 'url' => '#');
////////////////////////////

  $wp_customize->add_section('work', array(
    'title' => __('Work', 'mobilityQ'),
    'description' => sprintf(__('Work options', 'mobilityQ')),
    'capability' => 'edit_theme_options',
    'priority' => 130
  ));

  $wp_customize->add_setting('work_header', array(
    'default' => _x($title, 'mobilityQ'),
    'type' =>  'theme_mod'
  ));

  $wp_customize->add_control('work_header', array(
    'label' => __('Section Header', 'mobilityQ'),
    'section' =>  'work',
    'priority' => 20
  ));

  //Card 1
  // image

  for ($i = 0; $i < count($work); $i++) {
  $wp_customize->add_setting('work_image_'.($i+1), array(
    'default' => get_bloginfo('template_directory') . '/assets/projects/'.$work[$i]['img'],
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'work_image_'.($i+1), array(
    'label' => __('Card '.($i+1).': Image', 'mobilityQ'),
    'section' =>  'work',
    'settings' => 'work_image_'.($i+1),
    'priority' => 20
  )));

  $wp_customize->add_setting('work_name_'.($i+1), array(
    'default' => _x($work[$i]['name'], 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('work_name_'.($i+1), array(
    'label' => __('Card '.($i+1).': Company Name', 'mobilityQ'),
    'section' =>  'work',
    'priority' => 20
  ));

  $wp_customize->add_setting('work_details_'.($i+1), array(
    'default' => _x($work[$i]['details'], 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('work_details_'.($i+1), array(
    'label' => __('Card '.($i+1).': Work Details', 'mobilityQ'),
    'section' =>  'work',
    'priority' => 20
  ));

  $wp_customize->add_setting('work_button_text_'.($i+1), array(
    'default' => _x($work[$i]['button'], 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('work_button_text_'.($i+1), array(
    'label' => __('Card '.($i+1).': Button Text', 'mobilityQ'),
    'section' =>  'work',
    'priority' => 20
  ));

  $wp_customize->add_setting('work_button_url_'.($i+1), array(
    'default' => _x($work[$i]['url'], 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('work_button_url_'.($i+1), array(
    'label' => __('Card '.($i+1).': Work Button URL', 'mobilityQ'),
    'section' =>  'work',
    'priority' => 20
  ));
  }

 ?>