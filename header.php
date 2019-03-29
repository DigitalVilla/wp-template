<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- <title><?php  ?></title> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>

<body>
    <nav class="navbar" id="sticky-navbar">
        <div class="navbar-nav">
            <!-- ////start logo -->
            <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <h1> <?php bloginfo("name") ?> </h1>
            <?php endif; ?>
            <!-- ////end of logo -->
            <div class="navbar-nav-list">
                <?php
                $args = array('theme_menu' => 'primary');
                wp_nav_menu($args);
                ?>
                <a class="navbar-nav-list-button black-btn" href="#contact"> Ask us </a>
            </div>
        </div>
    </nav>

    <nav class="navbar-mobile noSelect">
        <div class="navbar-mobile-nav">
            <div class="navbar-mobile-nav-link">
                <button class="navbar-mobile-nav-menu" id="menu-button">
                    <span> &nbsp;</span>
                    <span> &nbsp;</span>
                    <span> &nbsp;</span>
                </button>
            </div>
            <a class="navbar-mobile-nav-link" href="#">
                <img class="navbar-mobile-nav-link-logo" src="<?php echo get_theme_file_uri('/assets/svg/MQmobileLogo.svg') ?>" alt="MQ Mobile Menu Logo">
            </a>
            <a class="navbar-mobile-nav-link" href="#">
                <img class="navbar-mobile-nav-link-img" src="<?php echo get_theme_file_uri('/assets/svg/Contact-Icon.svg') ?>" alt="MQ Mobile Menu Logo">
            </a>
        </div>
        <div class="navbar-mobile-line"></div>

        <div class="navbar-mobile-content-bg" id="menu-bg"></div>

        <div class="navbar-mobile-content-list hide" id="menu-list">
            <a href="#">
                <img class="navbar-mobile-content-logo" src="<?php echo get_theme_file_uri('/assets/svg/MQfull-logoWhite.svg') ?>" alt="MQ Mobile Menu Logo">
            </a>
            <?php
            $args = array('theme_menu' => 'primary');
            wp_nav_menu($args);
            ?>
        </div>
    </nav>