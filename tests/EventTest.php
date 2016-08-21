<?php
/**
 * EventTest class
 */
namespace Quai10;

/**
 * Unit tests for Event class
 */
class EventTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Unit tests for events functions
     * @return void
     */
    public function testGetEvents()
    {
        $this->assertStringStartsWith('<ul><li>', Event::getFutureEvents());
        $this->assertStringStartsWith('<ul><li>', Event::getPastEvents());
    }
}
