<?php

//////////////////////
$title = 'Proud Member';
$badges = array('c_chamber_logo.jpg','made_calgary_logo.jpg');
/////////////////////

 $wp_customize->add_section('badges', array(
    'title' => __('Badges', 'mobilityQ'),
    'description' => sprintf(__('badges options', 'mobilityQ')),
    'capability' => 'edit_theme_options',
    'priority' => 130
  ));

  $wp_customize->add_setting('badges_header', array(
    'default' => _x($title, 'mobilityQ'),
    'type' =>  'theme_mod'
  ));

  $wp_customize->add_control('badges_header', array(
    'label' => __('Section Header', 'mobilityQ'),
    'section' =>  'badges',
    'priority' => 20
  ));

 for ($i = 0; $i < count($badges); $i++) {
    $wp_customize->add_setting('badge_image_'.($i+1), array(
    'default' => get_bloginfo('template_directory') . '/assets/design/'. $badges[$i],
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'badge_image_'.($i+1), array(
    'label' => __('Badge '.($i+1).': Logo', 'mobilityQ'),
    'section' =>  'badges',
    'settings' => 'badge_image_'.($i+1),
    'priority' => 20
  )));


 }


 ?>