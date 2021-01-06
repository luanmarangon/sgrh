<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Setore $setore
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $setore->id],
                ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $setore->nome)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Setores'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Departamentos'), ['controller' => 'Departamentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Departamento'), ['controller' => 'Departamentos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="setores form large-9 medium-8 columns content">
    <?= $this->Form->create($setore) ?>
    <fieldset>
        <legend><?= __('Editar Setor') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('departamentos_id', ['options' => $departamentos]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Alterar')) ?>
    <?= $this->Form->end() ?>
</div>
