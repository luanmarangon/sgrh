<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Jornadatrabalhos Controller
 *
 * @property \App\Model\Table\JornadatrabalhosTable $Jornadatrabalhos
 *
 * @method \App\Model\Entity\Jornadatrabalho[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class JornadatrabalhosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $jornadatrabalhos = $this->paginate($this->Jornadatrabalhos);

        $this->set(compact('jornadatrabalhos'));
    }

    /**
     * View method
     *
     * @param string|null $id Jornadatrabalho id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $jornadatrabalho = $this->Jornadatrabalhos->get($id, [
            'contain' => [],
        ]);

        $this->set('jornadatrabalho', $jornadatrabalho);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $jornadatrabalho = $this->Jornadatrabalhos->newEntity();
        if ($this->request->is('post')) {
            $jornadatrabalho = $this->Jornadatrabalhos->patchEntity($jornadatrabalho, $this->request->getData());
            if ($this->Jornadatrabalhos->save($jornadatrabalho)) {
                $this->Flash->success(__('Jornada de Trabalho foi salva.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Jornada de Trabalho não pode ser salva. Por favor,, tente novamente.'));
        }
        $this->set(compact('jornadatrabalho'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Jornadatrabalho id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $jornadatrabalho = $this->Jornadatrabalhos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $jornadatrabalho = $this->Jornadatrabalhos->patchEntity($jornadatrabalho, $this->request->getData());
            if ($this->Jornadatrabalhos->save($jornadatrabalho)) {
                $this->Flash->success(__('Jornada de Trabalho foi salva.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Jornada de Trabalho não pode ser salva. Por favor,, tente novamente.'));
        }
        $this->set(compact('jornadatrabalho'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Jornadatrabalho id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $jornadatrabalho = $this->Jornadatrabalhos->get($id);
        if ($this->Jornadatrabalhos->delete($jornadatrabalho)) {
            $this->Flash->success(__('Jornada de Trabalho deletada.'));
        } else {
            $this->Flash->error(__('Jornada de Trabalho não pode ser deletada. Por favor,, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
