<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Irrjornadatrabalho $irrjornadatrabalho
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Irrjornadatrabalho'), ['action' => 'edit', $irrjornadatrabalho->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Irrjornadatrabalho'), ['action' => 'delete', $irrjornadatrabalho->id], ['confirm' => __('Are you sure you want to delete # {0}?', $irrjornadatrabalho->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Irrjornadatrabalhos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Irrjornadatrabalho'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contratos'), ['controller' => 'Contratos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contrato'), ['controller' => 'Contratos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="irrjornadatrabalhos view large-9 medium-8 columns content">
    <h3><?= h($irrjornadatrabalho->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Justificativa') ?></th>
            <td><?= h($irrjornadatrabalho->justificativa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contrato') ?></th>
            <td><?= $irrjornadatrabalho->has('contrato') ? $this->Html->link($irrjornadatrabalho->contrato->id, ['controller' => 'Contratos', 'action' => 'view', $irrjornadatrabalho->contrato->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($irrjornadatrabalho->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data') ?></th>
            <td><?= h($irrjornadatrabalho->data) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Inicio') ?></th>
            <td><?= h($irrjornadatrabalho->inicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Saida') ?></th>
            <td><?= h($irrjornadatrabalho->saida) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Trabalhado') ?></th>
            <td><?= h($irrjornadatrabalho->trabalhado) ?></td>
        </tr>
    </table>
</div>
