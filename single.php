
    <?php 
     include('templates/inner-header.php'); 
     ?>
    <div class="container page-content">
        <div class="col-md-10 col-lg-9 mx-auto">
        <?php         
        while ( have_posts() ) : the_post();

                the_content();


        endwhile; ?>
        </div>
    </div>
    <?php get_footer(); ?>