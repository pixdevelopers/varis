<?php
/**
 * Template Name: Home page Template
 **/
 ?>
      <?php 
     include('templates/home-header.php'); 
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
        <h3>خدمات</h3>
        <div class="container">
<?php 

                        $array = get_field('home_services'); 
                        foreach ($array as $key => $value) {
                            $post = get_post($array[$key]);
                            setup_postdata($post);

                            ?>
                            
            <div class="col-md-4">
                <div class="service">
                    <h4><?php the_title(); ?></h4>
                   <?php 
                                    echo the_post_thumbnail('home_thumb_s' ,array('class' => ''));
                                    ?>
                    <p><?php
                    $content = get_the_content();
                    echo getExcerpt($content,25);
                    ?> ...</p>
                    <a href="<?php the_permalink(); ?>">بیشتر بخوانید<i class="fa fa-angle-left" aria-hidden="true"></i></a>
                </div>
            </div>
                            <?php
                            wp_reset_postdata();
                        }
                        ?>
        </div>
    </div>
    <div class="home-article">
        <h3>مقالات</h3>
        <div class="container">
            
            <?php 

                        $array = get_field('home_articles'); 
                        foreach ($array as $key => $value) {
                            $post = get_post($array[$key]);
                            setup_postdata($post);

                            ?>

                            <div class="col-md-4">
                <a href="<?php the_permalink(); ?>" class="article">
                    <i class="fa fa-file-text-o" aria-hidden="true"></i>
                    <h4><?php the_title(); ?></h4>
                    <span class="date">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <?php   echo the_date('d M Y'); ?>
                    </span>
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                </a>
            </div>

           
                            <?php
                            wp_reset_postdata();
                        }
                        ?>
        </div>
    </div>
    <?php get_footer(); ?>
    