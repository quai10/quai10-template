<?php
/**
 * Single event template.
 *
 * PHP version 5
 *
 * @category Template
 *
 * @author   Pierre Rudloff <contact@rudloff.pro>
 * @author   Damien Senger <hi@hiwelo.co>
 * @license  GPL http://www.gnu.org/licenses/gpl.html
 *
 * @link     https://quai10.org/
 */
get_header();
?>
<section class="tpl_single-event tpl_formules content-box container margin-large grid no-padding-left">
    <div class="eventWrapper">
        <?php the_content(); ?>
    </div>
</section>
<?php
get_footer();
