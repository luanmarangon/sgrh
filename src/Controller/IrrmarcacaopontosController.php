<?php
namespace App\Controller;

use Cake\Datasource\ConnectionManager;
use App\Controller\AppController;
use Cake\I18n\FrozenDate;
use Cake\I18n\FrozenTime;

/**
 * Irrmarcacaopontos Controller
 *
 * @property \App\Model\Table\IrrmarcacaopontosTable $Irrmarcacaopontos
 *
 * @method \App\Model\Entity\Irrmarcacaoponto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class IrrmarcacaopontosController extends AppController
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
        $irrmarcacaopontos = $this->paginate($this->Irrmarcacaopontos);

        $this->set(compact('irrmarcacaopontos'));
    }

    /**
     * View method
     *
     * @param string|null $id Irrmarcacaoponto id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $irrmarcacaoponto = $this->Irrmarcacaopontos->get($id, [
            'contain' => ['Contratos'],
        ]);

        $this->set('irrmarcacaoponto', $irrmarcacaoponto);
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

        $irrmarcacaoponto = $this->Irrmarcacaopontos->newEntity();
        if ($this->request->is('post')) {
            $irrmarcacaoponto = $this->Irrmarcacaopontos->patchEntity($irrmarcacaoponto, $this->request->getData());
            if ($this->Irrmarcacaopontos->save($irrmarcacaoponto)) {
                $this->Flash->success(__('A Ocorrência foi salva.'));

                return $this->redirect(['controller' => 'contratos', 'action' => 'view', $id]);
            }
            $this->Flash->error(__('A Ocorrência não pôde ser salva. Por favor, tente novamente.'));
        }
        $contratos = $this->Irrmarcacaopontos->Contratos->find('list', ['limit' => 200]);
        $this->set(compact('irrmarcacaoponto', 'contratos',  'funcionario', 'id'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Irrmarcacaoponto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $irrmarcacaoponto = $this->Irrmarcacaopontos->get($id, [
            'contain' => [],
        ]);
        $connection = ConnectionManager::get('default');
		$resultado = $connection
			  ->execute( 'SELECT f.* FROM funcionarios f INNER JOIN contratos c ON f.id = c.funcionarios_id AND c.id = '.$id)
			  ->fetchAll('assoc');
		foreach($resultado as $r):
			$funcionario = $r;
        endforeach;
        $id_contrato = $irrmarcacaoponto->contratos_id;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $irrmarcacaoponto = $this->Irrmarcacaopontos->patchEntity($irrmarcacaoponto, $this->request->getData());
            if ($this->Irrmarcacaopontos->save($irrmarcacaoponto)) {
                $this->Flash->success(__('A Ocorrência foi salva.'));

                return $this->redirect(['controller' => 'contratos', 'action' => 'view', $id_contrato]);
            }
            $this->Flash->error(__('A Ocorrência não pôde ser salva. Por favor, tente novamente.'));
        }
        $contratos = $this->Irrmarcacaopontos->Contratos->find('list', ['limit' => 200]);
        $this->set(compact('irrmarcacaoponto', 'contratos','id_contrato', 'funcionario'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Irrmarcacaoponto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $irrmarcacaoponto = $this->Irrmarcacaopontos->get($id);
        if ($this->Irrmarcacaopontos->delete($irrmarcacaoponto)) {
            $this->Flash->success(__('A Ocorrência foi deletada'));
        } else {
            $this->Flash->error(__('A Ocorrência não pôde ser deleta. Por favor, tente novamente.'));
        }

        return $this->redirect(['controller' => 'contratos', 'action' => 'view', $id]);
    }
}
