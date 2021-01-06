<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Irrintervalorefeico[]|\Cake\Collection\CollectionInterface $irrintervalorefeicoes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Irrintervalorefeico'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contratos'), ['controller' => 'Contratos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contrato'), ['controller' => 'Contratos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="irrintervalorefeicoes index large-9 medium-8 columns content">
    <h3><?= __('Irrintervalorefeicoes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data') ?></th>
                <th scope="col"><?= $this->Paginator->sort('saida') ?></th>
                <th scope="col"><?= $this->Paginator->sort('retorno') ?></th>
                <th scope="col"><?= $this->Paginator->sort('intervalo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('justificativa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contratos_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($irrintervalorefeicoes as $irrintervalorefeico): ?>
            <tr>
                <td><?= $this->Number->format($irrintervalorefeico->id) ?></td>
                <td><?= h($irrintervalorefeico->data) ?></td>
                <td><?= h($irrintervalorefeico->saida) ?></td>
                <td><?= h($irrintervalorefeico->retorno) ?></td>
                <td><?= h($irrintervalorefeico->intervalo) ?></td>
                <td><?= h($irrintervalorefeico->justificativa) ?></td>
                <td><?= $irrintervalorefeico->has('contrato') ? $this->Html->link($irrintervalorefeico->contrato->id, ['controller' => 'Contratos', 'action' => 'view', $irrintervalorefeico->contrato->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $irrintervalorefeico->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $irrintervalorefeico->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $irrintervalorefeico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $irrintervalorefeico->id)]) ?>
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
