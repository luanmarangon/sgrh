<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dependente[]|\Cake\Collection\CollectionInterface $dependentes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Novo Dependente'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Colaboradores'), ['controller' => 'Funcionarios', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="dependentes index large-9 medium-8 columns content">
    <h3><?= __('Dependentes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mae') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parentesco') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nascimento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('naturalidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('uf_naturalidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nacionalidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cpf') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nascido_vivo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('funcionarios_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dependentes as $dependente): ?>
            <tr>
                <td><?= $this->Number->format($dependente->id) ?></td>
                <td><?= h($dependente->nome) ?></td>
                <td><?= h($dependente->mae) ?></td>
                <td><?= h($dependente->parentesco) ?></td>
                <td><?= h($dependente->nascimento) ?></td>
                <td><?= h($dependente->naturalidade) ?></td>
                <td><?= h($dependente->uf_naturalidade) ?></td>
                <td><?= h($dependente->nacionalidade) ?></td>
                <td><?= h($dependente->cpf) ?></td>
                <td><?= h($dependente->nascido_vivo) ?></td>
                <td><?= $dependente->has('funcionario') ? $this->Html->link($dependente->funcionario->id, ['controller' => 'Funcionarios', 'action' => 'view', $dependente->funcionario->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $dependente->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dependente->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dependente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dependente->id)]) ?>
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
