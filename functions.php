<?php

function mq_files() {
  wp_enqueue_style('google_font', '//fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800|Ubuntu:300,400,500,700|Open+Sans:300,400,600,700,800');
  wp_enqueue_style('main_style_css',get_stylesheet_uri());
  // wp_enqueue_scipt('',);
}

  add_action("wp_enqueue_scripts","mq_files")

 ?>