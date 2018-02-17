<?php
/* Template Name: Section */
?>
<section class="tpl_section content-box container margin-large" aria-labelledby="a11y_sectionTitle">
    <?php
    if (!empty(get_field('aside_content'))) {
        $grid = 'grid-2-small-1';
    } else {
        $grid = 'grid';
    }
    ?>
    <h2 class="tpl_section-title content-title" id="a11y_sectionTitle"><?php the_title(); ?></h2>
    <div class="tpl_section-container <?php echo $grid ?> no-padding-left no-padding">
        <div class="tpl_section-content">
            <?php the_content(); ?>
        </div>
        <?php if (!empty(get_field('aside_content'))) : ?>
            <div class="tpl_section-aside" style="<?php
            if (!empty(get_field('aside_image'))) {
                echo 'background-image: url('.get_field('aside_image')['url'].' ) ';
            } ?>">
                <div class="tpl_section-aside-content">
                    <?php echo get_field('aside_content'); ?>
                </div>
                <div class="tpl_section-element-cta-container mla mra">
                    <?php if (!empty(get_field('cta_destination'))) : ?>
                        <a class="btn" href="<?php echo get_field('cta_destination'); ?>">
                            <?php echo __('Contactez-nous', 'quai10'); ?>
                        </a>
                    <?php endif; ?>
                </div><!-- .tpl_section-element-cta-container -->
            </div>
        <?php endif; ?>
    </div><!-- .tpl_section-container -->
</section><!-- .tpl_section -->
