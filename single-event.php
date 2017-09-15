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
<section class="tpl_single-event tpl_formules content-box container margin-large grid no-padding-left" aria-labelledby="a11y_eventTitle">
    <div class="eventWrapper">
        <?php
            global $EM_Event;
        ?>
        <div class="flex-container">
            <div class="eventInfo flex-item-fluid">
                <h2 class="eventTitle" id="a11y_eventTitle"><?php echo $EM_Event->output('#_EVENTNAME'); ?></h2>
                <p class="eventContent"><?php echo $EM_Event->output('#_EVENTNOTES'); ?></p>
                <p class="eventDate"><strong>Quand ?</strong><br><?php echo $EM_Event->output('#_EVENTDATES'); ?><br><?php echo $EM_Event->output('#_EVENTTIMES'); ?></p>
            </div>
            <div class="eventMap w450p"><?php echo $EM_Event->output('#_LOCATIONMAP'); ?></div>
        </div>
        <?php echo $EM_Event->output('#_BOOKINGFORM'); ?>
    </div>
</section><!-- .tpl_single-event -->
<?php
get_footer();
