<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contrato $contrato
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <!-- <li><?= $this->Html->link(__('Listar Contratos'), ['action' => 'index']) ?></li> -->
        <li><?= $this->Html->link(__('Listar Colaboradores'), ['controller' => 'Funcionarios', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="contratos form large-9 medium-8 columns content">
    <?= $this->Form->create($contrato) ?>
    <fieldset>
        <legend><?= __('Alterar dados do Contrato do Colaborador ') ?> </legend>
        <!-- <h3><?= h($contrato->funcionario->nome) ?></h3> -->
        <div class="large-12 medium-4 columns">
            <?php
            echo $this->Form->control('funcionarios_id', ['options' => $funcionarios, 'label' => 'Colaborador', 'type' => 'hidden']);
            ?>
        </div>
        <div class="large-12 medium-4 columns">
            <h4 style="text-align: center; color: black;">Registro Profissional</h4>
        </div>
        <div class="large-6 medium-4 columns">
            <?php
            echo $this->Form->control('empresas_id', ['options' => $empresas, 'label' => 'Empresa de Registro']);
            ?>
        </div>
        <div class="large-3 medium-4 columns">
            <?php
            echo $this->Form->control('matricula', ['label' => 'Matrícula']);
            ?>
        </div>
        <div class="large-3 medium-4 columns">
            <?php
            $dtadmissao = substr($contrato->admissao, -4)."-".substr($contrato->admissao, 3, 2)."-".substr($contrato->admissao, 0, 2);
            echo $this->Form->control('admissao', ['type' => 'text', 'value' => $dtadmissao]);
            ?>
        </div>
        <div class="large-4 medium-4 columns">
            <?php
            $exadmissional = substr($contrato->exadmissional, -4)."-".substr($contrato->exadmissional, 3, 2)."-".substr($contrato->exadmissional, 0, 2);
            echo $this->Form->control('exadmissional', ['type' => 'text', 'label' => 'Data do Exame Admissional', 'value' => $exadmissional]);
            ?>
        </div>
        <div class="large-4 medium-4 columns">
            <?php
            $expinicio = substr($contrato->exp_inicio, -4)."-".substr($contrato->exp_inicio, 3, 2)."-".substr($contrato->exp_inicio, 0, 2);
            echo $this->Form->control('exp_inicio', ['type' => 'text', 'label' => 'Data do Início da Experiência', 'value' => $expinicio]);
            ?>
        </div>
        <div class="large-4 medium-4 columns">
            <?php
            $expfim = substr($contrato->exp_fim, -4)."-".substr($contrato->exp_fim, 3, 2)."-".substr($contrato->exp_fim, 0, 2);
            echo $this->Form->control('exp_fim', ['type' => 'text', 'label' => 'Data do Fim da Experiência', 'value' => $expfim]);
            ?>
        </div>
        <div class="large-12 medium-4 columns">
            <h4 style="text-align: center; color: black;">Dados profissionais</h4>
        </div>
        <div class="large-3 medium-4 columns">
            <?php
            echo $this->Form->control('nomeuser', ['label' => 'Nome de Usuário']);
            ?>
        </div>
        <div class="large-2 medium-4 columns">
            <?php
            echo $this->Form->control('ramal');
            ?>
        </div>
        <div class="large-5 medium-4 columns">
            <?php
            echo $this->Form->control('mailprof', ['label' => 'E-mail Profissional']);
            ?>
        </div>
        <div class="large-12 medium-4 columns">
            <h4 style="text-align: center; color: black;">Fundo de Garantia</h4>
        </div>
        <div class="large-2 medium-4 columns">
            <?php
            echo $this->Form->control('optante', ['label' => 'Optante', 'options' => ['S' => 'Sim', 'N' => 'Não']]);
            ?>
        </div>
        <div class="large-4 medium-4 columns">
            <?php
            $dtopcao = substr($contrato->dtopcao, -4)."-".substr($contrato->dtopcao, 3, 2)."-".substr($contrato->dtopcao, 0, 2);
            echo $this->Form->control('dtopcao', ['type' => 'text', 'label' => 'Data da Opção', 'value' => $dtopcao]);
            ?>
        </div>
        <div class="large-4 medium-4 columns">
            <?php
            $dtretencao = substr($contrato->dtretencao, -4)."-".substr($contrato->dtretencao, 3, 2)."-".substr($contrato->dtretencao, 0, 2);
            echo $this->Form->control('dtretencao', ['type' => 'text', 'label' => 'Data de Retenção', 'value' => $dtretencao]);
            ?>
        </div>
        <div class="large-4 medium-4 columns">
            <?php
            echo $this->Form->control('bco_depositario', ['label' => 'Banco Depositário']);
            ?>
        </div>
        <div class="large-4 medium-4 columns">
            <?php
            echo $this->Form->control('bco_banco', ['label' => 'N° do Banco']);
            ?>
        </div>
        <div class="large-4 medium-4 columns">
            <?php
            echo $this->Form->control('bco_agencia', ['label' => 'N° da Agência']);
            ?>
        </div>
        <div class="large-12 medium-4 columns">
            <h4 style="text-align: center; color: black;">Jornada de Trabalho</h4>
        </div>
        <div class="large-6 medium-4 columns">
            <?php
            echo $this->Form->control('jornadatrabalhos_id', ['options' => $jornadatrabalhos, 'label' => 'Jornada de Trabalho']);
            ?>
        </div>
        <div class="large-6 medium-4 columns">
            <?= $this->Form->button(__('Editar')) ?>
        </div>
    </fieldset>
    <?= $this->Form->end() ?>
</div>

<?= $this->Html->script('https://code.jquery.com/jquery-3.5.1.js') ?>
<?php $this->Html->scriptStart(['block' => true]); ?>
$( document ).ready(function() {
    $('#dtopcao').attr('type', 'date');
    $('#dtretencao').attr('type', 'date');
    $('#admissao').attr('type', 'date');
    $('#exadmissional').attr('type', 'date');
    $('#exp-inicio').attr('type', 'date');
    $('#exp-fim').attr('type', 'date');

});
<?php $this->Html->scriptEnd(); ?>
<?= $this->fetch('script') ?>