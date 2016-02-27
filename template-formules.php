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
  'order' => 'ASC'
);
$loop = new WP_Query($args);

// we display this block markup
?>
<section class="tpl_formules content-box container margin-large">
  <div class="tpl_formules-container grid no-padding-left no-padding">
    <h2 class="tpl_formules-title content-title"><?php the_title(); ?></h2>
    <?php if ($loop->have_posts()) : ?>
    <ul class="tpl_formules-list grid-3">
      <?php while ($loop->have_posts()) : $loop->the_post(); ?>
        <li class="tpl_formules-element">
          <div class="tpl_formules-element-image"><img src="<?php echo get_field('image'); ?>" alt="" title=""></div>
          <h3 class="tpl_formules-element-title"><?php the_title(); ?></h3>
          <div class="tpl_formules-element-description"><?php the_content(); ?></div>
          <div class="tpl_formules-informations">
            <div class="tpl_formules-element-perfectfor">
              Parfait pour&nbsp;:<br> <?php echo get_field('perfectfor'); ?>
            </div><!-- .tpl_formules-element-perfectfor -->
            <div class="tpl_formules-element-longdesc">
              <?php echo get_field('longdesc'); ?>
            </div><!-- .tpl_formules-element-longdesc -->
            <div class="tpl_formules-element-engagement">
              <?php if (get_field('engagement')) : ?>
                Engagement&nbsp;:<br> <?php echo get_field('engagement'); ?>
              <?php else: ?>
                Engagement&nbsp;:<br> Aucun !
              <?php endif; ?>
            </div><!-- .tpl_formules-element-engagement -->
            <div class="tpl_formules-element-price">
              <?php if (get_field('price') > 0) : ?>
                <strong><?php echo get_field('price'); ?></strong>
                <sup>&euro; ttc</sup>
                <em>par mois</em>
              <?php else: ?>
                Gratuit
              <?php endif; ?>
              <?php if (get_field('price_desc')) : ?>
                <br/>(<?php echo get_field('price_desc'); ?>)
              <?php endif; ?>
            </div><!-- .tpl_formules-element-price -->
          </div><!-- .tpl_formules-informations -->
        </li>
      <?php endwhile; ?>
    </ul><!-- .tpl_formules-list -->
    <?php endif; ?>
    <div class="tpl_formules-element-cta-container mla mra">
      <a class="btn" href="<?php echo get_field('cta_destination'); ?>">
        <?php echo __('Contactez-nous', 'quai10'); ?>
      </a>
    </div><!-- .tpl_formules-element-cta-container -->
  </div><!-- .tpl_formules-container -->
</section><!-- .tpl_formules -->
