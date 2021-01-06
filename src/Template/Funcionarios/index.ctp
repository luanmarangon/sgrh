<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Funcionario[]|\Cake\Collection\CollectionInterface $funcionarios
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Novo Colaborador'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="funcionarios index large-9 medium-8 columns content">
    <h3><?= __('Colaboradores') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col" class="large-4"><?= $this->Paginator->sort('nome', ['label' => 'Colaborador']) ?></th>
                <th scope="col" class="actions large-8"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($funcionarios as $funcionario): ?>
            <tr>
                <!-- <td><?= $this->Number->format($funcionario->id) ?></td> -->
                <td><?= h($funcionario->nome) ?></td>
                <!-- <td><?= h($funcionario->sexo) ?></td>
                <td><?= h($funcionario->etinia) ?></td>
                <td><?= h($funcionario->cabelo) ?></td>
                <td><?= h($funcionario->olhos) ?></td> -->
                <!--<td><?= h($funcionario->dt_nascimento) ?></td>
                <td><?= h($funcionario->est_civil) ?></td>-->
                <!-- <td><?= h($funcionario->naturalidade) ?></td>
                <td><?= h($funcionario->uf_naturalidade) ?></td>
                <td><?= h($funcionario->nacionalidade) ?></td>
                <td><?= h($funcionario->escolaridade) ?></td> -->
                <!-- <td><?= h($funcionario->mail_pessoal) ?></td> -->
                <!-- <td><?= h($funcionario->pai) ?></td>
                <td><?= h($funcionario->mae) ?></td>
                <td><?= h($funcionario->ativo) ?></td>
                <td><?= h($funcionario->dtcadastro) ?></td>
                <td><?= h($funcionario->num_carteira) ?></td>
                <td><?= h($funcionario->registro_geral) ?></td>
                <td><?= h($funcionario->naturalizado) ?></td>
                <td><?= h($funcionario->dt_chg_br) ?></td>
                <td><?= h($funcionario->casado_brasileiro) ?></td> -->
                <!--<td><?= h($funcionario->cpf) ?></td> -->
                <!-- <td><?= h($funcionario->cart_trabalho) ?></td>
                <td><?= h($funcionario->serie) ?></td>
                <td><?= h($funcionario->cidade) ?></td>
                <td><?= h($funcionario->dt_emis_cart) ?></td>
                <td><?= h($funcionario->pis) ?></td>
                <td><?= h($funcionario->dt_cad_pis) ?></td>
                <td><?= h($funcionario->rg) ?></td>
                <td><?= h($funcionario->orgao) ?></td>
                <td><?= h($funcionario->uf_rg) ?></td>
                <td><?= h($funcionario->dt_emis_rg) ?></td>
                <td><?= h($funcionario->habilitacao) ?></td>
                <td><?= h($funcionario->categoria) ?></td>
                <td><?= h($funcionario->uf_cnh) ?></td>
                <td><?= h($funcionario->validade_cnh) ?></td>
                <td><?= h($funcionario->reservista) ?></td>
                <td><?= h($funcionario->titulo_eleitor) ?></td>
                <td><?= h($funcionario->titulo_zona) ?></td>
                <td><?= h($funcionario->titulo_secao) ?></td>
                <td><?= h($funcionario->titulo_dt_emissao) ?></td>
                <td><?= h($funcionario->conjugue) ?></td>
                <td><?= h($funcionario->conj_sexo) ?></td>
                <td><?= h($funcionario->conj_nascimento) ?></td>
                <td><?= h($funcionario->conj_rg) ?></td>
                <td><?= h($funcionario->conj_uf_rg) ?></td>
                <td><?= h($funcionario->conj_cpf) ?></td>
                <td><?= h($funcionario->conj_naturalidade) ?></td>
                <td><?= h($funcionario->conj_uf_naturalidade) ?></td>
                <td><?= h($funcionario->conj_nascionalidade) ?></td>
                <td><?= h($funcionario->dt_cadamento) ?></td> -->
                <!-- <td><?= $funcionario->has('tipodeficiencia') ? $this->Html->link($funcionario->tipodeficiencia->id, ['controller' => 'Tipodeficiencias', 'action' => 'view', $funcionario->tipodeficiencia->id]) : '' ?></td> -->
                <td class="actions">
					<?= $this->Html->link(__('Endereço'), ['action' => 'endereco', $funcionario->id]) ?>
					<?= $this->Html->link(__('Contatos'), ['action' => 'contatos', $funcionario->id]) ?>
                    <?= $this->Html->link(__('Dependentes'), ['action' => 'dependentes', $funcionario->id]) ?>
                    <?= $this->Html->link(__('Contratos'), ['action' => 'contratos', $funcionario->id]) ?>
					<?= $this->Html->link(__('Contribuições'), ['action' => 'contribuicao', $funcionario->id]) ?>
                    <?= $this->Html->link(__('Dados Bancários'), ['action' => 'dados', $funcionario->id]) ?>
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $funcionario->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $funcionario->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $funcionario->id], ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $funcionario->nome)]) ?>
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
