<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Dependentes Controller
 *
 * @property \App\Model\Table\DependentesTable $Dependentes
 *
 * @method \App\Model\Entity\Dependente[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DependentesController extends AppController
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
        $dependentes = $this->paginate($this->Dependentes);

        $this->set(compact('dependentes'));
    }

    /**
     * View method
     *
     * @param string|null $id Dependente id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dependente = $this->Dependentes->get($id, [
            'contain' => ['Funcionarios'],
        ]);

        $this->set('dependente', $dependente);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $dependente = $this->Dependentes->newEntity();
        if ($this->request->is('post')) {
            $dependente = $this->Dependentes->patchEntity($dependente, $this->request->getData());
			$dependente->funcionarios_id = $id;
            if ($this->Dependentes->save($dependente)) {
                $this->Flash->success(__('O Dependente do Colaborador foi salvo com sucesso.'));
				return $this->redirect(['controller' => 'funcionarios', 'action' => 'dependentes', $id]);
            }
            $this->Flash->error(__('O Dependente do Colaborador não pode ser salvo. Por favor, tente novamente.'));
        }
        $funcionarios = $this->Dependentes->Funcionarios->find('list', ['limit' => 200]);
        $this->set(compact('dependente', 'funcionarios', 'id'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dependente id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dependente = $this->Dependentes->get($id, [
            'contain' => [],
        ]);
		$id_funcionario = $dependente->funcionarios_id;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dependente = $this->Dependentes->patchEntity($dependente, $this->request->getData());
            $dependente->funcionarios_id = $id_funcionario;
			if ($this->Dependentes->save($dependente)) {
                $this->Flash->success(__('O Dependente do Colaborador foi salvo com sucesso.'));
				return $this->redirect(['controller' => 'funcionarios', 'action' => 'dependentes', $id_funcionario]);
            }
            $this->Flash->error(__('O Dependente do Colaborador não pode ser salvo. Por favor, tente novamente.'));
        }
        $funcionarios = $this->Dependentes->Funcionarios->find('list', ['limit' => 200]);
        $this->set(compact('dependente', 'funcionarios', 'id_funcionario'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dependente id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dependente = $this->Dependentes->get($id);
        if ($this->Dependentes->delete($dependente)) {
            $this->Flash->success(__('O Dependente do Colaborador foi excluído com sucesso.'));
        } else {
            $this->Flash->error(__('O Dependente do Colaborador não pode ser excluído. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
