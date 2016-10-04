<?php
namespace Quai10\Test;

use Mockery;
use Quai10\ScriptLoader;
use WP_Mock;

class ScriptLoaderTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        WP_Mock::setUp();
        WP_Mock::wpFunction('wp_enqueue_style');
        WP_Mock::wpFunction('wp_enqueue_script');
        WP_Mock::wpFunction('get_template_directory_uri');
        WP_Mock::wpFunction('wp_localize_script');
    }

    public function tearDown()
    {
        WP_Mock::tearDown();
    }

    public function testInit()
    {
        ScriptLoader::init();
    }
}
