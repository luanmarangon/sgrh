<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contatofuncionario $contatofuncionario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Listar Colaboradores'), ['controller' => 'Funcionarios', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="contatofuncionarios form large-9 medium-8 columns content">
    <?= $this->Form->create($contatofuncionario) ?>
    <fieldset>
        <legend><?= __('Adicionar Contato') ?></legend>
        <div class="large-4 medium-4 columns">
            <?php
            echo $this->Form->control('telefone');
            ?>
        </div>
        <div class="large-12 medium-4 columns">
            <?php
            echo $this->Form->control('funcionarios_id', ['options' => $funcionarios, 'default' => $id, 'disabled' => true]);
            ?>
        </div>
    </fieldset>
    <?= $this->Form->button(__('Cadastrar')) ?>
    <?= $this->Form->end() ?>
</div>