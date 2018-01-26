<?php
/**
 * Page template.
 *
 * PHP version 5
 *
 * @category Template
 *
 * @author   Pierre Rudloff <contact@rudloff.pro>
 * @author   Damien Senger <hi@hiwelo.co>
 * @author   Alexandre Mathieu <contact@ademux.fr>
 * @license  GPL http://www.gnu.org/licenses/gpl.html
 *
 * @link     https://quai10.org/
 */
get_header();
// Get variables for further use
$page_id = get_queried_object_id();
// Get the content outside the loop
$page_object = get_post( $page_id );

if ($page_object->post_content)
{
    echo '<section class="tpl_formules content-box container margin-large grid no-padding-left">
                <p class="tpl_formules-intro">'.$page_object->post_content.'</p>
            </section>';
}

// we made a loop with each child of this page
$loop = new WP_Query([
    'post_type'   => 'page',
    'post_parent' => $page_id,
    'order'       => 'ASC',
    'orderby'     => 'menu_order',
]);

// we check if we have children
if ($loop->have_posts()) :
    // we loop each child
    while ($loop->have_posts()) :
        // we load all child page's informations
        $loop->the_post();
        // we search the template name
        $template = get_page_template_slug();
        $template = explode('.', $template)[0];
        $template = explode('-', $template, 2);
        if (isset($template[1])) :
            // we call the asked template
            get_template_part($template[0], $template[1]);
            // Initialize dummy var for second call of "template-showcase"
            // after call of "template-formules"
            if ($template[1] == 'formules') :
                $reverse = true;
            endif;
        else :
            ?>
            <section class="tpl_formules content-box container margin-large grid no-padding-left" aria-labelledby="<?php echo get_post_field('post_name', get_post()); ?>">
                <h2 id="<?php echo get_post_field('post_name', get_post()); ?>" class="tpl_formules-title content-title">
                    <?php the_title(); ?></h2>
                <?php the_content(); ?>
            </section><!-- .tpl_formules -->
            <?php
        endif;
    endwhile;
    // we unset useless vars
    wp_reset_postdata();

    // Check if current page title start with "Nos offres..."
    $pattern = '/^Nos offres/';
    preg_match($pattern, $page_object->post_title, $matches);
    
    if ($matches[0] && (get_field('cta_label') || get_field('cta_description') || get_field('cta_destination'))) : ?>
        <div class="tpl_formules-element-cta-container mla mra">
            <span class="cta-description"><?php echo get_field('cta_description'); ?></span>            
            <a class="btn" href="<?php echo get_field('cta_destination'); ?>"><?php echo get_field('cta_label') ?></a>
        </div>
    <?php
    endif;
endif;
get_footer();