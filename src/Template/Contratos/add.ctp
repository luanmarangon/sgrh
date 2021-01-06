<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contrato $contrato
 */
$this->Form->templates(['dateWidget' => '{{day}}{{month}}{{year}}']);
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Listar Contratos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Colaboradores'), ['controller' => 'Funcionarios', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="contratos form large-9 medium-8 columns content">
    <?= $this->Form->create($contrato) ?>
    <fieldset>
        <legend><?= __('Adicionar um Contrato ao Colaborador') ?></legend>
        <div class="large-12 medium-4 columns">
            <?php
            echo $this->Form->control('funcionarios_id', ['options' => $funcionarios, 'label' => 'Colaborador', 'default' => $id, 'disabled' => true]);
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
            echo $this->Form->control('admissao', ['type' => "text", 'label' => 'Data de Admissão']);
            ?>
        </div>
        <div class="large-4 medium-4 columns">
            <?php
            echo $this->Form->control('exadmissional', ['type' => "text", 'label' => 'Data do Exame Admissional']);
            ?>
        </div>
        <div class="large-4 medium-4 columns">
            <?php
            echo $this->Form->control('exp_inicio', ['type' => "text", 'label' => 'Data do Início da Experiência']);
            ?>
        </div>
        <div class="large-4 medium-4 columns">
            <?php
            echo $this->Form->control('exp_fim', ['type' => 'text', 'label' => 'Data do Fim da Experiência']);
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
            echo $this->Form->control('dtopcao', ['type' => "text", 'label' => 'Data da Opção']);
            ?>
        </div>
        <div class="large-4 medium-4 columns">
            <?php
            echo $this->Form->control('dtretencao', ['type' => "text", 'label' => 'Data de Retenção']);
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
            <?= $this->Form->button(__('Cadastrar')) ?>
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