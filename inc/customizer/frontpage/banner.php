 <?php
 //BANNER SECTION
  $wp_customize->add_section('banner', array(
    'title' => __('Banner', 'mobilityQ'),
    'description' => sprintf(__('Banner options', 'mobilityQ')),
    'capability' => 'edit_theme_options',
    'priority' => 130
  ));

  //HEADER top
  $wp_customize->add_setting('banner_heading', array(
    'default' => _x('Your Full-Service', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('banner_heading', array(
    'label' => __('Heading', 'mobilityQ'),
    'section' =>  'banner',
    'priority' => 20
  ));
  //HEADER bottom
  $wp_customize->add_setting('banner_subheading', array(
    'default' => _x('Digital Agency', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('banner_subheading', array(
    'label' => __('Sub-Heading', 'mobilityQ'),
    'section' =>  'banner',
    'priority' => 20
  ));

  //BUTTON TEXT
  $wp_customize->add_setting('banner_button_text', array(
    'default' => _x('Services we offer', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('banner_button_text', array(
    'label' => __('Button Text', 'mobilityQ'),
    'section' =>  'banner',
    'priority' => 20
  ));
  //BUTTON URL
  $wp_customize->add_setting('banner_button_url', array(
    'default' => _x('#', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('banner_button_url', array(
    'label' => __('Button URL', 'mobilityQ'),
    'section' =>  'banner',
    'priority' => 20
  ));

  //BG Video
  $wp_customize->add_setting('banner_video', array(
    'default' => get_bloginfo('template_directory') . '/assets/media/hero_mask_compressed_h264.mp4',
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'banner_video', array(
    'label' => __('Banner Video ', 'mobilityQ'),
    'settings' => 'banner_video',
    'section' =>  'banner',
    'mime_type' => 'video',
    'priority' => 20
  )));
  //BG image Mobile
  $wp_customize->add_setting('banner_mobile_image', array(
    'default' => get_bloginfo('template_directory') . '/assets/design/home-hero-mobile-logo.png',
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_mobile_image', array(
    'label' => __('Banner Mobile Image', 'mobilityQ'),
    'section' =>  'banner',
    'settings' => 'banner_mobile_image',
    'priority' => 20
  )));
  ?>