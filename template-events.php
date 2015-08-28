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
em_events(
    array(
        'format_header'=>'<ul>',
        'format'=>'<li>
            <div>#_{j M Y}</div>
            <h3>#_EVENTNAME</h3>
            <div>#_EVENTNOTES</div>
            <a href="#_EVENTURL">En savoir plus</a>
        </li>',
        'format_footer'=>'</ul>'
    )
);
the_post();
the_content();
?>
<h2>Les événements passés</h2>
<?php
em_events(
    array(
        'format_header'=>'<ul>',
        'format'=>'<li>
            <div>#_{j M Y}</div>
            <h3>#_EVENTNAME</h3>
            <div>#_EVENTNOTES</div>
            <a href="#_EVENTURL">En savoir plus</a>
        </li>',
        'format_footer'=>'</ul>',
        'scope'=>'past',
        'order'=>'DESC',
        'limit'=>3,
        'pagination'=>true
    )
);
get_footer();
