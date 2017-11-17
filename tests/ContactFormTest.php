<?php
/**
 * ContactFormTest class.
 */

namespace Quai10\Test;

use Mockery;
use Quai10\ContactForm;
use WP_Mock;

/**
 * Test the ContactForm class.
 */
class ContactFormTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Set up mock functions.
     */
    protected function setUp()
    {
        WP_Mock::setUp();
        WP_Mock::userFunction('wpcf7_add_form_tag');
        WP_Mock::userFunction('wpcf7_remove_form_tag');
        WP_Mock::userFunction('wpcf7_form_controls_class');
        WP_Mock::userFunction('wpcf7_format_atts');
        WP_Mock::userFunction('wpcf7_get_validation_error', ['return' => 'This is an error.']);
        WP_Mock::userFunction('wpcf7_get_hangover');
        WP_Mock::userFunction('sanitize_html_class');
        $this->mockFormTag = Mockery::mock('overload:Quai10\FormTag')
            ->shouldReceive('getName')
            ->shouldReceive('getBaseType')->andReturn('url')
            ->shouldReceive('getValues')->andReturn([])
            ->shouldReceive('get_class_option')
            ->shouldReceive('get_option')
            ->shouldReceive('get_id_option')
            ->shouldReceive('get_maxlength_option')->andReturn(1)
            ->shouldReceive('get_minlength_option')->andReturn(2)
            ->shouldReceive('has_option')->andReturn(true)
            ->shouldReceive('is_required')->andReturn(true)
            ->shouldReceive('get_default_option')
            ->shouldReceive('get_size_option');
    }

    /**
     * Remove mock functions.
     *
     * @return void
     */
    protected function tearDown()
    {
        WP_Mock::tearDown();
        Mockery::close();
    }

    /**
     * Test the addFields() function.
     *
     * @return void
     */
    public function testAddFields()
    {
        ContactForm::addFields();
    }

    /**
     * Test the addCustomFields() function.
     *
     * @return void
     */
    public function testAddCustomFields()
    {
        WP_Mock::userFunction('wpcf7_support_html5');
        $this->mockFormTag->shouldReceive('getType')->andReturn('foo');
        $this->assertEquals('<input class=""  />This is an error.', ContactForm::addCustomFields('foo'));
    }

    /**
     * Test the addCustomFields() function with an empty tag type.
     *
     * @return void
     */
    public function testAddCustomFieldsWithEmptyType()
    {
        $this->mockFormTag->shouldReceive('getType')->andReturn('');
        $this->assertEquals('', ContactForm::addCustomFields('foo'));
    }

    /**
     * Test the addCustomFields() function with HTML5 support enabled.
     *
     * @return void
     */
    public function testAddCustomFieldsWithHtml5()
    {
        WP_Mock::userFunction('wpcf7_support_html5', ['return' => true]);
        $this->mockFormTag->shouldReceive('getType')->andReturn('foo');
        $this->assertEquals('<input class=""  />This is an error.', ContactForm::addCustomFields('foo'));
    }

    /**
     * Test the addSubmitBtn() function.
     *
     * @return void
     */
    public function testAddSubmitBtn()
    {
        ContactForm::addSubmitBtn();
    }

    /**
     * Test the addCustomFields() function.
     *
     * @return void
     */
    public function testAddCustomSubmitBtn()
    {
        $this->mockFormTag->shouldReceive('getType')->andReturn('foo');
        $this->assertEquals('<button type="submit" >Send</button>', ContactForm::addCustomSubmitBtn('foo'));
    }
}
