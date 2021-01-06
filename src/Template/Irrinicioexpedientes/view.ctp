<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Irrinicioexpediente $irrinicioexpediente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Irrinicioexpediente'), ['action' => 'edit', $irrinicioexpediente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Irrinicioexpediente'), ['action' => 'delete', $irrinicioexpediente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $irrinicioexpediente->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Irrinicioexpedientes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Irrinicioexpediente'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contratos'), ['controller' => 'Contratos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contrato'), ['controller' => 'Contratos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="irrinicioexpedientes view large-9 medium-8 columns content">
    <h3><?= h($irrinicioexpediente->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Justificativa') ?></th>
            <td><?= h($irrinicioexpediente->justificativa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contrato') ?></th>
            <td><?= $irrinicioexpediente->has('contrato') ? $this->Html->link($irrinicioexpediente->contrato->id, ['controller' => 'Contratos', 'action' => 'view', $irrinicioexpediente->contrato->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($irrinicioexpediente->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data') ?></th>
            <td><?= h($irrinicioexpediente->data) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Registro') ?></th>
            <td><?= h($irrinicioexpediente->registro) ?></td>
        </tr>
    </table>
</div>
