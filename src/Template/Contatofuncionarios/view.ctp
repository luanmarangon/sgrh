<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contatofuncionario $contatofuncionario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Listar Colaboradores'), ['controller' => 'Funcionarios', 'action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="contatofuncionarios view large-9 medium-8 columns content">
    <h3><?= h($contatofuncionario->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Telefone') ?></th>
            <td><?= h($contatofuncionario->telefone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Funcionario') ?></th>
            <td><?= $contatofuncionario->has('funcionario') ? $this->Html->link($contatofuncionario->funcionario->id, ['controller' => 'Funcionarios', 'action' => 'view', $contatofuncionario->funcionario->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($contatofuncionario->id) ?></td>
        </tr>
    </table>
</div>
