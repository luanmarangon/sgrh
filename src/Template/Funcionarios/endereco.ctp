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
    <h3>Endereço do Colaborador: <?= h($funcionario->nome) ?></h3>
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
    <?= $this->Html->link(__('Novo Endereço'), ['action' => 'novoendereco', $funcionario->id], ['class' => 'form button']) ?></td>
    
	<h5>Endereço do Colaborador</h5>
    <table class="vertical-table">
        <tr>
            <th>Logradouro</th>
            <th class="large-1">N°.</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th></th>
        </tr>
        <?php foreach ($enderecofuncionarios as $enderecofuncionarios) : ?>
            <tr>
                <td style="text-align: left;"><?= $enderecofuncionarios->logradouro ?></td>
                <td style="text-align: left;"><?= h($enderecofuncionarios->numero) ?></td>
                <td style="text-align: left;"><?= h($enderecofuncionarios->bairro) ?></td>  
                <td style="text-align: left;"><?= h($enderecofuncionarios->cidade) ?></td>  
                <td style="text-align: left;"><?= $this->Html->link(__('Alterar Endereço'), ['action' => 'alterarendereco', $enderecofuncionarios->id]) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</div>