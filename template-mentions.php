<?php
/**
 * Mentions template.
 *
 * PHP version 5
 *
 * @category Template
 *
 * @author   Alexandre Mathieu <contact@ademux.fr>
 * @license  GPL http://www.gnu.org/licenses/gpl.html
 *
 * @link     https://quai10.org/
 */
/* Template Name: Mentions */
get_header();
?>
<section class="tpl_formules content-box container margin-large grid no-padding-left">
<?php
if (have_posts()) :
  while (have_posts()) : the_post();
    the_content();
  endwhile;
endif;?>
</section>
<?php
get_footer();
