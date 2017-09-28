<?php
/**
 * ConfigTest class.
 */

namespace Quai10\Test;

use Mockery;
use Quai10\Blog;
use WP_Mock;

/**
 * Test the Blog class.
 */
class BlogTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Set up mock functions.
     */
    protected function setUp()
    {
        WP_Mock::setUp();
        Mockery::mock('overload:WP_Query')
            ->shouldReceive('have_posts')
            ->andReturn(true, false)
            ->shouldReceive('the_post');
        WP_Mock::userFunction('get_template_part');
        WP_Mock::userFunction('wp_reset_query');
    }

    /**
     * Remove mock functions.
     *
     * @return void
     */
    protected function tearDown()
    {
        WP_Mock::tearDown();
    }

    /**
     * Test the getArticles() function.
     *
     * @return void
     */
    public function testGetArticles()
    {
        $this->assertNull(Blog::getArticles(2));
    }

    /**
     * Test the getExcerptLength() function.
     *
     * @return void
     */
    public function testGetExcerptLength()
    {
        $this->assertEquals(20, Blog::getExcerptLength(2));
    }
}
