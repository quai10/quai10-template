<?php
/**
 * Events list template
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
/* Template Name: Events */
get_header();
get_header('page');
?>
<h2>Les prochains événements</h2>
<?php
echo getFutureEvents();
the_post();
the_content();
?>
<h2>Les événements passés</h2>
<?php
echo getPastEvents();
get_footer();
