<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Escala[]|\Cake\Collection\CollectionInterface $escalas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Listar Colaboradores'), ['controller' => 'Funcionarios', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="escalas index large-9 medium-8 columns content">
    <h3><?= __('Escalas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!-- <th scope="col"><?= $this->Paginator->sort('id') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('data', ['label' => 'Data']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('inicio', ['label' => 'Início do Expediente']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('saida', ['label' => 'Saída do Almoço']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('retorno', ['label' => 'Retorno do Almoço']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('fim', ['label' => 'Fim de Expediente']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('contratos_id', ['label' => 'Matrícula']) ?></th>
                <!-- <th scope="col" class="actions"><?= __('Ações') ?></th> -->
            </tr>
        </thead>
        <tbody>
            <?php foreach ($escalas as $escala) : ?>
                <tr>
                    <!-- <td><?= $this->Number->format($escala->id) ?></td> -->
                    <td><?= h($escala->data) ?></td>
                    <td><?= setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8');
                        date_default_timezone_set('America/Sao_Paulo');
                        echo strftime('%H:%M:%S', strtotime(date_format($escala->inicio, 'Y-m-d H:i:s'))); ?></td>
                    <td><?= setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8');
                        date_default_timezone_set('America/Sao_Paulo');
                        echo strftime('%H:%M:%S', strtotime(date_format($escala->saida, 'Y-m-d H:i:s')));  ?></td>
                    <td><?= setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8');
                        date_default_timezone_set('America/Sao_Paulo');
                        echo strftime('%H:%M:%S', strtotime(date_format($escala->retorno, 'Y-m-d H:i:s')));  ?></td>
                    <td><?= setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8');
                        date_default_timezone_set('America/Sao_Paulo');
                        echo strftime('%H:%M:%S', strtotime(date_format($escala->fim, 'Y-m-d H:i:s')));  ?></td>
                    <td><?= $escala->has('contrato') ? $this->Html->link($escala->contrato->matricula, ['controller' => 'Contratos', 'action' => 'view', $escala->contrato->id]) : '' ?></td>
                    <!-- <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $escala->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $escala->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $escala->id], ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $escala->id)]) ?>
                </td> -->
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