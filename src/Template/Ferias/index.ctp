<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Feria[]|\Cake\Collection\CollectionInterface $ferias
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Feria'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contratos'), ['controller' => 'Contratos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contrato'), ['controller' => 'Contratos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ferias index large-9 medium-8 columns content">
    <h3><?= __('Ferias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('aq_inicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('aq_fim') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gozo_inicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gozo_fim') ?></th>
                <th scope="col"><?= $this->Paginator->sort('abono_inicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('abono_fim') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contratos_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ferias as $feria): ?>
            <tr>
                <td><?= $this->Number->format($feria->id) ?></td>
                <td><?= h($feria->aq_inicio) ?></td>
                <td><?= h($feria->aq_fim) ?></td>
                <td><?= h($feria->gozo_inicio) ?></td>
                <td><?= h($feria->gozo_fim) ?></td>
                <td><?= h($feria->abono_inicio) ?></td>
                <td><?= h($feria->abono_fim) ?></td>
                <td><?= $feria->has('contrato') ? $this->Html->link($feria->contrato->id, ['controller' => 'Contratos', 'action' => 'view', $feria->contrato->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $feria->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $feria->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $feria->id], ['confirm' => __('Are you sure you want to delete # {0}?', $feria->id)]) ?>
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
