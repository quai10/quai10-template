<?php
/**
 * Blog template.
 *
 * PHP version 5
 *
 * @category Template
 *
 * @author   Pierre Tusseau <pierre.tusseau@gmail.com>
 * @license  GPL http://www.gnu.org/licenses/gpl.html
 *
 * @link     https://quai10.org/
 */
/* Template Name: Blog */

get_header();
?>
<div class="tpl_formules content-box container margin-large grid no-padding-left">
    <?php do_action('Articles', 10) ?>
</div>


<?php
get_footer();
