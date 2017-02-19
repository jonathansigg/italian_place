<header class="banner">
  <div class="container-fluid">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>">
      <img src="<?= get_template_directory_uri() ?>/dist/images/logo.svg" alte="Italian Place">
    </a>
    <div class="hamburger-wrapper pull-xs-right hidden-lg-up">
      <button class="hamburger hamburger--squeeze" type="button">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </button>
    </div>
    <nav class="nav-primary text-md-right">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
  </div>
</header>
