<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;

class PrincipalController extends AppController
{

    public function index()
    {
        
        $conexao = ConnectionManager::get('default');
        $funcionarios = $conexao->execute(
            'SELECT COUNT(*) as funcionarios 
			FROM funcionarios'
            )->fetchAll('assoc');
        $this->set(compact('funcionarios'));

        $irrinicioexpedientes = $conexao->execute(
            'SELECT COUNT(*) as irrinicioexpedientes 
			FROM irrinicioexpedientes'
            )->fetchAll('assoc');
        $this->set(compact('irrinicioexpedientes'));
        
        $irrintervalorefeicoes = $conexao->execute(
            'SELECT COUNT(*) as irrintervalorefeicoes 
			FROM irrintervalorefeicoes'
            )->fetchAll('assoc');
        $this->set(compact('irrintervalorefeicoes'));

        $irrjornadatrabalhos = $conexao->execute(
            'SELECT COUNT(*) as irrjornadatrabalhos 
			FROM irrjornadatrabalhos'
            )->fetchAll('assoc');
        $this->set(compact('irrjornadatrabalhos'));

        $irrmarcacaopontos = $conexao->execute(
            'SELECT COUNT(*) as irrmarcacaopontos 
			FROM irrmarcacaopontos'
            )->fetchAll('assoc');
        $this->set(compact('irrmarcacaopontos'));

        $laudoocorrencias = $conexao->execute(
            'SELECT COUNT(*) as laudoocorrencias 
			FROM laudoocorrencias'
            )->fetchAll('assoc');
        $this->set(compact('laudoocorrencias'));

        $medidadisciplinares = $conexao->execute(
            'SELECT COUNT(*) as medidadisciplinares 
			FROM medidadisciplinares'
            )->fetchAll('assoc');
        $this->set(compact('medidadisciplinares'));

        $atestados = $conexao->execute(
            'SELECT COUNT(*) as atestados 
			FROM atestados'
            )->fetchAll('assoc');
        $this->set(compact('atestados'));

        $contratos = $conexao->execute(
            'SELECT COUNT(*) as contratos 
			FROM contratos'
            )->fetchAll('assoc');
        $this->set(compact('contratos'));

        $asos = $conexao->execute(
            'SELECT COUNT(*) as asos 
			FROM asos'
            )->fetchAll('assoc');
        $this->set(compact('asos'));
        



        
    }
}
