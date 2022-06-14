<?php
/**
* Template Name: Floor Plans Template
*/

get_header(); 
$options = get_fields('options');

?>
<style type="text/css">
.primary_color {color: <?php echo $options["primary_color"] ?>;}
.secondary_color {color: <?php echo $options["secondary_color"] ?>;}
.third_color {color: <?php echo $options["third_color"] ?>;}
.fourth_color {color: <?php echo $options["fourth_color"] ?>;}
</style>

    <section class="find-home-section section">
        <div class="container">
            <div class="find-form">
                <h2 class="primary_color second-size"><?php echo $options["home_floor_plans_title"];?></h2>
                <div class="input-fields">
                    <div class="date-picker datepicker1">
                        <i class="fas fa-calendar-alt"></i>
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
                <?php echo do_shortcode($options["floor_plans_page_shortcode"]); ?>
            </div>
        </div>
    </section>
 
    <?php do_action( 'special_offer' ); ?>
</div><!-- #content -->
<?php
get_footer();
