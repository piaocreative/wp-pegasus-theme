<?php
/**
* Template Name: Lease Now Template
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

<section class="main-section section">
    <div class="container">
        <div class="row">
            <div class="col">
            <?php echo $options['lease_iframe_code']; ?>
            </div>
        </div>
    </div>
</section>

</div><!-- #content -->
<?php
get_footer();
