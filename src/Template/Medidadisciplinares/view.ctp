<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Medidadisciplinare $medidadisciplinare
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Medidadisciplinare'), ['action' => 'edit', $medidadisciplinare->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Medidadisciplinare'), ['action' => 'delete', $medidadisciplinare->id], ['confirm' => __('Are you sure you want to delete # {0}?', $medidadisciplinare->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Medidadisciplinares'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Medidadisciplinare'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contratos'), ['controller' => 'Contratos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contrato'), ['controller' => 'Contratos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="medidadisciplinares view large-9 medium-8 columns content">
    <h3><?= h($medidadisciplinare->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Observacao') ?></th>
            <td><?= h($medidadisciplinare->observacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contrato') ?></th>
            <td><?= $medidadisciplinare->has('contrato') ? $this->Html->link($medidadisciplinare->contrato->id, ['controller' => 'Contratos', 'action' => 'view', $medidadisciplinare->contrato->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($medidadisciplinare->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Advertencia') ?></h4>
        <?= $this->Text->autoParagraph(h($medidadisciplinare->advertencia)); ?>
    </div>
</div>
