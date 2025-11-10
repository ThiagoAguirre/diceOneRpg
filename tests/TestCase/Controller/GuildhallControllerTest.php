<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\GuildhallController Test Case
 */
class GuildhallControllerTest extends TestCase
{
    use IntegrationTestTrait;

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
     * Helper: autentica um usuário das fixtures
     */
    private function loginAsFixtureUser(int $id = 1): void
    {
        $users = $this->getTableLocator()->get('Users');
        $user = $users->get($id);

        // Ajuste os campos conforme sua entidade/Authenticators
        $this->session([
            'Auth' => [
                'id' => $user->id,
                'email' => $user->email ?? 'user@test.local',
                'role' => $user->role ?? 'admin',
                'username' => $user->username ?? 'user',
            ],
        ]);
    }

    /** Test index method */
    public function testIndex(): void
    {
        $this->get('/guildhall');
        $this->assertResponseOk();

        $guildhalls = $this->viewVariable('guildhalls');
        $this->assertNotEmpty($guildhalls, 'Expected guildhalls variable to be set and not empty');

        // Evita depreciação: use items() antes de first()
        $first = $guildhalls->items()->first();
        $this->assertEquals('Lorem ipsum dolor sit amet', $first->name);
    }

    /** Test view method */
    public function testView(): void
    {
        $this->get('/guildhall/view/1');
        $this->assertResponseOk();

        $guildhall = $this->viewVariable('guildhall');
        $this->assertNotNull($guildhall);
        $this->assertEquals('Lorem ipsum dolor sit amet', $guildhall->name);
    }

    /** Test add method */
    public function testAdd(): void
    {
        $this->loginAsFixtureUser(1);
        $this->enableCsrfToken();
        $this->enableSecurityToken();

        $data = [
            'user_id' => 1,
            'name' => 'New Guildhall',
            'description' => 'A new hall',
        ];

        $this->post('/guildhall/add', $data);

        $status = $this->_response->getStatusCode();

        // Em caso de sucesso, geralmente redireciona (302/303)
        $this->assertTrue(in_array($status, [302, 303]), 'Expected redirect after add; got status ' . $status);

        $table = $this->getTableLocator()->get('Guildhalls');
        $result = $table->find()->where(['name' => 'New Guildhall'])->count();
        $this->assertEquals(1, $result, 'Expected new guildhall to be saved and found in table');
    }

    /** Test edit method */
    public function testEdit(): void
    {
        $this->loginAsFixtureUser(1);
        $this->enableCsrfToken();
        $this->enableSecurityToken();

        $table = $this->getTableLocator()->get('Guildhalls');
        $this->assertNotEmpty($table->get(1)); // sanity

        // Use PATCH (ou PUT) para editar
        $this->patch('/guildhall/edit/1', [
            'name' => 'Updated Name',
        ]);

        $status = $this->_response->getStatusCode();
        $this->assertTrue(in_array($status, [200, 302, 303]), 'Unexpected response: ' . $status);

        $updated = $table->get(1);
        $this->assertSame('Updated Name', $updated->name, 'Name should have been updated');
    }

    /** Test delete method */
    public function testDelete(): void
    {
        $this->loginAsFixtureUser(1);
        $this->enableCsrfToken();
        $this->enableSecurityToken();

        $table = $this->getTableLocator()->get('Guildhalls');
        $this->assertNotEmpty($table->get(1)); // sanity

        // Use DELETE para excluir
        $this->delete('/guildhall/delete/1');

        $status = $this->_response->getStatusCode();
        $this->assertTrue(in_array($status, [200, 302, 303]), 'Unexpected response code: ' . $status);

        // Após delete, get(1) deve lançar RecordNotFoundException
        $this->expectException(\Cake\Datasource\Exception\RecordNotFoundException::class);
        $table->get(1);
    }
}
