<?php
/* Template Name: Localisation */
?>
<section class="tpl_localisation container content-box contrast-box margin-large" aria-labelledby="a11y_localisationTitle">
    <h2 class="tpl_localisation-title content-title" id="a11y_localisationTitle"><?php the_title(); ?></h2>
    <div class="grid-2">
        <aside class="tpl_localisation-aside">
            <?php $map_data = get_field('map'); ?>
            <div id="map" data-lat="<?php echo $map_data['lat']; ?>"
            data-lng="<?php echo $map_data['lng']; ?>" data-zoom="17"></div>
        </aside><!-- .tpl_localisation-aside -->
        <div class="tpl_localisation-content">
            <?php the_content(); ?>
            <div>
                <a class="btn" href="<?php echo get_field('cta_destination'); ?>">
                    <?php echo get_field('cta_label'); ?>
                </a>
            </div><!-- .btn -->
        </div><!-- .tpl_localisation-content -->
    </div><!-- .grid-2 -->
</section><!-- .tpl_localisation -->
