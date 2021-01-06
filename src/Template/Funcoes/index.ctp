<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Funco[]|\Cake\Collection\CollectionInterface $funcoes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Nova Função'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="funcoes index large-9 medium-8 columns content">
    <h3><?= __('Funções') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!-- <th scope="col"><?= $this->Paginator->sort('id') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($funcoes as $funco): ?>
            <tr>
                <!-- <td><?= $this->Number->format($funco->id) ?></td> -->
                <td><?= h($funco->nome) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $funco->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $funco->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $funco->id], ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $funco->nome)]) ?>
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
