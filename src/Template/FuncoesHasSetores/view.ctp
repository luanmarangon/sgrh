<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FuncoesHasSetore $funcoesHasSetore
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Funcoes Has Setore'), ['action' => 'edit', $funcoesHasSetore->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Funcoes Has Setore'), ['action' => 'delete', $funcoesHasSetore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $funcoesHasSetore->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Funcoes Has Setores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Funcoes Has Setore'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Funcoes'), ['controller' => 'Funcoes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Funco'), ['controller' => 'Funcoes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Setores'), ['controller' => 'Setores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Setore'), ['controller' => 'Setores', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="funcoesHasSetores view large-9 medium-8 columns content">
    <h3><?= h($funcoesHasSetore->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Funco') ?></th>
            <td><?= $funcoesHasSetore->has('funco') ? $this->Html->link($funcoesHasSetore->funco->id, ['controller' => 'Funcoes', 'action' => 'view', $funcoesHasSetore->funco->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Setore') ?></th>
            <td><?= $funcoesHasSetore->has('setore') ? $this->Html->link($funcoesHasSetore->setore->nome, ['controller' => 'Setores', 'action' => 'view', $funcoesHasSetore->setore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($funcoesHasSetore->id) ?></td>
        </tr>
    </table>
</div>
