<?php
function customize_MQ($wp_customize)
{
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
//////////////   OUR WORK SECTION ////////////////////////

  $wp_customize->add_section('work', array(
    'title' => __('Work', 'mobilityQ'),
    'description' => sprintf(__('Work options', 'mobilityQ')),
    'capability' => 'edit_theme_options',
    'priority' => 130
  ));

  $wp_customize->add_setting('work_header', array(
    'default' => _x('Our Work', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));

  $wp_customize->add_control('work_header', array(
    'label' => __('Section Header', 'mobilityQ'),
    'section' =>  'work',
    'priority' => 20
  ));

  //Card 1
  // image
  $wp_customize->add_setting('work_image_1', array(
    'default' => get_bloginfo('template_directory') . '/assets/projects/web-grocery.jpg',
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'work_image_1', array(
    'label' => __('Card 1: Image', 'mobilityQ'),
    'section' =>  'work',
    'settings' => 'work_image_1',
    'priority' => 20
  )));

  $wp_customize->add_setting('work_name_1', array(
    'default' => _x('Grocery Business', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('work_name_1', array(
    'label' => __('Card 1: Company Name', 'mobilityQ'),
    'section' =>  'work',
    'priority' => 20
  ));

  $wp_customize->add_setting('work_details_1', array(
    'default' => _x('Website Acquisition, Migration and Redesign', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('work_details_1', array(
    'label' => __('Card 1: Work Details', 'mobilityQ'),
    'section' =>  'work',
    'priority' => 20
  ));

  $wp_customize->add_setting('work_button_text_1', array(
    'default' => _x('View More', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('work_button_text_1', array(
    'label' => __('Card 1: Work Details', 'mobilityQ'),
    'section' =>  'work',
    'priority' => 20
  ));

  $wp_customize->add_setting('work_button_url_1', array(
    'default' => _x('#', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('work_button_url_1', array(
    'label' => __('Card 1: Work Details', 'mobilityQ'),
    'section' =>  'work',
    'priority' => 20
  ));



  //Card 2
  // image
  $wp_customize->add_setting('work_image_2', array(
    'default' => get_bloginfo('template_directory') . '/assets/projects/web-justbeer.jpg',
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'work_image_2', array(
    'label' => __('Card 2: Image', 'mobilityQ'),
    'section' =>  'work',
    'settings' => 'work_image_2',
    'priority' => 20
  )));

  $wp_customize->add_setting('work_name_2', array(
    'default' => _x('JustBeer', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('work_name_2', array(
    'label' => __('Card 2: Company Name', 'mobilityQ'),
    'section' =>  'work',
    'priority' => 20
  ));
  $wp_customize->add_setting('work_details_2', array(
    'default' => _x('The Website and App for Beer Drinkers!', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('work_details_2', array(
    'label' => __('Card 2: Work Details', 'mobilityQ'),
    'section' =>  'work',
    'priority' => 20
  ));

    $wp_customize->add_setting('work_button_text_2', array(
    'default' => _x('View More', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('work_button_text_2', array(
    'label' => __('Card 1: Work Details', 'mobilityQ'),
    'section' =>  'work',
    'priority' => 20
  ));

  $wp_customize->add_setting('work_button_url_2', array(
    'default' => _x('#', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('work_button_url_2', array(
    'label' => __('Card 1: Work Details', 'mobilityQ'),
    'section' =>  'work',
    'priority' => 20
  ));




  //Card 3
  // image
  $wp_customize->add_setting('work_image_3', array(
    'default' => get_bloginfo('template_directory') . '/assets/projects/web-news.jpg',
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'work_image_3', array(
    'label' => __('Card 3: Image', 'mobilityQ'),
    'section' =>  'work',
    'settings' => 'work_image_3',
    'priority' => 20
  )));

  $wp_customize->add_setting('work_name_3', array(
    'default' => _x('Patch.com', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('work_name_3', array(
    'label' => __('Card 3: Company Name', 'mobilityQ'),
    'section' =>  'work',
    'priority' => 20
  ));
  $wp_customize->add_setting('work_details_3', array(
    'default' => _x('Hyper-Local News Publisher', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('work_details_3', array(
    'label' => __('Card 3: Work Details', 'mobilityQ'),
    'section' =>  'work',
    'priority' => 20
  ));

    $wp_customize->add_setting('work_button_text_3', array(
    'default' => _x('View More', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('work_button_text_3', array(
    'label' => __('Card 1: Work Details', 'mobilityQ'),
    'section' =>  'work',
    'priority' => 20
  ));

  $wp_customize->add_setting('work_button_url_3', array(
    'default' => _x('#', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('work_button_url_3', array(
    'label' => __('Card 1: Work Details', 'mobilityQ'),
    'section' =>  'work',
    'priority' => 20
  ));



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

/////////////////// SERVICES SECTION /////////////

 $wp_customize->add_section('services', array(
    'title' => __('Services', 'mobilityQ'),
    'description' => sprintf(__('services options', 'mobilityQ')),
    'capability' => 'edit_theme_options',
    'priority' => 130
  ));

  $wp_customize->add_setting('services_header', array(
    'default' => _x('What We Do', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));

  $wp_customize->add_control('services_header', array(
    'label' => __('Section Header', 'mobilityQ'),
    'section' =>  'services',
    'priority' => 20
  ));

 ///// Card 1
  $wp_customize->add_setting('service_image_1', array(
    'default' => get_bloginfo('template_directory') . '/assets/svg/Blueprint-Icon.svg',
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'service_image_1', array(
    'label' => __('Service 1: Image', 'mobilityQ'),
    'section' =>  'services',
    'settings' => 'service_image_1',
    'priority' => 20
  )));

  $wp_customize->add_setting('service_name_1', array(
    'default' => _x('Bluepints', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('service_name_1', array(
    'label' => __('Service 1: Name', 'mobilityQ'),
    'section' =>  'services',
    'priority' => 20
  ));

  $wp_customize->add_setting('service_details_1', array(
    'default' => _x('Create the foundation for your idea', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('service_details_1', array(
    'label' => __('Service 1: Details', 'mobilityQ'),
    'section' =>  'services',
    'priority' => 20
  ));

 $wp_customize->add_setting('service_button_text_1', array(
    'default' => _x('Discover Bluepints', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('service_button_text_1', array(
    'label' => __('Service 1: Button Text', 'mobilityQ'),
    'section' =>  'services',
    'priority' => 20
  ));

  $wp_customize->add_setting('service_button_url_1', array(
    'default' => _x('#', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('service_button_url_1', array(
    'label' => __('Service 1: Button URL', 'mobilityQ'),
    'section' =>  'services',
    'priority' => 20
  ));

///// Card 2
  $wp_customize->add_setting('service_image_2', array(
    'default' => get_bloginfo('template_directory') . '/assets/svg/Creative-icon.svg',
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'service_image_2', array(
    'label' => __('Service 2: Image', 'mobilityQ'),
    'section' =>  'services',
    'settings' => 'service_image_2',
    'priority' => 20
  )));

  $wp_customize->add_setting('service_name_2', array(
    'default' => _x('CREATIVE SERVICES', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('service_name_2', array(
    'label' => __('Service 2: Name', 'mobilityQ'),
    'section' =>  'services',
    'priority' => 20
  ));

  $wp_customize->add_setting('service_details_2', array(
    'default' => _x('Design, branding, marketing & copy writing', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('service_details_2', array(
    'label' => __('Service 2: Details', 'mobilityQ'),
    'section' =>  'services',
    'priority' => 20
  ));

 $wp_customize->add_setting('service_button_text_2', array(
    'default' => _x('Get Creative', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('service_button_text_2', array(
    'label' => __('Service 2: Button Text', 'mobilityQ'),
    'section' =>  'services',
    'priority' => 20
  ));

  $wp_customize->add_setting('service_button_url_2', array(
    'default' => _x('#', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('service_button_url_2', array(
    'label' => __('Service 2: Button URL', 'mobilityQ'),
    'section' =>  'services',
    'priority' => 20
  ));

  ///// Card 3
  $wp_customize->add_setting('service_image_3', array(
    'default' => get_bloginfo('template_directory') . '/assets/svg/Implementation-icon.svg',
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'service_image_3', array(
    'label' => __('Service 3: Image', 'mobilityQ'),
    'section' =>  'services',
    'settings' => 'service_image_3',
    'priority' => 20
  )));

  $wp_customize->add_setting('service_name_3', array(
    'default' => _x('CUSTOM DEVELOPMENT', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('service_name_3', array(
    'label' => __('Service 3: Name', 'mobilityQ'),
    'section' =>  'services',
    'priority' => 20
  ));

  $wp_customize->add_setting('service_details_3', array(
    'default' => _x('Software, websites, & mobile apps', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('service_details_3', array(
    'label' => __('Service 3: Details', 'mobilityQ'),
    'section' =>  'services',
    'priority' => 20
  ));

 $wp_customize->add_setting('service_button_text_3', array(
    'default' => _x('Explore Services', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('service_button_text_3', array(
    'label' => __('Service 3: Button Text', 'mobilityQ'),
    'section' =>  'services',
    'priority' => 20
  ));

  $wp_customize->add_setting('service_button_url_3', array(
    'default' => _x('#', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('service_button_url_3', array(
    'label' => __('Service 3: Button URL', 'mobilityQ'),
    'section' =>  'services',
    'priority' => 20
  ));

  ///// Card 4
  $wp_customize->add_setting('service_image_4', array(
    'default' => get_bloginfo('template_directory') . '/assets/svg/Strategic-icon.svg',
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'service_image_4', array(
    'label' => __('Service 4: Image', 'mobilityQ'),
    'section' =>  'services',
    'settings' => 'service_image_4',
    'priority' => 20
  )));

  $wp_customize->add_setting('service_name_4', array(
    'default' => _x('STRATEGIC CONSULTING', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('service_name_4', array(
    'label' => __('Service 4: Name', 'mobilityQ'),
    'section' =>  'services',
    'priority' => 20
  ));

  $wp_customize->add_setting('service_details_4', array(
    'default' => _x('Project audits, planning & management', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('service_details_4', array(
    'label' => __('Service 4: Details', 'mobilityQ'),
    'section' =>  'services',
    'priority' => 20
  ));

 $wp_customize->add_setting('service_button_text_4', array(
    'default' => _x('View Options', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('service_button_text_4', array(
    'label' => __('Service 4: Button Text', 'mobilityQ'),
    'section' =>  'services',
    'priority' => 20
  ));

  $wp_customize->add_setting('service_button_url_4', array(
    'default' => _x('#', 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('service_button_url_4', array(
    'label' => __('Service 4: Button URL', 'mobilityQ'),
    'section' =>  'services',
    'priority' => 20
  ));



}

add_action("customize_register", "customize_MQ");
 ?>