<?php

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
<?php 
$options = get_fields( 'options' );

?>
<style type="text/css">
body { color: <?php echo $options['body_color']; ?>; }
.overlay_color:after { background-color: #650038!important; opacity: 0.8};

.primary_color {color: <?php echo $options["primary_color"] ?>;}
.secondary_color {color: <?php echo $options["secondary_color"] ?>;}
.third_color {color: <?php echo $options["third_color"] ?>;} 
.fourth_color {color: <?php echo $options["fourth_color"] ?>;}
.body_color {color: <?php echo $options["body_color"] ?>;}

.primary_bg_color {background: <?php echo $options["primary_color"] ?>;}

.top-banner h2 {
    color: <?php echo $options["secondary_color"] ?>;
}

.overlay_color:after {
    background-color: <?php echo $options["primary_color"] ?>!important;    
}

.top-banner .overlay {
    background-color: <?php echo $options["primary_color"] ?>!important;
    opacity: 0.6;
}

.btn-1 {
    background: <?php echo $options["primary_color"] ?>;
    border-color: <?php echo $options["primary_color"] ?>;
    color: <?php echo $options["secondary_color"] ?>;
}

.btn-1:hover {
    color: <?php echo $options["primary_color"] ?>;
    background: <?php echo $options["secondary_color"] ?>;
}

.btn-1-reserve  {
    color: <?php echo $options["primary_color"] ?>;
    background: <?php echo $options["secondary_color"] ?>;
    border-color: <?php echo $options["secondary_color"] ?>;
}

.btn-1-reserve:hover {
    background: <?php echo $options["primary_color"] ?>;
    border-color: <?php echo $options["secondary_color"] ?>;
    color: <?php echo $options["secondary_color"] ?>;
}

.btn-2 {
    background:  <?php echo $options["third_color"] ?>;
    color: <?php echo $options["secondary_color"] ?>;
}

.btn-2:hover {
    color:  <?php echo $options["third_color"] ?>;
    background: <?php echo $options["secondary_color"] ?>;
}

.features-section .features-text .buttons .btn:last-child {
    background: transparent;
    color: <?php echo $options["secondary_color"] ?>;
}

.features-section .features-text .buttons .btn:last-child:hover {
    background: #fff;
    color: <?php echo $options["primary_color"] ?>;
}

#page header .navbar .navbar-nav .nav-link {
    color: <?php echo $options["fourth_color"] ?>;
}
#page header .navbar .navbar-nav .nav-link:hover {
    color: <?php echo $options["primary_color"] ?>;
}

.gallery-section .floor-plans-tabs li a {
    background:  <?php echo $options["primary_color"] ?>;
    border-color:  <?php echo $options["primary_color"] ?>;
}

