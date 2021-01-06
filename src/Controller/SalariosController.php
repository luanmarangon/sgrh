<?php
namespace App\Controller;

use Cake\Datasource\ConnectionManager;
use App\Controller\AppController;

/**
 * Salarios Controller
 *
 * @property \App\Model\Table\SalariosTable $Salarios
 *
 * @method \App\Model\Entity\Salario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SalariosController extends AppController
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
        $salarios = $this->paginate($this->Salarios);

        $this->set(compact('salarios'));
    }

    /**
     * View method
     *
     * @param string|null $id Salario id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $salario = $this->Salarios->get($id, [
            'contain' => ['Contratos'],
        ]);

        $this->set('salario', $salario);
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
        
        $salario = $this->Salarios->newEntity();
        if ($this->request->is('post')) {
            $salario = $this->Salarios->patchEntity($salario, $this->request->getData());
            if ($this->Salarios->save($salario)) {
                $this->Flash->success(__('O Salário do Colaborador foi salvo com sucesso.'));

                return $this->redirect(['controller' => 'contratos', 'action' => 'view', $id]);

            }
            $this->Flash->error(__('The salario could not be saved. Please, try again.'));
        }
        $contratos = $this->Salarios->Contratos->find('list', ['limit' => 200]);
        $this->set(compact('salario', 'contratos', 'funcionario', 'id'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Salario id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $salario = $this->Salarios->get($id, [
            'contain' => [],
        ]);
        $connection = ConnectionManager::get('default');
		$resultado = $connection
			  ->execute( 'SELECT f.* FROM funcionarios f INNER JOIN contratos c ON f.id = c.funcionarios_id AND c.id = '.$id)
			  ->fetchAll('assoc');
		foreach($resultado as $r):
			$funcionario = $r;
        endforeach;
        $id_contrato = $salario->contratos_id;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $salario = $this->Salarios->patchEntity($salario, $this->request->getData());
            $salario->contratos_id = $id_contrato;
            if ($this->Salarios->save($salario)) {
                $this->Flash->success(__('O Salário do Colaborador foi salvo com sucesso.'));

                return $this->redirect(['controller' => 'contratos', 'action' => 'view', $id_contrato]);
            }
            $this->Flash->error(__('The salario could not be saved. Please, try again.'));
        }
        $contratos = $this->Salarios->Contratos->find('list', ['limit' => 200]);
        $this->set(compact('salario', 'contratos', 'id_contrato', 'funcionario'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Salario id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $salario = $this->Salarios->get($id);
        if ($this->Salarios->delete($salario)) {
            $this->Flash->success(__('O Salário do Colaborador foi excluído com sucesso..'));
        } else {
            $this->Flash->error(__('O Salário do Colaborador não pode ser excluído. Por favor, tente novamente.'));
        }

        return $this->redirect(['controller' => 'contratos', 'action' => 'view', $salario->contratos_id]);
    }
}
