<header class="banner">
    <div class="px-0 my-5 container">
        <h1 class="h6 text-center "><small>
            <a href="/">
                <?php bloginfo('name'); ?>
            </a>
        </small></h1>
    </div>
    <div class="px-0 mb-5 container">
        <?php dynamic_sidebar('sidebar-primary'); ?>
        <!-- <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>-->
    </div>
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light bg-white rounded mb-5">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
                <?php
   wp_nav_menu([
     'menu'            => 'primary_navigation',
     'theme_location'  => 'primary_navigation',
     'container'       => 'div',
     'container_id'    => 'bs4navbar',
     'container_class' => 'collapse navbar-collapse',
     'menu_id'         => false,
     'menu_class'      => 'navbar-nav mr-auto text-md-center nav-justified w-100 h5',
     'depth'           => 2,
     'fallback_cb'     => 'bs4navwalker::fallback',
     'walker'          => new bs4navwalker()
   ]);
   ?>
            </div>
        </nav>
    </div>
    <div class="p-0 mb-5 container">
        <?php dynamic_sidebar('sidebar-secondary'); ?>
    </div>
</header>
