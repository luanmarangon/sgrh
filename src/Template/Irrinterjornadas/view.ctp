<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Irrinterjornada $irrinterjornada
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Irrinterjornada'), ['action' => 'edit', $irrinterjornada->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Irrinterjornada'), ['action' => 'delete', $irrinterjornada->id], ['confirm' => __('Are you sure you want to delete # {0}?', $irrinterjornada->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Irrinterjornadas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Irrinterjornada'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contratos'), ['controller' => 'Contratos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contrato'), ['controller' => 'Contratos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="irrinterjornadas view large-9 medium-8 columns content">
    <h3><?= h($irrinterjornada->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Justificativa') ?></th>
            <td><?= h($irrinterjornada->justificativa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contrato') ?></th>
            <td><?= $irrinterjornada->has('contrato') ? $this->Html->link($irrinterjornada->contrato->id, ['controller' => 'Contratos', 'action' => 'view', $irrinterjornada->contrato->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($irrinterjornada->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data') ?></th>
            <td><?= h($irrinterjornada->data) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fim Exp') ?></th>
            <td><?= h($irrinterjornada->fim_exp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Inic Exp') ?></th>
            <td><?= h($irrinterjornada->inic_exp) ?></td>
        </tr>
    </table>
</div>
