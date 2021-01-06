<?php
namespace App\Controller;

use Cake\Datasource\ConnectionManager;
use App\Controller\AppController;

/**
 * Ferias Controller
 *
 * @property \App\Model\Table\FeriasTable $Ferias
 *
 * @method \App\Model\Entity\Feria[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FeriasController extends AppController
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
        $ferias = $this->paginate($this->Ferias);

        $this->set(compact('ferias'));
    }

    /**
     * View method
     *
     * @param string|null $id Feria id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $feria = $this->Ferias->get($id, [
            'contain' => ['Contratos'],
        ]);

        $this->set('feria', $feria);
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

        $feria = $this->Ferias->newEntity();
        if ($this->request->is('post')) {
            $feria = $this->Ferias->patchEntity($feria, $this->request->getData());
            if ($this->Ferias->save($feria)) {
                $this->Flash->success(__('As Férias foi salvo com sucesso.'));

                return $this->redirect(['controller' => 'contratos', 'action' => 'view', $id]);
            }
            $this->Flash->error(__('As Férias não pode ser salvo. Por favor, tente novamente.'));
        }
        $contratos = $this->Ferias->Contratos->find('list', ['limit' => 200]);
        $this->set(compact('feria', 'contratos', 'funcionario', 'id'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Feria id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $feria = $this->Ferias->get($id, [
            'contain' => [],
        ]);
        $connection = ConnectionManager::get('default');
		$resultado = $connection
			  ->execute( 'SELECT f.* FROM funcionarios f INNER JOIN contratos c ON f.id = c.funcionarios_id AND c.id = '.$id)
			  ->fetchAll('assoc');
		foreach($resultado as $r):
			$funcionario = $r;
        endforeach;
        $id_contrato = $feria->contratos_id;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $feria = $this->Ferias->patchEntity($feria, $this->request->getData());
            if ($this->Ferias->save($feria)) {
                $this->Flash->success(__('As Férias foi salvo com sucesso.'));

                return $this->redirect(['controller' => 'contratos', 'action' => 'view', $id_contrato]);
            }
            $this->Flash->error(__('As Férias não pode ser salvo. Por favor, tente novamente.'));
        }
        $contratos = $this->Ferias->Contratos->find('list', ['limit' => 200]);
        $this->set(compact('feria', 'contratos', 'id_contrato', 'funcionario'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Feria id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $feria = $this->Ferias->get($id);
        if ($this->Ferias->delete($feria)) {
            $this->Flash->success(__('As Férias foi excluído com sucesso.'));
        } else {
            $this->Flash->error(__('As Férias não pode ser excluído. Por favor, tente novamente.'));
        }

        return $this->redirect(['controller' => 'contratos', 'action' => 'view', $salario->contratos_id]);
    }
}
