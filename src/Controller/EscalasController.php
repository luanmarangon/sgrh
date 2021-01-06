<?php
namespace App\Controller;

use Cake\Datasource\ConnectionManager;
use App\Controller\AppController;

/**
 * Escalas Controller
 *
 * @property \App\Model\Table\EscalasTable $Escalas
 *
 * @method \App\Model\Entity\Escala[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EscalasController extends AppController
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
        $escalas = $this->paginate($this->Escalas);

        $this->set(compact('escalas'));
    }

    /**
     * View method
     *
     * @param string|null $id Escala id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $escala = $this->Escalas->get($id, [
            'contain' => ['Contratos'],
        ]);

        $this->set('escala', $escala);
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
        
        $escala = $this->Escalas->newEntity();
        if ($this->request->is('post')) {
            $escala = $this->Escalas->patchEntity($escala, $this->request->getData());
            if ($this->Escalas->save($escala)) {
                $this->Flash->success(__('A Escala foi salvo com sucesso.'));

                return $this->redirect(['controller' => 'contratos', 'action' => 'view', $id]);
            }
            $this->Flash->error(__('A Escala não pode ser salvo. Por favor, tente novamente.'));
        }
        $contratos = $this->Escalas->Contratos->find('list', ['limit' => 200]);
        $this->set(compact('escala', 'contratos',  'funcionario', 'id'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Escala id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $escala = $this->Escalas->get($id, [
            'contain' => [],
        ]);

        $connection = ConnectionManager::get('default');
		$resultado = $connection
			  ->execute( 'SELECT f.* FROM funcionarios f INNER JOIN contratos c ON f.id = c.funcionarios_id AND c.id = '.$id)
			  ->fetchAll('assoc');
		foreach($resultado as $r):
			$funcionario = $r;
        endforeach;
        
		$id_contrato = $escala->contratos_id;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $escala = $this->Escalas->patchEntity($escala, $this->request->getData());
            if ($this->Escalas->save($escala)) {
                $this->Flash->success(__('A Escala foi salvo com sucesso.'));

                return $this->redirect(['controller' => 'contratos', 'action' => 'view', $id_contrato]);
            }
            $this->Flash->error(__('A Escala não pode ser salvo. Por favor, tente novamente.'));
        }
        $contratos = $this->Escalas->Contratos->find('list', ['limit' => 200]);
        $this->set(compact('escala', 'contratos', 'id_contrato', 'funcionario'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Escala id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $escala = $this->Escalas->get($id);
        if ($this->Escalas->delete($escala)) {
            $this->Flash->success(__('A Escala foi excluído com sucesso.'));
        } else {
            $this->Flash->error(__('A Escala não pode ser excluído. Por favor, tente novamente.'));
        }

        return $this->redirect(['controller' => 'contratos', 'action' => 'view', $atestado->contratos_id]);
    }
}
