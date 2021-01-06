<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\I18n\FrozenDate;
use Cake\I18n\FrozenTime;
use Cake\Datasource\ConnectionManager;

class RelatoriosController extends AppController
{

    public function index()
    {
    }

    // public function contratos(){
    //     $contratos = TableRegistry::getTableLocator()->get('contratos')->find('all');
    //     $this->set('contratos', $contratos);
    // }

    public function funcionarios()
    {
        $funcionarios = TableRegistry::getTableLocator()->get('funcionarios')->find('all');
        $this->set('funcionarios', $funcionarios);
    }


    public function laudo()
    {
        // $laudo = TableRegistry::getTableLocator()->get('laudoocorrencias')->find('all');
        // $this->set('laudo', $laudo);
        $funcionarios = TableRegistry::getTableLocator()->get('funcionarios')->find('list');
        if ($this->request->is('post')) {
            $conexao = ConnectionManager::get('default');
            $funcionario = $this->request->getData("funcionarios");
            $laudo = $conexao->execute(
                'SELECT fu.nome, f.* FROM laudoocorrencias f 
                INNER JOIN contratos c ON f.contratos_id = c.id 
                INNER JOIN funcionarios fu ON fu.id = c.funcionarios_id 
                WHERE fu.id = ' . $funcionario
            )->fetchAll('assoc');
            $this->set(compact('laudo'));
        }
        $this->set('funcionarios', $funcionarios);
    }

    public function asos()
    {
        $funcionarios = TableRegistry::getTableLocator()->get('funcionarios')->find('list');
        $conexao = ConnectionManager::get('default');
        $funcionario = $this->request->getData("funcionarios");
        $asos = $conexao->execute(
            'SELECT fu.nome, f.* FROM asos f 
                INNER JOIN funcionarios fu ON fu.id = f.funcionarios_id 
                WHERE proximo_exame > dt_exame
                order by proximo_exame                    '
        )->fetchAll('assoc');
        $this->set(compact('asos'));
        $this->set('funcionarios', $funcionarios);
    }


    public function ferias()
    {
        $funcionarios = TableRegistry::getTableLocator()->get('funcionarios')->find('list');
        if ($this->request->is('post')) {
            $conexao = ConnectionManager::get('default');
            $funcionario = $this->request->getData("funcionarios");
            $ferias = $conexao->execute(
                'SELECT fu.nome, f.* FROM ferias f 
                    INNER JOIN contratos c ON f.contratos_id = c.id 
                    INNER JOIN funcionarios fu ON fu.id = c.funcionarios_id 
                    WHERE fu.id = ' . $funcionario
            )->fetchAll('assoc');
            $this->set(compact('ferias'));
        }
        $this->set('funcionarios', $funcionarios);
    }

    public function afastamentos()
    {
        // $afastamentos = TableRegistry::getTableLocator()->get('afastamentos')->find('all');
        // $this->set('afastamentos', $afastamentos);

        // $contratos = TableRegistry::getTableLocator()->get('contratos')->find('all');
        // $this->set('contratos', $contratos);
        $funcionarios = TableRegistry::getTableLocator()->get('funcionarios')->find('list');
        if ($this->request->is('post')) {
            $conexao = ConnectionManager::get('default');
            $funcionario = $this->request->getData("funcionarios");
            $afastamentos = $conexao->execute(
                'SELECT fu.nome, f.* FROM afastamentos f 
                INNER JOIN contratos c ON f.contratos_id = c.id 
                INNER JOIN funcionarios fu ON fu.id = c.funcionarios_id 
                WHERE fu.id  = ' . $funcionario
            )->fetchAll('assoc');
            $this->set(compact('afastamentos'));
        }
        $this->set('funcionarios', $funcionarios);
    }

    public function atestados()
    {
        // $atestados = TableRegistry::getTableLocator()->get('atestados')->find('all');
        // $this->set('atestados', $atestados);
        $funcionarios = TableRegistry::getTableLocator()->get('funcionarios')->find('list');
        if ($this->request->is('post')) {
            $conexao = ConnectionManager::get('default');
            $funcionario = $this->request->getData("funcionarios");
            $atestados = $conexao->execute(
                'SELECT fu.nome, f.* FROM atestados f 
                INNER JOIN contratos c ON f.contratos_id = c.id 
                INNER JOIN funcionarios fu ON fu.id = c.funcionarios_id 
                WHERE fu.id = ' . $funcionario
            )->fetchAll('assoc');
            $this->set(compact('atestados'));
        }
        $this->set('funcionarios', $funcionarios);
    }

    public function cnh()
    {
        // $cnh = TableRegistry::getTableLocator()->get('funcionarios')->find('all');
        // $this->set('cnh', $cnh);


        $funcionarios = TableRegistry::getTableLocator()->get('funcionarios')->find('list');
        $conexao = ConnectionManager::get('default');
        $funcionario = $this->request->getData("funcionarios");
        // $dt = '2020-11-20';
        $cnh = $conexao->execute(
            'SELECT * FROM funcionarios 
            order by validade_cnh'
        )->fetchAll('assoc');
        $this->set(compact('cnh'));
        $this->set('funcionarios', $funcionarios);
    }

    public function isAuthorized($user)
    {
        return true;
    }
}
