<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FuncoesSetore[]|\Cake\Collection\CollectionInterface $funcoesSetores
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Funcoes Setore'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Funcoes'), ['controller' => 'Funcoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Funco'), ['controller' => 'Funcoes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Setores'), ['controller' => 'Setores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Setore'), ['controller' => 'Setores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contratos'), ['controller' => 'Contratos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contrato'), ['controller' => 'Contratos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="funcoesSetores index large-9 medium-8 columns content">
    <h3><?= __('Funcoes Setores') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('funcoes_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('setores_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contratos_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($funcoesSetores as $funcoesSetore): ?>
            <tr>
                <td><?= $this->Number->format($funcoesSetore->id) ?></td>
                <td><?= $funcoesSetore->has('funco') ? $this->Html->link($funcoesSetore->funco->nome, ['controller' => 'Funcoes', 'action' => 'view', $funcoesSetore->funco->id]) : '' ?></td>
                <td><?= $funcoesSetore->has('setore') ? $this->Html->link($funcoesSetore->setore->nome, ['controller' => 'Setores', 'action' => 'view', $funcoesSetore->setore->id]) : '' ?></td>
                <td><?= $funcoesSetore->has('contrato') ? $this->Html->link($funcoesSetore->contrato->id, ['controller' => 'Contratos', 'action' => 'view', $funcoesSetore->contrato->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $funcoesSetore->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $funcoesSetore->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $funcoesSetore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $funcoesSetore->id)]) ?>
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
