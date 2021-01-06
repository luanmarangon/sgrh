<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Enderecofuncionarios Controller
 *
 * @property \App\Model\Table\EnderecofuncionariosTable $Enderecofuncionarios
 *
 * @method \App\Model\Entity\Enderecofuncionario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EnderecofuncionariosController extends AppController
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
        $enderecofuncionarios = $this->paginate($this->Enderecofuncionarios);

        $this->set(compact('enderecofuncionarios'));
    }

    /**
     * View method
     *
     * @param string|null $id Enderecofuncionario id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $enderecofuncionario = $this->Enderecofuncionarios->get($id, [
            'contain' => ['Funcionarios'],
        ]);

        $this->set('enderecofuncionario', $enderecofuncionario);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $enderecofuncionario = $this->Enderecofuncionarios->newEntity();
        if ($this->request->is('post')) {
            $enderecofuncionario = $this->Enderecofuncionarios->patchEntity($enderecofuncionario, $this->request->getData());
            $enderecofuncionario->funcionarios_id = $id;
            if ($this->Enderecofuncionarios->save($enderecofuncionario)) {
                $this->Flash->success(__('O Endereço do Colaborador foi salvo com sucesso.'));
                return $this->redirect(['controller' => 'funcionarios', 'action' => 'endereco', $id]);
            }
            $this->Flash->error(__('O Endereço do Colaborador não pode ser salvo. Por favor, tente novamente.'));
        }
        $funcionarios = $this->Enderecofuncionarios->Funcionarios->find('list', ['limit' => 200]);
        $this->set(compact('enderecofuncionario', 'funcionarios', 'id'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Enderecofuncionario id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $enderecofuncionario = $this->Enderecofuncionarios->get($id, [
            'contain' => [],
        ]);
        $id_funcionario = $enderecofuncionario->funcionarios_id;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $enderecofuncionario = $this->Enderecofuncionarios->patchEntity($enderecofuncionario, $this->request->getData());
            $enderecofuncionario->funcionarios_id = $id_funcionario;
            if ($this->Enderecofuncionarios->save($enderecofuncionario)) {
                $this->Flash->success(__('O Endereço do Colaborador foi salvo com sucesso.'));
                
				return $this->redirect(['controller' => 'funcionarios', 'action' => 'endereco', $id_funcionario]);
            
            }
            $this->Flash->error(__('O Endereço do Colaborador não pode ser salvo. Por favor, tente novamente.'));
        }
        $funcionarios = $this->Enderecofuncionarios->Funcionarios->find('list', ['limit' => 200]);
        $this->set(compact('enderecofuncionario', 'funcionarios', 'id_funcionario'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Enderecofuncionario id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $enderecofuncionario = $this->Enderecofuncionarios->get($id);
        if ($this->Enderecofuncionarios->delete($enderecofuncionario)) {
            $this->Flash->success(__('O Endereço do Colaborador foi excluído com sucesso.'));
        } else {
            $this->Flash->error(__('O Endereço do Colaborador não pode ser excluído. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
