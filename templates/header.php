<header class="header">
  <div class="container">
    <div class="navbar-header navbar navbar-expand-xl navbar-light align-items-lg-center">
      <a class="navbar-brand" href="<?php esc_url(home_url('/')); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo.png" alt="logo" class="header__logo"/>
      </a>

      <nav class="collapse navbar-collapse main-nav d-none d-xl-block justify-content-xl-between">
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav justify-content-xl-between']);
        endif;
        ?>
      </nav>

      <a href="tel:+555553332211" class="btn header__phone">
          <i class="sprite sprite-phone"></i> Call us
        </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMobile"
              aria-controls="navbarMobile" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>

    <nav class="collapse navbar-collapse main-nav d-xl-none" id="navbarMobile">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav']);
      endif;
      ?>
    </nav>
  </div>
</header>
