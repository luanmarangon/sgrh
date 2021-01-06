<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Afastamento $afastamento
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Afastamento'), ['action' => 'edit', $afastamento->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Afastamento'), ['action' => 'delete', $afastamento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $afastamento->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Afastamentos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Afastamento'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contratos'), ['controller' => 'Contratos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contrato'), ['controller' => 'Contratos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="afastamentos view large-9 medium-8 columns content">
    <h3><?= h($afastamento->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Crm') ?></th>
            <td><?= h($afastamento->crm) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cid') ?></th>
            <td><?= h($afastamento->cid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Motivo') ?></th>
            <td><?= h($afastamento->motivo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contrato') ?></th>
            <td><?= $afastamento->has('contrato') ? $this->Html->link($afastamento->contrato->id, ['controller' => 'Contratos', 'action' => 'view', $afastamento->contrato->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($afastamento->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dt Inicio') ?></th>
            <td><?= h($afastamento->dt_inicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dt Retorno') ?></th>
            <td><?= h($afastamento->dt_retorno) ?></td>
        </tr>
    </table>
</div>
