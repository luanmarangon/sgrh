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
    <h3>Dados Bancários do Colaborador: <?= h($funcionario->nome) ?></h3>
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
    <?= $this->Html->link(__('Novo Dado Bancário'), ['action' => 'novodado', $funcionario->id], ['class' => 'form button']) ?></td>
    
	<h5>Dados dos Contatos</h5>
    <table class="vertical-table">
        <tr>
            <th>Banco</th>
			<th>Tipo de Conta</th>
			<th>Agência</th>
			<th>Número</th>
            <th></th>
        </tr>
        <?php foreach ($dados as $dado) : ?>
            <tr>
                <td style="text-align: left;"><?= $dado->banco ?></td>
				<td style="text-align: left;"><?= $dado->tipo_conta ?></td>
				<td style="text-align: left;"><?= $dado->agencia ?></td>
				<td style="text-align: left;"><?= $dado->conta ?></td>
                <td style="text-align: left;"><?= $this->Html->link(__('Alterar'), ['action' => 'alterardado', $dado->id]) ?> <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Dadosbancarios', 'action' => 'delete', $dado->id], ['confirm' => __('Deseja realmente excluir o contato?'), $dado->id]) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</div>