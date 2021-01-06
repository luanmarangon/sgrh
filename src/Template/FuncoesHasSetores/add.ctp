<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FuncoesHasSetore $funcoesHasSetore
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Funcoes Has Setores'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Funcoes'), ['controller' => 'Funcoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Funco'), ['controller' => 'Funcoes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Setores'), ['controller' => 'Setores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Setore'), ['controller' => 'Setores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="funcoesHasSetores form large-9 medium-8 columns content">
    <?= $this->Form->create($funcoesHasSetore) ?>
    <fieldset>
        <legend><?= __('Add Funcoes Has Setore') ?></legend>
        <?php
            echo $this->Form->control('funcoes_id', ['options' => $funcoes]);
            echo $this->Form->control('setores_id', ['options' => $setores]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
