<?php
/**
 * Page template
 *
 * PHP version 5
 *
 * @category Template
 * @package  Quai10
 * @author   Pierre Rudloff <contact@rudloff.pro>
 * @author   Damien Senger <hi@hiwelo.co>
 * @license  GPL http://www.gnu.org/licenses/gpl.html
 * @link     https://quai10.org/
 */
get_header();

// on récupère les variables nécessaires
$page_id = get_queried_object_id();

// we made a loop with each child of this page
$args = array(
  'post_type' => 'page',
  'post_parent' => $page_id,
  'order' => 'ASC',
  'orderby' => 'menu_order'
);
$loop = new WP_Query($args);

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
    if (isset($template[1])) {
      // we call the asked template
      get_template_part($template[0], $template[1]);
      // we unset useless vars
    } else {
    ?>
    <section class="tpl_formules content-box container margin-large grid no-padding-left">
      <h2 class="tpl_formules-title content-title"><?php the_title(); ?></h2>
    <?php
      the_content();
    ?>
      </section>
    <?php
  }
  endwhile;
    // we unset useless vars
  wp_reset_postdata();
else :
  the_content();
endif;

get_footer();
