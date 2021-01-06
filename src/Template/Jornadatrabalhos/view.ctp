<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Jornadatrabalho $jornadatrabalho
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Jornadatrabalho'), ['action' => 'edit', $jornadatrabalho->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Jornadatrabalho'), ['action' => 'delete', $jornadatrabalho->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jornadatrabalho->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Jornadatrabalhos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Jornadatrabalho'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="jornadatrabalhos view large-9 medium-8 columns content">
    <h3><?= h($jornadatrabalho->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($jornadatrabalho->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descanco') ?></th>
            <td><?= h($jornadatrabalho->descanco) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($jornadatrabalho->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Inicio') ?></th>
            <td><?= h($jornadatrabalho->inicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fim') ?></th>
            <td><?= h($jornadatrabalho->fim) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Almoco') ?></th>
            <td><?= h($jornadatrabalho->almoco) ?></td>
        </tr>
    </table>
</div>
