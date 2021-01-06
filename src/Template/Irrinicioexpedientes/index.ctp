<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Irrinicioexpediente[]|\Cake\Collection\CollectionInterface $irrinicioexpedientes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Irrinicioexpediente'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contratos'), ['controller' => 'Contratos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contrato'), ['controller' => 'Contratos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="irrinicioexpedientes index large-9 medium-8 columns content">
    <h3><?= __('Irrinicioexpedientes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data') ?></th>
                <th scope="col"><?= $this->Paginator->sort('registro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('justificativa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contratos_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($irrinicioexpedientes as $irrinicioexpediente): ?>
            <tr>
                <td><?= $this->Number->format($irrinicioexpediente->id) ?></td>
                <td><?= h($irrinicioexpediente->data) ?></td>
                <td><?= h($irrinicioexpediente->registro) ?></td>
                <td><?= h($irrinicioexpediente->justificativa) ?></td>
                <td><?= $irrinicioexpediente->has('contrato') ? $this->Html->link($irrinicioexpediente->contrato->id, ['controller' => 'Contratos', 'action' => 'view', $irrinicioexpediente->contrato->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $irrinicioexpediente->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $irrinicioexpediente->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $irrinicioexpediente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $irrinicioexpediente->id)]) ?>
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
