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
            global $post;
            $EM_Event = em_get_event($post->ID, 'post_id'); 
        ?>
        <h2 class="eventTitle"><?php echo $EM_Event->output('#_EVENTNAME');?></h2>
        <?php echo $EM_Event->output('#_EVENTNOTES');?>
        <div class="flex-container">
            <div class="eventInfo flex-item-fluid">
                <p class="eventDate"><strong>Quand ?</strong><br><?php echo $EM_Event->output('#_EVENTDATES');?><br><?php echo $EM_Event->output('#_EVENTTIMES');?></p>
                <p class="eventCategory"><strong>Type d'évènement</strong><br><?php echo $EM_Event->output('#_CATEGORIES');?></p>
            </div>
            <div class="eventMap w450p"><strong>Où ?</strong><br><?php echo $EM_Event->output('#_LOCATIONMAP');?></div>            
        </div>
    </div>
</section>
<?php
get_footer();
