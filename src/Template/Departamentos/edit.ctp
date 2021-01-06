<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Departamento $departamento
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $departamento->id],
                ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $departamento->nome)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Departamentos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="departamentos form large-9 medium-8 columns content">
    <?= $this->Form->create($departamento) ?>
    <fieldset>
        <legend><?= __('Editar Departamento') ?></legend>
        <?php
            echo $this->Form->control('nome');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Alterar')) ?>
    <?= $this->Form->end() ?>
</div>
