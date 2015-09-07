<header class="header-box container" id="top">
  <nav class="nav-box grid-1-4">
    <div class="nav-logo">
      <a href="<?php echo home_url(); ?>">
        <svg role="img" aria-labelledby="title-logo-quai10">
          <use xlink:href="#icon-logo-quai10"></use>
        </svg>
      </a>
    </div><!-- .nav-logo -->
    <?php
    $args = array(
        'theme_location' => 'primary_navigation',
        'container' => false,
        'menu_class' => 'nav-list',
        'menu_id' => 'navigation'
      );
    wp_nav_menu($args);
    unset($args);
    ?>
  </nav><!-- .nav-box -->
  <div class="header-container grid-1-4">
    <div class="header-icon">
      <svg role="img" aria-labelledby="title-icone-quai10"><use xlink:href="#icon-icone-quai10"></use></svg>
    </div><!-- .header-icon -->
    <h1 class="header-title"><?php the_title(); ?></h1>
  </div><!-- .header-container -->
</header><!-- .header-box -->
