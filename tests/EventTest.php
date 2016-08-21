<?php
/**
 * EventTest class
 */
namespace Quai10;

use Mockery;

/**
 * Unit tests for Event class
 */
class EventTest extends \PHPUnit_Framework_TestCase
{

    protected function setUp()
    {
        Mockery::mock('overload:EM_Events')
            ->shouldReceive('output')
                ->andReturn('<ul><li>Foo</li><li>Bar</li>');
    }

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
