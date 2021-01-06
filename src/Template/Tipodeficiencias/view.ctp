<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipodeficiencia $tipodeficiencia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Editar Deficiência'), ['action' => 'edit', $tipodeficiencia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Deficiência'), ['action' => 'delete', $tipodeficiencia->id], ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $tipodeficiencia->deficiencia)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Deficiências'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nova Deficiência'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tipodeficiencias view large-9 medium-8 columns content">
    <h3><?= h($tipodeficiencia->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Deficiência') ?></th>
            <td><?= h($tipodeficiencia->deficiencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tipodeficiencia->id) ?></td>
        </tr>
    </table>
</div>
