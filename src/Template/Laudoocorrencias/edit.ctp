<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Laudoocorrencia $laudoocorrencia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Colaboradores'),  ['controller' => 'Funcionarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('VOLTAR ' . $funcionario["nome"]),  ['controller' => 'Contratos', 'action' => 'view', $id_contrato]) ?></li>
    </ul>
</nav>
<div class="laudoocorrencias form large-9 medium-8 columns content">
    <?= $this->Form->create($laudoocorrencia, array('enctype' => 'multipart/form-data')) ?>
    <fieldset>
        <legend><?= __('Cadastrar Laudo de Ocorrência para o Colaborador ' . $funcionario["nome"]) ?></legend>
        <div class="large-4 medium-4 columns">
            <?php
            $dt_laudo = substr($laudoocorrencia->dt_laudo, -4)."-".substr($laudoocorrencia->dt_laudo, 3, 2)."-".substr($laudoocorrencia->dt_laudo, 0, 2);
            echo $this->Form->control('dt_laudo', ['type' => 'text', 'label' => 'Data da ocorrência', 'value' => $dt_laudo]);
            ?>
        </div>
        <div class="large-2  medium-4 columns">
            <?php
            echo $this->Form->control('hora', ['type' => 'text', 'label' => 'Hora da ocorrência']);
            ?>
        </div>
        <div class="large-4 medium-4 columns">
            <?php
            echo $this->Form->control('ocorrencia', ['label' => 'Ocorrência relacionada']);
            ?>
        </div>
        <div class="large-2 medium-4 columns">
            <?php
            echo $this->Form->control('tp_acao', ['options' => ['Corretiva' => 'Corretiva', 'Preventiva' => 'Preventiva'], 'label' => 'Tipo de ação']);
            ?>
        </div>
        <div class="large-3 medium-4 columns">
            <?php
            echo $this->Form->control('incidencia', ['options' => ['Primeira' => 'Primeira', 'Mais vezes' => 'Mais Vezes'], 'label' => 'Incidência']);
            ?>
        </div>
        <div class="large-5 medium-4 columns">
            <?php
            echo $this->Form->control('onde_ocorreu', ['label' => 'Onde ocorreu a ocorrência ']);
            ?>
        </div>
        <div class="large-4 medium-4 columns">
            <?php
            echo $this->Form->control('quem_verificou', ['label' => 'Quem verificou a ocorrência', 'options' => $funcionarios]);
            ?>
        </div>
        <div class="large-8 medium-4 columns">
            <?php
            echo $this->Form->control('oque_ocorreu', ['label' => 'O que ocorreu']);
            ?>
        </div>
        <div class="large-4 medium-4 columns">
            <?php
            echo $this->Form->control('relator', ['label' => 'Relator da ocorrência']);
            ?>
        </div>
        <div class="large-6 medium-4 columns">
            <?php
            echo $this->Form->control('pq_ocorreu', ['label' => 'Por que ocorreu']);
            ?>
        </div>
        <div class="large-6 medium-4 columns">
            <?php
            echo $this->Form->control('providencias', ['label' => 'Providências tomadas']);
            ?>
        </div>
        <div class="large-4 medium-4 columns">
            <?php
            echo $this->Form->control('supervisor', ['label' => 'Supervisor', 'options' => $funcionarios]);
            ?>
        </div>
        <div class="large-2 medium-4 columns">
            <?php
            echo $this->Form->control('possui_anexo', ['options' => ['S' => 'SIM', 'N' => 'NÃO'], 'label' => 'Possui Anexo?']);
            ?>
        </div>
        
        <!-- <div class="large-6 medium-4 columns">
            <?php
            echo $this->Form->control('anexo', ['type' => 'file', 'label' => 'Escolha o arquivo']);
            ?>
        </div> -->
        <div class="large-8 medium-4 columns">
            <?php
            echo $this->Form->control('rh_parecer', ['label' => 'Parecer do Recursos Humanos']);
            ?>
        </div>
        <div class="large-4 medium-4 columns">
            <?php
            echo $this->Form->control('rh_supervisor', ['label' => 'Supervisor do Recursos Humanos', 'options' => $funcionarios]);
            ?>
        </div>
        <div class="large-8 medium-4 columns">
            <?php
            echo $this->Form->control('ger_parecer');
            ?>
        </div>
        <div class="large-4 medium-4 columns">
            <?php
            echo $this->Form->control('gerente', ['label' => 'Gerente', 'options' => $funcionarios]);
            ?>
        </div>
        <div class="large-5 medium-4 columns">
            <?php
            echo $this->Form->control('contratos_id', ['type' => 'hidden', 'value' => $id_contrato]);
            ?>
        </div>
        <div class="large-12 medium-4 columns">
            <?php
				if ($laudoocorrencia->anexo != ""){
					echo "<label> Anexo cadastrado ";
					echo $this->Html->link(__('(clique aqui para substituir a imagem)'),  ['controller' => 'laudoocorrencias', 'action' => 'excluirlaudo', $laudoocorrencia->id]);
                    echo "</label>";
                    echo "<div class='large-3 medium-4 columns'>";
                    echo $this->Html->image($laudoocorrencia->anexo);
                    echo "</div>";
					echo $this->Form->control('anexo', ['type' => 'hidden']);
					echo $this->Form->control('anexo_antiga', ['type' => 'hidden', 'value' => 'ok']);
				}
				else 
					echo $this->Form->control('anexo', ['type' => 'file']);
            ?>
        </div>
    </fieldset>
    <?= $this->Form->button(__('Alterar')) ?>
    <?= $this->Form->end() ?>
</div>

<?= $this->Html->script('https://code.jquery.com/jquery-3.5.1.js') ?>
<?php $this->Html->scriptStart(['block' => true]); ?>
$( document ).ready(function() {
    $('#dt-laudo').attr('type', 'date');
    $('#hora').attr('type', 'time');
});
<?php $this->Html->scriptEnd(); ?>
<?= $this->fetch('script') ?>
