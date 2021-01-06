<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Decsalario $decsalario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Decsalario'), ['action' => 'edit', $decsalario->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Decsalario'), ['action' => 'delete', $decsalario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $decsalario->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Decsalarios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Decsalario'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contratos'), ['controller' => 'Contratos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contrato'), ['controller' => 'Contratos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="decsalarios view large-9 medium-8 columns content">
    <h3><?= h($decsalario->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Contrato') ?></th>
            <td><?= $decsalario->has('contrato') ? $this->Html->link($decsalario->contrato->id, ['controller' => 'Contratos', 'action' => 'view', $decsalario->contrato->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($decsalario->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valor Primeira') ?></th>
            <td><?= $this->Number->format($decsalario->valor_primeira) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valor Segunda') ?></th>
            <td><?= $this->Number->format($decsalario->valor_segunda) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Primeira Parc') ?></th>
            <td><?= h($decsalario->primeira_parc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Segunda Parc') ?></th>
            <td><?= h($decsalario->segunda_parc) ?></td>
        </tr>
    </table>
</div>
