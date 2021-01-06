<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Atestado $atestado
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Atestado'), ['action' => 'edit', $atestado->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Atestado'), ['action' => 'delete', $atestado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $atestado->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Atestados'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Atestado'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contratos'), ['controller' => 'Contratos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contrato'), ['controller' => 'Contratos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="atestados view large-9 medium-8 columns content">
    <h3><?= h($atestado->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Justificativa') ?></th>
            <td><?= h($atestado->justificativa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Medico') ?></th>
            <td><?= h($atestado->medico) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cid') ?></th>
            <td><?= h($atestado->cid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Img') ?></th>
            <td><?= h($atestado->img) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contrato') ?></th>
            <td><?= $atestado->has('contrato') ? $this->Html->link($atestado->contrato->id, ['controller' => 'Contratos', 'action' => 'view', $atestado->contrato->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($atestado->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Afastamento') ?></th>
            <td><?= $this->Number->format($atestado->afastamento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dt Atestado') ?></th>
            <td><?= h($atestado->dt_atestado) ?></td>
        </tr>
    </table>
</div>
