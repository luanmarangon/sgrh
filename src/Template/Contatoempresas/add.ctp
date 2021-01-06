<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contatoempresa $contatoempresa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Listar Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="contatoempresas form large-9 medium-8 columns content">
    <?= $this->Form->create($contatoempresa) ?>
    <fieldset>
        <legend><?= __('Novo Contato da Empresa') ?></legend>
        <div class="large-3 medium-4 columns">
            <?php
            echo $this->Form->control('telefone');
            ?>
        </div>
        <div class="large-3 medium-4 columns">
            <?php
            echo $this->Form->control('responsavel');
            ?>
        </div>
        <div class="large-5 medium-4 columns">
            <?php
            echo $this->Form->control('email');
            ?>
        </div>
        <div class="large-2 medium-4 columns">
            <?php
            echo $this->Form->control('ramal');
            ?>
        </div>
        <div class="large-3 medium-4 columns">
            <?php
            echo $this->Form->control('celular');
            ?>
        </div>
        <div class="large-4 medium-4 columns">
            <?php
            echo $this->Form->control('empresa_id', ['options' => $empresas, 'default' => $id, 'disabled' => true]);
            ?>
        </div>
        <div class="large-3 medium-4 columns">
            <?= $this->Form->button(__('Salvar')) ?>
        </div>
    </fieldset>

    <?= $this->Form->end() ?>
</div>