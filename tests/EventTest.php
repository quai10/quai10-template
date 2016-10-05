<?php
/**
 * EventTest class.
 */
namespace Quai10\Test;

use Mockery;
use Quai10\Event;

/**
 * Unit tests for Event class.
 */
class EventTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        Mockery::mock('overload:EM_Events')
            ->shouldReceive('output')
                ->andReturn('<ul><li>Foo</li><li>Bar</li>');
    }

    public function tearDown()
    {
        Mockery::close();
    }

    /**
     * Unit tests for events functions.
     *
     * @return void
     */
    public function testGetEvents()
    {
        $this->assertStringStartsWith('<ul><li>', Event::getFutureEvents());
        $this->assertStringStartsWith('<ul><li>', Event::getPastEvents());
    }
}
