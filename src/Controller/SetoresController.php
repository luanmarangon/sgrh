<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Setores Controller
 *
 * @property \App\Model\Table\SetoresTable $Setores
 *
 * @method \App\Model\Entity\Setore[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SetoresController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Departamentos'],
        ];
        $setores = $this->paginate($this->Setores);

        $this->set(compact('setores'));
    }

    /**
     * View method
     *
     * @param string|null $id Setore id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $setore = $this->Setores->get($id, [
            'contain' => ['Departamentos'],
        ]);

        $this->set('setore', $setore);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $setore = $this->Setores->newEntity();
        if ($this->request->is('post')) {
            $setore = $this->Setores->patchEntity($setore, $this->request->getData());
            if ($this->Setores->save($setore)) {
                $this->Flash->success(__('O Setor foi salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O Setor não pode ser salvo. Por favor, tente novamente.'));
        }
        $departamentos = $this->Setores->Departamentos->find('list', ['limit' => 200]);
        $this->set(compact('setore', 'departamentos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Setore id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $setore = $this->Setores->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $setore = $this->Setores->patchEntity($setore, $this->request->getData());
            if ($this->Setores->save($setore)) {
                $this->Flash->success(__('O Setor foi salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O Setor não pode ser salvo. Por favor, tente novamente.'));
        }
        $departamentos = $this->Setores->Departamentos->find('list', ['limit' => 200]);
        $this->set(compact('setore', 'departamentos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Setore id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $setore = $this->Setores->get($id);
        if ($this->Setores->delete($setore)) {
            $this->Flash->success(__('O Setor foi excluído com sucesso.'));
        } else {
            $this->Flash->error(__('O Setor não pode ser excluído. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
