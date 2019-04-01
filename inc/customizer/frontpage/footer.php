<?php
 $wp_customize->add_section('footer', array(
    'title' => __('Footer', 'mobilityQ'),
    'description' => sprintf(__('Footer options', 'mobilityQ')),
    'capability' => 'edit_theme_options',
    'priority' => 130
  ));

////DEFAULT VALUES
$copyright ='© 2019 Mobility Quotient Solutions Inc. All rights reserved.';
//////////////////


////ADDRESS DEFAULT VALUES
$tags =  array('place', 'street', 'street2', 'city', 'country');
$address = array(
  $tags[0] => 'Office',
  $tags[1] => 'Suite 1720, 144 4th Ave',
  $tags[2] => 'South West',
  $tags[3] => 'Calgary, AB T2P 3N4',
  $tags[4] => 'Canada',
);

 for ($i = 0; $i < count($address); $i++) {
  $wp_customize->add_setting('footer_address_'. $tags[$i], array(
    'default' => _x($address[$tags[$i]], 'mobilityQ'),
    'type' =>  'theme_mod'
  ));

  $wp_customize->add_control('footer_address_'.$tags[$i], array(
    'label' => __('Address '.$tags[$i], 'mobilityQ'),
    'section' =>  'footer',
    'priority' => 20
  ));
 }


////CONTACT DEFAULT VALUES
$tags =  array('title', 'phone', 'email');
$contact = array(
  $tags[0] => 'Contact',
  $tags[1] => '+1 (833) GO-ASK-MQ',
  $tags[2] => 'inquiries@askmq.com',
);

 for ($i = 0; $i < count($contact); $i++) {
  $wp_customize->add_setting('footer_contact_'. $tags[$i], array(
    'default' => _x($contact[$tags[$i]], 'mobilityQ'),
    'type' =>  'theme_mod'
  ));

  $wp_customize->add_control('footer_contact_'.$tags[$i], array(
    'label' => __('Contact '.$tags[$i], 'mobilityQ'),
    'section' =>  'footer',
    'priority' => 20
  ));
 }



////HOURS DEFAULT VALUES
$tags =  array('title', 'days', 'hours');
$hours = array(
  $tags[0] => 'Hours',
  $tags[1] => 'Monday to Friday',
  $tags[2] => '9:00 am - 5:00 pm',
);

 for ($i = 0; $i < count($hours); $i++) {
  $wp_customize->add_setting('footer_hours_'. $tags[$i], array(
    'default' => _x($hours[$tags[$i]], 'mobilityQ'),
    'type' =>  'theme_mod'
  ));

  $wp_customize->add_control('footer_hours_'.$tags[$i], array(
    'label' => __('Hours '.$tags[$i], 'mobilityQ'),
    'section' =>  'footer',
    'priority' => 20
  ));
 }

  $wp_customize->add_setting('footer_rights', array(
    'default' => _x($copyright, 'mobilityQ'),
    'type' =>  'theme_mod'
  ));

  $wp_customize->add_control('footer_rights', array(
    'label' => __('Copyright', 'mobilityQ'),
    'section' =>  'footer',
    'priority' => 20
  ));


 ?>