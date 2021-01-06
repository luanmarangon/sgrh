<?php

namespace App\Controller;

use Cake\Datasource\ConnectionManager;
use App\Controller\AppController;


/**
 * Asos Controller
 *
 * @property \App\Model\Table\AsosTable $Asos
 *
 * @method \App\Model\Entity\Aso[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AsosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Funcionarios'],
        ];
        $asos = $this->paginate($this->Asos);

        $this->set(compact('asos'));
    }

    /**
     * View method
     *
     * @param string|null $id Aso id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aso = $this->Asos->get($id, [
            'contain' => ['Funcionarios'],
        ]);

        $this->set('aso', $aso);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $connection = ConnectionManager::get('default');


        $aso = $this->Asos->newEntity();
        if ($this->request->is('post')) {

            $aso = $this->Asos->patchEntity($aso, $this->request->getData());

            $resultado = $connection
                ->execute('SELECT MAX(id) as id FROM asos')
                ->fetchAll('assoc');
            foreach ($resultado as $r) :
                $aso_id = $r['id'];
            endforeach;
            
            if ($this->request->getData('anexo') !=""){
                $imagem = $this->request->getData('anexo');
                $tipo = explode('/',$imagem['type']);
				$imagem_nome = "img/asos/Aso".($aso_id+1).'.'.($tipo[1]);
                $aso->anexo = "asos/Aso".($aso_id+1).'.'.($tipo[1]);
                move_uploaded_file($imagem['tmp_name'],$imagem_nome);
            }                
            else
                $aso->anexo = "";

            $aso->funcionarios_id = $id;
            if ($this->Asos->save($aso)) {
                $this->Flash->success(__('O Exame Ocupacional do Colaborador foi salvo com sucesso.'));

                return $this->redirect(['controller' => 'funcionarios', 'action' => 'contratos', $id]);
            }
            $this->Flash->error(__('O Exame Ocupacional do Colaborador não pode ser salvo. Por favor, tente novamente.'));
        }
        $funcionarios = $this->Asos->Funcionarios->find('list', ['limit' => 200]);
        $this->set(compact('aso', 'funcionarios', 'id'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Aso id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aso = $this->Asos->get($id, [
            'contain' => [],
        ]);

        $funcionario = "";
		$connection = ConnectionManager::get('default');
		
		$resultado = $connection
			  ->execute( 'SELECT f.* FROM funcionarios f
							INNER JOIN contratos c ON c.funcionarios_id = f.id
							INNER JOIN atestados a ON a.contratos_id = c.id
							WHERE a.id = '.$id)
			  ->fetchAll('assoc');
		foreach($resultado as $r):
			$funcionario = $r;
        endforeach;
        
        $id_funcionario = $aso->funcionarios_id;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aso = $this->Asos->patchEntity($aso, $this->request->getData());
            
            if ($this->request->getData('anexo')['tmp_name'] !=""){
				if ($this->request->getData('anexo_antiga') == null){
					$imagem = $this->request->getData('anexo');
					$tipo = explode('/',$imagem['type']);				
					$imagem_nome = "img/asos/Aso".($aso->id).'.'.($tipo[1]);
					$aso->anexo = "asos/Aso".($aso->id).'.'.($tipo[1]);
					move_uploaded_file($imagem['tmp_name'],$imagem_nome);
				}
            }                
            else
                $aso->img = "";

            $aso->funcionarios_id = $id_funcionario;
            if ($this->Asos->save($aso)) {
                $this->Flash->success(__('O Exame Ocupacional do Colaborador foi salvo com sucesso.'));
                return $this->redirect(['controller' => 'funcionarios', 'action' => 'contratos', $id_funcionario]);
            }
            $this->Flash->error(__('O Exame Ocupacional do Colaborador não pode ser salvo. Por favor, tente novamente.'));
        }
        $funcionarios = $this->Asos->Funcionarios->find('list', ['limit' => 200]);
        $this->set(compact('aso', 'funcionarios', 'id_funcionario'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Aso id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aso = $this->Asos->get($id);
        if ($this->Asos->delete($aso)) {
            $this->Flash->success(__('O Exame Ocupacional do Colaborador foi excluído com sucesso.'));
        } else {
            $this->Flash->error(__('O Exame Ocupacional do Colaborador não pode ser excluído. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function excluiraso($id = null)
    {
        $connection = ConnectionManager::get('default');
		$resultado = $connection
			  ->execute( 'SELECT * FROM asos WHERE id = '.$id)
              ->fetchAll('assoc');
        
		foreach ($resultado as $r):
			$anexo = $r['anexo'];
		endforeach;
		unlink("img/".$anexo);
		$resultado = $connection
			  ->execute( "UPDATE asos set anexo = '' WHERE id = ".$id);
		return $this->redirect(['controller' => 'asos', 'action' => 'edit', $id]);
    }
}
