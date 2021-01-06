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
    <h3>Dependentes do Colaborador: <?= h($funcionario->nome) ?></h3>
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
    <?= $this->Html->link(__('Novo Dependente'), ['action' => 'novodependente', $funcionario->id], ['class' => 'form button']) ?></td>
    
	<h5>Dados dos Dependentes</h5>
    <table class="vertical-table">
        <tr>
            <th>Nome</th>
            <th>Parentesco</th>
            <th>Nascimento</th>
            <th></th>
        </tr>
        <?php foreach ($dependentes as $dependentes) : ?>
            <tr>
                <td style="text-align: left;"><?= $dependentes->nome ?></td>
                <td style="text-align: left;"><?= h($dependentes->parentesco) ?></td>
                <td style="text-align: left;"><?= h($dependentes->nascimento) ?></td>  
                <td style="text-align: left;"><?= $this->Html->link(__('Alterar Dependente'), ['action' => 'alterardependente', $dependentes->id]) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</div>