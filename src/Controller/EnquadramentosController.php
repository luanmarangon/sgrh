<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Enquadramentos Controller
 *
 * @property \App\Model\Table\EnquadramentosTable $Enquadramentos
 *
 * @method \App\Model\Entity\Enquadramento[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EnquadramentosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $enquadramentos = $this->paginate($this->Enquadramentos);

        $this->set(compact('enquadramentos'));
    }

    /**
     * View method
     *
     * @param string|null $id Enquadramento id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $enquadramento = $this->Enquadramentos->get($id, [
            'contain' => [],
        ]);

        $this->set('enquadramento', $enquadramento);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $enquadramento = $this->Enquadramentos->newEntity();
        if ($this->request->is('post')) {
            $enquadramento = $this->Enquadramentos->patchEntity($enquadramento, $this->request->getData());
            if ($this->Enquadramentos->save($enquadramento)) {
                $this->Flash->success(__('O Enquadramento foi salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O Enquadramento não pode ser salvo. Por favor, tente novamente.'));
        }
        $this->set(compact('enquadramento'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Enquadramento id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $enquadramento = $this->Enquadramentos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $enquadramento = $this->Enquadramentos->patchEntity($enquadramento, $this->request->getData());
            if ($this->Enquadramentos->save($enquadramento)) {
                $this->Flash->success(__('O Enquadramento foi salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O Enquadramento não pode ser salvo. Por favor, tente novamente.'));
        }
        $this->set(compact('enquadramento'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Enquadramento id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $enquadramento = $this->Enquadramentos->get($id);
        if ($this->Enquadramentos->delete($enquadramento)) {
            $this->Flash->success(__('O Enquadramento foi excluído com sucesso.'));
        } else {
            $this->Flash->error(__('O Enquadramento não pode ser excluído. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
