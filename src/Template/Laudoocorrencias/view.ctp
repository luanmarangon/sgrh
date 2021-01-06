<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Laudoocorrencia $laudoocorrencia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Laudoocorrencia'), ['action' => 'edit', $laudoocorrencia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Laudoocorrencia'), ['action' => 'delete', $laudoocorrencia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $laudoocorrencia->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Laudoocorrencias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Laudoocorrencia'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contratos'), ['controller' => 'Contratos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contrato'), ['controller' => 'Contratos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="laudoocorrencias view large-9 medium-8 columns content">
    <h3><?= h($laudoocorrencia->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ocorrencia') ?></th>
            <td><?= h($laudoocorrencia->ocorrencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tp Acao') ?></th>
            <td><?= h($laudoocorrencia->tp_acao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Incidencia') ?></th>
            <td><?= h($laudoocorrencia->incidencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Onde Ocorreu') ?></th>
            <td><?= h($laudoocorrencia->onde_ocorreu) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Oque Ocorreu') ?></th>
            <td><?= h($laudoocorrencia->oque_ocorreu) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Relator') ?></th>
            <td><?= h($laudoocorrencia->relator) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pq Ocorreu') ?></th>
            <td><?= h($laudoocorrencia->pq_ocorreu) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Providencias') ?></th>
            <td><?= h($laudoocorrencia->providencias) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Possui Anexo') ?></th>
            <td><?= h($laudoocorrencia->possui_anexo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Anexo') ?></th>
            <td><?= h($laudoocorrencia->anexo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rh Parecer') ?></th>
            <td><?= h($laudoocorrencia->rh_parecer) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ger Parecer') ?></th>
            <td><?= h($laudoocorrencia->ger_parecer) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contrato') ?></th>
            <td><?= $laudoocorrencia->has('contrato') ? $this->Html->link($laudoocorrencia->contrato->id, ['controller' => 'Contratos', 'action' => 'view', $laudoocorrencia->contrato->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($laudoocorrencia->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quem Verificou') ?></th>
            <td><?= $this->Number->format($laudoocorrencia->quem_verificou) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Supervisor') ?></th>
            <td><?= $this->Number->format($laudoocorrencia->supervisor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rh Supervisor') ?></th>
            <td><?= $this->Number->format($laudoocorrencia->rh_supervisor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gerente') ?></th>
            <td><?= $this->Number->format($laudoocorrencia->gerente) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dt Laudo') ?></th>
            <td><?= h($laudoocorrencia->dt_laudo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hora') ?></th>
            <td><?= h($laudoocorrencia->hora) ?></td>
        </tr>
    </table>
</div>
