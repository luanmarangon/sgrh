<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FuncoesHasSetore[]|\Cake\Collection\CollectionInterface $funcoesHasSetores
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Funcoes Has Setore'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Funcoes'), ['controller' => 'Funcoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Funco'), ['controller' => 'Funcoes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Setores'), ['controller' => 'Setores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Setore'), ['controller' => 'Setores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="funcoesHasSetores index large-9 medium-8 columns content">
    <h3><?= __('Funcoes Has Setores') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('funcoes_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('setores_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($funcoesHasSetores as $funcoesHasSetore): ?>
            <tr>
                <td><?= $this->Number->format($funcoesHasSetore->id) ?></td>
                <td><?= $funcoesHasSetore->has('funco') ? $this->Html->link($funcoesHasSetore->funco->id, ['controller' => 'Funcoes', 'action' => 'view', $funcoesHasSetore->funco->id]) : '' ?></td>
                <td><?= $funcoesHasSetore->has('setore') ? $this->Html->link($funcoesHasSetore->setore->nome, ['controller' => 'Setores', 'action' => 'view', $funcoesHasSetore->setore->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $funcoesHasSetore->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $funcoesHasSetore->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $funcoesHasSetore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $funcoesHasSetore->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
