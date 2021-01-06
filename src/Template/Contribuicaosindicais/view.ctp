<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contribuicaosindicai $contribuicaosindicai
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contribuicaosindicai'), ['action' => 'edit', $contribuicaosindicai->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contribuicaosindicai'), ['action' => 'delete', $contribuicaosindicai->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contribuicaosindicai->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contribuicaosindicais'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contribuicaosindicai'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Funcionarios'), ['controller' => 'Funcionarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Funcionario'), ['controller' => 'Funcionarios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contribuicaosindicais view large-9 medium-8 columns content">
    <h3><?= h($contribuicaosindicai->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ano') ?></th>
            <td><?= h($contribuicaosindicai->ano) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sindicato') ?></th>
            <td><?= h($contribuicaosindicai->sindicato) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Funcionario') ?></th>
            <td><?= $contribuicaosindicai->has('funcionario') ? $this->Html->link($contribuicaosindicai->funcionario->id, ['controller' => 'Funcionarios', 'action' => 'view', $contribuicaosindicai->funcionario->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($contribuicaosindicai->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valor') ?></th>
            <td><?= $this->Number->format($contribuicaosindicai->valor) ?></td>
        </tr>
    </table>
</div>
