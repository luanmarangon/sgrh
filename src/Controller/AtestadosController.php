<?php
namespace App\Controller;

use Cake\Datasource\ConnectionManager;
use App\Controller\AppController;

/**
 * Atestados Controller
 *
 * @property \App\Model\Table\AtestadosTable $Atestados
 *
 * @method \App\Model\Entity\Atestado[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AtestadosController extends AppController
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
        $atestados = $this->paginate($this->Atestados);

        $this->set(compact('atestados'));
    }

    /**
     * View method
     *
     * @param string|null $id Atestado id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $atestado = $this->Atestados->get($id, [
            'contain' => ['Contratos'],
        ]);

        $this->set('atestado', $atestado);
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
        
        $atestado = $this->Atestados->newEntity();
        if ($this->request->is('post')) {
            
            $atestado = $this->Atestados->patchEntity($atestado, $this->request->getData());

            $resultado = $connection
                ->execute( 'SELECT MAX(id) as id FROM atestados')
                ->fetchAll('assoc');
            foreach($resultado as $r):
                $atestado_id = $r['id'];
            endforeach;
            
            if ($this->request->getData('img') !=""){
                $imagem = $this->request->getData('img');
				$tipo = explode('/',$imagem['type']);				
				$imagem_nome = "img/atestados/Atestado".($atestado_id+1).'.'.($tipo[1]);
                $atestado->img = "atestados/Atestado".($atestado_id+1).'.'.($tipo[1]);
                move_uploaded_file($imagem['tmp_name'],$imagem_nome);
            }                
            else
                $atestado->img = "";

            if ($this->Atestados->save($atestado)) {
                $this->Flash->success(__('O Atestado do Colaborador foi salvo com sucesso.'));

                return $this->redirect(['controller' => 'contratos', 'action' => 'view', $id]);
            }
            $this->Flash->error(__('O Atestado do Colaborador não pode ser salvo. Por favor, tente novamente.'));
        }
        $contratos = $this->Atestados->Contratos->find('list', ['limit' => 200]);
        $this->set(compact('atestado', 'contratos',  'funcionario', 'id'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Atestado id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $atestado = $this->Atestados->get($id, [
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
		$id_contrato = $atestado->contratos_id;
        if ($this->request->is(['patch', 'post', 'put'])) {
			$atestado = $this->Atestados->patchEntity($atestado, $this->request->getData());
           
			if ($this->request->getData('img')['tmp_name'] !=""){
				if ($this->request->getData('img_antiga') == null){
					$imagem = $this->request->getData('img');
					$tipo = explode('/',$imagem['type']);				
					$imagem_nome = "img/atestados/Atestado".($atestado->id).'.'.($tipo[1]);
					$atestado->img = "atestados/Atestado".($atestado->id).'.'.($tipo[1]);
					move_uploaded_file($imagem['tmp_name'],$imagem_nome);
				}
            }                
            else
                $atestado->img = "";
						
            $atestado->contratos_id = $id_contrato;
            if ($this->Atestados->save($atestado)) {
                $this->Flash->success(__('O Atestado do Colaborador foi salvo com sucesso.'));

                return $this->redirect(['controller' => 'contratos', 'action' => 'view', $id_contrato]);
            }
            $this->Flash->error(__('O Atestado do Colaborador não pode ser salvo. Por favor, tente novamente.'));
        }
        $contratos = $this->Atestados->Contratos->find('list', ['limit' => 200]);
        $this->set(compact('atestado', 'contratos', 'id_contrato', 'funcionario'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Atestado id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $atestado = $this->Atestados->get($id);
        if ($this->Atestados->delete($atestado)) {
			unlink("img/".$atestado->img);
            $this->Flash->success(__('O Atestado do Colaborador foi excluído com sucesso.'));
        } else {
            $this->Flash->error(__('O Atestado do Colaborador não pode ser excluído. Por favor, tente novamente.'));
        }

        return $this->redirect(['controller' => 'contratos', 'action' => 'view', $atestado->contratos_id]);
    }
	
	public function excluiratestado($id = null)
    {
        $connection = ConnectionManager::get('default');
		$resultado = $connection
			  ->execute( 'SELECT * FROM atestados WHERE id = '.$id)
			  ->fetchAll('assoc');
		foreach ($resultado as $r):
			$img = $r['img'];
		endforeach;
		unlink("img/".$img);
		$resultado = $connection
			  ->execute( "UPDATE atestados set img = '' WHERE id = ".$id);
		return $this->redirect(['controller' => 'atestados', 'action' => 'edit', $id]);
    }
	
}
