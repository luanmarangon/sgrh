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
    <h3>Contribuição Sindical do Colaborador: <?= h($funcionario->nome) ?></h3>
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
    <?= $this->Html->link(__('Nova Contribuição'), ['action' => 'novacontribuicao', $funcionario->id], ['class' => 'form button']) ?></td>
    
	<h5>Dados das Contribuições</h5>
    <table class="vertical-table">
        <tr>
            <th>Ano</th>
			<th>Valor</th>
			<th>Sindicato</th>
            <th></th>
        </tr>
        <?php foreach ($contribuicao as $c) : ?>
            <tr>
                <td style="text-align: left;"><?= $c->ano ?></td>
				<td style="text-align: left;"><?= $c->valor ?></td>
				<td style="text-align: left;"><?= $c->sindicato ?></td>
                <td style="text-align: left;"><?= $this->Html->link(__('Alterar'), ['action' => 'alterarcontribuicao', $c->id]) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</div>