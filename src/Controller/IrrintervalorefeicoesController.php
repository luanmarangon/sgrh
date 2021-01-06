<?php
namespace App\Controller;

use Cake\Datasource\ConnectionManager;
use App\Controller\AppController;
use Cake\I18n\FrozenDate;
use Cake\I18n\FrozenTime;

/**
 * Irrintervalorefeicoes Controller
 *
 * @property \App\Model\Table\IrrintervalorefeicoesTable $Irrintervalorefeicoes
 *
 * @method \App\Model\Entity\Irrintervalorefeico[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class IrrintervalorefeicoesController extends AppController
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
        $irrintervalorefeicoes = $this->paginate($this->Irrintervalorefeicoes);

        $this->set(compact('irrintervalorefeicoes'));
    }

    /**
     * View method
     *
     * @param string|null $id Irrintervalorefeico id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $irrintervalorefeico = $this->Irrintervalorefeicoes->get($id, [
            'contain' => ['Contratos'],
        ]);

        $this->set('irrintervalorefeico', $irrintervalorefeico);
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

        $irrintervalorefeico = $this->Irrintervalorefeicoes->newEntity();
        if ($this->request->is('post')) {
            $irrintervalorefeico = $this->Irrintervalorefeicoes->patchEntity($irrintervalorefeico, $this->request->getData());
            if ($this->Irrintervalorefeicoes->save($irrintervalorefeico)) {
                $this->Flash->success(__('A Ocorrência foi salva.'));

                return $this->redirect(['controller' => 'contratos', 'action' => 'view', $id]);
            }
            $this->Flash->error(__('A Ocorrência não pôde ser salva. Por favor, tente novamente.'));
        }
        $contratos = $this->Irrintervalorefeicoes->Contratos->find('list', ['limit' => 200]);
        $this->set(compact('irrintervalorefeico', 'contratos',  'funcionario', 'id'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Irrintervalorefeico id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $irrintervalorefeico = $this->Irrintervalorefeicoes->get($id, [
            'contain' => [],
        ]);
        $connection = ConnectionManager::get('default');
		$resultado = $connection
			  ->execute( 'SELECT f.* FROM funcionarios f INNER JOIN contratos c ON f.id = c.funcionarios_id AND c.id = '.$id)
			  ->fetchAll('assoc');
		foreach($resultado as $r):
			$funcionario = $r;
        endforeach;
        $id_contrato = $irrintervalorefeico->contratos_id;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $irrintervalorefeico = $this->Irrintervalorefeicoes->patchEntity($irrintervalorefeico, $this->request->getData());
            if ($this->Irrintervalorefeicoes->save($irrintervalorefeico)) {
                $this->Flash->success(__('A Ocorrência foi salva.'));

                return $this->redirect(['controller' => 'contratos', 'action' => 'view', $id_contrato]);
            }
            $this->Flash->error(__('A Ocorrência não pôde ser salva. Por favor, tente novamente..'));
        }
        $contratos = $this->Irrintervalorefeicoes->Contratos->find('list', ['limit' => 200]);
        $this->set(compact('irrintervalorefeico', 'contratos','id_contrato', 'funcionario'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Irrintervalorefeico id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $irrintervalorefeico = $this->Irrintervalorefeicoes->get($id);
        if ($this->Irrintervalorefeicoes->delete($irrintervalorefeico)) {
            $this->Flash->success(__('A Ocorrência foi deletada'));
        } else {
            $this->Flash->error(__('A Ocorrência não pôde ser deleta. Por favor, tente novamente.'));
        }

        return $this->redirect(['controller' => 'contratos', 'action' => 'view', $id]);
    }
}
