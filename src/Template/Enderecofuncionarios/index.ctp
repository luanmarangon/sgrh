<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Enderecofuncionario[]|\Cake\Collection\CollectionInterface $enderecofuncionarios
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Novo Endereço'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Funcionários'), ['controller' => 'Funcionarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Funcionário'), ['controller' => 'Funcionarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="enderecofuncionarios index large-9 medium-8 columns content">
    <h3><?= __('Enderecofuncionarios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('funcionarios_id') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('id') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('logradouro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('complemento') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('bairro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cep') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('uf_cidade') ?></th>
                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($enderecofuncionarios as $enderecofuncionario): ?>
            <tr>
                <td><?= $enderecofuncionario->has('funcionario') ? $this->Html->link($enderecofuncionario->funcionario->id, ['controller' => 'Funcionarios', 'action' => 'view', $enderecofuncionario->funcionario->id]) : '' ?></td>
                <!-- <td><?= $this->Number->format($enderecofuncionario->id) ?></td> -->
                <td><?= h($enderecofuncionario->logradouro) ?></td>
                <td><?= h($enderecofuncionario->numero) ?></td>
                <!-- <td><?= h($enderecofuncionario->complemento) ?></td> -->
                <td><?= h($enderecofuncionario->bairro) ?></td>
                <td><?= h($enderecofuncionario->cep) ?></td>
                <td><?= h($enderecofuncionario->cidade) ?></td>
                <td><?= h($enderecofuncionario->uf_cidade) ?></td>
                
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $enderecofuncionario->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $enderecofuncionario->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $enderecofuncionario->id], ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $enderecofuncionario->id)]) ?>
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
