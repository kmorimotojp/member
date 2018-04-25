<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MtMemberTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MtMemberTable Test Case
 */
class MtMemberTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MtMemberTable
     */
    public $MtMember;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mt_member'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MtMember') ? [] : ['className' => MtMemberTable::class];
        $this->MtMember = TableRegistry::get('MtMember', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MtMember);

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
