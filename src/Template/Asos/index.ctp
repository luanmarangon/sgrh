<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aso[]|\Cake\Collection\CollectionInterface $asos
 */
$this->Form->templates( ['dateWidget' => '{{day}}{{month}}{{year}}{{hour}}{{minute}}']);
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Novo Exame'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Funcionários'), ['controller' => 'Funcionarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Funcionário'), ['controller' => 'Funcionarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="asos index large-9 medium-8 columns content">
    <h3><?= __('Atestado de Saúde Ocupacionais - ASOS') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!-- <th scope="col"><?= $this->Paginator->sort('id') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('funcionarios_id', ['label' => 'Colaboradores']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('dt_exame', ['label' => 'Data do Exame']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('exame', ['label' => 'Tipo de Exame']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao', ['label' => 'Descrição do Exame']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('proximo_exame', ['label' => 'Próximo Exame']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('anexo') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($asos as $aso): ?>
            <tr>
                <!-- <td><?= $this->Number->format($aso->id) ?></td> -->
                <td><?= $aso->has('funcionario') ? $this->Html->link($aso->funcionario->nome, ['controller' => 'Funcionarios', 'action' => 'view', $aso->funcionario->id]) : '' ?></td>
                <td><?= h($aso->dt_exame) ?></td>
                <td><?= h($aso->exame) ?></td>
                <td><?= h($aso->descricao) ?></td>
                <td><?= h($aso->proximo_exame) ?></td>
                <td><?= h($aso->anexo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $aso->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $aso->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $aso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aso->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Proximo') . ' >') ?>
            <?= $this->Paginator->last(__('Último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} registros(s) de {{count}}')]) ?></p>
    </div>
</div>
