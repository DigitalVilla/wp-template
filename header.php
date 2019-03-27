<!DOCTYPE html>
<html lang="en">

<head>
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <nav class="navbar" id="sticky-navbar">
        <div class="navbar-nav">
            <a class="navbar-nav-logo" href="#">
                <img class="navbar-nav-item-logo-img" src="<?php echo get_theme_file_uri('/assets/svg/MQfull-logo.svg') ?>" height width alt="MQ Mobile Menu Logo">
            </a>
            <ul class="navbar-nav-list">
                <li class="navbar-nav-list-item">
                    <a href="#work" target="_self">Work</a>
                </li>
                <li class="navbar-nav-list-item ">
                    <a href="#our-story" target="_self">Our Story</a></li>
                <li class="navbar-nav-list-item ">
                    <a href="#services" target="_self">Services</a></li>
                <li class="navbar-nav-list-item ">
                    <a href="#news" target="_self">Press</a>
                </li>
                <li class="navbar-nav-list-item">
                    <a href="#careers" target="_self">Careers</a></li>
                <a class="navbar-nav-list-button black-btn" href="#contact"> Ask us </a>
            </ul>
        </div>
    </nav>

    <nav class="navbar-mobile noSelect">
        <div class="navbar-mobile-nav">
            <div class="navbar-mobile-nav-link">
                <button class="navbar-mobile-nav-menu" id="menu-button">
                    <div> &nbsp;</div>
                    <div> &nbsp;</div>
                    <div> &nbsp;</div>
                </button>
            </div>
            <a class="navbar-mobile-nav-link" href="#">
                <img class="navbar-mobile-nav-link-logo" src="<?php echo get_theme_file_uri('/assets/svg/MQmobileLogo.svg') ?>" height width alt="MQ Mobile Menu Logo">
            </a>
            <a class="navbar-mobile-nav-link" href="#">
                <img class="navbar-mobile-nav-link-img" src="<?php echo get_theme_file_uri('/assets/svg/Contact-Icon.svg') ?>" height width alt="MQ Mobile Menu Logo">
            </a>
        </div>
        <div class="navbar-mobile-line"></div>

        <div class="navbar-mobile-content-bg" id="menu-bg"></div>
        <ul class="navbar-mobile-content-list hide" id="menu-list">
            <li class="navbar-mobile-content-item ">
                <a href="#">
                    <img class="navbar-mobile-content-logo" src="<?php echo get_theme_file_uri('/assets/svg/MQfull-logoWhite.svg') ?>" height width alt="MQ Mobile Menu Logo">
                </a>
            </li>
            <li class="navbar-mobile-content-item">
                <a href="#work" target="_self">Work</a>
            </li>
            <li class="navbar-mobile-content-item ">
                <a href="#our-story" target="_self">Our Story</a></li>
            <li class="navbar-mobile-content-item ">
                <a href="#services" target="_self">Services</a></li>
            <li class="navbar-mobile-content-item">
                <a href="#news" target="_self">Press</a>
            </li>
            <li class="navbar-mobile-content-item ">
                <a href="#careers" target="_self">Careers</a></li>
        </ul>
    </nav>