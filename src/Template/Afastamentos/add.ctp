<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Afastamento $afastamento
 */
$this->Form->templates(['dateWidget' => '{{day}}{{month}}{{year}}']);
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Colaboradores'),  ['controller' => 'Funcionarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('VOLTAR ' . $funcionario["nome"]),  ['controller' => 'Contratos', 'action' => 'view', $id]) ?></li>
    </ul>
</nav>
<div class="afastamentos form large-9 medium-8 columns content">
    <?= $this->Form->create($afastamento) ?>
    <fieldset>
        <legend><?= __('Novo Afastamento do colaborador ' . $funcionario["nome"]) ?></legend>
        <div class="large-4 medium-4 columns">
            <?php
            echo $this->Form->control('dt_inicio', ['type' => 'text', 'label' => 'Data de Início']);
            ?>
        </div>
        <div class="large-4 medium-4 columns">
            <?php
            echo $this->Form->control('dt_retorno', ['type' => 'text', 'label' => 'Data de Retorno']);
            ?>
        </div>
        <div class="large-4 medium-4 columns">
            <?php
            echo $this->Form->control('crm', ['label' => 'C.R.M. Médico']);
            ?>
        </div>
        <div class="large-4 medium-4 columns">
            <?php
            echo $this->Form->control('cid', ['label' => 'C.I.D.']);
            ?>
        </div>
        <div class="large-8 medium-4 columns">
            <?php
            echo $this->Form->control('motivo', ['label' => 'Motivo do Afastamento']);
            ?>
        </div>
        <div class="large-5 medium-4 columns">
            <?php
            echo $this->Form->control('contratos_id', ['type' => 'hidden', 'value' => $id]);
            ?>
    </fieldset>
    <?= $this->Form->button(__('Cadastrar')) ?>
    <?= $this->Form->end() ?>
</div>
<?= $this->Html->script('https://code.jquery.com/jquery-3.5.1.js') ?>
<?php $this->Html->scriptStart(['block' => true]); ?>
$( document ).ready(function() {
    $('#dt-inicio').attr('type', 'date');
    $('#dt-retorno').attr('type', 'date');
});
<?php $this->Html->scriptEnd(); ?>
<?= $this->fetch('script') ?>