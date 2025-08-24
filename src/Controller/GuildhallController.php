<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Controller\Controller;

/**
 * Guildhall Controller
 *
 */
class GuildhallController extends AppController
{
    /**
     * Guildhalls Table instance
     *
     * @var \App\Model\Table\GuildhallsTable
     */
    protected $Guildhalls;

    public function initialize(): void
    {
        parent::initialize();
        // Load the model explicitly since the controller name is singular
        $this->Guildhalls = $this->fetchTable('Guildhalls');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
    $query = $this->Guildhalls->find();
    $guildhalls = $this->paginate($query);

    $this->set(compact('guildhalls'));
    }

    /**
     * View method
     *
     * @param string|null $id Guildhall id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
    $guildhall = $this->Guildhalls->get($id, contain: []);
    $this->set(compact('guildhall'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $guildhall = $this->Guildhalls->newEmptyEntity();
        if ($this->request->is('post')) {
            $guildhall = $this->Guildhalls->patchEntity($guildhall, $this->request->getData());
            if ($this->Guildhalls->save($guildhall)) {
                $this->Flash->success(__('The guildhall has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The guildhall could not be saved. Please, try again.'));
        }
        $this->set(compact('guildhall'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Guildhall id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $guildhall = $this->Guildhalls->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $guildhall = $this->Guildhalls->patchEntity($guildhall, $this->request->getData());
            if ($this->Guildhalls->save($guildhall)) {
                $this->Flash->success(__('The guildhall has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The guildhall could not be saved. Please, try again.'));
        }
        $this->set(compact('guildhall'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Guildhall id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $guildhall = $this->Guildhalls->get($id);
        if ($this->Guildhalls->delete($guildhall)) {
            $this->Flash->success(__('The guildhall has been deleted.'));
        } else {
            $this->Flash->error(__('The guildhall could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
