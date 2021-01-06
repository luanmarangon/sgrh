<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Feria $feria
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <<ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Colaboradores'),  ['controller' => 'Funcionarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('VOLTAR ' . $funcionario["nome"]),  ['controller' => 'Contratos', 'action' => 'view', $id]) ?></li>
    </ul>
</nav>
<div class="ferias form large-9 medium-8 columns content">
    <?= $this->Form->create($feria) ?>
    <fieldset>
        <legend><?= __('Cadastrar Férias ao Colaborador '.$funcionario['nome']) ?></legend>
        <div class="large-5 medium-4 columns">
            <?php
            echo $this->Form->control('aq_inicio', ['type' => 'text', 'label' => 'Início Aquisição']);
            ?>
        </div>
        <div class="large-5 medium-4 columns">
            <?php

            echo $this->Form->control('aq_fim',  ['type' => 'text', 'label' => 'Fim Aquisição']);
            ?>
        </div>
        <div class="large-5 medium-4 columns">
            <?php

            echo $this->Form->control('gozo_inicio',  ['type' => 'text', 'label' => 'Início Gozo']);
            ?>
        </div>
        <div class="large-5 medium-4 columns">
            <?php

            echo $this->Form->control('gozo_fim',  ['type' => 'text', 'label' => 'Fim Gozo']);
            ?>
        </div>
        <div class="large-5 medium-4 columns">
            <?php

            echo $this->Form->control('abono_inicio',  ['type' => 'text', 'label' => 'Início Abono']);
            ?>
        </div>
        <div class="large-5 medium-4 columns">
            <?php

            echo $this->Form->control('abono_fim',  ['type' => 'text', 'label' => 'Fim Abono']);
            ?>
        </div>
        <div class="large-5 medium-4 columns">
            <?php

            echo $this->Form->control('contratos_id', ['type' => 'hidden', 'value' => $id]);
            ?>
    </fieldset>
    <?= $this->Form->button(__('Cadastrar')) ?>
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