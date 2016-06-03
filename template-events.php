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
  <div class="tpl_future-events">
    <h2 class="tpl_formules-title">Les prochains événements</h2>
    <div class="eventsWrapper">
        <?php
        echo Event::getFutureEvents();
        ?>      
    </div>
  </div>
  <div class="eventMessage">
    <?php the_post(); ?>    
    <?php the_content(); ?>
  </div>
  <div class="eventIdea">
    <div class="ideaWrapper">
      <p class="desc">J'ai une idée,<br>je vous la suggère !<br><a href="" class="cta">&rarr;</a></p>
    </div>    
  </div>
  <div class="tpl_past-events">
    <h2 class="tpl_formules-title">Les événements passés</h2>
    <?php
    echo Event::getPastEvents();
    ?>
  </div>
</section>
<?php
get_footer();
