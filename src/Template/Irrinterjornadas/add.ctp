<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Irrinterjornada $irrinterjornada
 */
// $this->Form->templates( ['dateWidget' => '{{day}}{{month}}{{year}}']);
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
<ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Colaboradores'),  ['controller' => 'Funcionarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('VOLTAR ' . $funcionario["nome"]),  ['controller' => 'Contratos', 'action' => 'view', $id]) ?></li>
    </ul>
</nav>
<div class="irrinterjornadas form large-9 medium-8 columns content">
    <?= $this->Form->create($irrinterjornada) ?>
    <fieldset>
        <legend><?= __('Adicionar Irregularidade Interjornadas '. $funcionario['nome']) ?></legend>
        <div class="large-3 medium-4 columns">
            <?php
            echo $this->Form->control('data', ['type' => 'text']);
            ?>
        </div>
        <div class="large-2 medium-4 columns">
            <?php
            echo $this->Form->control('fim_exp', ['type' => 'text']);
            ?>
        </div>
        <div class="large-2 medium-4 columns">
            <?php
            echo $this->Form->control('inic_exp', ['type' => 'text']);
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
    $('#fim-exp').attr('type', 'time');
    $('#inic-exp').attr('type', 'time');
});
<?php $this->Html->scriptEnd(); ?>
<?= $this->fetch('script') ?>