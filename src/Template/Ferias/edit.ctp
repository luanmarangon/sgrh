<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Feria $feria
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
<ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Colaboradores'),  ['controller' => 'Funcionarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('VOLTAR ' . $funcionario["nome"]),  ['controller' => 'Contratos', 'action' => 'view', $id_contrato]) ?></li>
    </ul>
</nav>
<div class="ferias form large-9 medium-8 columns content">
    <?= $this->Form->create($feria) ?>
    <fieldset>
        <legend><?= __('Cadastrar Férias ao Colaborador '.$funcionario['nome']) ?></legend>
        <div class="large-5 medium-4 columns">
            <?php
            $aqinicio = substr($feria->aq_inicio, -4)."-".substr($feria->aq_inicio, 3, 2)."-".substr($feria->aq_inicio, 0, 2);
            echo $this->Form->control('aq_inicio', ['type' => 'text', 'label' => 'Início Aquisição', 'value' => $aqinicio]);
            ?>
        </div>
        <div class="large-5 medium-4 columns">
            <?php
            $aqfim = substr($feria->aq_fim, -4)."-".substr($feria->aq_fim, 3, 2)."-".substr($feria->aq_fim, 0, 2);
            echo $this->Form->control('aq_fim',  ['type' => 'text', 'label' => 'Fim Aquisição', 'value' => $aqfim]);
            ?>
        </div>
        <div class="large-5 medium-4 columns">
            <?php
            $ginicio = substr($feria->gozo_inicio, -4)."-".substr($feria->gozo_inicio, 3, 2)."-".substr($feria->gozo_inicio, 0, 2);
            echo $this->Form->control('gozo_inicio',  ['type' => 'text', 'label' => 'Início Gozo', 'value' => $ginicio]);
            ?>
        </div>
        <div class="large-5 medium-4 columns">
            <?php
            $gfim = substr($feria->gozo_fim, -4)."-".substr($feria->gozo_fim, 3, 2)."-".substr($feria->gozo_fim, 0, 2);
            echo $this->Form->control('gozo_fim',  ['type' => 'text', 'label' => 'Fim Gozo', 'value' => $gfim]);
            ?>
        </div>
        <div class="large-5 medium-4 columns">
            <?php
            $abinicio = substr($feria->abono_inicio, -4)."-".substr($feria->abono_inicio, 3, 2)."-".substr($feria->abono_inicio, 0, 2);
            echo $this->Form->control('abono_inicio',  ['type' => 'text', 'label' => 'Início Abono', 'value' => $abinicio]);
            ?>
        </div>
        <div class="large-5 medium-4 columns">
            <?php
            $afim = substr($feria->abono_fim, -4)."-".substr($feria->abono_fim, 3, 2)."-".substr($feria->abono_fim, 0, 2);
            echo $this->Form->control('abono_fim',  ['type' => 'text', 'label' => 'Fim Abono', 'value' => $afim]);
            ?>
        </div>
        <div class="large-5 medium-4 columns">
            <?php

            echo $this->Form->control('contratos_id', ['type' => 'hidden', 'value' => $id_contrato]);
            ?>
    </fieldset>
    <?= $this->Form->button(__('Alterar')) ?>
    <?= $this->Form->end() ?>
</div>

<?= $this->Html->script('https://code.jquery.com/jquery-3.5.1.js') ?>
<?php $this->Html->scriptStart(['block' => true]); ?>
$( document ).ready(function() {
$('#aq-inicio').attr('type', 'date');
$('#aq-fim').attr('type', 'date');
$('#gozo-inicio').attr('type', 'date');
$('#gozo-fim').attr('type', 'date');
$('#abono-inicio').attr('type', 'date');
$('#abono-fim').attr('type', 'date');

});
<?php $this->Html->scriptEnd(); ?>
<?= $this->fetch('script') ?>