<?php

  $wp_customize->add_section('comments', array(
    'title' => __('Comments', 'mobilityQ'),
    'description' => sprintf(__('Comments options', 'mobilityQ')),
    'capability' => 'edit_theme_options',
    'priority' => 130
  ));



$comments[0] = array(
    'logo' => 'HaleGlobal.png', 'name' => 'Bruce Hill', 'title' => 'Managing Partner',
    'comment' => 'Nick personally led the project, including managing the interaction with the customer, a large multinational petrochemical company.  This resulted in a unique value-added solution, driving a multi-million dollar long-term contract that secured the business through the end of the decade.  It is this ability not only to execute the project, but to define and refine the elements that create real ROI for the customer, that sets Mobility Quotient apart.'
);
$comments[1] = array(
    'logo' => 'winsight.png', 'name' => 'Tara Tesimu', 'title' => 'Chief Digital Officer',
    'comment' => 'Restaurant Business Online just won BEST WEBSITE at the 2018 Neal Awards (big in B2B); this is huge!!! MQ’s contributions were instrumental in building this website — I would put it up against any site out there, big players or small!'
);
$comments[2] = array(
    'logo' => 'Aol.png', 'name' => 'Tim Armstrong', 'title' => 'CEO',
    'comment' => 'Excerpt from the Wallstreet Journal regarding the Patch.com rebuild: "They\'ve been excellent operators and innovated and rebuilt the platform", Mr. Armstrong said, adding, "The local marketplace remains a big opportunity. AOL is supportive of Patch and it\'s something we are excited about."'
);
$comments[3] = array(
    'logo' => 'patch.png', 'name' => 'VP Productions', 'title' => '',
    'comment' => 'I am having so much fun working on this project with MQ. It’s really really exciting to get to take a concept I’ve had for years and watch a team with so much talent and passion bring it to life. Honestly. The time of my life.'
);


  for ($i = 0; $i < count($comments); $i++) {
  //Comment 1
    $wp_customize->add_setting('comment_logo_'.($i+1), array(
    'default' => get_bloginfo('template_directory') . '/assets/comments/'. $comments[$i]['logo'],
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'comment_logo_'.($i+1), array(
    'label' => __('Comment '.($i+1).': Logo', 'mobilityQ'),
    'section' =>  'comments',
    'settings' => 'comment_logo_'.($i+1),
    'priority' => 20
  )));
  $wp_customize->add_setting('comment_name_'.($i+1), array(
    'default' => _x($comments[$i]['name'], 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('comment_name_'.($i+1), array(
    'label' => __('Comment '.($i+1).': Name', 'mobilityQ'),
    'section' =>  'comments',
    'priority' => 20
  ));
  $wp_customize->add_setting('comment_title_'.($i+1), array(
    'default' => _x($comments[$i]['title'], 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('comment_title_'.($i+1), array(
    'label' => __('Comment '.($i+1).': Title', 'mobilityQ'),
    'section' =>  'comments',
    'priority' => 20
  ));
  $wp_customize->add_setting('comment_text_'.($i+1), array(
    'default' => _x($comments[$i]['comment'], 'mobilityQ'),
    'type' =>  'theme_mod'
  ));
  $wp_customize->add_control('comment_text_'.($i+1), array(
    'label' => __('Comment '.($i+1).': Text', 'mobilityQ'),
    'section' =>  'comments',
    'priority' => 20
  ));

  }

 ?>