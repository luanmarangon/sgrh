<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Dadosbancarios Controller
 *
 * @property \App\Model\Table\DadosbancariosTable $Dadosbancarios
 *
 * @method \App\Model\Entity\Dadosbancario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DadosbancariosController extends AppController
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
        $dadosbancarios = $this->paginate($this->Dadosbancarios);

        $this->set(compact('dadosbancarios'));
    }

    /**
     * View method
     *
     * @param string|null $id Dadosbancario id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dadosbancario = $this->Dadosbancarios->get($id, [
            'contain' => ['Funcionarios'],
        ]);

        $this->set('dadosbancario', $dadosbancario);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $dadosbancario = $this->Dadosbancarios->newEntity();
        if ($this->request->is('post')) {
            $dadosbancario = $this->Dadosbancarios->patchEntity($dadosbancario, $this->request->getData());
            $dadosbancario->funcionarios_id = $id;
			if ($this->Dadosbancarios->save($dadosbancario)) {
                $this->Flash->success(__('Os Dados Bancários do Colaborador foi salvo com sucesso..'));
				return $this->redirect(['controller' => 'funcionarios', 'action' => 'dados', $id]);
            }
            $this->Flash->error(__('Os Dados Bancários do Colaborador não pode ser salvo. Por favor, tente novamente.'));
        }
        $funcionarios = $this->Dadosbancarios->Funcionarios->find('list', ['limit' => 200]);
        $this->set(compact('dadosbancario', 'funcionarios', 'id'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dadosbancario id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dadosbancario = $this->Dadosbancarios->get($id, [
            'contain' => [],
        ]);
		$id_funcionarios = $dadosbancario->funcionarios_id;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dadosbancario = $this->Dadosbancarios->patchEntity($dadosbancario, $this->request->getData());
            $dadosbancario->funcionarios_id = $id_funcionarios;
			if ($this->Dadosbancarios->save($dadosbancario)) {
                $this->Flash->success(__('Os Dados Bancários do Colaborador foi salvo com sucesso.'));
				return $this->redirect(['controller' => 'funcionarios', 'action' => 'dados', $id_funcionarios]);
            
            }
            $this->Flash->error(__('Os Dados Bancários do Colaborador não pode ser salvo. Por favor, tente novamente.'));
        }
        $funcionarios = $this->Dadosbancarios->Funcionarios->find('list', ['limit' => 200]);
        $this->set(compact('dadosbancario', 'funcionarios', 'id_funcionarios'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dadosbancario id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dadosbancario = $this->Dadosbancarios->get($id);
        if ($this->Dadosbancarios->delete($dadosbancario)) {
            $this->Flash->success(__('Os Dados Bancários do Colaborador foi excluído com sucesso.'));
        } else {
            $this->Flash->error(__('Os Dados Bancários do Colaborador não pode ser excluído. Por favor, tente novamente.'));
        }
		return $this->redirect(['controller' => 'funcionarios', 'action' => 'dados', $dadosbancario->funcionarios_id]);
    }
}
