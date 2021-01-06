<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Irrintervalorefeico $irrintervalorefeico
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Irrintervalorefeico'), ['action' => 'edit', $irrintervalorefeico->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Irrintervalorefeico'), ['action' => 'delete', $irrintervalorefeico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $irrintervalorefeico->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Irrintervalorefeicoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Irrintervalorefeico'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contratos'), ['controller' => 'Contratos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contrato'), ['controller' => 'Contratos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="irrintervalorefeicoes view large-9 medium-8 columns content">
    <h3><?= h($irrintervalorefeico->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Justificativa') ?></th>
            <td><?= h($irrintervalorefeico->justificativa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contrato') ?></th>
            <td><?= $irrintervalorefeico->has('contrato') ? $this->Html->link($irrintervalorefeico->contrato->id, ['controller' => 'Contratos', 'action' => 'view', $irrintervalorefeico->contrato->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($irrintervalorefeico->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data') ?></th>
            <td><?= h($irrintervalorefeico->data) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Saida') ?></th>
            <td><?= h($irrintervalorefeico->saida) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Retorno') ?></th>
            <td><?= h($irrintervalorefeico->retorno) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Intervalo') ?></th>
            <td><?= h($irrintervalorefeico->intervalo) ?></td>
        </tr>
    </table>
</div>
