<?php
namespace App\Controller;
use Cake\ORM\TableRegistry;
use App\Controller\AppController;
use Cake\I18n\FrozenDate;
use Cake\I18n\FrozenTime;
use Cake\Datasource\ConnectionManager;

/**
 * Contratos Controller
 *
 * @property \App\Model\Table\ContratosTable $Contratos
 *
 * @method \App\Model\Entity\Contrato[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContratosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    
     public function index()
    {
        $this->paginate = [
            'contain' => ['Empresas', 'Funcionarios', 'Jornadatrabalhos'],
        ];
        $contratos = $this->paginate($this->Contratos);

        $this->set(compact('contratos'));
    }

    /**
     * View method
     *
     * @param string|null $id Contrato id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contrato = $this->Contratos->get($id, [
            'contain' => ['Empresas', 'Funcionarios', 'Jornadatrabalhos'],
        ]);
        $this->set('contrato', $contrato);
		
		$afastamentos = TableRegistry::getTableLocator()->get('Afastamentos')
                ->find()
                ->where(['contratos_id =' => $id]);
        $this->set('afastamentos', $afastamentos);

        $salarios = TableRegistry::getTableLocator()->get('Salarios')
                ->find()
                ->where(['contratos_id =' => $id]);
        $this->set('salarios', $salarios);

        $ferias = TableRegistry::getTableLocator()->get('Ferias')
                ->find()
                ->where(['contratos_id =' => $id]);
        $this->set('ferias', $ferias);

        $decsalarios = TableRegistry::getTableLocator()->get('Decsalarios')
                ->find()
                ->where(['contratos_id =' => $id]);
        $this->set('decsalarios', $decsalarios);

        $atestados = TableRegistry::getTableLocator()->get('Atestados')
                ->find()
                ->where(['contratos_id =' => $id]);
        $this->set('atestados', $atestados);

        $escalas = TableRegistry::getTableLocator()->get('Escalas')
                ->find()
                ->where(['contratos_id =' => $id]);
        $this->set('escalas', $escalas);

        /*$funcoes_setores = TableRegistry::getTableLocator()->get('Funcoes_setores')
                ->find()
                ->where(['contratos_id =' => $id]);
        $this->set('funcoes_setores', $funcoes_setores);*/

        $conexao = ConnectionManager::get('default');
        $funcoes_setores = $conexao->execute(
            'SELECT fs.id as id, f.nome as nome_funcao, s.nome as nome_setor FROM funcoes_setores fs
            INNER JOIN funcoes f ON f.id = fs.funcoes_id
            INNER JOIN setores s ON s.id = fs.setores_id
            WHERE fs.contratos_id = '.$id
            )->fetchAll('assoc');
        $this->set('funcoes_setores', $funcoes_setores);

        $irrinicioexpedientes = TableRegistry::getTableLocator()->get('Irrinicioexpedientes')
                ->find()
                ->where(['contratos_id ' => $id]);
        $this->set('irrinicioexpedientes', $irrinicioexpedientes);

        $irrinterjornadas = TableRegistry::getTableLocator()->get('Irrinterjornadas')
                ->find()
                ->where(['contratos_id ' => $id]);
        $this->set('irrinterjornadas', $irrinterjornadas);
        
        $irrintervalorefeicoes = TableRegistry::getTableLocator()->get('Irrintervalorefeicoes')
                ->find()
                ->where(['contratos_id ' => $id]);
        $this->set('irrintervalorefeicoes', $irrintervalorefeicoes);

        $irrjornadatrabalhos = TableRegistry::getTableLocator()->get('Irrjornadatrabalhos')
                ->find()
                ->where(['contratos_id ' => $id]);
        $this->set('irrjornadatrabalhos', $irrjornadatrabalhos);
        
        $irrmarcacaopontos = TableRegistry::getTableLocator()->get('Irrmarcacaopontos')
                ->find()
                ->where(['contratos_id ' => $id]);
        $this->set('irrmarcacaopontos', $irrmarcacaopontos);

        $laudoocorrencias = TableRegistry::getTableLocator()->get('Laudoocorrencias')
                ->find()
                ->where(['contratos_id ' => $id]);
        $this->set('laudoocorrencias', $laudoocorrencias);

        $medidadisciplinares = TableRegistry::getTableLocator()->get('Medidadisciplinares')
                ->find()
                ->where(['contratos_id ' => $id]);
        $this->set('medidadisciplinares', $medidadisciplinares);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $contrato = $this->Contratos->newEntity();
        if ($this->request->is('post')) {
            $contrato = $this->Contratos->patchEntity($contrato, $this->request->getData());
            $contrato->funcionarios_id = $id;
			if ($this->Contratos->save($contrato)) {
                $this->Flash->success(__('O Contrato do Colaborador foi salvo com sucesso.'));
                return $this->redirect(['controller' => 'funcionarios', 'action' => 'contratos'], $id);
            }
            $this->Flash->error(__('O Contrato do Colaborador não pode ser salvo. Por favor, tente novamente.'));
        }
        $empresas = $this->Contratos->Empresas->find('list', ['limit' => 200]);
        $funcionarios = $this->Contratos->Funcionarios->find('list', ['limit' => 200]);
        $jornadatrabalhos = $this->Contratos->Jornadatrabalhos->find('list', ['limit' => 200]);
        $this->set(compact('contrato', 'empresas', 'funcionarios', 'jornadatrabalhos', 'id'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contrato id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contrato = $this->Contratos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contrato = $this->Contratos->patchEntity($contrato, $this->request->getData());
            if ($this->Contratos->save($contrato)) {
                $this->Flash->success(__('O Contrato do Colaborador foi salvo com sucesso.'));

                $this->redirect(['controller' => 'funcionarios', 'action' => 'contratos', $contrato->id]);
            } else {
                $this->Flash->error(__('O Contrato do Colaborador não pode ser salvo. Por favor, tente novamente.'));
            }
            
        }
        $empresas = $this->Contratos->Empresas->find('list', ['limit' => 200]);
        $funcionarios = $this->Contratos->Funcionarios->find('list', ['limit' => 200]);
        $jornadatrabalhos = $this->Contratos->Jornadatrabalhos->find('list', ['limit' => 200]);
        $this->set(compact('contrato', 'empresas', 'funcionarios', 'jornadatrabalhos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contrato id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contrato = $this->Contratos->get($id);
        if ($this->Contratos->delete($contrato)) {
            $this->Flash->success(__('O Contrato do Colaborador foi excluído com sucesso.'));
        } else {
            $this->Flash->error(__('O Contrato do Colaborador não pode ser excluído. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
