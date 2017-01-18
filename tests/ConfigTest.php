<?php
/**
 * ConfigTest class.
 */
namespace Quai10\Test;

use Quai10\Config;
use WP_Mock;
use Mockery;

/**
 * Test the Config class.
 */
class ConfigTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Set up mock functions.
     */
    protected function setUp()
    {
        WP_Mock::setUp();
        WP_Mock::wpFunction('remove_action');
        WP_Mock::wpFunction('remove_filter');
        WP_Mock::wpFunction('add_theme_support');
        WP_Mock::wpFunction('register_nav_menus');
        WP_Mock::wpFunction('__');
        WP_Mock::wpFunction('set_post_thumbnail_size');
        WP_Mock::wpFunction('is_single', ['return'=>true]);
        WP_Mock::wpFunction('is_page');
        WP_Mock::wpFunction('get_permalink', ['return'=>'foo']);
        Mockery::mock('overload:WP_Widget_Factory');
    }

    /**
     * Remove mock functions.
     * @return void
     */
    protected function tearDown()
    {
        WP_Mock::tearDown();
    }

    /**
     * Test the cleanup() function.
     * @return void
     */
    public function testCleanup()
    {
        global $wp_widget_factory;
        $wp_widget_factory = new \WP_Widget_Factory();
        $wp_widget_factory->widgets = ['WP_Widget_Recent_Comments'=>''];
        Config::cleanup();
    }

    /**
     * Test the setupTheme() function.
     * @return void
     */
    public function testSetupTheme()
    {
        Config::setupTheme();
    }

    /**
     * Test the addBodyClass() function.
     * @return void
     */
    public function testAddBodyClass()
    {
        $this->assertEquals(['foo'], Config::addBodyClass([]));
        $this->assertEquals(['foo'], Config::addBodyClass(['foo']));
        $this->assertEquals(['bar', 'foo'], Config::addBodyClass(['bar']));
    }
}
