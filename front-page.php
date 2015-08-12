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
      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>
    </section>
  <?php endwhile; endif; unset($loop, $args); wp_reset_postdata(); ?>
    <section class="coworkers-box">
      <h2><?php echo get_post_meta(get_the_ID(), 'coworkers_title', true); ?></h2>
      <?php
      $args = array(
        'category_name' => get_post_meta(get_the_ID(), 'coworkers_category', true),
        'orderby' => 'rand'
      );
      $loop = new WP_Query($args);
      if ($loop->have_posts()) :
      ?>
      <ul class="coworkers-list grid-3">
        <?php while ($loop->have_posts()) : $loop->the_post(); ?>
        <li class="coworkers-element">
          <div class="coworkers-element-image">
            <?php $url = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()))[0]; ?>
            <img src="<?php echo $url; ?>" alt="Photo de <?php the_title(); ?>" title="Photo de <?php the_title(); ?>">
          </div><!-- .coworkers-element-image -->
          <h3 class="h5-like coworkers-element-name"><?php the_title(); ?></h3>
          <p class="coworkers-element-work"><?php echo get_post_meta(get_the_ID(), 'work', true); ?></p>
        </li><!-- .coworkers-element -->
        <?php unset($url); endwhile; ?>
      </ul><!-- .coworkers-list -->
      <?php else : ?>
        <p>Aucun voyageur n'a pris place dans le train actuellement.</p>
      <?php endif; unset($loop, $args); wp_reset_postdata(); ?>
    </section><!-- .coworkers-box -->
  </div><!-- .presentation-box -->
