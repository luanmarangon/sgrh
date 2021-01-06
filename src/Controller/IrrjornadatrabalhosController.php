<?php
namespace App\Controller;

use Cake\Datasource\ConnectionManager;
use App\Controller\AppController;
use Cake\I18n\FrozenDate;
use Cake\I18n\FrozenTime;

/**
 * Irrjornadatrabalhos Controller
 *
 * @property \App\Model\Table\IrrjornadatrabalhosTable $Irrjornadatrabalhos
 *
 * @method \App\Model\Entity\Irrjornadatrabalho[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class IrrjornadatrabalhosController extends AppController
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
        $irrjornadatrabalhos = $this->paginate($this->Irrjornadatrabalhos);

        $this->set(compact('irrjornadatrabalhos'));
    }

    /**
     * View method
     *
     * @param string|null $id Irrjornadatrabalho id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $irrjornadatrabalho = $this->Irrjornadatrabalhos->get($id, [
            'contain' => ['Contratos'],
        ]);

        $this->set('irrjornadatrabalho', $irrjornadatrabalho);
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
        
        $irrjornadatrabalho = $this->Irrjornadatrabalhos->newEntity();
        if ($this->request->is('post')) {
            $irrjornadatrabalho = $this->Irrjornadatrabalhos->patchEntity($irrjornadatrabalho, $this->request->getData());
            if ($this->Irrjornadatrabalhos->save($irrjornadatrabalho)) {
                $this->Flash->success(__('A Ocorrência foi salva.'));

                return $this->redirect(['controller' => 'contratos', 'action' => 'view', $id]);
            }
            $this->Flash->error(__('A Ocorrência não pôde ser salva. Por favor, tente novamente.'));
        }
        $contratos = $this->Irrjornadatrabalhos->Contratos->find('list', ['limit' => 200]);
        $this->set(compact('irrjornadatrabalho', 'contratos',  'funcionario', 'id'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Irrjornadatrabalho id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $irrjornadatrabalho = $this->Irrjornadatrabalhos->get($id, [
            'contain' => [],
        ]);
        $connection = ConnectionManager::get('default');
		$resultado = $connection
			  ->execute( 'SELECT f.* FROM funcionarios f INNER JOIN contratos c ON f.id = c.funcionarios_id AND c.id = '.$id)
			  ->fetchAll('assoc');
		foreach($resultado as $r):
			$funcionario = $r;
        endforeach;
        $id_contrato = $irrjornadatrabalho->contratos_id;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $irrjornadatrabalho = $this->Irrjornadatrabalhos->patchEntity($irrjornadatrabalho, $this->request->getData());
            if ($this->Irrjornadatrabalhos->save($irrjornadatrabalho)) {
                $this->Flash->success(__('A Ocorrência foi salva.'));

                return $this->redirect(['controller' => 'contratos', 'action' => 'view', $id_contrato]);
            }
            $this->Flash->error(__('A Ocorrência não pôde ser salva. Por favor, tente novamente.'));
        }
        $contratos = $this->Irrjornadatrabalhos->Contratos->find('list', ['limit' => 200]);
        $this->set(compact('irrjornadatrabalho', 'contratos','id_contrato', 'funcionario'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Irrjornadatrabalho id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $irrjornadatrabalho = $this->Irrjornadatrabalhos->get($id);
        if ($this->Irrjornadatrabalhos->delete($irrjornadatrabalho)) {
            $this->Flash->success(__('A Ocorrência foi deletada'));
        } else {
            $this->Flash->error(__('A Ocorrência não pôde ser deleta. Por favor, tente novamente.'));
        }

        return $this->redirect(['controller' => 'contratos', 'action' => 'view', $id]);
    }
}
