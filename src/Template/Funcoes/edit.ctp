<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Funco $funco
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $funco->id],
                ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $funco->nome)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Funções'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="funcoes form large-9 medium-8 columns content">
    <?= $this->Form->create($funco) ?>
    <fieldset>
        <legend><?= __('Editar Função') ?></legend>
        <?php
            echo $this->Form->control('nome');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Alterar')) ?>
    <?= $this->Form->end() ?>
</div>
