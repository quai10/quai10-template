<?php
get_header();
?>
<section class="tpl_single-event tpl_formules content-box container margin-large grid no-padding-left" aria-labelledby="a11y_eventTitleLocation">
    <?php
        global $EM_Location;
    ?>
    <div class="eventWrapper">
        <div class="flex-container">
            <div class="eventInfo flex-item-fluid">
                <h2 class="eventTitle" id="a11y_eventTitleLocation"><?php echo $EM_Location->output('#_LOCATIONNAME'); ?></h2>
                <p class="eventContent"><?php echo $EM_Location->output('#_LOCATIONNOTES'); ?></p>
                <p class="eventDate"><?php echo $EM_Location->output('#_LOCATIONADDRESS - #_LOCATIONTOWN - #_LOCATIONCOUNTRY'); ?></p>
            </div>
            <div class="eventMap w450p"><?php echo $EM_Location->output('#_LOCATIONMAP'); ?></div>
        </div>
    </div>
</section><!-- .tpl_single-event -->
<?php
get_footer();
