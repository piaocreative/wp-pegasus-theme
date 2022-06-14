<?php
/**
* Template Name: Amentities Template
*/

get_header(); 
$options = get_fields('options');

?>


<section class="about-section section">
    <div class="container1400 container">
        <div class="row align-items-center">
            <div class="w-xl-50 w-45 middle-div">
                <div class="">
                    <h2 class="second-size body_color"><?php echo $options["amenities_apartments_title"]; ?></h2>
                    <span class="sub-title fourth_color"><?php echo $options["amenities_apartments_title"]; ?></span>
                    <p><?php echo $options["amenitie_apartment_description"]; ?>
                    </p>
                </div>
            </div>

            <div class="w-xl-50 w-55">
                <div class="image-section">
                    <img class="lazy" data-src="<?php echo $options["amenitie_aparment_image"]["url"]; ?>" >
                </div>
            </div>
        </div>
    </div>
</section>

<section class="community-section section lazy" data-bg="url('<?php echo $options["amenitie_community_features_background"]["url"]; ?>')">
    <div class="container1400 container">
        <div class="row align-items-center">
            <div class="w-45 w-xl-50 middle-div">
                
                    <div class="featuers">
                        <h2 class="second-size primary_color"><?php echo $options["amenitie_community_title"]; ?></h2>
                        <ul class="ul-list">
                            <?php foreach ($options["amenitie_community_features"] as $o): ?>
                            <li class="fourth_color"><?php echo $o["text"]; ?></li>                        
                            <?php endforeach; ?>
                        </ul>
                        <div class="buttons">
                            <a class="btn btn-1" href="<?php echo $options["amenitie_community_button_link"]; ?>"><?php echo $options["amenitie_community_button_title"]; ?></a>
                        </div>
                    </div>
                
            </div>
            <div class="w-55 w-xl-50">
                <div class="image-wrapper">
                    <img class="lazy" data-src="<?php echo $options["amenitie_community_features_images"]["url"]; ?>" >
                </div>
            </div>
        </div>
    </div>
</section>

<section class="community-section features-section section">
    <div class="container1400 container ">
        <div class="row align-items-center">
            <div class="w-55 w-xl-50">
                <div class="image-wrapper">
                    <img class="lazy" data-src="<?php echo $options["amenitie_apart_feature_image"]["url"]; ?>" >
                </div>
            </div>
            <div class="w-45 w-xl-50 middle-div">
                <div class="featuers">
                    <h2 class="second-size primary_color"><?php echo $options["amenitie_apart_feature_title"]; ?></h2>
                    <ul class="ul-list">
                        <?php foreach ($options["amenitie_apartment_features_feature"] as $o): ?>
                        <li class="fourth_color"><?php echo $o["text"]; ?></li>                        
                        <?php endforeach; ?>
                    </ul>
                    <div class="buttons">
                        <a class="btn btn-1" href="<?php echo $options["amenitie_apart_feature_button_link"]; ?>"><?php echo $options["amenitie_apart_feature_button_title"]; ?></a>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</section>

<section class="community-section easy-section section lazy" data-bg="url('<?php echo $options["amenitie_easy_background_image"]["url"]; ?>')" >
    <div class="container1400 container">
        <div class="row align-items-center">
            <div class="w-45 w-xl-50 middle-div">
                <div class="featuers">
                    <h2 class="second-size primary_color"><?php echo $options["amenitie_easy_title"]; ?></h2>
                    <p>
                        <?php echo $options["amenite_easy_description"]; ?>
                    </p>
                    <div class="buttons">
                        <a class="btn btn-1" href="<?php echo $options["amenitie_easy_button_link"]; ?>"><?php echo $options["amenitie_easy_button_title"]; ?></a>
                    </div>
                </div>
            </div>     

            <div class="w-55 w-xl-50">
                <div class="image-wrapper">
                    <img data-src="<?php echo $options["amenitie_easy_image"]["url"]; ?>" class="lazy">
                </div>
            </div>                   
        </div>
    </div>
</section>

<section class="testimonials-section section">
    <div class="container">
        <h2 class="second-size primary_color"><?php echo $options["amenite_testimonial_title"]; ?></h2>
        
        <div class="testimonials-wrapper">
            <div class="image-wrapper">
                <img class="lazy" data-src="<?php echo $options["amenite_testimonial_image"]["url"]; ?>" >
            </div>
            <div class="carousel-wrapper">
                <div class="owl-carousel">
                <?php foreach ($options["amenite_testimonials"] as $o): ?>             
                    <div class="item">
                        
                        <div class="testimonial">
                            <p class="fourth_color"><?php echo $o["description"]; ?></p>
                            <div class="avatar">
                                <img src="<?php echo $o["avatar"]["url"]; ?>">
                            </div>
                            <span class="client-name fourth_color"><?php echo $o["name"]; ?></span>
                        </div>
                        
                    </div>
                    <?php endforeach; ?>
                    
                </div>

                <span class="quote"><i class="icon icon-quotes-right"></i></span>
            </div><!-- carousel-wrapper -->
        </div>
    </div>
</section>

<?php do_action( 'special_offer' ); ?>

</div><!-- #content -->
<?php
get_footer();
