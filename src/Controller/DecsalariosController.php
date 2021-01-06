<?php
namespace App\Controller;

use Cake\Datasource\ConnectionManager;
use App\Controller\AppController;

/**
 * Decsalarios Controller
 *
 * @property \App\Model\Table\DecsalariosTable $Decsalarios
 *
 * @method \App\Model\Entity\Decsalario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DecsalariosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Contratos'],
        ];
        $decsalarios = $this->paginate($this->Decsalarios);

        $this->set(compact('decsalarios'));
    }

    /**
     * View method
     *
     * @param string|null $id Decsalario id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $decsalario = $this->Decsalarios->get($id, [
            'contain' => ['Contratos'],
        ]);

        $this->set('decsalario', $decsalario);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $connection = ConnectionManager::get('default');
		$resultado = $connection
			  ->execute( 'SELECT f.* FROM funcionarios f INNER JOIN contratos c ON f.id = c.funcionarios_id AND c.id = '.$id)
			  ->fetchAll('assoc');
		foreach($resultado as $r):
			$funcionario = $r;
        endforeach;

        $decsalario = $this->Decsalarios->newEntity();
        if ($this->request->is('post')) {
            $decsalario = $this->Decsalarios->patchEntity($decsalario, $this->request->getData());
            if ($this->Decsalarios->save($decsalario)) {
                $this->Flash->success(__('O Décimo Terceiro Salário do Colaborador foi salvo com sucesso.'));

                return $this->redirect(['controller' => 'contratos', 'action' => 'view', $id]);
            }
            $this->Flash->error(__('O Décimo Terceiro Salário do Colaborador não pode ser salvo. Por favor, tente novamente.'));
        }
        $contratos = $this->Decsalarios->Contratos->find('list', ['limit' => 200]);
        $this->set(compact('decsalario', 'contratos', 'funcionario', 'id'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Decsalario id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $decsalario = $this->Decsalarios->get($id, [
            'contain' => [],
        ]);
        $connection = ConnectionManager::get('default');
		$resultado = $connection
			  ->execute( 'SELECT f.* FROM funcionarios f INNER JOIN contratos c ON f.id = c.funcionarios_id AND c.id = '.$id)
			  ->fetchAll('assoc');
		foreach($resultado as $r):
			$funcionario = $r;
        endforeach;
        $id_contrato = $decsalario->contratos_id;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $decsalario = $this->Decsalarios->patchEntity($decsalario, $this->request->getData());
            if ($this->Decsalarios->save($decsalario)) {
                $this->Flash->success(__('O Décimo Terceiro Salário do Colaborador foi salvo com sucesso.'));

                return $this->redirect(['controller' => 'contratos', 'action' => 'view', $id_contrato]);
            }
            $this->Flash->error(__('O Décimo Terceiro Salário do Colaborador não pode ser salvo. Por favor, tente novamente.'));
        }
        $contratos = $this->Decsalarios->Contratos->find('list', ['limit' => 200]);
        $this->set(compact('decsalario', 'contratos', 'id_contrato', 'funcionario'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Decsalario id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $decsalario = $this->Decsalarios->get($id);
        if ($this->Decsalarios->delete($decsalario)) {
            $this->Flash->success(__('O Décimo Terceiro Salário do Colaborador foi excluído com sucesso.'));
        } else {
            $this->Flash->error(__('O Décimo Terceiro Salário do Colaborador não pode ser excluído. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
