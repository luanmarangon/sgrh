<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Irrmarcacaoponto $irrmarcacaoponto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Irrmarcacaoponto'), ['action' => 'edit', $irrmarcacaoponto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Irrmarcacaoponto'), ['action' => 'delete', $irrmarcacaoponto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $irrmarcacaoponto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Irrmarcacaopontos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Irrmarcacaoponto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contratos'), ['controller' => 'Contratos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contrato'), ['controller' => 'Contratos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="irrmarcacaopontos view large-9 medium-8 columns content">
    <h3><?= h($irrmarcacaoponto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Motivo') ?></th>
            <td><?= h($irrmarcacaoponto->motivo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Justificativa') ?></th>
            <td><?= h($irrmarcacaoponto->justificativa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contrato') ?></th>
            <td><?= $irrmarcacaoponto->has('contrato') ? $this->Html->link($irrmarcacaoponto->contrato->id, ['controller' => 'Contratos', 'action' => 'view', $irrmarcacaoponto->contrato->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($irrmarcacaoponto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data') ?></th>
            <td><?= h($irrmarcacaoponto->data) ?></td>
        </tr>
    </table>
</div>
