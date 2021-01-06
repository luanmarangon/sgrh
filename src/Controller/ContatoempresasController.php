<?php
namespace App\Controller;

use App\Controller\AppController;


/**
 * Contatoempresas Controller
 *
 * @property \App\Model\Table\ContatoempresasTable $Contatoempresas
 *
 * @method \App\Model\Entity\Contatoempresa[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContatoempresasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Empresas'],
        ];
        $contatoempresas = $this->paginate($this->Contatoempresas);

        $this->set(compact('contatoempresas'));
    }

    /**
     * View method
     *
     * @param string|null $id Contatoempresa id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contatoempresa = $this->Contatoempresas->get($id, [
            'contain' => ['Empresas'],
        ]);

        $this->set('contatoempresa', $contatoempresa);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $contatoempresa = $this->Contatoempresas->newEntity();
        if ($this->request->is('post')) {
            $contatoempresa = $this->Contatoempresas->patchEntity($contatoempresa, $this->request->getData());
            $contatoempresa->empresa_id = $id;
			if ($this->Contatoempresas->save($contatoempresa)) {
				$this->Flash->success(__('Contato inserido!'));
                return $this->redirect(['controller' => 'empresas', 'action' => 'contatos', $id]);
            }
            $this->Flash->error(__('Erro ao inserir o contato!'));
		}
        $empresas = $this->Contatoempresas->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('contatoempresa', 'empresas', 'id'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contatoempresa id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contatoempresa = $this->Contatoempresas->get($id, [
            'contain' => [],
        ]);
		$id_empresa = $contatoempresa->empresa_id;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contatoempresa = $this->Contatoempresas->patchEntity($contatoempresa, $this->request->getData());
            $contatoempresa->empresa_id = $id_empresa;
			if ($this->Contatoempresas->save($contatoempresa)) {
                $this->Flash->success(__('Contato alterado!'));
                return $this->redirect(['controller' => 'empresas', 'action' => 'contatos', $id_empresa]);
            }
            $this->Flash->error(__('Erro ao alterar o contato!'));
        }
        $empresas = $this->Contatoempresas->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('contatoempresa', 'empresas', 'id_empresa'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contatoempresa id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contatoempresa = $this->Contatoempresas->get($id);
        if ($this->Contatoempresas->delete($contatoempresa)) {
            $this->Flash->success(__('The contatoempresa has been deleted.'));
        } else {
            $this->Flash->error(__('The contatoempresa could not be deleted. Please, try again.'));
        }
		return $this->redirect(['controller' => 'empresas', 'action' => 'contatos', $contatoempresa->empresa_id]);
    }
}
