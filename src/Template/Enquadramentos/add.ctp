<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Enquadramento $enquadramento
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Enquadramentos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="enquadramentos form large-9 medium-8 columns content">
    <?= $this->Form->create($enquadramento) ?>
    <fieldset>
        <legend><?= __('Add Enquadramento') ?></legend>
        <?php
            echo $this->Form->control('alinea');
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
