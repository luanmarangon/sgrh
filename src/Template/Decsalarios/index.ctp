<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Decsalario[]|\Cake\Collection\CollectionInterface $decsalarios
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Decsalario'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contratos'), ['controller' => 'Contratos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contrato'), ['controller' => 'Contratos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="decsalarios index large-9 medium-8 columns content">
    <h3><?= __('Decsalarios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('primeira_parc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valor_primeira') ?></th>
                <th scope="col"><?= $this->Paginator->sort('segunda_parc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valor_segunda') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contratos_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($decsalarios as $decsalario): ?>
            <tr>
                <td><?= $this->Number->format($decsalario->id) ?></td>
                <td><?= h($decsalario->primeira_parc) ?></td>
                <td><?= $this->Number->format($decsalario->valor_primeira) ?></td>
                <td><?= h($decsalario->segunda_parc) ?></td>
                <td><?= $this->Number->format($decsalario->valor_segunda) ?></td>
                <td><?= $decsalario->has('contrato') ? $this->Html->link($decsalario->contrato->id, ['controller' => 'Contratos', 'action' => 'view', $decsalario->contrato->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $decsalario->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $decsalario->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $decsalario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $decsalario->id)]) ?>
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
