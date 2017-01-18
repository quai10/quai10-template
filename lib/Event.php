<?php
/**
 * Event class.
 */

namespace Quai10;

/**
 * Manage Events Manager events.
 */
class Event
{
    /**
     * Get future events.
     *
     * @return string HTML
     */
    public static function getFutureEvents()
    {
        return \EM_Events::output(
            [
              'format_header' => '<ul class="eventList">',
              'format'        => '<li class="eventItem">
                  <div class="eventWrapper">
                    <div class="eventDate">#_{j M Y}</div>
                    <div class="eventImg"><a href="#_EVENTURL">#_EVENTIMAGE{372,372}</a></div>
                    <h3 class="eventTitle"><a href="#_EVENTURL">#_EVENTNAME</a></h3>
                    <div class="eventDesc">#_EVENTNOTES</div>
                  </div>
                </li>',
              'format_footer' => '</ul>',
            ]
        );
    }

    /**
     * Get past events.
     *
     * @return string HTML
     */
    public static function getPastEvents()
    {
        return \EM_Events::output(
            [
              'format_header' => '<ul class="eventList grid-3-medium-2-small-2-tiny-1">',
              'format'        => '<li class="eventItem">
                    <div class="eventDate">#_{j M Y}</div>
                    <div class="eventImg"><a href="#_EVENTURL">#_EVENTIMAGE{372,372}</a></div>
                    <h3 class="eventTitle"><a href="#_EVENTURL">#_EVENTNAME</a></h3>
                    <div class="eventDesc">#_EVENTNOTES</div>
                </li>',
              'format_footer' => '</ul>',
              'scope'         => 'past',
              'order'         => 'DESC',
              'limit'         => 3,
              'pagination'    => true,
            ]
        );
    }
    /**
     * Get current location.
     *
     * @return string HTML
     */
    public static function getCurrentLocation()
    {
        return \EM_Locations::output(
            [
              'format'   => '<div class="eventWrapper">
                              <div class="flex-container">
                                <div class="eventInfo flex-item-fluid">
                                  <h2 class="eventTitle">#_LOCATIONNAME</h2>
                                  <p class="eventContent">#_LOCATIONNOTES</p>                
                                  <p class="eventDate">#_LOCATIONADDRESS - #_LOCATIONTOWN - #_LOCATIONCOUNTRY
</p>
                                </div>
                                <div class="eventMap w450p">#_LOCATIONMAP</div>
                              </div>
                            </div>'
            ]
        );
    }    
}
