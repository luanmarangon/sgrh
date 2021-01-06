<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contribuicaosindicai $contribuicaosindicai
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Listar Colaboradores'), ['controller' => 'Funcionarios', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="contribuicaosindicais form large-9 medium-8 columns content">
    <?= $this->Form->create($contribuicaosindicai) ?>
    <fieldset>
        <legend><?= __('Alterar Contribuição Sindical ao Colaborador') ?></legend>
        <div class="large-4 medium-4 columns">
            <?php
            echo $this->Form->control('ano');
            ?>
        </div>
        <div class="large-4 medium-4 columns">
            <?php
            echo $this->Form->control('valor');
            ?>
        </div>
        <div class="large-4 medium-4 columns">
            <?php
            echo $this->Form->control('sindicato');
            ?>
        </div>
        <div class="large-12 medium-4 columns">
            <?php
            echo $this->Form->control('funcionarios_id', ['options' => $funcionarios, 'default' => $id_funcionarios, 'disabled' => true]);
            ?>
        </div>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>