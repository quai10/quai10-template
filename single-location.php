<?php
use Quai10\Event;
get_header();
?>
<section class="tpl_single-event tpl_formules content-box container margin-large grid no-padding-left">
     <?php
        // the_content();
     	echo Event::getCurrentLocation();
    ?>   
</section>
<?php
get_footer();
