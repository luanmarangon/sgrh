<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dadosbancario[]|\Cake\Collection\CollectionInterface $dadosbancarios
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Dadosbancario'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Funcionarios'), ['controller' => 'Funcionarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Funcionario'), ['controller' => 'Funcionarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dadosbancarios index large-9 medium-8 columns content">
    <h3><?= __('Dadosbancarios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('banco') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo_conta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('agencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('conta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('funcionarios_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dadosbancarios as $dadosbancario): ?>
            <tr>
                <td><?= $this->Number->format($dadosbancario->id) ?></td>
                <td><?= h($dadosbancario->banco) ?></td>
                <td><?= h($dadosbancario->tipo_conta) ?></td>
                <td><?= h($dadosbancario->agencia) ?></td>
                <td><?= h($dadosbancario->conta) ?></td>
                <td><?= h($dadosbancario->ativo) ?></td>
                <td><?= $dadosbancario->has('funcionario') ? $this->Html->link($dadosbancario->funcionario->id, ['controller' => 'Funcionarios', 'action' => 'view', $dadosbancario->funcionario->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $dadosbancario->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dadosbancario->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dadosbancario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dadosbancario->id)]) ?>
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
