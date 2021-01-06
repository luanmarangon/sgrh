<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Afastamento[]|\Cake\Collection\CollectionInterface $afastamentos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Afastamento'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contratos'), ['controller' => 'Contratos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contrato'), ['controller' => 'Contratos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="afastamentos index large-9 medium-8 columns content">
    <h3><?= __('Afastamentos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dt_inicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dt_retorno') ?></th>
                <th scope="col"><?= $this->Paginator->sort('crm') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('motivo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contratos_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($afastamentos as $afastamento): ?>
            <tr>
                <td><?= $this->Number->format($afastamento->id) ?></td>
                <td><?= h($afastamento->dt_inicio) ?></td>
                <td><?= h($afastamento->dt_retorno) ?></td>
                <td><?= h($afastamento->crm) ?></td>
                <td><?= h($afastamento->cid) ?></td>
                <td><?= h($afastamento->motivo) ?></td>
                <td><?= $afastamento->has('contrato') ? $this->Html->link($afastamento->contrato->id, ['controller' => 'Contratos', 'action' => 'view', $afastamento->contrato->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $afastamento->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $afastamento->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $afastamento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $afastamento->id)]) ?>
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
