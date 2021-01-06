<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Setore $setore
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Editar Setor'), ['action' => 'edit', $setore->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Setor'), ['action' => 'delete', $setore->id], ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $setore->nome)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Setores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Setor'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar Departamentos'), ['controller' => 'Departamentos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Departamento'), ['controller' => 'Departamentos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="setores view large-9 medium-8 columns content">
    <h3><?= h($setore->nome) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($setore->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Departamento') ?></th>
            <td><?= $setore->has('departamento') ? $this->Html->link($setore->departamento->nome, ['controller' => 'Departamentos', 'action' => 'view', $setore->departamento->id]) : '' ?></td>
        </tr>
        <!-- <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($setore->id) ?></td>
        </tr> -->
    </table>
</div>
