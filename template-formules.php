<?php
/* Template Name: Formules */

// we search the asked post category
$cat_id = get_field('formules_category');
// we create a WP_Query for this contents
$loop = new WP_Query([
    'post_type'      => 'post',
    'cat'            => $cat_id,
    'posts_per_page' => $loop->post_count,
    'meta_key'       => 'order',
    'orderby'        => 'meta_value_num',
    'order'          => 'ASC',
]);
// we display this block markup
?>
<section class="content-box container margin-large" aria-labelledby="a11y_formulesTitle">
    <h2 class="tpl_formules-title content-title" id="a11y_formulesTitle"><?php the_title(); ?></h2>
    <?php if (the_content()) : the_content(); endif; ?>
    <?php if ($loop->have_posts()) : ?>
        <div class="tpl_formules-list grid-<?php echo $loop->post_count; ?>">
            <?php while ($loop->have_posts()) :
                $loop->the_post();
                ?>
                <article class="tpl_formules-element <?php if (get_field('is-promoted')) echo 'is-promoted'; ?>" aria-labelledby="a11y_formuleTitle_<?php the_ID(); ?>">
                    <?php
                        if (get_field('image'))
                            echo '<div class="tpl_formules-element-image"><img src="'.get_field('image').'" alt="" title=""></div>';
                    ?>
                    <h3 class="tpl_formules-element-title" id="a11y_formuleTitle_<?php the_ID(); ?>">
                        <?php the_title(); ?>
                    </h3><!-- .tpl_formules-element-title -->
                    <?php
                        if (the_content())
                            echo '<div class="tpl_formules-element-description">'.the_content().'</div>';
                    ?>
                    <?php if (get_field('purpose')) : ?>
                    <div class="tpl_formules-acf">
                        <p class="tpl_formules-acf-label">Parfait pour...</p>
                        <p class="tpl_formules-acf-value"><?php the_field('purpose'); ?></p>
                    </div><!-- .tpl_formules-element-perfectfor -->
                    <?php endif; ?>
                    <?php if (get_field('including')) : ?>
                    <div class="tpl_formules-acf">
                        <p class="tpl_formules-acf-label">Inclus...</p>
                        <p class="tpl_formules-acf-value"><?php the_field('including'); ?></p>
                    </div><!-- .tpl_formules-element-longdesc -->
                    <?php endif; ?>
                    <?php if (get_field('price_unique') || get_field('price_big_business') || get_field('price_small_business') || get_field('price_nonprofit_individual')) : ?>
                    <div class="tpl_formules-acf">
                            <p class="tpl_formules-acf-label" colspan="2">Tarifs</p>                                   
                            <?php
                                if (get_field('price_unique'))
                                    echo '<p class="tpl_formules-acf-value">Tarif unique : <span>'.get_field('price_unique').'</span></p>';
                            ?>
                            <?php
                                if (get_field('price_big_business'))
                                    echo '<p class="tpl_formules-acf-value">Grandes entreprises<br>>= 10 salariés : <span>'.get_field('price_big_business').'</span></p>';
                            ?>
                            <?php
                                if (get_field('price_small_business'))
                                    echo '<p class="tpl_formules-acf-value">Petites entreprises<br>< 10 salariés : <span>'.get_field('price_small_business').'</span></p>';
                            ?>
                            <?php
                                if (get_field('price_nonprofit_individual'))
                                    echo '<p class="tpl_formules-acf-value">Associations et indépendants : <span>'.get_field('price_nonprofit_individual').'</span></p>';
                            ?>
                    </div>
                    <?php endif; ?>
                    <?php if (get_field('prepaid')) : ?>
                    <div class="tpl_formules-acf">
                        <p class="tpl_formules-acf-label">Acompte</p>
                        <p class="tpl_formules-acf-value"><?php the_field('prepaid'); ?></p>
                    </div>                        
                    <?php endif; ?>
                    <?php if (get_field('deposit')) : ?>
                    <div class="tpl_formules-acf">
                        <p class="tpl_formules-acf-label">Caution</p>
                        <p class="tpl_formules-acf-value"><?php the_field('deposit'); ?></p>
                    </div>
                    <?php endif; ?>
                </article>
            <?php endwhile; wp_reset_postdata(); ?>
        </div><!-- .tpl_formules-list -->
    <?php endif;
    ?>    
</section><!-- .tpl_formules -->