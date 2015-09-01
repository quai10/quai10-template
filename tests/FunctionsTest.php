<?php
/**
 * FunctionsTest class
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
require_once __DIR__.'/../../../../wp/wp-load.php';
require_once __DIR__.'/../functions.php';
/**
 * Unit tests for functions.php
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
class FunctionsTest extends PHPUnit_Framework_TestCase
{
    /**
     * Unit tests for events functions
     * @return void
     */
    public function testGetEvents()
    {
        $this->assertStringStartsWith('<ul><li>', getFutureEvents());
        $this->assertStringStartsWith('<ul><li>', getPastEvents());
    }
}
