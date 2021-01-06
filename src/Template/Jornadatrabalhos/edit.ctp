<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Jornadatrabalho $jornadatrabalho
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $jornadatrabalho->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $jornadatrabalho->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Jornadatrabalhos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="jornadatrabalhos form large-9 medium-8 columns content">
    <?= $this->Form->create($jornadatrabalho) ?>
    <fieldset>
        <legend><?= __('Edit Jornadatrabalho') ?></legend>
        <?php
            echo $this->Form->control('descricao');
            echo $this->Form->control('inicio', ['empty' => true]);
            echo $this->Form->control('fim', ['empty' => true]);
            echo $this->Form->control('almoco', ['empty' => true]);
            echo $this->Form->control('descanco');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
