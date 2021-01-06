<?php
namespace App\Controller;
use Cake\ORM\TableRegistry;

use App\Controller\AppController;

/**
 * Funcionarios Controller
 *
 * @property \App\Model\Table\FuncionariosTable $Funcionarios
 *
 * @method \App\Model\Entity\Funcionario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FuncionariosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tipodeficiencias'],
        ];
        $funcionarios = $this->paginate($this->Funcionarios);

        $this->set(compact('funcionarios'));
    }

	public function dados($id = null)
    {
        $funcionario = $this->Funcionarios->get($id, [
            'contain' => ['Tipodeficiencias'],
        ]);

        $dados = TableRegistry::getTableLocator()->get('Dadosbancarios')
                ->find()
                ->where(['funcionarios_id =' => $id]);
        $this->set('funcionario', $funcionario);
        $this->set('dados', $dados);
    }
    
    public function endereco($id = null)
    {
        $funcionario = $this->Funcionarios->get($id, [
            'contain' => ['Tipodeficiencias'],
        ]);

        $enderecofuncionarios = TableRegistry::getTableLocator()->get('enderecofuncionarios')
                ->find()
                ->where(['funcionarios_id =' => $id]);
        $this->set('funcionario', $funcionario);
        $this->set('enderecofuncionarios', $enderecofuncionarios);
    }

     public function dependentes($id = null)
    {
        $funcionario = $this->Funcionarios->get($id, [
            'contain' => ['Tipodeficiencias'],
        ]);

        $dependentes = TableRegistry::getTableLocator()->get('Dependentes')
                ->find()
                ->where(['funcionarios_id =' => $id]);
        $this->set('funcionario', $funcionario);
        $this->set('dependentes', $dependentes);
    }
    
	public function contatos($id = null)
    {
        $funcionario = $this->Funcionarios->get($id, [
            'contain' => ['Tipodeficiencias'],
        ]);

        $contatos = TableRegistry::getTableLocator()->get('Contatofuncionarios')
                ->find()
                ->where(['funcionarios_id =' => $id]);
        $this->set('funcionario', $funcionario);
        $this->set('contatos', $contatos);
    }
	
	public function contribuicao($id = null)
    {
        $funcionario = $this->Funcionarios->get($id, [
            'contain' => ['Tipodeficiencias'],
        ]);

        $contribuicao = TableRegistry::getTableLocator()->get('Contribuicaosindicais')
                ->find()
                ->where(['funcionarios_id =' => $id]);
        $this->set('funcionario', $funcionario);
        $this->set('contribuicao', $contribuicao);
    }
	
	public function alterardado($id = null)
    {
        $this->redirect(['controller' => 'Dadosbancarios', 'action' => 'edit', $id]);
    }
	
	public function novodado($id = null)
    {
        $this->redirect(['controller' => 'Dadosbancarios', 'action' => 'add', $id]);
    }
	
	public function alterarcontribuicao($id = null)
    {
        $this->redirect(['controller' => 'Contribuicaosindicais', 'action' => 'edit', $id]);
    }
	
	public function novacontribuicao($id = null)
    {
        $this->redirect(['controller' => 'Contribuicaosindicais', 'action' => 'add', $id]);
    }
	
	public function alterarcontato($id = null)
    {
        $this->redirect(['controller' => 'Contatofuncionarios', 'action' => 'edit', $id]);
    }
	
	public function novocontato($id = null)
    {
        $this->redirect(['controller' => 'Contatofuncionarios', 'action' => 'add', $id]);
    }

    public function alterardependente($id = null)
    {
        $this->redirect(['controller' => 'dependentes', 'action' => 'edit', $id]);
    }
	
	public function novodependente($id = null)
    {
        $this->redirect(['controller' => 'dependentes', 'action' => 'add', $id]);
    }

    public function alterarendereco($id = null)
    {
        $this->redirect(['controller' => 'enderecofuncionarios', 'action' => 'edit', $id]);
    }

    public function novoendereco($id = null)
    {
        $this->redirect(['controller' => 'enderecofuncionarios', 'action' => 'add', $id]);
    }
	
	public function novocontrato($id = null)
    {
        $this->redirect(['controller' => 'contratos', 'action' => 'add', $id]);
    }
	
	public function novoaso($id = null)
    {
        $this->redirect(['controller' => 'asos', 'action' => 'add', $id]);
    }

     public function contratos($id = null)
    {
        $funcionario = $this->Funcionarios->get($id, [
            'contain' => ['Tipodeficiencias'],
        ]);

        $contratos = TableRegistry::getTableLocator()->get('Contratos')
                ->find('all', ['contain' => 'Empresas'])
                ->where(['funcionarios_id =' => $id]);
        
        $asos = TableRegistry::getTableLocator()->get('Asos')
                ->find()
                ->where(['funcionarios_id =' => $id]);
                
        $this->set('funcionario', $funcionario);
        $this->set('contratos', $contratos);
        $this->set('asos', $asos);
    }

    public function alterarasos($id = null)
    {
        $this->redirect(['controller' => 'asos', 'action' => 'edit', $id]);
    }

    public function alterarcontrato($id = null)
    {
        $this->redirect(['controller' => 'contratos', 'action' => 'edit', $id]);
    }
    
     public function view($id = null)
    {
        $funcionario = $this->Funcionarios->get($id, [
            'contain' => ['Tipodeficiencias'],
        ]);

        $this->set('funcionario', $funcionario);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $funcionario = $this->Funcionarios->newEntity();
        if ($this->request->is('post')) {
            $funcionario = $this->Funcionarios->patchEntity($funcionario, $this->request->getData());
            if ($this->Funcionarios->save($funcionario)) {
                $this->Flash->success(__('O Colaborador foi salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O Colaborador não pode ser salvo. Por favor, tente novamente.'));
        }
        $tipodeficiencias = $this->Funcionarios->Tipodeficiencias->find('list', ['limit' => 200]);
        $this->set(compact('funcionario', 'tipodeficiencias'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Funcionario id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $funcionario = $this->Funcionarios->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $funcionario = $this->Funcionarios->patchEntity($funcionario, $this->request->getData());
            if ($this->Funcionarios->save($funcionario)) {
                $this->Flash->success(__('O Colaborador foi salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O Colaborador não pode ser salvo. Por favor, tente novamente.'));
        }
        $tipodeficiencias = $this->Funcionarios->Tipodeficiencias->find('list', ['limit' => 200]);
        $this->set(compact('funcionario', 'tipodeficiencias'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Funcionario id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $funcionario = $this->Funcionarios->get($id);
        if ($this->Funcionarios->delete($funcionario)) {
            $this->Flash->success(__('O Colaborador foi excluído com sucesso.'));
        } else {
            $this->Flash->error(__('O Colaborador não pode ser excluído. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
