<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dadosbancario $dadosbancario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dadosbancario'), ['action' => 'edit', $dadosbancario->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dadosbancario'), ['action' => 'delete', $dadosbancario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dadosbancario->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Dadosbancarios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dadosbancario'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Funcionarios'), ['controller' => 'Funcionarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Funcionario'), ['controller' => 'Funcionarios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dadosbancarios view large-9 medium-8 columns content">
    <h3><?= h($dadosbancario->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Banco') ?></th>
            <td><?= h($dadosbancario->banco) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo Conta') ?></th>
            <td><?= h($dadosbancario->tipo_conta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Agencia') ?></th>
            <td><?= h($dadosbancario->agencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Conta') ?></th>
            <td><?= h($dadosbancario->conta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= h($dadosbancario->ativo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Funcionario') ?></th>
            <td><?= $dadosbancario->has('funcionario') ? $this->Html->link($dadosbancario->funcionario->id, ['controller' => 'Funcionarios', 'action' => 'view', $dadosbancario->funcionario->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($dadosbancario->id) ?></td>
        </tr>
    </table>
</div>
