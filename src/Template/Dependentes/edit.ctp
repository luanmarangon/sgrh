<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dependente $dependente
 */
$this->Form->templates( ['dateWidget' => '{{day}}{{month}}{{year}}']);  
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Deletar Dependente'),
                ['action' => 'delete', $dependente->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $dependente->nome)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Dependentes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Colaboradores'), ['controller' => 'Funcionarios', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="dependentes form large-9 medium-8 columns content">
    <?= $this->Form->create($dependente) ?>
    <fieldset>
        <legend><?= __('Editar dados do Dependente') ?></legend>
        <div class="large-5 medium-4 columns">
            <?php
                echo $this->Form->control('nome', ['label' => 'Nome do Dependente']);
                ?>
        </div>
        <div class="large-5 medium-4 columns">
            <?php
                echo $this->Form->control('mae', ['label' => 'Mãe do Dependente']);
                ?>
        </div>
        <div class="large-2 medium-1 columns">
            <?php
                echo $this->Form->control('parentesco', ['label' => 'Parentesco']);
                ?>
        </div>
        <div class="large-4 medium-4 columns">
            <?php
                $nasc = substr($dependente->nascimento, -4)."-".substr($dependente->nascimento, 3, 2)."-".substr($dependente->nascimento, 0, 2);
                echo $this->Form->control('nascimento', ['type' => "text", 'label'=>'Data de Nascimento', 'value' => $nasc]);
                ?>
        </div>
        <div class="large-3 medium-4 columns">
            <?php
                echo $this->Form->control('naturalidade');
                ?>
        </div>
        <div class="large-1 medium-4 columns">
            <?php
                echo $this->Form->control('uf_naturalidade', ['label'=>'UF', 'options' => ['', 'AC' => 'AC', 'AL' => 'AL', 'AP' => 'AP', 'AM' => 'AM', 'BA' => 'BA', 'CE' => 'CE', 'DF' => 'DF', 'ES' => 'ES', 'GO' => 'GO', 'MA' => 'MA', 'MT' => 'MT', 'MS' => 'MS', 'MG' => 'MG', 'PA' => 'PA', 'PB' => 'PB', 'PR' => 'PR', 'PE' => 'PE', 'PI' => 'PI', 'RJ' => 'RJ', 'RN' => 'RN', 'RS' => 'RS', 'RO' => 'RO', 'RR' => 'RR', 'SC' => 'SC', 'SP' => 'SP', 'SE' => 'SE', 'TO' => 'TO' ]]);
                ?>
        </div>
        <div class="large-4 medium-4 columns">
            <?php
                echo $this->Form->control('nacionalidade');
                ?>
        </div>
        <div class="large-4 medium-4 columns">
            <?php
                echo $this->Form->control('cpf', ['label' => 'C.P.F.']);
                ?>
        </div>
        <div class="large-4 medium-4 columns">
            <?php
                echo $this->Form->control('nascido_vivo', ['options'=>['Sim' => 'Sim', 'Não' => 'Não'], 'label' => 'Nascido vivo?']);
                ?>
        </div>
        <div class="large-4 medium-4 columns">
            <?php
                echo $this->Form->control('funcionarios_id', ['options' => $funcionarios, 'label' => 'Colaborador', 'default' => $id_funcionario, 'disabled' => true]);
            ?>
        </div>
    </fieldset>
    <?= $this->Form->button(__('Alterar')) ?>
    <?= $this->Form->end() ?>
</div>


<?= $this->Html->script('https://code.jquery.com/jquery-3.5.1.js') ?>
<?php $this->Html->scriptStart(['block' => true]); ?>
$( document ).ready(function() {
    $('#nascimento').attr('type', 'date');
    
});
<?php $this->Html->scriptEnd(); ?>
<?= $this->fetch('script') ?>
