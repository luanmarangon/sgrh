<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Irrjornadatrabalho $irrjornadatrabalho
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
<ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Colaboradores'),  ['controller' => 'Funcionarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('VOLTAR ' . $funcionario["nome"]),  ['controller' => 'Contratos', 'action' => 'view', $id_contrato]) ?></li>
    </ul>
</nav>
<div class="irrjornadatrabalhos form large-9 medium-8 columns content">
    <?= $this->Form->create($irrjornadatrabalho) ?>
    <fieldset>
        <legend><?= __('Adicionar Irregularidade de Jornada de Trabalho ' . $funcionario['nome']) ?></legend>
        <div class="large-4 medium-4 columns">
            <?php
            $data = substr($irrjornadatrabalho->data, -4)."-".substr($irrjornadatrabalho->data, 3, 2)."-".substr($irrjornadatrabalho->data, 0, 2);
            echo $this->Form->control('data', ['type' => 'text', 'value' => $data]);
            ?>
        </div>
        <div class="large-2 medium-4 columns">
            <?php
            echo $this->Form->control('inicio', ['type' => 'text']);
            ?>
        </div>
        <div class="large-2 medium-4 columns">
            <?php
            echo $this->Form->control('saida', ['type' => 'text']);
            ?>
        </div>
        <div class="large-2 medium-4 columns">
            <?php
            echo $this->Form->control('trabalhado', ['type' => 'text']);
            ?>
        </div>
        <div class="large-8 medium-4 columns">
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
    $('#inicio').attr('type', 'time');
    $('#saida').attr('type', 'time');
    $('#trabalhado').attr('type', 'time');
});
<?php $this->Html->scriptEnd(); ?>
<?= $this->fetch('script') ?>