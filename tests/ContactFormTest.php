<?php
/**
 * ContactFormTest class.
 */
namespace Quai10\Test;

use Quai10\ContactForm;
use WP_Mock;
use Mockery;

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
     * Test the addFields() function.
     * @return void
     */
    public function testAddFields()
    {
        ContactForm::addFields();
        $this->markTestIncomplete('We need to test the anonymous function.');
    }

    /**
     * Test the addSubmitBtn() function.
     * @return void
     */
    public function testAddSubmitBtn()
    {
        ContactForm::addSubmitBtn();
        $this->markTestIncomplete('We need to test the anonymous function.');
    }

}
