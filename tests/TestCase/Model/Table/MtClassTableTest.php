<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MtClassTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MtClassTable Test Case
 */
class MtClassTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MtClassTable
     */
    public $MtClass;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mt_class'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MtClass') ? [] : ['className' => MtClassTable::class];
        $this->MtClass = TableRegistry::get('MtClass', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MtClass);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
