<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tipodeficiencias Controller
 *
 * @property \App\Model\Table\TipodeficienciasTable $Tipodeficiencias
 *
 * @method \App\Model\Entity\Tipodeficiencia[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TipodeficienciasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $tipodeficiencias = $this->paginate($this->Tipodeficiencias);

        $this->set(compact('tipodeficiencias'));
    }

    /**
     * View method
     *
     * @param string|null $id Tipodeficiencia id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipodeficiencia = $this->Tipodeficiencias->get($id, [
            'contain' => [],
        ]);

        $this->set('tipodeficiencia', $tipodeficiencia);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipodeficiencia = $this->Tipodeficiencias->newEntity();
        if ($this->request->is('post')) {
            $tipodeficiencia = $this->Tipodeficiencias->patchEntity($tipodeficiencia, $this->request->getData());
            if ($this->Tipodeficiencias->save($tipodeficiencia)) {
                $this->Flash->success(__('The tipodeficiencia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipodeficiencia could not be saved. Please, try again.'));
        }
        $this->set(compact('tipodeficiencia'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipodeficiencia id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipodeficiencia = $this->Tipodeficiencias->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipodeficiencia = $this->Tipodeficiencias->patchEntity($tipodeficiencia, $this->request->getData());
            if ($this->Tipodeficiencias->save($tipodeficiencia)) {
                $this->Flash->success(__('The tipodeficiencia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipodeficiencia could not be saved. Please, try again.'));
        }
        $this->set(compact('tipodeficiencia'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipodeficiencia id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipodeficiencia = $this->Tipodeficiencias->get($id);
        if ($this->Tipodeficiencias->delete($tipodeficiencia)) {
            $this->Flash->success(__('The tipodeficiencia has been deleted.'));
        } else {
            $this->Flash->error(__('The tipodeficiencia could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
