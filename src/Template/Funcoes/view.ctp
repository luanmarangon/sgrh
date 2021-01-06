<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Funco $funco
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Editar Função'), ['action' => 'edit', $funco->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Função'), ['action' => 'delete', $funco->id], ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $funco->nome)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Funções'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nova Função'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="funcoes view large-9 medium-8 columns content">
    <h3><?= h($funco->nome) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($funco->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($funco->id) ?></td>
        </tr>
    </table>
</div>
