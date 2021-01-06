<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipodeficiencia[]|\Cake\Collection\CollectionInterface $tipodeficiencias
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Nova Deficiência'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tipodeficiencias index large-9 medium-8 columns content">
    <h3><?= __('Deficiências') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!-- <th scope="col"><?= $this->Paginator->sort('id') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('deficiencia', ['label' => 'Deficiência']) ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tipodeficiencias as $tipodeficiencia): ?>
            <tr>
                <!-- <td><?= $this->Number->format($tipodeficiencia->id) ?></td> -->
                <td><?= h($tipodeficiencia->deficiencia) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $tipodeficiencia->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $tipodeficiencia->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $tipodeficiencia->id], ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $tipodeficiencia->deficiencia)]) ?>
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
