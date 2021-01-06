<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contatoempresa $contatoempresa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contatoempresa'), ['action' => 'edit', $contatoempresa->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contatoempresa'), ['action' => 'delete', $contatoempresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contatoempresa->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contatoempresas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contatoempresa'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contatoempresas view large-9 medium-8 columns content">
    <h3><?= h($contatoempresa->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Telefone') ?></th>
            <td><?= h($contatoempresa->telefone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Responsavel') ?></th>
            <td><?= h($contatoempresa->responsavel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($contatoempresa->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ramal') ?></th>
            <td><?= h($contatoempresa->ramal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Celular') ?></th>
            <td><?= h($contatoempresa->celular) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Empresa') ?></th>
            <td><?= $contatoempresa->has('empresa') ? $this->Html->link($contatoempresa->empresa->rzsocial, ['controller' => 'Empresas', 'action' => 'view', $contatoempresa->empresa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($contatoempresa->id) ?></td>
        </tr>
    </table>
</div>
