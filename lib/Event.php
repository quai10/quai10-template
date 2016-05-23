<?php
/**
 * Event class
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
namespace Quai10;

/**
 * Manage Events Manager events
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
class Event
{

  /**
   * Get future events
   * @return string HTML
   */
  public static function getFutureEvents()
  {
    return \EM_Events::output(
          array(
              'format_header'=>'<ul class="eventList">',
              'format'=>'<li class="eventItem">
                  <div class="eventWrapper">
                    <div class="eventDate">#_{j M Y}</div>
                    <div class="eventImg">#_EVENTIMAGE{372,372}</div>
                    <h3 class="eventTitle">#_EVENTNAME</h3>
                    <div class="eventDesc">#_EVENTNOTES</div>
                    <a class="eventRead btn" href="#_EVENTURL">En savoir plus</a>
                  </div>
                </li>',
              'format_footer'=>'</ul>'
          )
      );
  }

  /**
   * Get past events
   * @return string HTML
   */
  public static function getPastEvents()
  {
    return \EM_Events::output(
          array(
              'format_header'=>'<ul class="eventList grid-3-medium-2-small-2-tiny-1">',
              'format'=>'<li class="eventItem">
                    <div class="eventDate">#_{j M Y}</div>
                    <div class="eventImg">#_EVENTIMAGE{372,372}</div>
                    <h3 class="eventTitle">#_EVENTNAME</h3>
                    <div class="eventDesc">#_EVENTNOTES</div>
                    <a class="eventRead btn" href="#_EVENTURL">En savoir plus</a>
                </li>',
              'format_footer'=>'</ul>',
              'scope'=>'past',
              'order'=>'DESC',
              'limit'=>3,
              'pagination'=>true
          )
      );
  }
}
