<!DOCTYPE html>
<html lang="en">

<head>
    <?php wp_head(); ?>
</head>

<body>
    <nav class="navbar" id="sticky-navbar">
        <div class="navbar-nav">
            <a class="navbar-nav-logo" href="#">
                <img class="navbar-nav-item-logo-img" src="<?php echo get_theme_file_uri('/assets/svg/MQfull-logo.svg') ?>" height width alt="MQ Mobile Menu Logo">
            </a>
            <ul class="navbar-nav-list">
                <li class="navbar-nav-list-item work-nav-item">
                    <a href="#work" target="_self" class="">Work</a>
                </li>
                <li class="navbar-nav-list-item our story-nav-item">
                    <a href="#our-story" target="_self" class="">Our Story</a></li>
                <li class="navbar-nav-list-item services-nav-item">
                    <a href="#services" target="_self" class="">Services</a></li>
                <li class="navbar-nav-list-item press-nav-item">
                    <a href="#news" target="_self" class="">Press</a>
                </li>
                <li class="navbar-nav-list-item careers-nav-item">
                    <a href="#careers" target="_self" class="">Careers</a></li>
                <a class="navbar-nav-list-button black-btn" href="#contact"> Ask us </a>
            </ul>
        </div>
    </nav>

    <nav class="navbar-mobile">
        <div class="navbar-mobile-nav">
            <div class="navbar-mobile-nav-link">
                <img class="navbar-mobile-nav-link-img" src="<?php echo get_theme_file_uri('/assets/svg/hamburger-menu.svg') ?>" height width alt="MQ Mobile Menu Logo">

                <span class="navbar-mobile-nav-menu">
                    &nbsp;
                </span>
            </div>
            <a class="navbar-mobile-nav-link" href="#">
                <img class="navbar-mobile-nav-link-logo" src="<?php echo get_theme_file_uri('/assets/svg/MQmobileLogo.svg') ?>" height width alt="MQ Mobile Menu Logo">
            </a>
            <a class="navbar-mobile-nav-link" href="#">
                <img class="navbar-mobile-nav-link-img" src="<?php echo get_theme_file_uri('/assets/svg/Contact-Icon.svg') ?>" height width alt="MQ Mobile Menu Logo">
            </a>
        </div>
        <div class="navbar-mobile-line"></div>

        <div class="navbar-mobile-content">
            <ul class="navbar-mobile-content-list">
                <li class="navbar-mobile-content-list-item work-nav-item">
                    <a href="#work" target="_self" class="">Work</a>
                </li>
                <li class="navbar-mobile-content-list-item our story-nav-item">
                    <a href="#our-story" target="_self" class="">Our Story</a></li>
                <li class="navbar-mobile-content-list-item services-nav-item">
                    <a href="#services" target="_self" class="">Services</a></li>
                <li class="navbar-mobile-content-list-item press-nav-item">
                    <a href="#news" target="_self" class="">Press</a>
                </li>
                <li class="navbar-mobile-content-list-item careers-nav-item">
                    <a href="#careers" target="_self" class="">Careers</a></li>
                <a class="navbar-mobile-content-list-button black-btn" href="#contact"> Ask us </a>
            </ul>
        </div>
    </nav>