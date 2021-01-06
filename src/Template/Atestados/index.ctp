<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Atestado[]|\Cake\Collection\CollectionInterface $atestados
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Atestado'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contratos'), ['controller' => 'Contratos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contrato'), ['controller' => 'Contratos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="atestados index large-9 medium-8 columns content">
    <h3><?= __('Atestados') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dt_atestado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('justificativa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('medico') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('afastamento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('img') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contratos_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($atestados as $atestado): ?>
            <tr>
                <td><?= $this->Number->format($atestado->id) ?></td>
                <td><?= h($atestado->dt_atestado) ?></td>
                <td><?= h($atestado->justificativa) ?></td>
                <td><?= h($atestado->medico) ?></td>
                <td><?= h($atestado->cid) ?></td>
                <td><?= $this->Number->format($atestado->afastamento) ?></td>
                <td><?= h($atestado->img) ?></td>
                <td><?= $atestado->has('contrato') ? $this->Html->link($atestado->contrato->id, ['controller' => 'Contratos', 'action' => 'view', $atestado->contrato->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $atestado->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $atestado->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $atestado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $atestado->id)]) ?>
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
