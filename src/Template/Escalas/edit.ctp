<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Escala $escala
 */
$this->Form->templates(['dateWidget' => '{{day}}{{month}}{{year}}{{hour}}{{minute}}']);
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Colaboradores'),  ['controller' => 'Funcionarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('VOLTAR ' . $funcionario["nome"]),  ['controller' => 'Contratos', 'action' => 'view', $id_contrato]) ?></li>
    </ul>
</nav>
<div class="escalas form large-9 medium-8 columns content">
    <?= $this->Form->create($escala) ?>
    <fieldset>
        <legend><?= __('Editar Escala de Trabalho ao Colaborador ' . $funcionario["nome"]) ?></legend>

        <div class="form large-12 medium-8 columns content">
            <?php
            echo $this->Form->control('funcionarios_id', ['type' => 'hidden', 'value' => $funcionario['id']]);
            echo $this->Form->control('contratos_id', ['type' => 'hidden', 'value' => $id_contrato]);
            ?>
            <div class="form large-3 medium-8 columns content">
                <?php
                $data = substr($escala->data, -4)."-".substr($escala->data, 3, 2)."-".substr($escala->data, 0, 2);
                echo $this->Form->control('data', ['type' => 'text', 'label' => 'Data', 'value' => $data]);
                ?>
            </div>
            <div class="form large-12 medium-8 columns content">
                <div class="form large-3 medium-8 columns content">
                    <?php
                    echo $this->Form->control('inicio', ['type' => 'text', 'label' => 'Início do Expediente']);
                    ?>
                </div>
                <div class="form large-3 medium-8 columns content">
                    <?php
                    echo $this->Form->control('saida', ['type' => 'text', 'label' => 'Saída do Almoço']);
                    ?>
                </div>
                <div class="form large-3 medium-8 columns content">
                    <?php
                    echo $this->Form->control('retorno', ['type' => 'text', 'label' => 'Retorno do Almoço']);
                    ?>
                </div>
                <div class="form large-3 medium-8 columns content">
                    <?php
                    echo $this->Form->control('fim', ['type' => 'text', 'label' => 'Fim do Expediente']);
                    ?>
                </div>
            </div>
        </div>
    </fieldset>
    <?= $this->Form->button(__('Alterar')) ?>
    <?= $this->Form->end() ?>
</div>

<?= $this->Html->script('https://code.jquery.com/jquery-3.5.1.js') ?>
<?php $this->Html->scriptStart(['block' => true]); ?>
$( document ).ready(function() {
    $('#data').attr('type', 'date');
    $('#inicio').attr('type', 'time');
    $('#saida').attr('type', 'time');
    $('#retorno').attr('type', 'time');
    $('#fim').attr('type', 'time');


});
<?php $this->Html->scriptEnd(); ?>
<?= $this->fetch('script') ?>