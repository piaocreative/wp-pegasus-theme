<?php
/**
* Template Name: Home Page Template
 */

get_header(); 
$options = get_fields('options');


?>
<div class="container-fluid">			
    <section class="welcome-section">
        <!-- 720, 1000 -->
        <div class="row">
        <div class="col-xl-5">
            <div class="left-section">
                <div class="title-wrapper">
                    <h2 class="second-size  body_color "><?php echo $options['home_about_title']; ?> </span></h2>
                    <span class="sub-title third_color"><?php echo $options["home_about_sub_title"]; ?></span>
                </div>
                <div class="carousel-description">
                    <div class="owl-carousel">
                        <?php $images = $options["image_gallery"]; if (!empty($images)): 
                            foreach ($images as $i):?>
                        <div class="item">
                            <div class="description">
                                <?php echo $i["description"]; ?>                                
                            </div>
                            <a href="javascript:void(0);" class="read-more third_color">read more</a>
                        </div>
                            <?php endforeach; endif; ?>
                    </div>
                </div>
                    <?php //echo $options["home_about_desc"]; ?>
                
            </div>
        </div>
        <div class="col-xl-7 welcome-carousel">
            <div class="carousel-wrapper">
                <div class="owl-carousel">
                    <?php $images = $options["image_gallery"]; if (!empty($images)): 
                        foreach ($images as $i):?>
                    <div class="item">
                        <img data-src="<?php echo $i["image_link"]["url"]; ?>" class="lazy">
                    </div>
                        <?php endforeach; endif; ?>
                </div>
            </div>
        </div>
        </div>
    </section><!-- .welcome-section -->
</div>
<div>
    <?php do_action( 'special_offer' ); ?>

    <section class="find-home-section">
        <div class="container">
            <div class="find-form">
                <h2 class="primary_color second-size"><?php echo $options["home_floor_plans_title"];?></h2>
                <div class="input-fields">
                    <div class="date-picker datepicker1">
                        <i class="icon-calendar"></i>
                        <input type="text" class="form-control datepicker" name="move_date" id="move_date">
                    </div>
                    <span class="or-tag">OR</span>
                    <div class="view-button">
                        <a href="#" class="btn btn-1"><?php echo $options["home_floor_booking_text"]; ?></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <?php echo do_shortcode($options["home_floor_plans_shortcode"]); ?>
            </div>
        </div>
    </section>
</div><!-- .container-fulid -->
<div>
    <section class="features-section padding">
        <div class="carousel-wrapper">
            <div class="owl-carousel">
                <?php $images = $options["home_amenities_bg_image"]; if (!empty($images)): 
                        foreach ($images as $i):?>
                    <div class="item">
                        <img src="<?php echo $i["image"]["url"]; ?>" >
                    </div>
                <?php endforeach; endif; ?>
            </div>
        </div>

        <div class="features-text ">
            <div class="f-wrapper">
                <h2 class="second-size secondary_color"><?php echo $options["home_amenities_title"]; ?></h2>
                <?php $features = $options["home_amenities_features"]; 
                    foreach ($features as $f):
                ?>
                
                <div class="sub-element">
                    <h5 class="third_color"><?php echo $f["feature_title"]; ?></h5>
                    <ul>
                        <?php foreach ($f["feature_items"] as $item): ?>
                        <li class="secondary_color"><?php echo $item["item"]; ?></li>
                        <?php endforeach; ?>                    
                    </ul>
                </div>
                        <?php endforeach; ?>
                <div class="buttons buttons-normal">
                    <?php foreach ($options["home_amenities_btns"] as $btns): ?>
                    <a href="<?php echo $btns["btn_link"]; ?>" class="btn btn-1 btn-1-reserve"><?php echo $btns["btn_title"]; ?></a>
                    <?php endforeach; ?>                
                </div>
            </div>
        </div>
    </section>
</div>
</div><!-- #content -->
<?php
get_footer();
