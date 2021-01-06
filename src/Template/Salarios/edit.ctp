<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Salario $salario
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
<div class="salarios form large-9 medium-8 columns content">
    <?= $this->Form->create($salario) ?>
    <fieldset>
        <legend><?= __('Cadastrar Novo Rendimento Salarial do Colaborador ' . $funcionario["nome"]) ?></legend>
        <div class="large-4 medium-4 columns">
            <?php
            $data = substr($salario->data, -4)."-".substr($salario->data, 3, 2)."-".substr($salario->data, 0, 2);
            echo $this->Form->control('data', ['type' => "text", 'label' => 'Data', 'value ' => $data]);
            ?>
        </div>
        <div class="large-8 medium-4 columns">
            <?php
            echo $this->Form->control('justificativa', ['label' => 'Justificativa da Alteração']);
            ?>
        </div>
        <div class="large-2 medium-4 columns">
            <?php
            echo $this->Form->control('salario', ['label' => 'Valor do Salário']);
            ?>
        </div>
        <div class="large-4 medium-4 columns">
            <?php
            echo $this->Form->control('extenso', ['label' => 'Valor por Extenso']);
            ?>
        </div>
        <div class="large-3 medium-4 columns">
            <?php
            echo $this->Form->control('formapgto', ['label' => 'Forma de Pagamento']);
            ?>
        </div>
        <div class="large-3 medium-4 columns">
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
    $('#data').attr('type', 'date');
    $('#fim_exp').attr('type', 'time');
});
<?php $this->Html->scriptEnd(); ?>
<?= $this->fetch('script') ?>