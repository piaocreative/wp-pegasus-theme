<?php
/**
* Template Name: Gallery Template
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


<section class="gallery-section section">
    <div class="container">

            <ul class="floor-plans-tabs" data-tab-list>
                <li><a href="*" class="gray-color fourth-bgcolor active">ALL</a></li>
                    <?php 
                        $terms = get_terms( 'gallery_cat' );
                        foreach ( $terms as $term):
                        ?>
                    
                    <li><a href="<?php echo "." . $term->slug; ?>" class="gray-color fourth-bgcolor"><?php echo $term->name; ?></a></li>
                    <?php endforeach; ?>
            </ul>
            <div class="floor-plan-tabs-mobile ">
                <div class="dropdown">
                <button class="btn btn-3 dropdown-toggle" type="button" id="tabsmenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    All
                </button>
                <div class="dropdown-menu" aria-labelledby="tabsmenu">
                    <a href="*" class="gray-color fourth-bgcolor active">ALL</a>
                    <?php 
                        $terms = get_terms( 'gallery_cat' );
                        foreach ( $terms as $term):

                        
                        ?>
                    <a href="<?php echo "." . $term->slug; ?>" ><?php echo $term->name; ?></a>
                    <?php endforeach; ?>                  
                </div>
                </div>
            </div>
            
            <div class="photo-gallerys">                
                <?php 
                    $args = array(
                        'post_type' => 'post-gallery',
                        'order' => 'ASC', 
                        'orderby' => 'menu-order',
                        'posts_per_page' => -1,
                    );

                    $query = new WP_Query( $args );

                    if ( $query->have_posts() ):
                        while ( $query->have_posts() ): $query->the_post();
                        $gallery_type = get_field( 'gallery_item_type' );
                        $gallery_class = get_field( 'gallery_class' );
                        $terms = wp_get_post_terms( get_the_ID(), 'gallery_cat' );
                        $slugs = array();
                        foreach ($terms as $term)
                            $slugs[] = $term->slug;
                        
                        $extra_class = implode (' ', $slugs);
                        $gallery_class = get_field ('gallery_class') ? get_field ('gallery_class') : 'item-3';
                ?>

                <div class="item  <?php echo $extra_class . " " . $gallery_class;?> ">
                <?php if ( $gallery_type == "image" ): 
                    $gallery_image = get_field( 'gallery_image' );
					
                    ?>
                    <a href="<?php echo wp_get_attachment_image_src( $gallery_image, 'full' )[0]; ?>" data-magnific-popup data-plugin-options="{'type':'image', 'closeOnContentClick': true, 'mainClass': 'mfp-img-mobile'}">
                        <img src="<?php echo  wp_get_attachment_image_src( $gallery_image, 'medium' )[0]; ?>" class="lazy" />
                    </a>
                <?php else: ?>
                    <a href="<?php echo get_field( 'gallery_video' ); ?>" data-plugin-video-popup>
                        <img src="<?php echo  get_field( 'gallery_video_thumbnail'); ?>" class="lazy" />
                    </a>
                <?php endif; ?>
                </div>
                <?php endwhile; ?>
                    <?php endif; ?>
            </div>
    </div>
</section>

<?php do_action( 'special_offer' ); ?>

</div><!-- #content -->
<?php
get_footer();
