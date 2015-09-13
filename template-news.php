<?php /* Template Name: Actualité */ ?>
<section class="tpl_news content-box container margin-large grid no-padding-left">
  <div class="tpl_news-container grid-2-1 no-padding-left no-padding">
    <div class="tpl_news-content">
      <h2 class="tpl_news-title content-title"><?php the_title(); ?></h2>
      <?php the_content(); ?>
    </div><!-- .tpl_news-content -->
    <aside class="tpl_news-aside" style="background-image: url(<?php echo get_field('aside_image')['url']; ?>);">
      <a class="tpl_news-aside-text no-style" href="<?php echo get_field('aside_destination'); ?>">
        <p><?php echo get_field('aside_content'); ?></p>
        <div class="tpl_news-aside-arrow">
          <svg><use xlink:href="#icon-arrow"></use></svg>
        </div><!-- .tpl_news-aside-arrow -->
      </a>
    </aside><!-- .tpl_news-aside -->
  </div><!-- .tpl_news-container -->
</section><!-- .tpl_news -->
