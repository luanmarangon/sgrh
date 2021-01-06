<?php
namespace App\Controller;

use Cake\Datasource\ConnectionManager;
use App\Controller\AppController;
use Cake\I18n\FrozenDate;
use Cake\I18n\FrozenTime;


/**
 * Medidadisciplinares Controller
 *
 * @property \App\Model\Table\MedidadisciplinaresTable $Medidadisciplinares
 *
 * @method \App\Model\Entity\Medidadisciplinare[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MedidadisciplinaresController extends AppController
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
        $medidadisciplinares = $this->paginate($this->Medidadisciplinares);

        $this->set(compact('medidadisciplinares'));
    }

    /**
     * View method
     *
     * @param string|null $id Medidadisciplinare id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $medidadisciplinare = $this->Medidadisciplinares->get($id, [
            'contain' => ['Contratos'],
        ]);

        $this->set('medidadisciplinare', $medidadisciplinare);
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

        $medidadisciplinare = $this->Medidadisciplinares->newEntity();
        if ($this->request->is('post')) {
            $medidadisciplinare = $this->Medidadisciplinares->patchEntity($medidadisciplinare, $this->request->getData());
            if ($this->Medidadisciplinares->save($medidadisciplinare)) {
                $this->Flash->success(__('Medida Disciplinar salva.'));

               return $this->redirect(['controller' => 'contratos', 'action' => 'view', $id]);
            }
            $this->Flash->error(__('Medida Disciplinar não pode ser salva. Por favor , tente novamente.'));
        }
        $contratos = $this->Medidadisciplinares->Contratos->find('list', ['limit' => 200]);
        $this->set(compact('medidadisciplinare', 'contratos', 'funcionario', 'id'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Medidadisciplinare id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $medidadisciplinare = $this->Medidadisciplinares->get($id, [
            'contain' => [],
        ]);
        $id_contrato = $medidadisciplinare->contratos_id;
        $connection = ConnectionManager::get('default');
		$resultado = $connection
			  ->execute( 'SELECT f.* FROM funcionarios f INNER JOIN contratos c ON f.id = c.funcionarios_id AND c.id = '.$id_contrato)
			  ->fetchAll('assoc');
		foreach($resultado as $r):
			$funcionario = $r;
        endforeach;
        

        if ($this->request->is(['patch', 'post', 'put'])) {
            $medidadisciplinare = $this->Medidadisciplinares->patchEntity($medidadisciplinare, $this->request->getData());
            if ($this->Medidadisciplinares->save($medidadisciplinare)) {
                $this->Flash->success(__('Medida Disciplinar salva.'));

                return $this->redirect(['controller' => 'contratos', 'action' => 'view', $id_contrato]);
            }
            $this->Flash->error(__('Medida Disciplinar não pode ser salva. Por favor , tente novamente.'));
        }
        $contratos = $this->Medidadisciplinares->Contratos->find('list', ['limit' => 200]);
        $this->set(compact('medidadisciplinare', 'contratos','id_contrato', 'funcionario'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Medidadisciplinare id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $medidadisciplinare = $this->Medidadisciplinares->get($id);
        if ($this->Medidadisciplinares->delete($medidadisciplinare)) {
            $this->Flash->success(__('Medida Disciplinar deletada.'));
        } else {
            $this->Flash->error(__('Medida Disciplinar não pode ser excluída. Por favor , tente novamente.'));
        }

        return $this->redirect(['controller' => 'contratos', 'action' => 'view', $id]);
    }
}
