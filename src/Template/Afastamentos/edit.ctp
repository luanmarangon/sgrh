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
        <li><?= $this->Html->link(__('VOLTAR ' . $funcionario["nome"]),  ['controller' => 'Contratos', 'action' => 'view', $id_contrato]) ?></li>

    </ul>
</nav>
<div class="afastamentos form large-9 medium-8 columns content">
    <?= $this->Form->create($afastamento) ?>
    <fieldset>
        <legend><?= __('Novo Afastamento do colaborador '.$funcionario["nome"]) ?></legend>
        <div class="large-4 medium-4 columns">
            <?php
            $dtinicio = substr($afastamento->dt_inicio, -4)."-".substr($afastamento->dt_inicio, 3, 2)."-".substr($afastamento->dt_inicio, 0, 2);
            echo $this->Form->control('dt_inicio', ['type' => 'text', 'label' => 'Data de Início', 'value' => $dtinicio]);
            ?>
        </div>
        <div class="large-4 medium-4 columns">
            <?php
            $dtretorno = substr($afastamento->dt_retorno, -4)."-".substr($afastamento->dt_retorno, 3, 2)."-".substr($afastamento->dt_retorno, 0, 2);
            echo $this->Form->control('dt_retorno', ['type' => 'text', 'label' => 'Data de Retorno', 'value' => $dtretorno]);
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
            echo $this->Form->control('contratos_id', ['type' => 'hidden', 'value' => $id_contrato]);
            ?>
    </fieldset>
    <?= $this->Form->button(__('Alterar')) ?>
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