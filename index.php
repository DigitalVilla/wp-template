<?php get_header(); ?>

<div class="container">

    <header class="hero">
        <div class="hero-banner-container">
            <video autoplay muted loop class="hero-video noSelect">
                <source src=" <?php echo wp_get_attachment_url(get_theme_mod('banner_video')) ?>" type="video/mp4">
            </video>
        </div>
        <div class="hero-text-container">
            <img class="hero-text-container-img bg-main" alt="Hero image" src="
             <?php echo get_theme_mod('banner_mobile_image', get_theme_file_uri('/assets/design/home-hero-mobile-logo.png')) ?>">
            <h1 class="hero-text-container-title title-main">
                <?php echo get_theme_mod('banner_heading', 'Your Full-Service') ?> <br>
                <?php echo get_theme_mod('banner_subheading', 'Digital Agency') ?> </h1>
            <a class="black-btn hero-text-container-button" href="<?php echo get_theme_mod('banner_button_url', '') ?>">
                <?php echo get_theme_mod('banner_button_text', 'Services We Offer') ?> </a>
        </div>
    </header>

    <main class="intro" style="background-image:url(<?php echo get_theme_mod('intro_mobile_image',
        get_theme_file_uri('/assets/design/mobility-quotient-rocky-mountains-bg.jpg')); ?>)">
        <div class="grid">
            <div class="row intro-container">
                <figure class="col-1x2-md intro-banner">
                    <h2 class="intro-banner-title title-main">
                        <?php echo get_theme_mod('intro_heading', ' More than just a') ?> <br>
                        <?php echo get_theme_mod('intro_subheading', 'web dev shop') ?></h2>
                    <img class="intro-banner-img  bg-main" src=" <?php echo get_theme_mod('intro_image',
                     get_theme_file_uri('/assets/design/MQgraph02-comp.png')) ?>" alt="banff image">
                </figure>
                <div class="col-1x2-md intro-text">
                    <h4 class="intro-text-title">
                        <?php echo get_theme_mod(
                            'intro_main_text',
                            'Based in Calgary, AB, Mobility Quotient (MQ) specializes in software development,
                            marketing,business process management, and digital transformations.'
                        ) ?> </h4>
                    <p class="intro-text-info">
                        <?php echo get_theme_mod(
                            'intro_secondary_text',
                            'If you need a team to help you with your website, then we’re the people to call.
                        However, we’re more than just a web development shop. We can improve your online brand strategy, we can
                        design mockups to visualize your next great idea, and we can help you reinvent your business by embracing
                        technology.'
                        ) ?></p>
                    <a class="black-btn intro-text-button" href="<?php echo get_theme_mod('intro_button_url', '') ?>">
                        <?php echo get_theme_mod('intro_button_text', 'More About Us') ?>
                    </a>
                </div>
            </div>
        </div>
    </main>

    <section class="work">
        <div class="row work-title">
            <h2 class="work-title-text hero-tileV1"> <?php echo get_theme_mod('work_header', 'Our Work') ?></h2>
        </div>
        <div class="row swiper" style="cursor: -moz-grab;">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php

                    //Default values
                   $work[0] = array('img' => 'web-grocery.jpg', 'details' => 'Website Acquisition, Migration and Redesign', 'name' => 'Grocery Business', 'url' => '#');
                   $work[1] = array('img' => 'web-justbeer.jpg', 'details' => 'The Website and App for Beer Drinkers!', 'name' => 'JustBeer', 'url' => '#');
                   $work[2] = array('img' => 'web-news.jpg', 'details' => 'Hyper-Local News Publisher', 'name' => 'Patch.com', 'url' => '#');

                    for ($i = 0; $i < count($work); $i++) {
                        echo '<div class="swiper-slide">';
                        echo '<div class="col-1x1-md">';
                        echo '<div class="work-card ">';
                        echo '<div class="work-card-text noSelect col-2x5">';
                        echo '<h6 class="subtitle">' . get_theme_mod('work_name_'. ($i+1),$work[$i]['name']) . '</h6>';
                        echo '<h3 class="title-black">' . get_theme_mod('work_details_'. ($i+1),$work[$i]['details']) . '</h3>';
                        echo '<a class="black-btn" href="' . get_theme_mod('work_button_url_'. ($i+1),$work[$i]['url']) . '">'.get_theme_mod('work_button_text_'. ($i+1), 'View More').'</a>';
                        echo '</div>';
                        echo '<div class="work-card-laptop col-3x5 laptop">';
                        echo '<div class="laptop-top">';
                        echo '<div class="laptop-top-screen" style="background-image: url(' . get_theme_mod('work_image_'. ($i+1), get_theme_file_uri("/assets/projects/" .$work[$i]['img'])) . ');">';
                        echo '</div>';
                        echo '</div>';
                        echo '<div class="laptop-bottom"></div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                </div> <!-- .swiper-wrapper -->

                <div class="swiper-pagination" id="swiper-work">
                    <span class="swiper-pagination-switch"></span>
                    <span class="swiper-pagination-switch"></span>
                    <span class="swiper-pagination-switch"></span>
                </div>
            </div> <!-- .swiper-container -->
        </div> <!-- .swiper window-->
    </section>

    <section class="projects">
        <div class="grid">
            <div class="row projects-container">
                <?php

                //Default values
                $proj[0] = array('img' => 'pro-Ahlstrom-Wright-cover.jpg', 'name' => 'Ahlstrom Wright', 'details' => 'Website Rebuild & Brand Alignment', 'url' => '#');
                $proj[1] = array('img' => 'pro-xtime-cover.jpg', 'name' => 'XTIME', 'details' => 'Customer Relationship Manager', 'url' => '#');

                for ($i = 0; $i < count($proj); $i++) {
                    echo '<div class="col-1x2-md">';
                    echo '<div class="projects-card ' . ($i == 0 ? 'crd1' : 'crd2') . ' cardV1">';
                    echo '<div class="projects-card-text">';
                    echo '<h6 class="subtitle">' . get_theme_mod('project_details_'. ($i+1),$proj[$i]['details']) . '</h6>';
                    echo '<a class="title-black" href="' . get_theme_mod('project_name_url_'. ($i+1),$proj[$i]['url']) . '">' . get_theme_mod('project_name_'. ($i+1), $proj[$i]['name']) . '</a>';
                    echo '</div>';
                    echo '<div class="projects-card-laptop laptop">';
                    echo '<div class="laptop-top">';
                    echo '<div class="laptop-top-screen" style="background-image: url(' . get_theme_mod('project_image_'. ($i+1),get_theme_file_uri("/assets/projects/" . $proj[$i]['img'])) . ');">';
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="laptop-bottom"></div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>

            <div class="row projects-button ">
                <a href="<?php echo get_theme_mod('project_button_url',''); ?>" class="black-btn projects-button-btn">
                <?php echo get_theme_mod('project_button_text','More Projects');?> </a>
            </div>
        </div>
    </section>

    <section class="service">
        <div class="grid">
            <div class="row">
                <h2 class="service-title hero-tileV1"> <?php echo get_theme_mod('services_header','What we do'); ?> </h2>
            </div>
            <div class="row">
                <?php

                //Default values
                $services[0] = array('svg' => 'Blueprint-Icon.svg', 'name' => 'Bluepints', 'details' => 'Create the foundation for your idea', 'button' => 'discover blueprints');
                $services[1] = array('svg' => 'Creative-icon.svg', 'name' => 'Creative services', 'details' => 'Design, branding, marketing & copy writing', 'button' => 'get creative');
                $services[2] = array('svg' => 'Implementation-icon.svg', 'name' => 'Custom development', 'details' => 'Software, websites, & mobile apps', 'button' => 'explore services');
                $services[3] = array('svg' => 'Strategic-icon.svg', 'name' => 'Strategic consulting', 'details' => 'Project audits, planning & management', 'button' => 'view options');

                for ($i = 0; $i < count($services); $i++) {
                    if ($i % 2 == 0) {
                        echo '<div class="col-1x2-lg service-section">';
                    }
                    echo '<div class= "col-1x2-sm">';
                    echo '<div class="service-card  cardV1">';
                    echo '<img  class="service-card-img" src="' . get_theme_mod('service_image_'. ($i+1),
                        get_theme_file_uri("/assets/svg/" . $services[$i]['svg'])) . '" alt="Service icon">';
                    echo '<h4 class="service-card-title">' .  get_theme_mod('service_name_'. ($i+1), $services[$i]['name']) . '</h4>';
                    echo '<p class="service-card-text">' .  get_theme_mod('service_details_'. ($i+1), $services[$i]['details']) . '</p>';
                    echo "</div>";
                    echo '<div class="service-card-buttonn">';
                    echo '<a class="black-btn" href="' . get_theme_mod('service_button_url_'. ($i+1), '') . '">'
                     .  get_theme_mod('service_button_text_'. ($i+1),$services[$i]['button']) . '</a>';
                    echo "</div>";
                    echo "</div>";
                    if ($i % 2 == 1) {
                        echo '</div>';
                    }
                }
                ?>
            </div>
        </div>
    </section>

    <section class="comments">
        <div class="row swiper" style="cursor: -moz-grab;">
            <div class="swiper-container-comments">
                <div class="swiper-wrapper">
                    <?php

                    //Default Values

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
                        echo '<div class="swiper-slide noSelect">';
                        echo '<div class="row quote-content">';
                        echo '<div class="quote-content-tag quote-left col-1x6"></div>';
                        echo '<div class="quote-content-text col-4x6-md ">';
                        echo '<blockquote class="quote-content-text-quote Quote-V2">' .  get_theme_mod('comment_text_'.($i+1), $comments[$i]['comment']) . '</blockquote>';
                        echo '</div>';
                        echo '<div class="quote-content-tag quote-right col-1x6"></div>';
                        echo '</div>';

                        echo '<div class="row quote-by">';
                        echo '<div class="quote-by-logo col-1x1">';
                        echo '<img  class="quote-tag-img" src="' .
                             get_theme_mod('comment_logo_'.($i+1), get_theme_file_uri("/assets/comments/". $comments[$i]['logo'])) .
                            '" alt="company logo">';
                        echo '</div>';

                        echo '<div class="quote-by-author  col-1x1">';
                        echo '<h6 class="Quote-V1">' .  get_theme_mod('comment_name_'.($i+1),$comments[$i]['name']) . '</h6>';
                        echo '<h3 class="Quote-V1">' .  get_theme_mod('comment_title_'.($i+1),$comments[$i]['title']) . '</h3>';
                        echo '</div>';
                        echo '</div>';
                        echo "</div>";
                    }
                    ?>
                </div> <!-- .swiper-wrapper -->
                <div class="swiper-pagination" id="swiper-comments"></div>
            </div> <!-- .swiper-container -->
        </div> <!-- .swiper -->
    </section>

    <section class="clients grid">
        <h2 class="clients-title hero-tileV1"><?php echo get_theme_mod('clients_header','Select Clients'); ?> </h2>

        <div class="clients-container">
            <?php
            $clients = array('abf', 'CandorConnect', 'coop', 'DirtyWater', 'gooodchoices', 'HaleGlobal', 'mni', 'nextDoor', 'smca', 'winsight');

            for ($i = 0; $i < count($clients); $i++) {
                echo '<figure class="clients-container-img">';
                echo '<img src="' .  get_theme_mod('client_image_'.($i+1),get_theme_file_uri("/assets/clients/" . $clients[$i] . '.png')) .
                    '" alt="Client logo">';
                echo '</figure>';
            }
            ?>
        </div>
    </section>

    <section class="transform" style="background-image: url(<?php echo get_theme_mod('contact_bg_image',get_theme_file_uri('/assets/design/c_action_bg.jpg')) ?>);">
        <h2 class="transform-title hero-tileV2"><?php echo get_theme_mod('contact_header','Transform Your Brand With'); ?></h2>

          <svg id="MQ-logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" class="transform-svg" x="0px" y="0px" viewBox="0 0 207.3 106.3" style="enable-background:new 0 0 207.3 106.3;" xml:space="preserve" width="100%" height="100%">
            <style type="text/css">
                .st0 {
                    fill: #FFFFFF;
                }
            </style>
            <defs xmlns="http://www.w3.org/2000/svg">
                <filter id="transform-dropshadow" height="200%">
                    <feGaussianBlur in="SourceAlpha" stdDeviation="1.75"></feGaussianBlur>
                    <feComponentTransfer>
                        <feFuncA type="linear" slope="0.625"></feFuncA>
                    </feComponentTransfer>
                    <feOffset dx="0" dy="1.5" result="offsetblur"></feOffset>
                    <feMerge>
                        <feMergeNode in="offsetblur"></feMergeNode>
                        <feMergeNode in="SourceGraphic"></feMergeNode>
                    </feMerge>
                </filter>
            </defs>
            <g filter="url(#transform-dropshadow)">
                <polygon class="st0 transform-svg-line transform-svg-line-1" points="116.5,5.9 148.1,5.9 114.5,98.8 82.9,98.8 " style="transform:translate(0)">
                </polygon>
                <polygon class="st0 transform-svg-line transform-svg-line-2" points="77.4,5.9 109,5.9 75.4,98.8 43.8,98.8 " style="transform:translate(0)">
                </polygon>
                <polygon class="st0 transform-svg-line transform-svg-line-3" points="38.2,5.9 69.9,5.9 36.3,98.8 4.6,98.8 " style="transform:translate(0)">
                </polygon>
                <path class="st0 transform-svg-line transform-svg-q" d="M177.6,98.8h26.6l-18.1-18.4c5-7.8,7.8-17.1,7.6-27.1c-0.4-16.3-8.8-30.5-21.3-38.9c0,0-0.1,0-0.1-0.1  c-0.5-0.3-1-0.6-1.4-0.9c-4.7-3-10-5.1-15.6-6.3l-7.3,20.1c10.9,1.1,20.4,8.8,23.5,19.3c3.2,10.6-0.6,22.3-9.2,29.2  c-4.8,3.8-10.8,5.9-16.9,5.9c-5.7,0-10.9-1.7-15.3-4.7l-7.2,20.1c0.6,0.3,1.3,0.7,1.9,1c0.3,0.1,0.6,0.3,0.9,0.4  c0.5,0.2,0.9,0.4,1.4,0.6c0.5,0.2,1,0.4,1.5,0.6c0.2,0.1,0.3,0.1,0.5,0.2c5.4,2,11.3,3,17.4,2.9c9.9-0.2,19-3.4,26.5-8.7L177.6,98.8  z" style="transform:translate(0)">
                </path>
            </g>
        </svg>

    <a href="<?php echo get_theme_mod('contact_button_url','#'); ?>" class="black-btn">
        <?php echo get_theme_mod('contact_button','Fr1ee Consultation'); ?>
    </a>
    </section>

    <section class="membership grid">
        <div class="row membership-title">
            <h2 class="clients-title hero-tileV1"><?php echo get_theme_mod('badges_header','Proud Member'); ?></h2>
        </div>
        <div class="row membership-container">
            <?php
            $badges = array('c_chamber_logo.jpg', 'made_calgary_logo.jpg');
            for ($i = 0; $i < count($badges); $i++) {
                    echo '<div class="col-1x2-sm membership-badge"> ';
                    echo '<img class="membership-badge-img " src="'.get_theme_mod('badge_image_'.($i+1), get_theme_file_uri('/assets/design/c_chamber_logo.jpg')).'" alt="Calgary Chamber">';
                    echo '</div>';
            }
            ?>
        </div>
    </section>
</div>
<?php get_footer();  ?>