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
    <h3>Contratos do Colaborador: <?= h($funcionario->nome) ?></h3>
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

    <?= $this->Html->link(__('Novo Contrato'), ['action' => 'novocontrato', $funcionario->id], ['class' => 'form button']) ?></td>

    <h5>Contratos</h5>

    <table class="vertical-table">
        <?php foreach ($contratos as $contrato) : ?>
            <tr>
                <th scope="row">Contrato <?= h($contrato->matricula) ?></th>
                <td style="text-align: left;">Desde <?= h($contrato->exp_inicio) ?></td>
                <td style="text-align: left;"><?= h($contrato->empresa->rzsocial) ?></td>
                <td>
                    <?= $this->Html->link(__('Alterar'), ['action' => 'alterarcontrato', $contrato->id]) ?>
                    | <?= $this->Html->link(__('Lançamentos'),  ['controller' => 'Contratos', 'action' => 'view', $contrato->id]) ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <?= $this->Html->link(__('Novo ASO'), ['action' => 'novoaso', $funcionario->id], ['class' => 'form button']) ?></td>


    <h5>ASOS</h5>
    <table class="vertical-table">
        <?php foreach ($asos as $aso) : ?>
            <tr>
                <th scope="row"><?= h($aso->exame) ?></th>
                <td style="text-align: left;">Data:<?= h($aso->dt_exame) ?></td>
                <td><?= $this->Html->link(__('Alterar'), ['action' => 'alterarasos', $aso->id]) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <!-- <h5>Atestados</h5>
    
    <h5>Afastamentos</h5>
    <table class="vertical-table">
        <?php foreach ($afastamentos as $afastamentos) : ?>
            <tr>
                <th scope="row">Número do Contrato: <?= h($afastamentos->motivo) ?></th>
                <td>Data:<?= h($afastamentos->dt_inicio) ?></td>
                <td><?= $this->Html->link(__('Alterar Contrato'), ['action' => 'alterarcontrato', $contrato->id]) ?></td>
            </tr>
            <?php endforeach; ?>
    </table>
    <h5>Salários</h5>
    <table class="vertical-table">
        <?php foreach ($contratos as $contrato) : ?>
            <tr>
                <th scope="row">Número do Contrato: <?= h($contrato->matricula) ?></th>
                <td>Data:<?= h($contrato->exp_inicio) ?></td>
                <td><?= $this->Html->link(__('Alterar Contrato'), ['action' => 'alterarcontrato', $contrato->id]) ?></td>
            </tr>
            <?php endforeach; ?>
    </table>
    <h5>13° Salário</h5>
    <table class="vertical-table">
        <?php foreach ($contratos as $contrato) : ?>
            <tr>
                <th scope="row">Número do Contrato: <?= h($contrato->matricula) ?></th>
                <td>Data:<?= h($contrato->exp_inicio) ?></td>
                <td><?= $this->Html->link(__('Alterar Contrato'), ['action' => 'alterarcontrato', $contrato->id]) ?></td>
            </tr>
            <?php endforeach; ?>
    </table>
    <h5>Férias</h5>
    <table class="vertical-table">
        <?php foreach ($contratos as $contrato) : ?>
            <tr>
                <th scope="row">Número do Contrato: <?= h($contrato->matricula) ?></th>
                <td>Data:<?= h($contrato->exp_inicio) ?></td>
                <td><?= $this->Html->link(__('Alterar Contrato'), ['action' => 'alterarcontrato', $contrato->id]) ?></td>
            </tr>
            <?php endforeach; ?>
    </table>
    <h5>Contribuição Sindical</h5>
    <table class="vertical-table">
        <?php foreach ($contratos as $contrato) : ?>
            <tr>
                <th scope="row">Número do Contrato: <?= h($contrato->matricula) ?></th>
                <td>Data:<?= h($contrato->exp_inicio) ?></td>
                <td><?= $this->Html->link(__('Alterar Contrato'), ['action' => 'alterarcontrato', $contrato->id]) ?></td>
            </tr>
            <?php endforeach; ?>
    </table> -->
</div>