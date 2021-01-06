<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Irrmarcacaoponto $irrmarcacaoponto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
<ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Colaboradores'),  ['controller' => 'Funcionarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('VOLTAR ' . $funcionario["nome"]),  ['controller' => 'Contratos', 'action' => 'view', $id_contrato]) ?></li>
    </ul>
</nav>
<div class="irrmarcacaopontos form large-9 medium-8 columns content">
    <?= $this->Form->create($irrmarcacaoponto) ?>
    <fieldset>
        <legend><?= __('Editar Irregularidade de Falta de Marcação ' . $funcionario['nome']) ?></legend>
        <div class="large-4 medium-4 columns">
            <?php
            $data = substr($irrmarcacaoponto->data, -4)."-".substr($irrmarcacaoponto->data, 3, 2)."-".substr($irrmarcacaoponto->data, 0, 2);
            echo $this->Form->control('data', ['type' => "text", 'value' => $data]);
            ?>
        </div>
        <div class="large-3 medium-4 columns">
            <?php
            echo $this->Form->control('motivo');
            ?>
        </div>
        <div class="large-5 medium-4 columns">
            <?php
            echo $this->Form->control('justificativa');
            ?>
        </div>
        <div class="large-5 medium-4 columns">
            <?php
            echo $this->Form->control('contratos_id', ['type' => 'hidden', 'value' => $id_contrato]);
            ?>
        </div>
    </fieldset>
    <?= $this->Form->button(__('Alterar')) ?>
    <?= $this->Form->end() ?>
</div>
<?= $this->Html->script('https://code.jquery.com/jquery-3.5.1.js') ?>
<?php $this->Html->scriptStart(['block' => true]); ?>
$( document ).ready(function() {
    $('#data').attr('type', 'date');
    $('#fim_exp').attr('type', 'time');
});
<?php $this->Html->scriptEnd(); ?>
<?= $this->fetch('script') ?>
