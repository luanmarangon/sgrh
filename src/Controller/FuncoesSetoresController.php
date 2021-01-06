<?php
namespace App\Controller;

use Cake\Datasource\ConnectionManager;
use App\Controller\AppController;


/**
 * FuncoesSetores Controller
 *
 * @property \App\Model\Table\FuncoesSetoresTable $FuncoesSetores
 *
 * @method \App\Model\Entity\FuncoesSetore[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FuncoesSetoresController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Funcoes', 'Setores', 'Contratos'],
        ];
        $funcoesSetores = $this->paginate($this->FuncoesSetores);

        $this->set(compact('funcoesSetores'));
    }

    /**
     * View method
     *
     * @param string|null $id Funcoes Setore id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $funcoesSetore = $this->FuncoesSetores->get($id, [
            'contain' => ['Funcoes', 'Setores', 'Contratos'],
        ]);

        $this->set('funcoesSetore', $funcoesSetore);
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

        $funcoesSetore = $this->FuncoesSetores->newEntity();
        if ($this->request->is('post')) {
            $funcoesSetore = $this->FuncoesSetores->patchEntity($funcoesSetore, $this->request->getData());
            if ($this->FuncoesSetores->save($funcoesSetore)) {
                $this->Flash->success(__('Mudança de Setor/Função cadastrada com sucesso.'));

                return $this->redirect(['controller' => 'contratos', 'action' => 'view', $id]);
            }
            $this->Flash->error(__('Mudança de Setor/Função não pôde ser salvo. Por favor, tente novamente.'));
        }
        $funcoes = $this->FuncoesSetores->Funcoes->find('list', ['limit' => 200]);
        $setores = $this->FuncoesSetores->Setores->find('list', ['limit' => 200]);
        $contratos = $this->FuncoesSetores->Contratos->find('list', ['limit' => 200]);
        $this->set(compact('funcoesSetore', 'funcoes', 'setores', 'contratos',  'funcionario', 'id'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Funcoes Setore id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $funcoesSetore = $this->FuncoesSetores->get($id, [
            'contain' => [],
        ]);
        
        $connection = ConnectionManager::get('default');
		$resultado = $connection
			  ->execute( 'SELECT f.* FROM funcionarios f INNER JOIN contratos c ON f.id = c.funcionarios_id AND c.id = '.$id)
              ->fetchAll('assoc');
              $funcionario = "";
		foreach($resultado as $r):
			$funcionario = $r;
		endforeach;
		$id_contrato = $funcoesSetore->contratos_id;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $funcoesSetore = $this->FuncoesSetores->patchEntity($funcoesSetore, $this->request->getData());
            if ($this->FuncoesSetores->save($funcoesSetore)) {
                $this->Flash->success(__('Mudança de Setor/Função cadastrada com sucesso.'));

                return $this->redirect(['controller' => 'contratos', 'action' => 'view', $id_contrato]);
            }
            $this->Flash->error(__('Mudança de Setor/Função não pôde ser salvo. Por favor, tente novamente.'));
        }
        $funcoes = $this->FuncoesSetores->Funcoes->find('list', ['limit' => 200]);
        $setores = $this->FuncoesSetores->Setores->find('list', ['limit' => 200]);
        $contratos = $this->FuncoesSetores->Contratos->find('list', ['limit' => 200]);
        $this->set(compact('funcoesSetore', 'funcoes', 'setores', 'contratos','funcionario', 'id_contrato'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Funcoes Setore id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $funcoesSetore = $this->FuncoesSetores->get($id);
        if ($this->FuncoesSetores->delete($funcoesSetore)) {
            $this->Flash->success(__('Mudança de Setor/Função foi excluído.'));
        } else {
            $this->Flash->error(__('Mudança de Setor/Função não pôde ser excluído. Por favor, tente novamente.'));
        }

        return $this->redirect(['controller' => 'contratos', 'action' => 'view', $funcoesSetore->contratos_id]);
    }
}
