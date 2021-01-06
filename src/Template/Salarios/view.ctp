<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Salario $salario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Salario'), ['action' => 'edit', $salario->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Salario'), ['action' => 'delete', $salario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $salario->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Salarios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Salario'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contratos'), ['controller' => 'Contratos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contrato'), ['controller' => 'Contratos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="salarios view large-9 medium-8 columns content">
    <h3><?= h($salario->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Justificativa') ?></th>
            <td><?= h($salario->justificativa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Extenso') ?></th>
            <td><?= h($salario->extenso) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Formapgto') ?></th>
            <td><?= h($salario->formapgto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contrato') ?></th>
            <td><?= $salario->has('contrato') ? $this->Html->link($salario->contrato->id, ['controller' => 'Contratos', 'action' => 'view', $salario->contrato->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($salario->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Salario') ?></th>
            <td><?= $this->Number->format($salario->salario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data') ?></th>
            <td><?= h($salario->data) ?></td>
        </tr>
    </table>
</div>
