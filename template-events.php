<?php
/**
 * Events list template.
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
/* Template Name: Events */
use Quai10\Event;

get_header();
?>
<div class="tpl_formules content-box container margin-large grid no-padding-left">
    <section class="tpl_future-events" aria-labelledby="a11y_nextEventsTitle">
        <h2 class="tpl_formules-title" id="a11y_nextEventsTitle">Les prochains événements</h2>
        <div class="eventsWrapper">
            <?php
            echo Event::getFutureEvents();
            ?>
        </div>
    </section><!-- .tpl_future-events -->
    <div class="eventMessage">
        <?php the_post(); ?>
        <?php the_content(); ?>
    </div>
    <div class="eventIdea">
        <div class="ideaWrapper">
            <p class="desc">J'ai une idée,<br>je vous la suggère !<br><a href=<?php echo get_permalink(10); ?> class="cta">&rarr;</a></p>
        </div>
    </div>
    <section class="tpl_past-events" aria-labelledby="a11y_lastEventsTitle">
        <h2 class="tpl_formules-title" id="a11y_lastEventsTitle">Les événements passés</h2>
        <?php
        echo Event::getPastEvents();
        ?>
    </section><!-- .tpl_past-events -->
</div>
<?php
get_footer();
