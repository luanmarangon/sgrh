<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contatofuncionario[]|\Cake\Collection\CollectionInterface $contatofuncionarios
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Contatofuncionario'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Funcionarios'), ['controller' => 'Funcionarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Funcionario'), ['controller' => 'Funcionarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contatofuncionarios index large-9 medium-8 columns content">
    <h3><?= __('Contatofuncionarios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('funcionarios_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contatofuncionarios as $contatofuncionario): ?>
            <tr>
                <td><?= $this->Number->format($contatofuncionario->id) ?></td>
                <td><?= h($contatofuncionario->telefone) ?></td>
                <td><?= $contatofuncionario->has('funcionario') ? $this->Html->link($contatofuncionario->funcionario->id, ['controller' => 'Funcionarios', 'action' => 'view', $contatofuncionario->funcionario->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $contatofuncionario->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contatofuncionario->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contatofuncionario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contatofuncionario->id)]) ?>
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
