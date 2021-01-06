<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Atestado $atestado
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Colaboradores'),  ['controller' => 'Funcionarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('VOLTAR ' .$funcionario["nome"]),  ['controller' => 'Contratos', 'action' => 'view', $id_contrato]) ?></li>
    </ul>
</nav>
<div class="atestados form large-9 medium-8 columns content">
    <?= $this->Form->create($atestado, array('enctype' => 'multipart/form-data')) ?>
    <fieldset>
        <legend><?= __('Alterar Atestado de ' .$funcionario["nome"]) ?></legend>
        <div class="large-4 medium-4 columns">
            <?php
			$data = substr($atestado->dt_atestado, -4)."-".substr($atestado->dt_atestado, 3, 2)."-".substr($atestado->dt_atestado, 0, 2);
            echo $this->Form->control('dt_atestado', ['type' => 'text', 'value' => $data]);
            ?>
        </div>
        <div class="large-8 medium-4 columns">
            <?php
            echo $this->Form->control('justificativa');
            ?>
        </div>
        <div class="large-4 medium-4 columns">
            <?php
            echo $this->Form->control('medico');
            ?>
        </div>
        <div class="large-2 medium-4 columns">
            <?php
            echo $this->Form->control('cid');
            ?>
        </div>
        <div class="large-3 medium-4 columns">
            <?php
            echo $this->Form->control('afastamento');
            ?>
        </div>
		<hr>
        <div class="large-10 medium-12 columns">
            <?php
				if ($atestado->img != ""){
					echo "<label> Atestado cadastrado ";
					echo $this->Html->link(__('(clique aqui para substituir a imagem)'),  ['controller' => 'Atestados', 'action' => 'excluiratestado', $atestado->id]);
					echo "</label>";
					echo $this->Html->image($atestado->img);
					echo $this->Form->control('img', ['type' => 'hidden']);
					echo $this->Form->control('img_antiga', ['type' => 'hidden', 'value' => 'ok']);
				}
				else 
					echo $this->Form->control('img', ['type' => 'file']);
            ?>
        </div>
        <div class="large-8 medium-4 columns">
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
$(document).ready(function() {
    $('#dt-atestado').attr('type', 'date');
});
<?php $this->Html->scriptEnd(); ?>
<?= $this->fetch('script') ?>