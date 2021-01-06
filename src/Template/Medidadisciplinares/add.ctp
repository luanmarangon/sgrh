<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Medidadisciplinare $medidadisciplinare
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Colaboradores'),  ['controller' => 'Funcionarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('VOLTAR ' . $funcionario["nome"]),  ['controller' => 'Contratos', 'action' => 'view', $id]) ?></li>
    </ul>
</nav>
<div class="medidadisciplinares form large-9 medium-8 columns content">
    <?= $this->Form->create($medidadisciplinare) ?>
    <fieldset>
        <legend><?= __('Adicionar Medida Disciplinar ao ' . $funcionario['nome']) ?></legend>
        <div class="large-12 medium-4 columns">
            <?php
            echo $this->Form->control('advertencia', ['label' => 'Advertência']);
            ?>
        </div>
        <div class="large-12 medium-4 columns">
            <?php
            echo $this->Form->control('observacao', ['label' => 'Observações']);
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