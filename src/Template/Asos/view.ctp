<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aso $aso
 */
$this->Form->templates( ['dateWidget' => '{{day}}{{month}}{{year}}{{hour}}{{minute}}']);
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Editar Exames'), ['action' => 'edit', $aso->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Exames'), ['action' => 'delete', $aso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aso->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Exames'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Exame'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar Funcionários'), ['controller' => 'Funcionarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Funcionário'), ['controller' => 'Funcionarios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="asos view large-9 medium-8 columns content">
    <h3><?= h($aso->funcionario->nome) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Funcionario') ?></th>
            <td><?= $aso->has('funcionario') ? $this->Html->link($aso->funcionario->nome, ['controller' => 'Funcionarios', 'action' => 'view', $aso->funcionario->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data do Exame') ?></th>
            <td><?= h($aso->dt_exame) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo de Exame') ?></th>
            <td><?= h($aso->exame) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descrição/Observação') ?></th>
            <td><?= h($aso->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Próximo Exame') ?></th>
            <td><?= h($aso->proximo_exame) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Anexo') ?></th>
            <td><?= h($aso->anexo) ?></td>
        </tr>
    </table>
</div>
