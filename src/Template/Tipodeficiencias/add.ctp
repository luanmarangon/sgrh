<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipodeficiencia $tipodeficiencia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Listar Deficiências'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tipodeficiencias form large-9 medium-8 columns content">
    <?= $this->Form->create($tipodeficiencia) ?>
    <fieldset>
        <legend><?= __('Adicionar uma Nova Deficiência') ?></legend>
        <?php
            echo $this->Form->control('deficiencia', ['label' => 'Deficiência']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Cadastrar')) ?>
    <?= $this->Form->end() ?>
</div>
