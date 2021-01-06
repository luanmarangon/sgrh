<?php
namespace App\Controller;

use Cake\Datasource\ConnectionManager;
use App\Controller\AppController;

/**
 * Afastamentos Controller
 *
 * @property \App\Model\Table\AfastamentosTable $Afastamentos
 *
 * @method \App\Model\Entity\Afastamento[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AfastamentosController extends AppController
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
        $afastamentos = $this->paginate($this->Afastamentos);

        $this->set(compact('afastamentos'));
    }

    /**
     * View method
     *
     * @param string|null $id Afastamento id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $afastamento = $this->Afastamentos->get($id, [
            'contain' => ['Contratos'],
        ]);

        $this->set('afastamento', $afastamento);
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
		$afastamento = $this->Afastamentos->newEntity();
        if ($this->request->is('post')) {
            $afastamento = $this->Afastamentos->patchEntity($afastamento, $this->request->getData());
            if ($this->Afastamentos->save($afastamento)) {
                $this->Flash->success(__('O Afastamento do Colaborador foi salvo com sucesso.'));
                return $this->redirect(['controller' => 'contratos', 'action' => 'view', $id]);
            }
            $this->Flash->error(__('O Afastamento do Colaborador não pode ser salvo. Por favor, tente novamente.'));
        }
        $contratos = $this->Afastamentos->Contratos->find('list', ['limit' => 200]);
        $this->set(compact('afastamento', 'contratos', 'funcionario', 'id'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Afastamento id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $afastamento = $this->Afastamentos->get($id, [
            'contain' => [],
        ]);
		$id_contrato = $afastamento->contratos_id;
        
        $funcionario ='';
		$connection = ConnectionManager::get('default');
		$resultado = $connection
			  ->execute( 'SELECT f.* FROM funcionarios f INNER JOIN contratos c ON f.id = c.funcionarios_id AND c.id = '.$id_contrato)
			  ->fetchAll('assoc');
		foreach($resultado as $r):
			$funcionario = $r;
        endforeach;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $afastamento = $this->Afastamentos->patchEntity($afastamento, $this->request->getData());
            $afastamento->contratos_id = $id_contrato;
			if ($this->Afastamentos->save($afastamento)) {
                $this->Flash->success(__('O Afastamento do Colaborador foi salvo com sucesso.'));
				return $this->redirect(['controller' => 'contratos', 'action' => 'view', $id_contrato]);
            }
            $this->Flash->error(__('O Afastamento do Colaborador não pode ser salvo. Por favor, tente novamente.'));
        }
        $contratos = $this->Afastamentos->Contratos->find('list', ['limit' => 200]);
        $this->set(compact('afastamento', 'contratos', 'id_contrato', 'funcionario'));
        
    }

    /**
     * Delete method
     *
     * @param string|null $id Afastamento id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $afastamento = $this->Afastamentos->get($id);
        if ($this->Afastamentos->delete($afastamento)) {
            $this->Flash->success(__('O Afastamento do Colaborador foi excluído com sucesso.'));
        } else {
            $this->Flash->error(__('O Afastamento do Colaborador não pode ser excluído. Por favor, tente novamente.'));
        }
		return $this->redirect(['controller' => 'contratos', 'action' => 'view', $afastamento->contratos_id]);
    }
}
