<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Salario[]|\Cake\Collection\CollectionInterface $salarios
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Salario'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contratos'), ['controller' => 'Contratos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contrato'), ['controller' => 'Contratos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="salarios index large-9 medium-8 columns content">
    <h3><?= __('Salarios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data') ?></th>
                <th scope="col"><?= $this->Paginator->sort('justificativa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('salario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('extenso') ?></th>
                <th scope="col"><?= $this->Paginator->sort('formapgto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contratos_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($salarios as $salario): ?>
            <tr>
                <td><?= $this->Number->format($salario->id) ?></td>
                <td><?= h($salario->data) ?></td>
                <td><?= h($salario->justificativa) ?></td>
                <td><?= $this->Number->format($salario->salario) ?></td>
                <td><?= h($salario->extenso) ?></td>
                <td><?= h($salario->formapgto) ?></td>
                <td><?= $salario->has('contrato') ? $this->Html->link($salario->contrato->id, ['controller' => 'Contratos', 'action' => 'view', $salario->contrato->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $salario->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $salario->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $salario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $salario->id)]) ?>
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
