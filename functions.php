<?php

function mq_files() {
  wp_enqueue_style('main_styles',get_stylesheet_uri());
  // wp_enqueue_scipt('',);
}


  add_action("wp_enqueue_scripts","mq_files")

 ?>