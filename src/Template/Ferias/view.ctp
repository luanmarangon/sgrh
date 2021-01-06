<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Feria $feria
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Feria'), ['action' => 'edit', $feria->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Feria'), ['action' => 'delete', $feria->id], ['confirm' => __('Are you sure you want to delete # {0}?', $feria->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ferias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Feria'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contratos'), ['controller' => 'Contratos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contrato'), ['controller' => 'Contratos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ferias view large-9 medium-8 columns content">
    <h3><?= h($feria->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Contrato') ?></th>
            <td><?= $feria->has('contrato') ? $this->Html->link($feria->contrato->id, ['controller' => 'Contratos', 'action' => 'view', $feria->contrato->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($feria->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Aq Inicio') ?></th>
            <td><?= h($feria->aq_inicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Aq Fim') ?></th>
            <td><?= h($feria->aq_fim) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gozo Inicio') ?></th>
            <td><?= h($feria->gozo_inicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gozo Fim') ?></th>
            <td><?= h($feria->gozo_fim) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Abono Inicio') ?></th>
            <td><?= h($feria->abono_inicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Abono Fim') ?></th>
            <td><?= h($feria->abono_fim) ?></td>
        </tr>
    </table>
</div>
