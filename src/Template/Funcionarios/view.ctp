<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Funcionario $funcionario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Editar Funcionário'), ['action' => 'edit', $funcionario->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Funcionário'), ['action' => 'delete', $funcionario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $funcionario->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Funcionários'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Funcionário'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar Deficiências'), ['controller' => 'Tipodeficiencias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nova Deficiências'), ['controller' => 'Tipodeficiencias', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="funcionarios view large-9 medium-8 columns content">
    <h3><?= h($funcionario->nome) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($funcionario->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sexo') ?></th>
            <td><?= h($funcionario->sexo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Etnia') ?></th>
            <td><?= h($funcionario->etinia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cabelo') ?></th>
            <td><?= h($funcionario->cabelo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Olhos') ?></th>
            <td><?= h($funcionario->olhos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado Civil') ?></th>
            <td><?= h($funcionario->est_civil) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Naturalidade') ?></th>
            <td><?= h($funcionario->naturalidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado Naturalidade') ?></th>
            <td><?= h($funcionario->uf_naturalidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nacionalidade') ?></th>
            <td><?= h($funcionario->nacionalidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Escolaridade') ?></th>
            <td><?= h($funcionario->escolaridade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('E-mail Pessoal') ?></th>
            <td><?= h($funcionario->mail_pessoal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pai') ?></th>
            <td><?= h($funcionario->pai) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mae') ?></th>
            <td><?= h($funcionario->mae) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= h($funcionario->ativo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Número da Carteira') ?></th>
            <td><?= h($funcionario->num_carteira) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Registro Geral') ?></th>
            <td><?= h($funcionario->registro_geral) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Naturalizado') ?></th>
            <td><?= h($funcionario->naturalizado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Casado Brasileiro') ?></th>
            <td><?= h($funcionario->casado_brasileiro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CPF') ?></th>
            <td><?= h($funcionario->cpf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Carteira de Trabalho') ?></th>
            <td><?= h($funcionario->cart_trabalho) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Serie') ?></th>
            <td><?= h($funcionario->serie) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cidade') ?></th>
            <td><?= h($funcionario->cidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PIS') ?></th>
            <td><?= h($funcionario->pis) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('RG') ?></th>
            <td><?= h($funcionario->rg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Orgão') ?></th>
            <td><?= h($funcionario->orgao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado RG') ?></th>
            <td><?= h($funcionario->uf_rg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Habilitação') ?></th>
            <td><?= h($funcionario->habilitacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categoria') ?></th>
            <td><?= h($funcionario->categoria) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado CNH') ?></th>
            <td><?= h($funcionario->uf_cnh) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Reservista') ?></th>
            <td><?= h($funcionario->reservista) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Título Eleitor') ?></th>
            <td><?= h($funcionario->titulo_eleitor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zona Eleitoral') ?></th>
            <td><?= h($funcionario->titulo_zona) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Seção Eleitoral') ?></th>
            <td><?= h($funcionario->titulo_secao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome do Cônjuge') ?></th>
            <td><?= h($funcionario->conjugue) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sexo do Cônjuge') ?></th>
            <td><?= h($funcionario->conj_sexo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('RG do Cônjuge') ?></th>
            <td><?= h($funcionario->conj_rg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado RG') ?></th>
            <td><?= h($funcionario->conj_uf_rg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CPF do Cônjuge') ?></th>
            <td><?= h($funcionario->conj_cpf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Naturalidade do Cônjuge') ?></th>
            <td><?= h($funcionario->conj_naturalidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado de Naturalidade do Cônjuge') ?></th>
            <td><?= h($funcionario->conj_uf_naturalidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nacionalidade do Cônjuge') ?></th>
            <td><?= h($funcionario->conj_nascionalidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deficiência') ?></th>
            <td><?= $funcionario->has('tipodeficiencia') ? $this->Html->link($funcionario->tipodeficiencia->id, ['controller' => 'Tipodeficiencias', 'action' => 'view', $funcionario->tipodeficiencia->id]) : '' ?></td>
        </tr>
        <!-- <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($funcionario->id) ?></td>
        </tr> -->
        <tr>
            <th scope="row"><?= __('Data de Nascimento') ?></th>
            <td><?= h($funcionario->dt_nascimento) ?></td>
        </tr>
        <!-- <tr>
            <th scope="row"><?= __('Data do Cadastramento') ?></th>
            <td><?= h($funcionario->dtcadastro) ?></td>
        </tr> -->
        <tr>
            <th scope="row"><?= __('Data de Chegada ao Brasil') ?></th>
            <td><?= h($funcionario->dt_chg_br) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data de Emissão Carteira') ?></th>
            <td><?= h($funcionario->dt_emis_cart) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data de Cadastramento do Pis') ?></th>
            <td><?= h($funcionario->dt_cad_pis) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data de Emissão do RG') ?></th>
            <td><?= h($funcionario->dt_emis_rg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Validade da CNH') ?></th>
            <td><?= h($funcionario->validade_cnh) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data de Emissão do Título') ?></th>
            <td><?= h($funcionario->titulo_dt_emissao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data de Nascimento Cônjuge') ?></th>
            <td><?= h($funcionario->conj_nascimento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data do Cadastramento') ?></th>
            <td><?= h($funcionario->dt_cadamento) ?></td>
        </tr>
    </table>
</div>
