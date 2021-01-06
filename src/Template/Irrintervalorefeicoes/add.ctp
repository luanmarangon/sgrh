<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Irrintervalorefeico $irrintervalorefeico
 */

?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Colaboradores'),  ['controller' => 'Funcionarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('VOLTAR ' . $funcionario["nome"]),  ['controller' => 'Contratos', 'action' => 'view', $id]) ?></li>
    </ul>
</nav>
<div class="irrintervalorefeicoes form large-9 medium-8 columns content">
    <?= $this->Form->create($irrintervalorefeico) ?>
    <fieldset>
        <legend><?= __('Adicionar Intervalo de Refeição ' . $funcionario['nome']) ?></legend>
        <div class="large-4 medium-4 columns">
            <?php
            echo $this->Form->control('data', ['type' => 'text']);
            ?>
        </div>
        <div class="large-2 medium-4 columns">
            <?php
            echo $this->Form->control('saida', ['type' => 'text']);
            ?>
        </div>
        <div class="large-2 medium-4 columns">
            <?php
            echo $this->Form->control('retorno', ['type' => 'text']);
            ?>
        </div>
        <div class="large-2 medium-4 columns">
            <?php
            echo $this->Form->control('intervalo', ['type' => 'text']);
            ?>
        </div>
        <div class="large-8 medium-4 columns">
            <?php
            echo $this->Form->control('justificativa');
            ?>
        </div>
        <div class="large-5 medium-4 columns">
            <?php
            echo $this->Form->control('contratos_id', ['type' => 'hidden', 'value' => $id]);
            ?>
        </div>
    </fieldset>
    <?= $this->Form->button(__('Cadastrar')) ?>
    <?= $this->Form->end() ?>
</div>
<?= $this->Html->script('https://code.jquery.com/jquery-3.5.1.js') ?>
<?php $this->Html->scriptStart(['block' => true]); ?>
$( document ).ready(function() {
    $('#data').attr('type', 'date');
    $('#saida').attr('type', 'time');
    $('#retorno').attr('type', 'time');
    $('#intervalo').attr('type', 'time');
});
<?php $this->Html->scriptEnd(); ?>
<?= $this->fetch('script') ?>