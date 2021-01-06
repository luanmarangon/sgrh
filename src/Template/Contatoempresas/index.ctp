<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contatoempresa[]|\Cake\Collection\CollectionInterface $contatoempresas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Contatoempresa'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contatoempresas index large-9 medium-8 columns content">
    <h3><?= __('Contatoempresas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('responsavel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ramal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('celular') ?></th>
                <th scope="col"><?= $this->Paginator->sort('empresa_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contatoempresas as $contatoempresa): ?>
            <tr>
                <td><?= $this->Number->format($contatoempresa->id) ?></td>
                <td><?= h($contatoempresa->telefone) ?></td>
                <td><?= h($contatoempresa->responsavel) ?></td>
                <td><?= h($contatoempresa->email) ?></td>
                <td><?= h($contatoempresa->ramal) ?></td>
                <td><?= h($contatoempresa->celular) ?></td>
                <td><?= $contatoempresa->has('empresa') ? $this->Html->link($contatoempresa->empresa->rzsocial, ['controller' => 'Empresas', 'action' => 'view', $contatoempresa->empresa->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $contatoempresa->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contatoempresa->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contatoempresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contatoempresa->id)]) ?>
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
