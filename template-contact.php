<?php
/* Template Name: Contact page */
the_post();
get_header();
get_header('page');
?>
<div class="tpl_contact-container container content-box margin-large grid-2 no-padding">
  <section class="tpl_contact-content">
    <?php the_content(); ?>
    <ul class="tpl_contact-contacts">
      <li><a href="mailto:<?php echo get_field('contact_email'); ?>"><?php echo get_field('contact_email'); ?></a></li>
      <li><a href="tel:+33<?php echo substr(implode(explode(' ', get_field('contact_phone'))), 1); ?>"><?php echo get_field('contact_phone'); ?></a></li>
    </ul><!-- .tpl_contact-contacts -->
  </section><!-- .tpl_contact-content -->
  <aside class="tpl_contact-aside">
    <h2 class="tpl_contact-title"><?php echo get_field('contactform_title'); ?></h2>
    <form method="post" action="/nous-contacter/#wpcf7-f146-p10-o1">
      <ul class="contactform-list">
        <li>
          <input type="text" id="form-nom" required>
          <label for="form-nom">Nom</label>
        </li>
        <li>
          <input type="text" id="form-prenom" required>
          <label for="form-prenom">Prénom</label>
        </li>
        <li class="w100">
          <input type="email" id="form-email" required>
          <label for="form-email">Email</label>
        </li>
        <li class="w100">
          <textarea id="form-message" required>Un message ? une idée ? une suggestion ? une question ?</textarea>
        </li>
        <li>
          <button class="btn" type="submit">Envoyer</button>
        </li>
      </ul><!-- .contactform-list -->
    </form>
  </aside><!-- .tpl_contact-aside -->
</div><!-- .tpl_contact-container -->
<div class="tpl_contact-map-container content-box margin-large grid no-padding">
  <div class="tpl_contact-map-title-container container">
    <h3 class="tpl_contact-map-title"><?php get_field('map_title'); ?></h3>
  </div><!-- .tpl_contact-map-title-container -->
  <div class="tpl_contact-map">
    <?php $map_data = get_field('map'); ?>
    <div id="map" data-lat="<?php echo $map_data['lat']; ?>" data-lng="<?php echo $map_data['lng']; ?>" data-zoom="17"></div>
  </div><!-- .tpl_contact-map -->
</div><!-- .tpl_contact-map-container -->
<?php get_footer(); ?>