.gallery-section .floor-plans-tabs li a.active, .gallery-section .floor-plans-tabs li a:hover {
    background:  <?php echo $options["third_color"] ?>;
}
</style>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">    
	<header id="masthead" class="site-header navbar-static-top" role="banner">
        <div class="container-new">
            
            <nav class="navbar navbar-expand-xl">
                <div class="navbar-brand">
                    <?php if ( $options[ "community_logo_color" ] ): ?>
                    <a href="<?php echo site_url("/"); ?>"><img src="<?php echo esc_url( $options[ "community_logo_color" ] ); ?>" alt="<?php esc_attr( $options[ "community_name" ] ); ?>"></a>
                    <?php else: ?>
                    <a href="<?php echo esc_url( site_url( "/" ) ); ?>"><?php  echo esc_url( bloginfo( 'name' ) ); ?></a>
                    <?php endif; ?>
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">                   
                    <span class="menu-1"></span>
                    <span class="menu-2"></span>
                    <span class="menu-3"></span>
                </button>

                <?php
                    wp_nav_menu(array(
                    'theme_location'    => 'primary',
                    'container'       => 'div',
                    'container_id'    => 'main-nav',
                    'container_class' => 'collapse navbar-collapse',
                    'menu_id'         => false,
                    'menu_class'      => 'navbar-nav',
                    'depth'           => 3,
                    'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                    'walker'          => new wp_bootstrap_navwalker()
                    ));
                ?>

                <div class="head-menu">
                    <ul class="top-menu-right">                        
                        <li><a href="tel:<?php echo $options['phone_number']; ?>" class="phone"><?php echo $options['phone_number']; ?></a></li>                      
                        <?php $login_menu = $options["login_menu"]; foreach ($login_menu as $l):?>
                                <li><a href="<?php echo $l["page"]; ?>" class="btn btn-1 "><?php echo $l["title"]; ?></a></li>
                            <?php endforeach; ?>
                    </ul>

                    <div class="dropdown">
                        <a class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-user"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <?php  ?>
                            <?php foreach ($login_menu as $l):?>
                                <li><a href="<?php echo $l["page"]; ?>" class=""><?php echo $l["title"]; ?></a></li>
                            <?php endforeach; ?>
                            
                            <li><a href="tel:<?php echo $options['phone_number']; ?>" class="phone"><?php echo $options['phone_number']; ?></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
	</header><!-- #masthead -->
    <?php if ( is_page_template('page-templates/page-home.php') ): ?>
    <div class="top-area">
        <?php 
            $background_settings = $options["home_background_option"];
            if ( $background_settings == "video" ):
                $video_url = "";
                if ($options["home_banner_bg_video"]) $video_url = $options["home_banner_bg_video"];                
        ?>
        <video autoplay loop muted playsinline class="parallax-video">
            <source src="<?=$video_url?>" type="video/mp4">
            Your browser does not support the video tag.
        </video>        
            <?php elseif ( $background_settings == "image" ):?>
        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php echo $options["home_banner_bg_image"]; ?>" data-speed="0.5" class="parallax-image lazy"></img>
        
            <?php else: 
                $images = $options["home_background_slider"];
                ?>
            <div class="carousel-area">
                <div class="owl-carousel">
                    <?php 
                            foreach ($images as $i):?>
                        <div class="item">
                            <img data-src="<?php echo $i["image"];?>" class="lazy">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
                <?php
                
            ?>

            <?php endif; ?>
            <div class="overlay"></div>
        <div class="left-sidebar">
            <div class="top-pannel">
                <a href="<?php echo $option["community_facebook"]; ?>" class="social-icon facebook"></a>
                <a href="<?php echo $option["community_twitter"]; ?>" class="social-icon tweet"></a>
                <a href="<?php echo $option["community_google"]; ?>" class="social-icon google"></a>
            </div>            
        </div>
        <div class="parallax-area">
            <div class="text-area">
                <h2 class="second-size body_color "><?php echo $options["home_banner_title"];?></h2>
                <p><?php echo $options["home_banner_sub_title"]; ?></p>

                <a class="btn btn-1" href="<?php echo $options["home_banner_btn_link"]; ?>"><?php echo $options["home_banner_btn_title"]; ?></a>
            </div>
        </div>        
    </div>
    <div class="banner-area">        
        <div class="banner">
            <h5 class="title-type1 fourth_color"><span><?php echo do_shortcode($options["home_banner_feataured_desc"]); ?></span></h5>
        </div>        
    </div>
    <?php else: 
        $banner_url =  $options["home_banner_bg_image"];
        $title = get_the_title();

        if (is_page_template('page-templates/page-amenities.php')) {
            $banner_url = $options["amenities_banner_bg_image"];
            $title = $options["amenities_banner_title"];
        }

        if (is_page_template('page-templates/page-contactus.php')) {
            $banner_url = $options["contact_banner_bg_image"];
            $title = $options["contact_banner_title"];
        }

        if (is_page_template('page-templates/page-floor-plans.php')) {
            $banner_url = $options["floor_plans_banner_image"];
            $title = $options["floor_plans_banner_title"];
        }

        if (is_page_template('page-templates/page-gallery.php')) {
            $banner_url = $options["photo_gallery_banner_bg_image"];
            $title = $options["photo_gallery_banner_title"];
        }

        if (is_page_template('page-templates/page-neighborhood.php')) {
            $banner_url = $options["neighborhood_banner_bg_image"];
            $title = $options["neighborhood_banner_title"];
        }

        if (is_page_template('page-templates/page-privacy.php')) {
            $banner_url = $options["privacy_policy_banner_image"];
            $title = $options["privacy_policy_banner_title"];
        }

        ?>
    <div class="top-banner">
        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php echo $banner_url; ?>" data-speed="0.5" class="parallax-image lazy" ></img>
        <div class="overlay"></div>
        <h2><?php echo $title; ?></h2>
    </div>    
    <?php endif; ?>
	<div id="content" class="site-content">		
