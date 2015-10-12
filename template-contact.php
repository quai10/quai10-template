<?php
/* Template Name: Contact page */
the_post();
get_header();
?>
<div class="tpl_contact-container grid-2 container margin-large content-box no-padding">
  <section class="tpl_contact-content">
    <?php the_content(); ?>
    <ul class="tpl_contact-contacts" style="background-image: url(<?php echo get_field('contact_background'); ?>)">
      <li><a class="no-style" href="mailto:<?php echo get_field('contact_email'); ?>"><?php echo get_field('contact_email'); ?></a></li>
      <li><a class="no-style" href="tel:+33<?php echo substr(implode(explode(' ', get_field('contact_phone'))), 1); ?>"><?php echo get_field('contact_phone'); ?></a></li>
    </ul><!-- .tpl_contact-contacts -->
  </section><!-- .tpl_contact-content -->
  <aside class="tpl_contact-aside">
    <h2 class="tpl_contact-title"><?php echo get_field('contactform_title'); ?></h2>
    <?php echo get_field('contactform_id'); ?>
  </aside><!-- .tpl_contact-aside -->
</div><!-- .tpl_contact-container -->
<?php /*
<div class="tpl_contact-map-container content-box margin-large grid no-padding">
  <div class="tpl_contact-map-title-container container">
    <h3 class="tpl_contact-map-title"><?php get_field('map_title'); ?></h3>
  </div><!-- .tpl_contact-map-title-container -->
  <div class="tpl_contact-map">
    <?php $map_data = get_field('map'); ?>
    <div id="map" data-lat="<?php echo $map_data['lat']; ?>" data-lng="<?php echo $map_data['lng']; ?>" data-zoom="17"></div>
  </div><!-- .tpl_contact-map -->
</div><!-- .tpl_contact-map-container -->
<?php */get_footer(); ?>
