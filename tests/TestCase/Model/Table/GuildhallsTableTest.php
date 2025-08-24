<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GuildhallsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GuildhallsTable Test Case
 */
class GuildhallsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GuildhallsTable
     */
    protected $Guildhalls;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Guildhalls',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Guildhalls') ? [] : ['className' => GuildhallsTable::class];
        $this->Guildhalls = $this->getTableLocator()->get('Guildhalls', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Guildhalls);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\GuildhallsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\GuildhallsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
