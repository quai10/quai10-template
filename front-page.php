<?php get_header(); ?>
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
      ?>
    </nav><!-- .nav-box -->
    <div class="header-container grid-1-4">
      <div class="header-icon">
        <svg role="img" aria-labelledby="title-icone-quai10"><use xlink:href="#icon-icone-quai10"></use></svg>
      </div><!-- .header-icon -->
      <h1 class="header-title"><?php the_title(); ?></h1>
    </div><!-- .header-container -->
  </header><!-- .header-box -->
  <div class="content-box container margin-large grid-2 no-padding-left">
    <?php
      $args = array(
        'post_type' => 'page',
        'post_parent' => get_the_ID()
      );
      $loop = new WP_Query($args);
      if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post();
    ?>
    <section class="asso-box">
      <h2 class="asso-title"><?php the_title(); ?></h2>
      <?php the_content(); ?>
    </section>
    <?php endwhile; endif; ?>
  </div><!-- .presentation-box -->
