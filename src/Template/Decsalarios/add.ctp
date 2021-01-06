<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Decsalario $decsalario
 */
$this->Form->templates( ['dateWidget' => '{{day}}{{month}}{{year}}']);
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Colaboradores'),  ['controller' => 'Funcionarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('VOLTAR '. $funcionario["nome"]),  ['controller' => 'Contratos', 'action' => 'view', $id]) ?></li>
    </ul>
</nav>
<div class="decsalarios form large-9 medium-8 columns content">
    <?= $this->Form->create($decsalario) ?>
    <fieldset>
        <legend><?= __('Cadastrar 13° Salário ' . $funcionario["nome"])  ?></legend>

        <div class="large-3 medium-4 columns">
            <?php
            echo $this->Form->control('primeira_parc', ['type' => 'text']);
            ?>
        </div>
        <div class="large-3 medium-4 columns">
            <?php
            echo $this->Form->control('valor_primeira');
            ?>
        </div>
        <div class="large-3 medium-4 columns">
            <?php
            echo $this->Form->control('segunda_parc', ['type' => 'text']);
            ?>
        </div>
        <div class="large-3 medium-4 columns">
            <?php
            echo $this->Form->control('valor_segunda');
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
$('#primeira-parc').attr('type', 'date');
$('#segunda-parc').attr('type', 'date');


});
<?php $this->Html->scriptEnd(); ?>
<?= $this->fetch('script') ?>