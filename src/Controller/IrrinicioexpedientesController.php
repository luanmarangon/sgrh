<?php
namespace App\Controller;

use Cake\Datasource\ConnectionManager;
use App\Controller\AppController;

/**
 * Irrinicioexpedientes Controller
 *
 * @property \App\Model\Table\IrrinicioexpedientesTable $Irrinicioexpedientes
 *
 * @method \App\Model\Entity\Irrinicioexpediente[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class IrrinicioexpedientesController extends AppController
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
        $irrinicioexpedientes = $this->paginate($this->Irrinicioexpedientes);

        $this->set(compact('irrinicioexpedientes'));
    }

    /**
     * View method
     *
     * @param string|null $id Irrinicioexpediente id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $irrinicioexpediente = $this->Irrinicioexpedientes->get($id, [
            'contain' => ['Contratos'],
        ]);

        $this->set('irrinicioexpediente', $irrinicioexpediente);
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
       
        $irrinicioexpediente = $this->Irrinicioexpedientes->newEntity();
        if ($this->request->is('post')) {
            $irrinicioexpediente = $this->Irrinicioexpedientes->patchEntity($irrinicioexpediente, $this->request->getData());
            if ($this->Irrinicioexpedientes->save($irrinicioexpediente)) {
                $this->Flash->success(__('A Ocorrência foi salva.'));

                return $this->redirect(['controller' => 'contratos', 'action' => 'view', $id]);
            }
            $this->Flash->error(__('A Ocorrência não pôde ser salva. Por favor, tente novamente.'));
        }
        $contratos = $this->Irrinicioexpedientes->Contratos->find('list', ['limit' => 200]);
        $this->set(compact('irrinicioexpediente', 'contratos',  'funcionario', 'id'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Irrinicioexpediente id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $irrinicioexpediente = $this->Irrinicioexpedientes->get($id, [
            'contain' => [],
        ]);
        $connection = ConnectionManager::get('default');
		$resultado = $connection
			  ->execute( 'SELECT f.* FROM funcionarios f INNER JOIN contratos c ON f.id = c.funcionarios_id AND c.id = '.$id)
			  ->fetchAll('assoc');
		foreach($resultado as $r):
			$funcionario = $r;
		endforeach;
		$id_contrato = $irrinicioexpediente->contratos_id;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $irrinicioexpediente = $this->Irrinicioexpedientes->patchEntity($irrinicioexpediente, $this->request->getData());
            if ($this->Irrinicioexpedientes->save($irrinicioexpediente)) {
                $this->Flash->success(__('A Ocorrência foi salva.'));

                return $this->redirect(['controller' => 'contratos', 'action' => 'view', $id_contrato]);
            }
            $this->Flash->error(__('A Ocorrência não pôde ser salva. Por favor, tente novamente.'));
        }
        $contratos = $this->Irrinicioexpedientes->Contratos->find('list', ['limit' => 200]);
        $this->set(compact('irrinicioexpediente', 'contratos', 'id_contrato', 'funcionario'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Irrinicioexpediente id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $irrinicioexpediente = $this->Irrinicioexpedientes->get($id);
        if ($this->Irrinicioexpedientes->delete($irrinicioexpediente)) {
            $this->Flash->success(__('A Ocorrência foi deletada'));
        } else {
            $this->Flash->error(__('A Ocorrência não pôde ser deleta. Por favor, tente novamente.'));
        }

        return $this->redirect(['controller' => 'contratos', 'action' => 'view', $id]);
    }
}
