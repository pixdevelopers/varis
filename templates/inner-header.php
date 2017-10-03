
    <?php 
    get_header();
     ?>
     <div class="header inner">
        <nav class="navbar">
            <button type="button" class="collapsed visible-xs" data-toggle="collapse" data-target="#cv-navbar" aria-expanded="false">
                <i class="fa fa-bars" aria-hidden="true"></i>
                <i class="fa fa-times" aria-hidden="true"></i>
            </button>
            <div class="collapse navbar-collapse" id="cv-navbar">
                 <?php wp_nav_menu( array('container' => '', 'menu_class' => 'nav navbar-nav','menu' => 'mainmenu' ) ); ?>
            </div>
        </nav>
        <h2><?php the_title(); ?></h2>
    </div>