<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Enderecofuncionario $enderecofuncionario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Editar Endereço'), ['action' => 'edit', $enderecofuncionario->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Endereço'), ['action' => 'delete', $enderecofuncionario->id], ['confirm' => __('Tem certeza de que deseja excluir o Endereço do colaborador # {0}?', $enderecofuncionario->funcionario->nome)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Endereços'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Endereço'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar Funcionários'), ['controller' => 'Funcionarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Funcionário'), ['controller' => 'Funcionarios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="enderecofuncionarios view large-9 medium-8 columns content">
    <h3><?= h($enderecofuncionario->funcionario->nome) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Endereço') ?></th>
            <td><?= h($enderecofuncionario->logradouro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Número') ?></th>
            <td><?= h($enderecofuncionario->numero) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Complemento') ?></th>
            <td><?= h($enderecofuncionario->complemento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bairro') ?></th>
            <td><?= h($enderecofuncionario->bairro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CEP') ?></th>
            <td><?= h($enderecofuncionario->cep) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cidade') ?></th>
            <td><?= h($enderecofuncionario->cidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= h($enderecofuncionario->uf_cidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Funcionario') ?></th>
            <td><?= $enderecofuncionario->has('funcionario') ? $this->Html->link($enderecofuncionario->funcionario->nome, ['controller' => 'Funcionarios', 'action' => 'view', $enderecofuncionario->funcionario->id]) : '' ?></td>
        </tr>
        <!-- <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($enderecofuncionario->id) ?></td>
        </tr> -->
    </table>
</div>
