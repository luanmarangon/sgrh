<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Setore[]|\Cake\Collection\CollectionInterface $setores
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Novo Setor'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Departamentos'), ['controller' => 'Departamentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Departamento'), ['controller' => 'Departamentos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="setores index large-9 medium-8 columns content">
    <h3><?= __('Setores') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!-- <th scope="col"><?= $this->Paginator->sort('id') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('departamentos_id') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($setores as $setore): ?>
            <tr>
                <!-- <td><?= $this->Number->format($setore->id) ?></td> -->
                <td><?= h($setore->nome) ?></td>
                <td><?= $setore->has('departamento') ? $this->Html->link($setore->departamento->nome, ['controller' => 'Departamentos', 'action' => 'view', $setore->departamento->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $setore->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $setore->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $setore->id], ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $setore->nome)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Proximo') . ' >') ?>
            <?= $this->Paginator->last(__('Último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} registros(s) de {{count}}')]) ?></p>
    </div>
	
</div>
