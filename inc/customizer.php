<?php
function customize_MQ($wp_customize)
{

require get_template_directory() . '/inc/customizer/frontpage/banner.php';
require get_template_directory() . '/inc/customizer/frontpage/intro.php';
require get_template_directory() . '/inc/customizer/frontpage/work.php ';
require get_template_directory() . '/inc/customizer/frontpage/projects.php';
require get_template_directory() . '/inc/customizer/frontpage/services.php';
require get_template_directory() . '/inc/customizer/frontpage/comments.php';
require get_template_directory() . '/inc/customizer/frontpage/clients.php';
require get_template_directory() . '/inc/customizer/frontpage/contact.php';
require get_template_directory() . '/inc/customizer/frontpage/badges.php';
require get_template_directory() . '/inc/customizer/frontpage/footer.php';


}

add_action("customize_register", "customize_MQ");
 ?>