<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empresa $empresa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Editar Empresa'), ['action' => 'edit', $empresa->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Empresa'), ['action' => 'delete', $empresa->id], ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $empresa->rzsocial)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Empresas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nova Emprea'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="empresas view large-9 medium-8 columns content">
    <h3><?= h($empresa->rzsocial) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('CNPJ') ?></th>
            <td><?= h($empresa->cnpj) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Razão Social') ?></th>
            <td><?= h($empresa->rzsocial) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Endereço') ?></th>
            <td><?= h($empresa->logradouro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('N°') ?></th>
            <td><?= h($empresa->numero) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Complemento') ?></th>
            <td><?= h($empresa->complemento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bairro') ?></th>
            <td><?= h($empresa->bairro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CEP') ?></th>
            <td><?= h($empresa->cep) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cidade') ?></th>
            <td><?= h($empresa->cidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= h($empresa->estado) ?></td>
        </tr>
        <!-- <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($empresa->id) ?></td>
        </tr> -->
    </table>
</div>
