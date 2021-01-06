<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Contribuicaosindicais Controller
 *
 * @property \App\Model\Table\ContribuicaosindicaisTable $Contribuicaosindicais
 *
 * @method \App\Model\Entity\Contribuicaosindicai[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContribuicaosindicaisController extends AppController
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
        $contribuicaosindicais = $this->paginate($this->Contribuicaosindicais);

        $this->set(compact('contribuicaosindicais'));
    }

    /**
     * View method
     *
     * @param string|null $id Contribuicaosindicai id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contribuicaosindicai = $this->Contribuicaosindicais->get($id, [
            'contain' => ['Funcionarios'],
        ]);

        $this->set('contribuicaosindicai', $contribuicaosindicai);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $contribuicaosindicai = $this->Contribuicaosindicais->newEntity();
        if ($this->request->is('post')) {
            $contribuicaosindicai = $this->Contribuicaosindicais->patchEntity($contribuicaosindicai, $this->request->getData());
            $contribuicaosindicai->funcionarios_id = $id;
			if ($this->Contribuicaosindicais->save($contribuicaosindicai)) {
                $this->Flash->success(__('A Contribuição Sindical do Colaborador foi salvo com sucesso.'));
                return $this->redirect(['controller' => 'funcionarios', 'action' => 'contribuicao', $id]);
            }
            $this->Flash->error(__('A Contribuição Sindical do Colaborador não pode ser salvo. Por favor, tente novamente.'));
        }
        $funcionarios = $this->Contribuicaosindicais->Funcionarios->find('list', ['limit' => 200]);
        $this->set(compact('contribuicaosindicai', 'funcionarios', 'id'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contribuicaosindicai id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contribuicaosindicai = $this->Contribuicaosindicais->get($id, [
            'contain' => [],
        ]);
		$id_funcionarios = $contribuicaosindicai->funcionarios_id;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contribuicaosindicai = $this->Contribuicaosindicais->patchEntity($contribuicaosindicai, $this->request->getData());
            $contribuicaosindicai->funcionarios_id = $id_funcionarios;
			if ($this->Contribuicaosindicais->save($contribuicaosindicai)) {
                $this->Flash->success(__('A Contribuição Sindical do Colaborador foi salvo com sucesso.'));
				return $this->redirect(['controller' => 'funcionarios', 'action' => 'contribuicao', $id]);
            }
            $this->Flash->error(__('A Contribuição Sindical do Colaborador não pode ser salvo. Por favor, tente novamente.'));
        }
        $funcionarios = $this->Contribuicaosindicais->Funcionarios->find('list', ['limit' => 200]);
        $this->set(compact('contribuicaosindicai', 'funcionarios', 'id_funcionarios'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contribuicaosindicai id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contribuicaosindicai = $this->Contribuicaosindicais->get($id);
        if ($this->Contribuicaosindicais->delete($contribuicaosindicai)) {
            $this->Flash->success(__('A Contribuição Sindical do Colaborador foi excluído com sucesso.'));
        } else {
            $this->Flash->error(__('A Contribuição Sindical do Colaborador não pode ser excluído. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
