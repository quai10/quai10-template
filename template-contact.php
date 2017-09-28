<?php
/* Template Name: Contact page */
the_post();
get_header();
?>
<div class="tpl_contact-container grid-2 container margin-large content-box">
    <section class="tpl_contact-content" aria-label="Moyens de contact">
        <?php the_content(); ?>
        <ul class="tpl_contact-contacts" style="background-image: url(<?php echo get_field('contact_background'); ?>)">
            <li><a class="no-style" href="mailto:<?php echo get_field('contact_email'); ?>">
            <?php echo get_field('contact_email'); ?></a></li>
            <li><a class="no-style" href="tel:+33<?php echo substr(implode(explode(' ', get_field('contact_phone'))), 1); ?>">
            <?php echo get_field('contact_phone'); ?></a></li>
        </ul><!-- .tpl_contact-contacts -->
    </section><!-- .tpl_contact-content -->
    <aside class="tpl_contact-aside" aria-labelledby="a11y_asideContactTitle">
        <h2 class="tpl_contact-title" id="a11y_asideContactTitle"><?php echo get_field('contactform_title'); ?></h2>
        <?php echo do_shortcode('[contact-form-7 id="'.get_field('contactform_id').'"]'); ?>
    </aside><!-- .tpl_contact-aside -->
</div><!-- .tpl_contact-container -->
<?php get_footer(); ?>
