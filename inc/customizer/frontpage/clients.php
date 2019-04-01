<?php

$title = 'Select Clients';


//name of the png image
 $clients = array('abf', 'CandorConnect', 'coop', 'DirtyWater', 'gooodchoices', 'HaleGlobal', 'mni', 'nextDoor', 'smca', 'winsight');


 $wp_customize->add_section('clients', array(
    'title' => __('Clients', 'mobilityQ'),
    'description' => sprintf(__('clients options', 'mobilityQ')),
    'capability' => 'edit_theme_options',
    'priority' => 130
  ));

  $wp_customize->add_setting('clients_header', array(
    'default' => _x($title, 'mobilityQ'),
    'type' =>  'theme_mod'
  ));

  $wp_customize->add_control('clients_header', array(
    'label' => __('Section Header', 'mobilityQ'),
    'section' =>  'clients',
    'priority' => 20
  ));

 for ($i = 0; $i < count($clients); $i++) {

  $wp_customize->add_setting('client_image_'.($i+1), array(
    'default' => get_bloginfo('template_directory') . '/assets/clients/'. $clients[$i].'.png',
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'client_image_'.($i+1), array(
    'label' => __('Client '.($i+1).': Logo', 'mobilityQ'),
    'section' =>  'clients',
    'settings' => 'client_image_'.($i+1),
    'priority' => 20
  )));

 }


 ?>