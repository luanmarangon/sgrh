<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FuncoesSetore $funcoesSetore
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Funcoes Setore'), ['action' => 'edit', $funcoesSetore->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Funcoes Setore'), ['action' => 'delete', $funcoesSetore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $funcoesSetore->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Funcoes Setores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Funcoes Setore'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Funcoes'), ['controller' => 'Funcoes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Funco'), ['controller' => 'Funcoes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Setores'), ['controller' => 'Setores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Setore'), ['controller' => 'Setores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contratos'), ['controller' => 'Contratos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contrato'), ['controller' => 'Contratos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="funcoesSetores view large-9 medium-8 columns content">
    <h3><?= h($funcoesSetore->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Funco') ?></th>
            <td><?= $funcoesSetore->has('funco') ? $this->Html->link($funcoesSetore->funco->id, ['controller' => 'Funcoes', 'action' => 'view', $funcoesSetore->funco->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Setore') ?></th>
            <td><?= $funcoesSetore->has('setore') ? $this->Html->link($funcoesSetore->setore->nome, ['controller' => 'Setores', 'action' => 'view', $funcoesSetore->setore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contrato') ?></th>
            <td><?= $funcoesSetore->has('contrato') ? $this->Html->link($funcoesSetore->contrato->id, ['controller' => 'Contratos', 'action' => 'view', $funcoesSetore->contrato->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($funcoesSetore->id) ?></td>
        </tr>
    </table>
</div>
