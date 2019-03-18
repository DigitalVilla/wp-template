<?php get_header(); ?>

<div class="container">


    <header class="hero">
        <div class="hero-banner-container">
            <video loop autoplay class="hero-video noSelect">
                <source src="<?php echo get_theme_file_uri('/assets/media/hero_mask_compressed.webm') ?>" type="video/webm">
                <source src="<?php echo get_theme_file_uri('/assets/media/hero_mask_compressed_h264.mp4') ?>" type="video/mp4">
            </video>
        </div>
        <div class="hero-text-container">
            <img class="hero-text-container-img bg-main" src="<?php echo get_theme_file_uri('/assets/design/home-hero-mobile-logo.png') ?>">
            <h1 class="hero-text-container-title title-main">
                Your Full-Service<br>
                Digital Agency </h1>
            <button class="black-btn hero-text-container-button"> Services we offer</button>
        </div>
    </header>

    <main class="intro grid">
        <div class="row intro-container">
            <figure class="col-1x2-md intro-banner">
                <h2 class="intro-banner-title title-main">More than just a <br> web dev shop</h2>
                <img class="intro-banner-img  bg-main" src="<?php echo get_theme_file_uri('/assets/design/MQgraph02-comp.png') ?>" alt="banff">
            </figure>

            <div class="col-1x2-md intro-text">
                <h4 class="intro-text-title">Based in Calgary, AB, Mobility Quotient (MQ) specializes in software
                    development, marketing, business process management, and digital transformations.</h4>
                <p class="intro-text-info">If you need a team to help you with your website, then we’re the people to call.
                    However, we’re more than just a web development shop. We can improve your online brand strategy, we can
                    design mockups to visualize your next great idea, and we can help you reinvent your business by embracing
                    technology.</p>
                <button class="black-btn intro-text-button">More About Us</button>
            </div>
        </div>
    </main>

    <section class="projects">
        <div class="row">
            <h2 class="clients-title hero-tileV1">Our Work</h2>
        </div>

        <div class="row projects-slider">
            <?php
            $proj[0] = array('img' => 'web-grocery.jpg', 'title' => 'Website Acquisition, Migration and Redesign', 'subtitle' => 'Grocery Business', 'link' => '#');
            // $proj[1] = array('img' => 'web-news.jpg', 'title' => 'Hyper-Local News Publisher', 'subtitle' => 'Patch.com', 'link' => '#');
            // $proj[2] = array('img' => 'web-justbeer.jpg', 'title' => 'The Website and App for Beer Drinkers!', 'subtitle' => 'JustBeer', 'link' => '#');

            for ($i = 0; $i < count($proj); $i++) {
                echo '<div class="col-1x1-md projects-slider-container">';
                echo '<div class="projects-card ' . ($i == 0 ? 'crd1' : 'crd2') . '">';
                echo '<div class="projects-card-text">';
                echo '<h6 class="subtitle">' . $proj[$i]['subtitle'] . '</h6>';
                echo '<h3 class="title-black">' . $proj[$i]['title'] . '</h3>';
                echo '<a class="black-btn" href="' . $proj[$i]['link'] . '">View More</a>';
                echo '</div>';
                echo '<div class="projects-card-laptop laptop">';
                echo '<div class="laptop-top">';
                echo '<div class="laptop-top-screen"';
                echo 'style="background-image: url(' . get_theme_file_uri("/assets/projects/" . $proj[$i]['img']) . ');">';
                echo '</div>';
                echo '</div>';
                echo '<div class="laptop-bottom"></div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
            <div class="col-1x1 controls">
                <div class="controls-buttons">
                    <span class="controls-buttons-switch"></span>
                    <span class="controls-buttons-switch active"></span>
                    <span class="controls-buttons-switch"></span>
                </div>
            </div>
        </div>

    </section>

    <section class="projects2 grid">
        <div class="row projects2-container">
            <?php
            $proj2[0] = array('img' => 'pro-Ahlstrom-Wright-cover.jpg', 'title' => 'Ahlstrom Wright', 'subtitle' => 'Website Rebuild & Brand Alignment', 'link' => '#');
            $proj2[1] = array('img' => 'pro-xtime-cover.jpg', 'title' => 'XTIME', 'subtitle' => 'Customer Relationship Manager', 'link' => '#');

            for ($i = 0; $i < count($proj2); $i++) {
                echo '<div class="col-1x2-md">';
                echo '<div class="projects2-card ' . ($i == 0 ? 'crd1' : 'crd2') . ' cardV1">';
                echo '<div class="projects2-card-text">';
                echo '<h6 class="subtitle">' . $proj2[$i]['subtitle'] . '</h6>';
                echo '<a class="title-black" href="' . $proj2[$i]['link'] . '">' . $proj2[$i]['title'] . '</a>';
                echo '</div>';
                echo '<div class="projects2-card-laptop laptop">';
                echo '<div class="laptop-top">';
                echo '<div class="laptop-top-screen"';
                echo 'style="background-image: url(' . get_theme_file_uri("/assets/projects/" . $proj2[$i]['img']) . ');">';
                echo '</div>';
                echo '</div>';
                echo '<div class="laptop-bottom"></div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>

        <div class="row projects2-button ">
            <a href="#" class="black-btn projects2-button-btn">More Projects</a>
        </div>
    </section>

    <section class="service">
        <div class="grid">
            <div class="row">
                <h2 class="service-title hero-tileV1"> What we do</h2>
            </div>
            <div class="row">
                <?php
                $services[0] = array('svg' => 'Blueprint-Icon.svg', 'title' => 'Bluepints', 'content' => 'Create the foundation for your idea', 'button' => 'discover blueprints');
                $services[1] = array('svg' => 'Creative-icon.svg', 'title' => 'Creative services', 'content' => 'Design, branding, marketing & copy writing', 'button' => 'get creative');
                $services[2] = array('svg' => 'Implementation-icon.svg', 'title' => 'Custom development', 'content' => 'Software, websites, & mobile apps', 'button' => 'explore services');
                $services[3] = array('svg' => 'Strategic-icon.svg', 'title' => 'Strategic consulting', 'content' => 'Project audits, planning & management', 'button' => 'view options');

                for ($i = 0; $i < count($services); $i++) {
                    if ($i % 2 == 0) {
                        echo '<div class="col-1x2-lg service-section">';
                    }
                    echo '<div class= "col-1x2-sm">';
                    echo '<div class="service-card  cardV1">';
                    echo '<img  class="service-card-img" src="' .
                        get_theme_file_uri("/assets/svg/" . $services[$i]['svg']) .
                        '"height width alt="' . $services[$i]['title'] . ' icon">';
                    echo '<h4 class="service-card-title">' . $services[$i]['title'] . '</h4>';
                    echo '<p class="service-card-text">' . $services[$i]['content'] . '</p>';
                    echo "</div>";
                    echo '<div class="service-card-buttonn">';
                    echo '<button class="black-btn">' . $services[$i]['button'] . '</button>';
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
    </section>

    <section class="clients">
        <h2 class="clients-title hero-tileV1">Select Clients</h2>

        <div class="clients-container">
            <?php
            $clients = array('abf', 'CandorConnect', 'coop', 'DirtyWater', 'gooodchoices', 'HaleGlobal', 'mni', 'nextDoor', 'smca', 'winsight');

            for ($i = 0; $i < count($clients); $i++) {
                echo '<figure class="clients-container-img">';
                echo '<img src="' . get_theme_file_uri("/assets/clients/" . $clients[$i] . '.png') .
                    '"alt="' . $clients[$i] . ' logo">';
                echo '</figure>';
            }
            ?>
        </div>
    </section>

    <section class="transform" style="background-image: url(<?php echo get_theme_file_uri('/assets/design/c_action_bg.jpg') ?>);">
        <h2 class="transform-title hero-tileV2">Transform your brand with</h2>

        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" class="transform-svg" x="0px" y="0px" viewBox="0 0 207.3 106.3" style="enable-background:new 0 0 207.3 106.3;" xml:space="preserve" width="100%" height="100%">
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

        <button class="black-btn">Free consultation</button>
    </section>

    <section class="membership grid">
        <div class="row membership-title">
            <h2 class="clients-title hero-tileV1">Proud Member</h2>
        </div>

        <div class="row membership-container">
            <div class="col-1x2-sm membership-badge">
                <img class="membership-badge-img " src="<?php echo get_theme_file_uri('/assets/design/c_chamber_logo.jpg') ?>" alt="Calgary Chamber">
            </div>

            <div class="col-1x2-sm membership-badge">
                <img class="membership-badge-img" src="<?php echo get_theme_file_uri('/assets/design/made_calgary_logo.jpg') ?>" alt="Made in Calgary">
            </div>
        </div>
    </section>

</div>
<?php get_footer();  ?>