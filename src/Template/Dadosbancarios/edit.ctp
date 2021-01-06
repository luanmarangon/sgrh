<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dadosbancario $dadosbancario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Listar Colaboradores'), ['controller' => 'Funcionarios', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="dadosbancarios form large-9 medium-8 columns content">
    <?= $this->Form->create($dadosbancario) ?>
    <fieldset>
        <legend><?= __('Alterar Dados Bancários') ?></legend>

        <div class="large-3 medium-4 columns">
            <?php
            echo $this->Form->control('banco');
            ?>
        </div>
        <div class="large-2 medium-4 columns">
            <?php
            echo $this->Form->control('tipo_conta', ['options' => ['Corrente' => 'Corrente', 'Poupança' => 'Poupança', 'Salário' => 'Salário']]);
            ?>
        </div>
        <div class="large-2 medium-4 columns">
            <?php
            echo $this->Form->control('agencia');
            ?>
        </div>
        <div class="large-3 medium-4 columns">
            <?php
            echo $this->Form->control('conta');
            ?>
        </div>
        <div class="large-2 medium-4 columns">
            <?php
            echo $this->Form->control('ativo', ['options' => ['S' => 'Sim', 'N' => 'Não'], 'label' => 'Conta está ativa?']);
            ?>
        </div>
        <div class="large-12 medium-4 columns">
            <?php
            echo $this->Form->control('funcionarios_id', ['options' => $funcionarios, 'default' => $id_funcionarios, 'disabled' => true]);

            ?>
        </div>
    </fieldset>

    <?= $this->Form->button(__('Alterar')) ?>
    <?= $this->Form->end() ?>
</div>