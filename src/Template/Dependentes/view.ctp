<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dependente $dependente
 */
$this->Form->templates( ['dateWidget' => '{{day}}{{month}}{{year}}']);
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Editar Dependente'), ['action' => 'edit', $dependente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Dependente'), ['action' => 'delete', $dependente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dependente->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Dependentes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Dependente'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar Colaboradores'), ['controller' => 'Funcionarios', 'action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="dependentes view large-9 medium-8 columns content">
    <h3><?= h($dependente->nome) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($dependente->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data de Nascimento') ?></th>
            <td><?= h($dependente->nascimento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Parentesco') ?></th>
            <td><?= h($dependente->parentesco) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('C.P.F.') ?></th>
            <td><?= h($dependente->cpf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Naturalidade') ?></th>
            <td><?= h($dependente->naturalidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('U.F. da Naturalidade') ?></th>
            <td><?= h($dependente->uf_naturalidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nacionalidade') ?></th>
            <td><?= h($dependente->nacionalidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nascido Vivo') ?></th>
            <td><?= h($dependente->nascido_vivo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mãe do Dependente') ?></th>
            <td><?= h($dependente->mae) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Colaborador') ?></th>
            <td><?= $dependente->has('funcionario') ? $this->Html->link($dependente->funcionario->nome, ['controller' => 'Funcionarios', 'action' => 'view', $dependente->funcionario->id]) : '' ?></td>
        </tr>
        
    </table>
</div>
