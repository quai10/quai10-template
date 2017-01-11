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
        <?php
        global $EM_Event;
        echo apply_filters(
            'em_event_output_single',
            $EM_Event->output(
                '<div style="float:right; margin:0px 0px 15px 15px;">#_LOCATIONMAP</div>
                <p>
                    <strong>Date / Heure</strong><br/>
                    Date(s) - #_EVENTDATES<br /><i>#_EVENTTIMES</i>
                </p>
                {has_location}
                <p>
                    <strong>Emplacement</strong><br/>
                    #_LOCATIONLINK
                </p>
                {/has_location}
                <p>
                    <strong>Catégories</strong>
                    #_CATEGORIES
                </p>
                <br style="clear:both" />
                #_EVENTNOTES',
                'html'
            ),
            $EM_Event,
            'html'
        );
        ?>
    </div>
</section>
<?php
get_footer();
