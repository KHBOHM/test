<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Turbines Controller
 *
 * @property \App\Model\Table\TurbinesTable $Turbines
 *
 * @method \App\Model\Entity\Turbine[] paginate($object = null, array $settings = [])
 */
class TurbinesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {

        $query = $this->Turbines->find('all');

        $search = '';
        if(isset($this->request->params['?']['search'])){
            $search = $this->request->params['?']['search'];
            $query->where(['OR' => [
                'Turbines.code LIKE' => "%$search%",
                'Turbines.notes LIKE' => "%$search%",
            ]]);
        };

        $turbines = $this->paginate($query);

        $this->set(compact('turbines', 'search'));
        $this->set('_serialize', ['turbines']);
    }

    /**
     * View method
     *
     * @param string|null $id Turbine id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $turbine = $this->Turbines->get($id, [
            'contain' => []
        ]);

        $this->set('turbine', $turbine);
        $this->set('_serialize', ['turbine']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $turbine = $this->Turbines->newEntity();
        if ($this->request->is('post')) {
            $turbine = $this->Turbines->patchEntity($turbine, $this->request->getData());
            if ($this->Turbines->save($turbine)) {
                $this->Flash->success(__('The turbine has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The turbine could not be saved. Please, try again.'));
        }
        $this->set(compact('turbine'));
        $this->set('_serialize', ['turbine']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Turbine id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $turbine = $this->Turbines->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $turbine = $this->Turbines->patchEntity($turbine, $this->request->getData());
            if ($this->Turbines->save($turbine)) {
                $this->Flash->success(__('The turbine has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The turbine could not be saved. Please, try again.'));
        }
        $this->set(compact('turbine'));
        $this->set('_serialize', ['turbine']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Turbine id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $turbine = $this->Turbines->get($id);
        if ($this->Turbines->delete($turbine)) {
            $this->Flash->success(__('The turbine has been deleted.'));
        } else {
            $this->Flash->error(__('The turbine could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
