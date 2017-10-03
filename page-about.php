<?php
/**
 * Template Name: About us Template
 **/
 ?>
     <?php 
     include('templates/inner-header.php'); 
     ?>
 <div class="home-about">
        <div class="container">
            <div class="col-md-5 col-md-push-7">
                <div class="photo">
                    <img src="<?php the_field('home_about_photo') ?>" />
                </div>
            </div>
            <div class="col-md-7 col-md-pull-5">
                <h2><?php the_field('home_about_heading') ?></h2>
                <p><?php the_field('home_about_desc') ?></p>
            </div>
        </div>
    </div>
    <div class="home-des">
        <div class="dark-bg"></div>
        <div class="container">
            <div class="col-md-4 col-md-offset-1 col-md-push-6">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icon-1.png" />
                <h3><?php the_field('home_feature_1') ?></h3>
                <p><?php the_field('home_feature_desc_1') ?></p>
            </div>
            <div class="col-md-4 col-md-offset-2 col-md-pull-6">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icon-2.png" />
                <h3><?php the_field('home_feature_2') ?></h3>
                <p><?php the_field('home_feature_desc_2') ?></p>

            </div>
        </div>
    </div>
    <div class="home-services">
        <div class="members">
        <h3>اعضای کلینیک</h3>
        <p><?php the_field('about_us_title'); ?></p>
            <div class="container">
                <?php
// WP_Query arguments
$args = array(
    'post_type'              => array( 'team_post_type' ),
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
        $query->the_post();
        ?>
                <div class="col-md-3 col-sm-6">
                    <div class="photo">
                        <img src="<?php the_field('staff_photo'); ?>" />
                    </div>
                    <h4><?php the_field('staff_name'); ?></h4>
                    <p><?php the_field('staff_role'); ?></p>
                </div>
        <?php
    }
} else {
    // no posts found
}

// Restore original Post Data
wp_reset_postdata();
                ?>
               
            </div>
        </div>
    </div>
        <?php get_footer(); ?>
