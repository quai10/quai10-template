<?php
/* Template Name: Formules */

// we check this page id
$page_id = get_queried_object_id();

// we search the asked post category
$cat_id = get_field('formules_category');

// we create a WP_Query for this contents
$args = array(
  'post_type' => 'post',
  'cat' => $cat_id,
  'posts_per_page' => 3,
  'meta_key' => 'order',
  'orderby' => 'meta_value_num',
  'order' => ASC
);
$loop = new WP_Query($args);

// we display this block markup
?>
<section class="tpl_formules container margin-large grid no-padding-left no-padding">
  <h2 class="tpl_formules-title content-title"><?php the_title(); ?></h2>
  <?php if ($loop->have_posts()) : ?>
  <ul class="tpl_formules-list grid-3">
    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
      <li class="tpl_formules-element">
        <h3 class="tpl_formules-element-title"><?php the_title(); ?></h3>
        <div class="tpl_formules-element-description"><?php the_content(); ?></div>
        <div class="tpl_formules-element-engagement">
          <?php if (get_field('engagement')) : ?>
            Engagement<br> <?php echo get_field('engagement'); ?>
          <?php else: ?>
            Sans<br> engagement
          <?php endif; ?>
        </div><!-- .tpl_formules-element-engagement -->
        <div class="tpl_formules-element-price">
          <strong><?php echo get_field('price'); ?></strong>
          <sup>&euro; ttc</sup>
          <em>par mois</em>
        </div><!-- .tpl_formules-element-price -->
        <div class="tpl_formules-element-cta-container">
          <a class="btn" href="<?php echo get_field('cta_destination'); ?>">
            <?php echo get_field('cta_label'); ?>
          </a>
        </div><!-- .tpl_formules-element-cta-container -->
      </li>
    <?php endwhile; ?>
  </ul><!-- .tpl_formules-list -->
  <?php endif; ?>
</section><!-- .tpl_formules -->
