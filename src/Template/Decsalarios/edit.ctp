<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Decsalario $decsalario
 */
// $this->Form->templates(['dateWidget' => '{{day}}{{month}}{{year}}']);
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Colaboradores'),  ['controller' => 'Funcionarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('VOLTAR ' . $funcionario["nome"]),  ['controller' => 'Contratos', 'action' => 'view', $id_contrato]) ?></li>
    </ul>
</nav>
<div class="decsalarios form large-9 medium-8 columns content">
    <?= $this->Form->create($decsalario) ?>
    <fieldset>
        <legend><?= __('Alterar 13° Salário') ?></legend>

        <div class="large-3 medium-4 columns">
            <?php
            $primeira = substr($decsalario->primeira_parc, -4)."-".substr($decsalario->primeira_parc, 3, 2)."-".substr($decsalario->primeira_parc, 0, 2);
            echo $this->Form->control('primeira_parc', ['type' => 'text', 'label' => 'Primeira Parcela', 'value' => $primeira]);
            ?>
        </div>
        <div class="large-3 medium-4 columns">
            <?php
            echo $this->Form->control('valor_primeira', ['label' => 'Valor']);
            ?>
        </div>
        <div class="large-3 medium-4 columns">
            <?php
            $segunda = substr($decsalario->segunda_parc, -4)."-".substr($decsalario->segunda_parc, 3, 2)."-".substr($decsalario->segunda_parc, 0, 2);
            echo $this->Form->control('segunda_parc', ['type' => 'text', 'label' => 'Segunda Parcela', 'value' => $segunda]);
            ?>
        </div>
        <div class="large-3 medium-4 columns">
            <?php
            echo $this->Form->control('valor_segunda', ['label' => 'Valor']);
            ?>
        </div>
        <div class="large-5 medium-4 columns">
            <?php
            echo $this->Form->control('contratos_id', ['type' => 'hidden', 'value' => $id_contrato]);
            ?>
        </div>
    </fieldset>
    <?= $this->Form->button(__('Alterar')) ?>
    <?= $this->Form->end() ?>
</div>
<?= $this->Html->script('https://code.jquery.com/jquery-3.5.1.js') ?>
<?php $this->Html->scriptStart(['block' => true]); ?>
$( document ).ready(function() {
$('#primeira-parc').attr('type', 'date');
$('#segunda-parc').attr('type', 'date');


});
<?php $this->Html->scriptEnd(); ?>
<?= $this->fetch('script') ?>