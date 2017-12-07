<?php
namespace App\Test\TestCase\View\Helper;

use App\View\Helper\IconicHelper;
use Cake\TestSuite\TestCase;
use Cake\View\View;

/**
 * App\View\Helper\IconicHelper Test Case
 */
class IconicHelperTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\View\Helper\IconicHelper
     */
    public $Iconic;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $view = new View();
        $this->Iconic = new IconicHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Iconic);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
