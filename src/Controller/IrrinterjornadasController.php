<?php
namespace App\Controller;

use Cake\Datasource\ConnectionManager;
use App\Controller\AppController;

/**
 * Irrinterjornadas Controller
 *
 * @property \App\Model\Table\IrrinterjornadasTable $Irrinterjornadas
 *
 * @method \App\Model\Entity\Irrinterjornada[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class IrrinterjornadasController extends AppController
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
        $irrinterjornadas = $this->paginate($this->Irrinterjornadas);

        $this->set(compact('irrinterjornadas'));
    }

    /**
     * View method
     *
     * @param string|null $id Irrinterjornada id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $irrinterjornada = $this->Irrinterjornadas->get($id, [
            'contain' => ['Contratos'],
        ]);

        $this->set('irrinterjornada', $irrinterjornada);
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

        $irrinterjornada = $this->Irrinterjornadas->newEntity();
        if ($this->request->is('post')) {
            $irrinterjornada = $this->Irrinterjornadas->patchEntity($irrinterjornada, $this->request->getData());
            if ($this->Irrinterjornadas->save($irrinterjornada)) {
                $this->Flash->success(__('A Ocorrência foi salva.'));

                return $this->redirect(['controller' => 'contratos', 'action' => 'view', $id]);
            }
            $this->Flash->error(__('A Ocorrência não pôde ser salva. Por favor, tente novamente.'));
        }
        $contratos = $this->Irrinterjornadas->Contratos->find('list', ['limit' => 200]);
        $this->set(compact('irrinterjornada', 'contratos',  'funcionario', 'id'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Irrinterjornada id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $irrinterjornada = $this->Irrinterjornadas->get($id, [
            'contain' => [],
        ]);
        $connection = ConnectionManager::get('default');
		$resultado = $connection
			  ->execute( 'SELECT f.* FROM funcionarios f INNER JOIN contratos c ON f.id = c.funcionarios_id AND c.id = '.$id)
			  ->fetchAll('assoc');
		foreach($resultado as $r):
			$funcionario = $r;
        endforeach;
        $id_contrato = $irrinterjornada->contratos_id;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $irrinterjornada = $this->Irrinterjornadas->patchEntity($irrinterjornada, $this->request->getData());
            if ($this->Irrinterjornadas->save($irrinterjornada)) {
                $this->Flash->success(__('A Ocorrência foi salva.'));

                return $this->redirect(['controller' => 'contratos', 'action' => 'view', $id_contrato]);
            }
            $this->Flash->error(__('A Ocorrência não pôde ser salva. Por favor, tente novamente.'));
        }
        $contratos = $this->Irrinterjornadas->Contratos->find('list', ['limit' => 200]);
        $this->set(compact('irrinterjornada', 'contratos','id_contrato', 'funcionario'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Irrinterjornada id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $irrinterjornada = $this->Irrinterjornadas->get($id);
        if ($this->Irrinterjornadas->delete($irrinterjornada)) {
            $this->Flash->success(__('A Ocorrência foi deletada.'));
        } else {
            $this->Flash->error(__('A Ocorrência não pôde ser deleta. Por favor, tente novamente.'));
        }

        return $this->redirect(['controller' => 'contratos', 'action' => 'view', $id]);
    }
}
