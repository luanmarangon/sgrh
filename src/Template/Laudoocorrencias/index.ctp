<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Laudoocorrencia[]|\Cake\Collection\CollectionInterface $laudoocorrencias
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Laudoocorrencia'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contratos'), ['controller' => 'Contratos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contrato'), ['controller' => 'Contratos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="laudoocorrencias index large-9 medium-8 columns content">
    <h3><?= __('Laudoocorrencias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dt_laudo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hora') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ocorrencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tp_acao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('incidencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('onde_ocorreu') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quem_verificou') ?></th>
                <th scope="col"><?= $this->Paginator->sort('oque_ocorreu') ?></th>
                <th scope="col"><?= $this->Paginator->sort('relator') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pq_ocorreu') ?></th>
                <th scope="col"><?= $this->Paginator->sort('providencias') ?></th>
                <th scope="col"><?= $this->Paginator->sort('supervisor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('possui_anexo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('anexo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rh_parecer') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rh_supervisor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ger_parecer') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gerente') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contratos_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($laudoocorrencias as $laudoocorrencia): ?>
            <tr>
                <td><?= $this->Number->format($laudoocorrencia->id) ?></td>
                <td><?= h($laudoocorrencia->dt_laudo) ?></td>
                <td><?= h($laudoocorrencia->hora) ?></td>
                <td><?= h($laudoocorrencia->ocorrencia) ?></td>
                <td><?= h($laudoocorrencia->tp_acao) ?></td>
                <td><?= h($laudoocorrencia->incidencia) ?></td>
                <td><?= h($laudoocorrencia->onde_ocorreu) ?></td>
                <td><?= $this->Number->format($laudoocorrencia->quem_verificou) ?></td>
                <td><?= h($laudoocorrencia->oque_ocorreu) ?></td>
                <td><?= h($laudoocorrencia->relator) ?></td>
                <td><?= h($laudoocorrencia->pq_ocorreu) ?></td>
                <td><?= h($laudoocorrencia->providencias) ?></td>
                <td><?= $this->Number->format($laudoocorrencia->supervisor) ?></td>
                <td><?= h($laudoocorrencia->possui_anexo) ?></td>
                <td><?= h($laudoocorrencia->anexo) ?></td>
                <td><?= h($laudoocorrencia->rh_parecer) ?></td>
                <td><?= $this->Number->format($laudoocorrencia->rh_supervisor) ?></td>
                <td><?= h($laudoocorrencia->ger_parecer) ?></td>
                <td><?= $this->Number->format($laudoocorrencia->gerente) ?></td>
                <td><?= $laudoocorrencia->has('contrato') ? $this->Html->link($laudoocorrencia->contrato->id, ['controller' => 'Contratos', 'action' => 'view', $laudoocorrencia->contrato->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $laudoocorrencia->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $laudoocorrencia->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $laudoocorrencia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $laudoocorrencia->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
