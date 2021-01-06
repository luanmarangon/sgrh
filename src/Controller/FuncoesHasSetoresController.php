<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FuncoesHasSetores Controller
 *
 * @property \App\Model\Table\FuncoesHasSetoresTable $FuncoesHasSetores
 *
 * @method \App\Model\Entity\FuncoesHasSetore[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FuncoesHasSetoresController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Funcoes', 'Setores'],
        ];
        $funcoesHasSetores = $this->paginate($this->FuncoesHasSetores);

        $this->set(compact('funcoesHasSetores'));
    }

    /**
     * View method
     *
     * @param string|null $id Funcoes Has Setore id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $funcoesHasSetore = $this->FuncoesHasSetores->get($id, [
            'contain' => ['Funcoes', 'Setores'],
        ]);

        $this->set('funcoesHasSetore', $funcoesHasSetore);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $funcoesHasSetore = $this->FuncoesHasSetores->newEntity();
        if ($this->request->is('post')) {
            $funcoesHasSetore = $this->FuncoesHasSetores->patchEntity($funcoesHasSetore, $this->request->getData());
            if ($this->FuncoesHasSetores->save($funcoesHasSetore)) {
                $this->Flash->success(__('Função salva!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não foi possível salvar a função. Por favor, tente novamente.'));
        }
        $funcoes = $this->FuncoesHasSetores->Funcoes->find('list', ['limit' => 200]);
        $setores = $this->FuncoesHasSetores->Setores->find('list', ['limit' => 200]);
        $this->set(compact('funcoesHasSetore', 'funcoes', 'setores'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Funcoes Has Setore id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $funcoesHasSetore = $this->FuncoesHasSetores->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $funcoesHasSetore = $this->FuncoesHasSetores->patchEntity($funcoesHasSetore, $this->request->getData());
            if ($this->FuncoesHasSetores->save($funcoesHasSetore)) {
                $this->Flash->success(__('Função salva!.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não foi possível salvar a função. Por favor, tente novamente.'));
        }
        $funcoes = $this->FuncoesHasSetores->Funcoes->find('list', ['limit' => 200]);
        $setores = $this->FuncoesHasSetores->Setores->find('list', ['limit' => 200]);
        $this->set(compact('funcoesHasSetore', 'funcoes', 'setores'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Funcoes Has Setore id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $funcoesHasSetore = $this->FuncoesHasSetores->get($id);
        if ($this->FuncoesHasSetores->delete($funcoesHasSetore)) {
            $this->Flash->success(__('Função deletada!.'));
        } else {
            $this->Flash->error(__('A função não pôde ser excluído. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
