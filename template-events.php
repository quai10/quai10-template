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
use Quai10\Event;

get_header();
?>
<section class="tpl_formules content-box container margin-large grid no-padding-left">
  <div>
    <h2 class="tpl_formules-title content-title">Les prochains événements</h2>
    <?php
    echo Event::getFutureEvents();
    ?>
  </div>
  <?php
  the_post();
  the_content();
  ?>
  <div>
    <h2 class="tpl_formules-title content-title">Les événements passés</h2>
    <?php
    echo Event::getPastEvents();
    ?>
  </div>
</section>
<?php
get_footer();
