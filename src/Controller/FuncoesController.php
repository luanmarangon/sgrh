<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Funcoes Controller
 *
 * @property \App\Model\Table\FuncoesTable $Funcoes
 *
 * @method \App\Model\Entity\Funco[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FuncoesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $funcoes = $this->paginate($this->Funcoes);

        $this->set(compact('funcoes'));
    }

    /**
     * View method
     *
     * @param string|null $id Funco id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $funco = $this->Funcoes->get($id, [
            'contain' => [],
        ]);

        $this->set('funco', $funco);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $funco = $this->Funcoes->newEntity();
        if ($this->request->is('post')) {
            $funco = $this->Funcoes->patchEntity($funco, $this->request->getData());
            if ($this->Funcoes->save($funco)) {
                $this->Flash->success(__('A Função foi salvo com sucesso'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A Função não pode ser salvo. Por favor, tente novamente.'));
        }
        $this->set(compact('funco'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Funco id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $funco = $this->Funcoes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $funco = $this->Funcoes->patchEntity($funco, $this->request->getData());
            if ($this->Funcoes->save($funco)) {
                $this->Flash->success(__('A Função foi salvo com sucesso'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A Função não pode ser salvo. Por favor, tente novamente.'));
        }
        $this->set(compact('funco'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Funco id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $funco = $this->Funcoes->get($id);
        if ($this->Funcoes->delete($funco)) {
            $this->Flash->success(__('A Função foi excluído com sucesso.'));
        } else {
            $this->Flash->error(__('A Função não pode ser excluído. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
