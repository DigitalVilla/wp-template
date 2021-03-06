<footer class="footer" style="background-image: url(<?php echo get_theme_file_uri('/assets/design/f_bg.jpg') ?>);">
    <div class="footer-container">
        <div class="grid">

            <div class="row footer-navbar">
                <span class="col-1x3-md  footer-navbar-brand">
                    <img src="<?php echo get_theme_file_uri('/assets/svg/MQfull-logoWhite.svg') ?>" class="intro-banner-img  bg-main"  alt="Mobility Quotient Logo">
                </span>

                <div class="col-2x3-md  footer-navbar-links">
                    <a href="https://www.instagram.com/mobilityquotient" target="_blank">Instagram</a>
                    <a href="https://www.facebook.com/MobilityQuotient" target="_blank">Facebook</a>
                    <a href="https://twitter.com/MobilityQ" target="_blank">Twitter</a>
                    <a href="http://www.linkedin.com/company/mobility-quotient-inc." target="_blank">LinkedIn</a>
                    |
                    <a href="https://mobilityquotient.com/privacy-policy">Privacy Policy</a>
                </div>
            </div>

            <div class="row footer-contact">
                    <div class="col-1x3-md footer-contact-info">
                        <div class="footer-contact-info-text">
                            <h3> <?php echo get_theme_mod('footer_address_place') ?> </h3>
                            <p>
                                <?php echo get_theme_mod('footer_address_street') ?><br>
                                <?php if (get_theme_mod('footer_address_street2')) {
                                    echo get_theme_mod('footer_address_street2');
                                    echo '<br>';
                                }?>
                                <?php echo get_theme_mod('footer_address_city') ?><br>
                                <?php echo get_theme_mod('footer_address_country') ?>
                            </p>
                        </div>
                    </div>

                    <div class="col-1x3-md footer-contact-info">
                        <div class="footer-contact-info-text">
                            <h3> <?php echo get_theme_mod('footer_contact_title') ?> </h3>
                            <p>
                                <?php echo get_theme_mod('footer_contact_phone') ?><br>
                                <?php echo get_theme_mod('footer_contact_email') ?><br>
                            </p>
                        </div>
                    </div>

                    <div class="col-1x3-md footer-contact-info">
                        <div class="footer-contact-info-text">
                            <h3> <?php echo get_theme_mod('footer_hours_title') ?> </h3>
                            <p>
                                <?php echo get_theme_mod('footer_hours_days') ?><br>
                                <?php echo get_theme_mod('footer_hours_hours') ?><br>
                            </p>
                        </div>
                    </div>
            </div>

            <div class="row footer-social-icons">
                <?php
                $social[0] = array('name' => 'facebook', 'link' => 'https://www.facebook.com/MobilityQuotient', 'image' => get_theme_file_uri('/assets/svg/facebook-icon.svg'));
                $social[1] = array('name' => 'instagram', 'link' => 'https://www.instagram.com/mobilityquotient/', 'image' => get_theme_file_uri('/assets/svg/Instagram-icon.svg'));
                $social[2] = array('name' => 'twitter', 'link' => 'https://twitter.com/MobilityQ', 'image' => get_theme_file_uri('/assets/svg/twitter-icon.svg'));
                $social[3] = array('name' => 'linkedin', 'link' => 'http://www.linkedin.com/company/mobility-quotient-inc.', 'image' => get_theme_file_uri('/assets/svg/linkedin-icon.svg'));

                for ($i = 0; $i < count($social); $i++) {
                    echo '<div class="col-1x4-xs footer-social-icons-container">';
                    echo '<a href="' . $social[$i]['link']  . '" target="_blank">';
                    echo '<img src="' . $social[$i]['image']  . '" alt="' . $social[$i]['name'] . '-icon"   class="social-icon">';
                    echo '</a>';
                    echo '</div>';
                }
                ?>
            </div>

            <div class="row footer-link">
                <a href="https://mobilityquotient.com/privacy-policy" class="text-white">Privacy Policy</a>
            </div>

            <div class="row">
                <div class="col-1x1 footer-bottom-bar">
                    <span class="footer-copyright-text">
                     <?php echo get_theme_mod('footer_rights') ?>

                    </span>
                </div>
            </div>

        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>