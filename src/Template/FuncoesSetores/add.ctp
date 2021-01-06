<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FuncoesSetore $funcoesSetore
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Colaboradores'),  ['controller' => 'Funcionarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('VOLTAR ' . $funcionario["nome"]),  ['controller' => 'Contratos', 'action' => 'view', $id]) ?></li>
    </ul>
</nav>
<div class="funcoesSetores form large-9 medium-8 columns content">
    <?= $this->Form->create($funcoesSetore) ?>
    <fieldset>
        <legend><?= __('Mundaça de Função/Setor do colaborador ' . $funcionario["nome"]) ?></legend>
        <?php
        echo $this->Form->control('funcoes_id', ['options' => $funcoes, 'label' => 'Função']);
        echo $this->Form->control('setores_id', ['options' => $setores, 'label' => 'Setor']);
        echo $this->Form->control('contratos_id', ['type' => 'hidden', 'value' => $id]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Cadastrar')) ?>
    <?= $this->Form->end() ?>
</div>