<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Departamento $departamento
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Editar Departamento'), ['action' => 'edit', $departamento->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Departamento'), ['action' => 'delete', $departamento->id], ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $departamento->nome)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Departamentos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Departamento'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="departamentos view large-9 medium-8 columns content">
    <h3><?= h($departamento->nome) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($departamento->nome) ?></td>
        </tr>
        <!-- <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($departamento->id) ?></td>
        </tr> -->
    </table>
</div>
