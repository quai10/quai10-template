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
    $bloc_association = get_field('description_association')[0];
    $cta = array(
      'href' => get_field('cta_social_href'),
      'label' => get_field('cta_social_label')
    );
    $args = array(
      'post_type' => 'page',
      'page_id' => $bloc_association->ID
    );
    $loop = new WP_Query($args);
    if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post();
    ?>
    <section class="asso-box">
      <h2><?php the_title(); ?></h2>
      <svg role="img" aria-labelledby="title-icone-quai10"><use xlink:href="#icon-icone-quai10"></use></svg>
      <?php the_content(); ?>
      <a href="<?php echo $cta['href']; ?>>" class="btn"><?php echo $cta['label']; ?></a>
    </section>
    <?php
    endwhile; endif; unset($loop, $args); wp_reset_postdata();
    $bloc_coworkers = get_field('emplacement_des_voyageurs');
    ?>
    <section class="coworkers-box">
      <h2><?php echo $bloc_coworkers->name; ?></h2>
      <?php
      $args = array(
        'category_name' => $bloc_coworkers->slug,
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
  </div><!-- .content-box -->
  <div class="content-box container margin-large grid no-padding-left no-padding">
    <section class="espace-box">
      <?php
      $contenu_espace = get_field('contenu_espace');
      $args = array(
        'post_type' => 'page',
        'page_id' => $contenu_espace->ID
      );
      $loop = new WP_Query($args);
      if ($loop->have_posts()) : $loop->the_post();
      $title = str_replace('Quai Numéro Dix', '<svg role="img" aria-labelledby="title-logo-quai10-vert"><use xlink:href="#icon-logo-quai10-vert"></use></svg>', get_the_title());
      ?>
      <h2><?php echo $title; ?></h2>
      <div class="espace-list">
        <?php the_content(); ?>
      </div><!-- .espace-list -->
    <?php endif; unset($loop, $args); wp_reset_postdata(); ?>
    </section><!-- .espace-box -->
  </div><!-- .content-box -->
