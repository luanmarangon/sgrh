<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Irrjornadatrabalho[]|\Cake\Collection\CollectionInterface $irrjornadatrabalhos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Irrjornadatrabalho'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contratos'), ['controller' => 'Contratos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contrato'), ['controller' => 'Contratos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="irrjornadatrabalhos index large-9 medium-8 columns content">
    <h3><?= __('Irrjornadatrabalhos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data') ?></th>
                <th scope="col"><?= $this->Paginator->sort('inicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('saida') ?></th>
                <th scope="col"><?= $this->Paginator->sort('trabalhado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('justificativa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contratos_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($irrjornadatrabalhos as $irrjornadatrabalho): ?>
            <tr>
                <td><?= $this->Number->format($irrjornadatrabalho->id) ?></td>
                <td><?= h($irrjornadatrabalho->data) ?></td>
                <td><?= h($irrjornadatrabalho->inicio) ?></td>
                <td><?= h($irrjornadatrabalho->saida) ?></td>
                <td><?= h($irrjornadatrabalho->trabalhado) ?></td>
                <td><?= h($irrjornadatrabalho->justificativa) ?></td>
                <td><?= $irrjornadatrabalho->has('contrato') ? $this->Html->link($irrjornadatrabalho->contrato->id, ['controller' => 'Contratos', 'action' => 'view', $irrjornadatrabalho->contrato->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $irrjornadatrabalho->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $irrjornadatrabalho->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $irrjornadatrabalho->id], ['confirm' => __('Are you sure you want to delete # {0}?', $irrjornadatrabalho->id)]) ?>
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
