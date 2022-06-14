<?php
/**
* Template Name: Neighborhood Template
*/

get_header(); 
$options = get_fields('options');

?>
<style type="text/css">
.google-section .col-xl-3 {
    background: <?php echo hexToRGB($options["third_color"], 0.8); ?>;
}
</style>
<section class="title-section section">
    <div class="container">
        <div class="new-title">
            <h2 class="third_color"><?php echo $options["neighborhood_intro_title"]; ?></h2>
            <p><?php echo $options["neighborhood_intro_desc"]; ?></p>
        </div>
    </div>
</section>

<section class="google-section section">
    <div class="row">
        <div class="col-xl-9">
            <div class="map" id="map"></div>
        </div>
        <div class="col-xl-3">
            <img src="<?php echo $options["neighbohood_background"]["url"]; ?>">

            <div class="popup">
                <div id="accordion" data-plugin-neighborhood-map data-center-lat="<?php echo $options['google_map_location']['lat']; ?>" data-center-lng="<?php echo $options['google_map_location']['lng']; ?>">                
                    <?php
                    $terms = get_terms( 'neighborhood_cat' );
                    foreach ( $terms as $term ):
                        ?>
                         <h3 class="accordion-header" data-category="<?php echo $term->name; ?>"><?php echo $term->name; ?></h3>
                         <div class="accordion-content">
                        <?php
                    $arg = array (
                        'post_type' => 'post-neighborhood',
                        'order' => 'ASC',
                        'orderby' => 'menu_order',
                        'posts_per_page' => -1,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'neighborhood_cat',
                                'field' => 'slug',
                                'terms' => $term->slug,
                            ),
                        ),
                    );
                    
                    $the_query = new WP_Query( $arg );

                    if ( $the_query->have_posts() ):
                        while ( $the_query->have_posts() ): $the_query->the_post();
                            $title = get_field( 'neighborhood_info' ) ?: get_the_title();
                            $distance = get_field( 'neighborhood_distance' );
                            $location = get_field( 'neighborhood_location' );
                            
                     ?>
                       
                        <div class="location" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
                                    <p class="location-name"><?php echo $title; ?></p>
                                    <p class="location-remoteness"><?php echo $distance; ?></p>
                                    <div class="location-infowindow-content">
                                        <div class="info-window">
                                            <p class="info-window-category"><?php echo $term->name; ?></p>
                                            <p class="info-window-name"><?php echo $title; ?></p>
                                            <p class="info-window-remoteness"><?php echo $distance; ?></p>
                                        </div>
                                    </div>
                                </div>
                    <?php endwhile;   wp_reset_postdata(); endif; ?>                
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        
    </div>   
</section>
<?php do_action( 'special_offer' ); ?>
</div><!-- #content -->

<?php
get_footer();
