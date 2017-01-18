<?php
/**
 * ContactFormTest class.
 */

namespace Quai10\Test;

use Quai10\ContactForm;
use Mockery;
use WP_Mock;
use Mockery\Generator\MockConfigurationBuilder;
use Mockery\Generator\StringManipulation\Pass\InstanceMockPass;

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
        WP_Mock::wpFunction('wpcf7_add_form_tag');
        WP_Mock::wpFunction('wpcf7_remove_form_tag');
        WP_Mock::wpFunction('wpcf7_form_controls_class');
        Mockery::mock('overload:WPCF7_FormTag');
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
        $this->markTestIncomplete('We need a way to mock WPCF7_FormTag properties.');
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
    public function testAddCustomSubmitBt()
    {
        $this->markTestIncomplete('We need a way to mock WPCF7_FormTag properties.');
    }
}
