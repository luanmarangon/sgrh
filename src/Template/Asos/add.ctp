<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aso $aso
 */
// $this->Form->templates(['dateWidget' => '{{day}}{{month}}{{year}}{{hour}}{{minute}}']);
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Colaboradores'),  ['controller' => 'Funcionarios', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="asos form large-9 medium-8 columns content">
    <?= $this->Form->create($aso, array('enctype' => 'multipart/form-data')) ?>
    <fieldset>
        <legend><?= __('Adicionar Exames Ocupacionais') ?></legend>
        <div class="large-12 medium-4 columns">
            <?php
            echo $this->Form->control('funcionarios_id', ['options' => $funcionarios, 'label' => 'Colaborador', 'default' => $id, 'disabled' => true]);
            ?>
        </div>
        <div class="large-3 medium-4 columns">
            <?php
            echo $this->Form->control('dt_exame', ['type' => 'text', 'label' => 'Data do Exame']);
            ?>
        </div>
        <div class="large-3 medium-4 columns">
            <?php
            echo $this->Form->control('exame', ['label' => 'Tipo de Exame', 'options' => ['Exame admissional' => 'Exame admissional', 'Exame periódico' => 'Exame periódico', 'Exame para retorno ao trabalho' => 'Exame para retorno ao trabalho', 'Exame para mudança de função' => 'Exame para mudança de função', 'Exame demisisonal' => 'Exame demisisonal']]);
            ?>
        </div>
        <div class="large-3 medium-4 columns">
            <?php
            echo $this->Form->control('descricao', ['label' => 'Descrição/Observação']);
            ?>
        </div>
        <div class="large-3  medium-4 columns">
            <?php
            echo $this->Form->control('proximo_exame', ['type' => 'text', 'label' => 'Próximo Exame']);
            ?>
        </div>
        <div class="large-12 medium-4 columns">
            <?php
            echo $this->Form->control('anexo', ['type' => 'file']);
            ?>
        </div>
    </fieldset>
    <?= $this->Form->button(__('Cadastrar')) ?>
    <?= $this->Form->end() ?>
</div>

<?= $this->Html->script('https://code.jquery.com/jquery-3.5.1.js') ?>
<?php $this->Html->scriptStart(['block' => true]); ?>
$( document ).ready(function() {
$('#dt-exame').attr('type', 'date');
$('#proximo-exame').attr('type', 'date');
});
<?php $this->Html->scriptEnd(); ?>
<?= $this->fetch('script') ?>