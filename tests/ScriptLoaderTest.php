<?php
/**
 * ScriptLoaderTest class.
 */

namespace Quai10\Test;

use Quai10\ScriptLoader;
use WP_Mock;

/**
 * Test the ScriptLoader class.
 */
class ScriptLoaderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Set up mock functions.
     */
    protected function setUp()
    {
        WP_Mock::setUp();
        WP_Mock::userFunction('wp_enqueue_style');
        WP_Mock::userFunction('wp_enqueue_script');
        WP_Mock::userFunction('get_template_directory_uri');
        WP_Mock::userFunction('wp_localize_script');
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
     * Test the init() function.
     *
     * @return void
     */
    public function testInit()
    {
        ScriptLoader::init();
    }
}
