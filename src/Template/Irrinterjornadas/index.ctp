<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Irrinterjornada[]|\Cake\Collection\CollectionInterface $irrinterjornadas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Irrinterjornada'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contratos'), ['controller' => 'Contratos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contrato'), ['controller' => 'Contratos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="irrinterjornadas index large-9 medium-8 columns content">
    <h3><?= __('Irrinterjornadas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fim_exp') ?></th>
                <th scope="col"><?= $this->Paginator->sort('inic_exp') ?></th>
                <th scope="col"><?= $this->Paginator->sort('justificativa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contratos_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($irrinterjornadas as $irrinterjornada): ?>
            <tr>
                <td><?= $this->Number->format($irrinterjornada->id) ?></td>
                <td><?= h($irrinterjornada->data) ?></td>
                <td><?= h($irrinterjornada->fim_exp) ?></td>
                <td><?= h($irrinterjornada->inic_exp) ?></td>
                <td><?= h($irrinterjornada->justificativa) ?></td>
                <td><?= $irrinterjornada->has('contrato') ? $this->Html->link($irrinterjornada->contrato->id, ['controller' => 'Contratos', 'action' => 'view', $irrinterjornada->contrato->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $irrinterjornada->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $irrinterjornada->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $irrinterjornada->id], ['confirm' => __('Are you sure you want to delete # {0}?', $irrinterjornada->id)]) ?>
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
