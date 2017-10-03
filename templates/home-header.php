
    <?php 
    get_header();
     ?>
     <div class="header">
        <div class="logo"></div>
        <div class="logo2"></div>
        <h1><?php the_field('main_heading') ?></h1>
        <h2><?php the_field('sub_heading') ?> </h2>
        <nav class="navbar">
            <button type="button" class="collapsed visible-xs" data-toggle="collapse" data-target="#cv-navbar" aria-expanded="false">
                <i class="fa fa-bars" aria-hidden="true"></i>
                <i class="fa fa-times" aria-hidden="true"></i>
            </button>
            <div class="collapse navbar-collapse" id="cv-navbar">
                <?php wp_nav_menu( array('container' => '', 'menu_class' => 'nav navbar-nav','menu' => 'mainmenu' ) ); ?>
               
            </div>
        </nav>
    </div>