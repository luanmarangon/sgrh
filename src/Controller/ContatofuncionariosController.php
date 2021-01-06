<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Contatofuncionarios Controller
 *
 * @property \App\Model\Table\ContatofuncionariosTable $Contatofuncionarios
 *
 * @method \App\Model\Entity\Contatofuncionario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContatofuncionariosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Funcionarios'],
        ];
        $contatofuncionarios = $this->paginate($this->Contatofuncionarios);

        $this->set(compact('contatofuncionarios'));
    }

    /**
     * View method
     *
     * @param string|null $id Contatofuncionario id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contatofuncionario = $this->Contatofuncionarios->get($id, [
            'contain' => ['Funcionarios'],
        ]);

        $this->set('contatofuncionario', $contatofuncionario);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $contatofuncionario = $this->Contatofuncionarios->newEntity();
        if ($this->request->is('post')) {
            $contatofuncionario = $this->Contatofuncionarios->patchEntity($contatofuncionario, $this->request->getData());
            $contatofuncionario->funcionarios_id = $id;
			if ($this->Contatofuncionarios->save($contatofuncionario)) {
				$this->Flash->success(__('Contato inserido!'));
                return $this->redirect(['controller' => 'funcionarios', 'action' => 'contatos', $id]);
            }
            $this->Flash->error(__('Erro ao inserir o contato!'));
		}
        $funcionarios = $this->Contatofuncionarios->Funcionarios->find('list', ['limit' => 200]);
        $this->set(compact('contatofuncionario', 'funcionarios', 'id'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contatofuncionario id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contatofuncionario = $this->Contatofuncionarios->get($id, [
            'contain' => [],
        ]);
		$id_funcionarios = $contatofuncionario->funcionarios_id;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contatofuncionario = $this->Contatofuncionarios->patchEntity($contatofuncionario, $this->request->getData());
            $contatofuncionario->funcionarios_id = $id_funcionarios;
			if ($this->Contatofuncionarios->save($contatofuncionario)) {
                $this->Flash->success(__('Contato alterado!'));
                return $this->redirect(['controller' => 'funcionarios', 'action' => 'contatos', $id_funcionarios]);
            }
            $this->Flash->error(__('Erro ao alterar o contato!'));
		}
        $funcionarios = $this->Contatofuncionarios->Funcionarios->find('list', ['limit' => 200]);
        $this->set(compact('contatofuncionario', 'funcionarios', 'id_funcionarios'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contatofuncionario id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contatofuncionario = $this->Contatofuncionarios->get($id);
        if ($this->Contatofuncionarios->delete($contatofuncionario)) {
            $this->Flash->success(__('O Contato do Colaborador foi excluído com sucesso.'));
        } else {
            $this->Flash->error(__('O Contato do Colaborador não pode ser excluído. Por favor, tente novamente.'));
        }
        return $this->redirect(['controller' => 'funcionarios', 'action' => 'contatos', $contatofuncionario->funcionarios_id]);
    }
}
