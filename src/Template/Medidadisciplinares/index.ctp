<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Medidadisciplinare[]|\Cake\Collection\CollectionInterface $medidadisciplinares
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Medidadisciplinare'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contratos'), ['controller' => 'Contratos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contrato'), ['controller' => 'Contratos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="medidadisciplinares index large-9 medium-8 columns content">
    <h3><?= __('Medidadisciplinares') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contratos_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($medidadisciplinares as $medidadisciplinare): ?>
            <tr>
                <td><?= $this->Number->format($medidadisciplinare->id) ?></td>
                <td><?= h($medidadisciplinare->observacao) ?></td>
                <td><?= $medidadisciplinare->has('contrato') ? $this->Html->link($medidadisciplinare->contrato->id, ['controller' => 'Contratos', 'action' => 'view', $medidadisciplinare->contrato->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $medidadisciplinare->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $medidadisciplinare->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $medidadisciplinare->id], ['confirm' => __('Are you sure you want to delete # {0}?', $medidadisciplinare->id)]) ?>
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
