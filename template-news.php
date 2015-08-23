<?php /* Template Name: Actualité */ ?>
<section class="tpl_news container content-box margin-large grid no-padding-left no-padding">
  <div class="tpl_news-container grid-2-1 no-padding-left no-padding">
    <div class="tpl_news-content">
      <h2 class="tpl_news-title content-title"><?php the_title(); ?></h2>
      <?php the_content(); ?>
    </div><!-- .tpl_news-content -->
    <aside class="tpl_news-aside">
      <a class="no-style" href="<?php echo get_field('aside_destination'); ?>">
        <p><?php echo get_field('aside_content'); ?></p>
      </a>
    </aside><!-- .tpl_news-aside -->
  </div><!-- .tpl_news-container -->
</section><!-- .tpl_news -->
