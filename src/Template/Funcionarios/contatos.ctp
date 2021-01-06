<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Funcionario $funcionario
 */
$this->Form->templates(['dateWidget' => '{{day}}{{month}}{{year}}']);
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Listar Colaboradores'), ['action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="funcionarios view large-9 medium-8 columns content">
    <h3>Contatos do Colaborador: <?= h($funcionario->nome) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($funcionario->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CPF') ?></th>
            <td><?= h($funcionario->cpf) ?></td>
        </tr>
    </table>
    <?= $this->Html->link(__('Novo Contato'), ['action' => 'novocontato', $funcionario->id], ['class' => 'form button']) ?></td>
    
	<h5>Dados dos Contatos</h5>
    <table class="vertical-table">
        <tr>
            <th>Telefone</th>
            <th></th>
        </tr>
        <?php foreach ($contatos as $contato) : ?>
            <tr>
                <td style="text-align: left;"><?= $contato->telefone ?></td>
                <td style="text-align: left;"><?= $this->Html->link(__('Alterar'), ['action' => 'alterarcontato', $contato->id]) ?> <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Contatofuncionarios', 'action' => 'delete', $contato->id], ['confirm' => __('Deseja realmente excluir o contato?', $contato->id)]) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</div>