<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipodeficiencia $tipodeficiencia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $tipodeficiencia->id],
                ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $tipodeficiencia->deficiencia)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Deficiência'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tipodeficiencias form large-9 medium-8 columns content">
    <?= $this->Form->create($tipodeficiencia) ?>
    <fieldset>
        <legend><?= __('Edit Tipodeficiencia') ?></legend>
        <?php
            echo $this->Form->control('deficiencia');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Alterar')) ?>
    <?= $this->Form->end() ?>
</div>
