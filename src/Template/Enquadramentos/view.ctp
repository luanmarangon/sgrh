<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Enquadramento $enquadramento
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Enquadramento'), ['action' => 'edit', $enquadramento->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Enquadramento'), ['action' => 'delete', $enquadramento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $enquadramento->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Enquadramentos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Enquadramento'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="enquadramentos view large-9 medium-8 columns content">
    <h3><?= h($enquadramento->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Alinea') ?></th>
            <td><?= h($enquadramento->alinea) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($enquadramento->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($enquadramento->id) ?></td>
        </tr>
    </table>
</div>
