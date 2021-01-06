<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contrato[]|\Cake\Collection\CollectionInterface $contratos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Novo Contrato'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nova Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Funcionarios'), ['controller' => 'Funcionarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Funcionario'), ['controller' => 'Funcionarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Jornada de trabalhos'), ['controller' => 'Jornadatrabalhos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nova Jornada de trabalhos'), ['controller' => 'Jornadatrabalhos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contratos index large-9 medium-8 columns content">
    <h3><?= __('Contratos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!-- <th scope="col"><?= $this->Paginator->sort('id') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('matricula', ['label' => 'Matrícula']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('funcionarios_id', ['label' => 'Colaborador']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('admissao', ['label' => 'Data de Admissão']) ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('exadmissional') ?></th> -->
                <!-- <th scope="col"><?= $this->Paginator->sort('exp_inicio') ?></th> -->
                <!-- <th scope="col"><?= $this->Paginator->sort('exp_fim') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('nomeuser', ['label' => 'Usuário']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('ramal', ['label' => 'Ramal']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('mailprof', ['label' => 'E-mail Profissional']) ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('optante') ?></th> -->
                <!-- <th scope="col"><?= $this->Paginator->sort('dtopcao') ?></th> -->
                <!-- <th scope="col"><?= $this->Paginator->sort('dtretencao') ?></th> -->
                <!-- <th scope="col"><?= $this->Paginator->sort('bco_depositario') ?></th> -->
                <!-- <th scope="col"><?= $this->Paginator->sort('bco_banco') ?></th> -->
                <!-- <th scope="col"><?= $this->Paginator->sort('bco_agencia') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('empresas_id', ['label' => 'Empresa  ']) ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('jornadatrabalhos_id') ?></th> -->
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contratos as $contrato): ?>
            <tr>
                <!-- <td><?= $this->Number->format($contrato->id) ?></td> -->
                <td><?= $this->Number->format($contrato->matricula) ?></td>
                <td><?= $contrato->has('funcionario') ? $this->Html->link($contrato->funcionario->nome, ['controller' => 'Funcionarios', 'action' => 'view', $contrato->funcionario->id]) : '' ?></td>
                <td><?= h($contrato->admissao) ?></td>
                <!-- <td><?= h($contrato->exadmissional) ?></td> -->
                <!-- <td><?= h($contrato->exp_inicio) ?></td> -->
                <!-- <td><?= h($contrato->exp_fim) ?></td> -->
                <td><?= h($contrato->nomeuser) ?></td>
                <td><?= $this->Number->format($contrato->ramal) ?></td>
                <td><?= h($contrato->mailprof) ?></td>
                <!-- <td><?= h($contrato->optante) ?></td> -->
                <!-- <td><?= h($contrato->dtopcao) ?></td> -->
                <!-- <td><?= h($contrato->dtretencao) ?></td> -->
                <!-- <td><?= h($contrato->bco_depositario) ?></td> -->
                <!-- <td><?= h($contrato->bco_banco) ?></td> -->
                <!-- <td><?= h($contrato->bco_agencia) ?></td> -->
                <td><?= $contrato->has('empresa') ? $this->Html->link($contrato->empresa->rzsocial, ['controller' => 'Empresas', 'action' => 'view', $contrato->empresa->id]) : '' ?></td>
                <!-- <td><?= $contrato->has('jornadatrabalho') ? $this->Html->link($contrato->jornadatrabalho->id, ['controller' => 'Jornadatrabalhos', 'action' => 'view', $contrato->jornadatrabalho->id]) : '' ?></td> -->
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $contrato->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $contrato->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $contrato->id], ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $contrato->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Proximo') . ' >') ?>
            <?= $this->Paginator->last(__('Último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} registros(s) de {{count}}')]) ?></p>
    </div>
</div>
