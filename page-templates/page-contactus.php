<?php
/**
* Template Name: Contact us Template
*/

get_header(); 
$options = get_fields('options');

?>
<style type="text/css">
.page-template-page-contactus .contact-us input[type="submit"] {
    background: <?php echo $options["primary_color"] ?>;
    border-color: <?php echo $options["primary_color"] ?>;
}

.page-template-page-contactus .contact-us .wpcf7-form-control-wrap input, .page-template-page-contactus .contact-us .wpcf7-form-control-wrap textarea {
    background: <?php echo $options["body_color"] ?>;
    color: <?php echo $options["fourth_color"] ?>;
}

</style>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="second-title">
                    <h3><?php echo $options["contact_form_title"]; ?></h3>
                    <p><?php echo $options["contact_form_desc"]; ?></p>
                </div>
                <div class="contact-us">
                    <?php echo do_shortcode($options["contact_form"]); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <?php foreach ($options["contact_other_information"] as $o): ?>
            <div class="col-xl-4 ">
                <div class="contact-info-wrapper">
                    <span class="address third_color"><?php echo $o["icon"]; ?></span>
                    <h5 class="primary_color"><?php echo $o["title"]; ?></h5>
                    <p class="body_color"><?php echo $o["info"]; ?></p>
                </div>
            </div>
            <?php endforeach; ?>            
        </div>
    </div>
    
</section>
<div class="map" id="contactMap" style="min-height: 400px;" data-plugin-googlemap  data-lat="<?php echo $options['google_map_location']['lat']; ?>" data-lng="<?php echo $options['google_map_location']['lng']; ?>">
            </div>
<?php do_action( 'special_offer' ); ?>

</div><!-- #content -->
<?php
get_footer();


