<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Escala $escala
 */
$this->Form->templates( ['dateWidget' => '{{day}}{{month}}{{year}}{{hour}}{{minute}}']);
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Editar Escala'), ['action' => 'edit', $escala->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Escala'), ['action' => 'delete', $escala->id], ['confirm' => __('Are you sure you want to delete # {0}?', $escala->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Escalas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nova Escala'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar Contratos'), ['controller' => 'Contratos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Contrato'), ['controller' => 'Contratos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="escalas view large-9 medium-8 columns content">
    <h3><?= h($escala->contrato->funcionarios_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Matrícula') ?></th>
            <td><?= $escala->has('contrato') ? $this->Html->link($escala->contrato->matricula, ['controller' => 'Contratos', 'action' => 'view', $escala->contrato->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data') ?></th>
            <td><?= h($escala->data) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Início do Expediente') ?></th>
            <td><?= h($escala->inicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Saída do Almoço') ?></th>
            <td><?= h($escala->saida) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Retorno do Almoço') ?></th>
            <td><?= h($escala->retorno) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fim do Expediente') ?></th>
            <td><?= h($escala->fim) ?></td>
        </tr>
    </table>
</div>
