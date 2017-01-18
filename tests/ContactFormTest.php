<?php

namespace Quai10\Test;

use Quai10\ContactForm;
use WP_Mock;
use Mockery;

class ContactFormTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        WP_Mock::setUp();
        WP_Mock::wpFunction('wpcf7_add_form_tag');
    }

    public function tearDown()
    {
        WP_Mock::tearDown();
    }

    public function testAddFields()
    {
        ContactForm::addFields();
        $this->markTestIncomplete('We need to test the anonymous function.');
    }

    public function testAddSubmitBtn()
    {
        ContactForm::addSubmitBtn();
        $this->markTestIncomplete('We need to test the anonymous function.');
    }

}
