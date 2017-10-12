<?php
/**
 * Template Name: Articles Template
 **/
 ?>
    <?php 
     include('templates/inner-header.php'); 
     ?>
    <div class="container page-content articles">
        <div class="col-md-10 col-lg-9 mx-auto">
<?php
// WP_Query arguments
$args = array(
    'post_type'              => array( 'articles_post_type' ),
    'posts_per_page'         => '99',
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
        $query->the_post();
        ?>
                                          <div class="article-card">
                <div class="article-top"><a href="<?php echo the_permalink(); ?>" class="article-title"><?php the_title(); ?></a>
                    <p class="article-excerpt">
                        <?php 
                        $content = get_the_content();
                        echo getExcerpt($content,160); ?> ...</p>
                </div>
                <div class="article-bottom">
                    <div class="meta-item pull-right read-more"><i class="fa fa-reply" aria-hidden="true"></i><span><a href="<?php echo the_permalink(); ?>">ادامه مطلب</a></span></div>
                    <div class="meta-item pull-left"><i class="fa fa-clock-o" aria-hidden="true"></i><span><?php   echo the_date('d M Y'); ?></span></div>
                    <div class="clearfix"></div>
                </div>
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
    <?php get_footer(); ?>