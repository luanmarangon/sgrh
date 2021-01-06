<?php
namespace App\Controller;

use Cake\Datasource\ConnectionManager;
use App\Controller\AppController;
use Cake\I18n\FrozenDate;
use Cake\I18n\FrozenTime;

/**
 * Laudoocorrencias Controller
 *
 * @property \App\Model\Table\LaudoocorrenciasTable $Laudoocorrencias
 *
 * @method \App\Model\Entity\Laudoocorrencia[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LaudoocorrenciasController extends AppController
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
        $laudoocorrencias = $this->paginate($this->Laudoocorrencias);

        $this->set(compact('laudoocorrencias'));
    }

    /**
     * View method
     *
     * @param string|null $id Laudoocorrencia id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $laudoocorrencia = $this->Laudoocorrencias->get($id, [
            'contain' => ['Contratos'],
        ]);

        $this->set('laudoocorrencia', $laudoocorrencia);
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

        $laudoocorrencia = $this->Laudoocorrencias->newEntity();
        if ($this->request->is('post')) {

            $laudoocorrencia = $this->Laudoocorrencias->patchEntity($laudoocorrencia, $this->request->getData());

            $resultado = $connection
                ->execute( 'SELECT MAX(id) as id FROM laudoocorrencias')
                ->fetchAll('assoc');
            foreach($resultado as $r):
                $laudoocorrencia_id = $r['id'];
            endforeach;
            
            if ($this->request->getData('anexo') !=""){
                $imagem = $this->request->getData('anexo');
				$tipo = explode('/',$imagem['type']);				
				$imagem_nome = "img/laudo/Laudo".($laudoocorrencia_id+1).'.'.($tipo[1]);
                $laudoocorrencia->anexo = "laudo/Laudo".($laudoocorrencia_id+1).'.'.($tipo[1]);
                move_uploaded_file($imagem['tmp_name'],$imagem_nome);
            }                
            else
                $laudoocorrencia->anexo = "";


            if ($this->Laudoocorrencias->save($laudoocorrencia)) {
                $this->Flash->success(__('Laudo de Ocorrência salvo'));

                return $this->redirect(['controller' => 'contratos', 'action' => 'view', $id]);
            }
            $this->Flash->error(__('Laudo de Ocorrência não pode ser salvo, Por favor, tente novamente.'));
        }
        $contratos = $this->Laudoocorrencias->Contratos->find('list', ['limit' => 200]);
        $this->loadModel('Funcionarios');
        $funcionarios = $this->Funcionarios->find('list', ['limit' => 200]);
        $this->set(compact('laudoocorrencia', 'contratos', 'funcionario', 'funcionarios','id'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Laudoocorrencia id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $laudoocorrencia = $this->Laudoocorrencias->get($id, [
            'contain' => [],
        ]);

        $id_contrato = $laudoocorrencia->contratos_id;

        $funcionario ='';
        $connection = ConnectionManager::get('default');
		$resultado = $connection
			  ->execute( 'SELECT f.* FROM funcionarios f INNER JOIN contratos c ON f.id = c.funcionarios_id AND c.id = '.$id_contrato)
			  ->fetchAll('assoc');
		foreach($resultado as $r):
			$funcionario = $r;
        endforeach;
        
        
        if ($this->request->is(['patch', 'post', 'put'])) {
            $laudoocorrencia = $this->Laudoocorrencias->patchEntity($laudoocorrencia, $this->request->getData());

            if ($this->request->getData('anexo')['tmp_name'] !=""){
				if ($this->request->getData('anexo_antiga') == null){
					$imagem = $this->request->getData('anexo');
					$tipo = explode('/',$imagem['type']);				
					$imagem_nome = "img/laudo/Laudo".($laudoocorrencia->id).'.'.($tipo[1]);
					$laudoocorrencia->anexo = "laudo/Laudo".($laudoocorrencia->id).'.'.($tipo[1]);
					move_uploaded_file($imagem['tmp_name'],$imagem_nome);
				}
            }                
            else
                $laudoocorrencia->anexo = "";

            if ($this->Laudoocorrencias->save($laudoocorrencia)) {
                $this->Flash->success(__('Laudo de Ocorrência salvo.'));

                return $this->redirect(['controller' => 'contratos', 'action' => 'view', $id_contrato]);
            }
            $this->Flash->error(__('Laudo de Ocorrência não pode ser salvo, Por favor, tente novamente.'));
        }
        $contratos = $this->Laudoocorrencias->Contratos->find('list', ['limit' => 200]);
        $this->loadModel('Funcionarios');
        $funcionarios = $this->Funcionarios->find('list', ['limit' => 200]);
        $this->set(compact('laudoocorrencia', 'contratos','id_contrato', 'funcionario', 'funcionarios'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Laudoocorrencia id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $laudoocorrencia = $this->Laudoocorrencias->get($id);
        if ($this->Laudoocorrencias->delete($laudoocorrencia)) {
            $this->Flash->success(__('Laudo de Ocorrência deletado.'));
        } else {
            $this->Flash->error(__('Laudo de Ocorrência não pode ser deletado, Por favor, tente novamente.'));
        }

        return $this->redirect(['controller' => 'contratos', 'action' => 'view', $id]);
    }

    public function excluirlaudo($id = null)
    {
        
        $connection = ConnectionManager::get('default');
		$resultado = $connection
			  ->execute( 'SELECT * FROM laudoocorrencias WHERE id = '.$id)
              ->fetchAll('assoc');
              
		foreach ($resultado as $r):
			$anexo = $r['anexo'];
        endforeach;
        
        unlink("img/".$anexo);
		$resultado = $connection
              ->execute( "UPDATE laudoocorrencias set anexo = '' WHERE id = ".$id);
              
		return $this->redirect(['controller' => 'laudoocorrencias', 'action' => 'edit', $id]);
    }
}
